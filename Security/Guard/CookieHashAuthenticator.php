<?php

namespace stepotronic\WcfToSymfonyBridgeBundle\Security\Guard;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Router;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserProviderInterface;

/**
 * GuardAuthenticator that untilizes the wcf cookie .
 */
class CookieHashAuthenticator extends AbstractGuardAuthenticator
{

    /**
     * @var Router
     */
    protected $router;

    /**
     * @var string
     */
    protected $wcfCookiePrefix;
    
    /**
     * @var string
     */
    protected $startUrl;

    /**
     * CookieHashAuthenticator constructor.
     *
     * @param Router $router
     * @param string $wcfCookiePrefix
     */
    public function __construct(Router $router, $wcfCookiePrefix)
    {
        $this->router = $router;
        $this->wcfCookiePrefix = $wcfCookiePrefix;
    }

    /**
     * Returns the credentias with the cookieHash or null if it is not set.
     * 
     * @return array|null
     */
    public function getCredentials(Request $request)
    {
        if (!$token = $request->cookies->get($this->wcfCookiePrefix . 'cookieHash')) {
            return null;
        }

        return array(
            'cookieHash' => $token,
        );
    }

    /**
     * Returns the user that can be identified with the sessionkey.
     *
     * @param mixed                 $credentials
     * @param UserProviderInterface $userProvider
     *
     * @return UserInterface
     */
    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        $sessionKey = $credentials['cookieHash'];

        return $userProvider->loadUserByUsername($sessionKey);
    }

    /**
     * No credential check is needed since the wcf is only adding the userid to validated sessions
     *
     * @param mixed         $credentials
     * @param UserInterface $user
     *
     * @return bool
     */
    public function checkCredentials($credentials, UserInterface $user)
    {
        return true;
    }

    /**
     * On success, let the request continue
     *
     * @param Request        $request
     * @param TokenInterface $token
     * @param string         $providerKey
     *
     * @return null
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        return null;
    }

    /**
     * If the cookie is invalid, forward the user to the login.
     * 
     * @param Request                 $request
     * @param AuthenticationException $exception
     *
     * @return RedirectResponse
     */
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        return new RedirectResponse($this->router->generate('security_login'));
    }

    /**
     * Called when authentication is needed, but it's not sent
     */
    public function start(Request $request, AuthenticationException $authException = null)
    {
        return new RedirectResponse($this->router->generate('security_login'));
    }

    /**
     * We are validating a cookie which is the current login status.
     * 
     * @return bool
     */
    public function supportsRememberMe()
    {
        return false;
    }
}