<?php

namespace stepotronic\WcfToSymfonyBridgeBundle\Security\Guard;

use stepotronic\WcfToSymfonyBridgeBundle\Repository\WcfUserRepository;
use Symfony\Component\Routing\Router;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;

/**
 * Offers a form login for the wcf.
 */
class FormLoginAuthenticator extends AbstractFormLoginAuthenticator
{

    /**
     * @var WcfUserRepository
     */
    protected $repository;

    /**
     * @var Router
     */
    protected $router;

    /**
     * @var UserPasswordEncoderInterface
     */
    protected $encoder;

    /**
     * @var string
     */
    protected $defaultSuccessRoute;

    /**
     * FormLoginAuthenticator constructor.
     *
     * @param WcfUserRepository            $repository
     * @param Router                       $router
     * @param UserPasswordEncoderInterface $encoder
     */
    public function __construct(
        WcfUserRepository $repository,
        Router $router,
        UserPasswordEncoderInterface $encoder,
        $defaultSuccessRoute
    )
    {
        $this->repository = $repository;
        $this->router = $router;
        $this->encoder = $encoder;
        $this->defaultSuccessRoute = $defaultSuccessRoute;
    }

    /**
     * Return the URL to the login page.
     *
     * @return string
     */
    protected function getLoginUrl()
    {
        return $this->router->generate('security_login');
    }

    /**
     * Redirect to the "homepage"-route.
     *
     * @return string
     */
    protected function getDefaultSuccessRedirectUrl()
    {
        return $this->router->generate($this->defaultSuccessRoute);
    }

    /**
     * Returns the password and password from the request.
     * 
     * @param Request $request
     *
     * @return mixed|null
     */
    public function getCredentials(Request $request)
    {
        if ($request->getRequestUri() != $this->router->generate('security_login_check')) {
            return null;
        }
        $username = $request->request->get('_username');
        $request->getSession()->set(Security::LAST_USERNAME, $username);
        $password = $request->request->get('_password');

        return array(
            'username' => $username,
            'password' => $password
        );
    }

    /**
     * Returns a user for the given username.
     *
     * @param mixed                 $credentials
     * @param UserProviderInterface $userProvider
     *
     * @throws AuthenticationException
     *
     * @return UserInterface|null
     */
    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        $username = $credentials['username'];

        return $this->repository->loadUserByUsername($username);
    }

    /**
     * Returns true if the credentials are valid.
     *
     * @param array         $credentials
     * @param UserInterface $user
     *
     * @return bool
     *
     * @throws AuthenticationException
     */
    public function checkCredentials($credentials, UserInterface $user)
    {
        if (!is_array($credentials)) {
            return false;
        }
        $plainPassword = $credentials['password'];

        return $this->encoder->isPasswordValid($user, $plainPassword);
    }
    
}