# WcfToSymfonyBridgeBundle

A bundle containing guard authenticators able to login users from the wcf-database or the current session cookie.

## Purpose of this bundle
Interface existing installations of software of the woltlab community framework.
https://www.woltlab.com/

## Configuration
Add the mentioned lines to your parameters.
Since it is possible to have more than one installation the tables can and should be prefixed.
The default is usually "wcf1_"

`wcf_table_prefix: wcf1_`

The cookie prefix can be adjusted in the admin backend of the software so there is a configuration option for it as well:

`wcf_cookie_prefix: wcf_`

You need to set up a default success route. It will only be used if there is no request-url the user can be redirected to after the request. 

`wcf_default_success_route: homepage`

Finally here is the security.yml that puts it all together:

    security:
        encoders:
            stepotronic\WcfToSymfonyBridgeBundle\Entity\WcfUser:
              id: wcf.password_encoder
        providers:
            wcf_db:
                entity:
                    class: WcfToSymfonyBridgeBundle:WcfUser
        firewalls:
            dev:
                pattern: ^/(_(profiler|wdt)|css|images|js)/
                security: false
            main:
                anonymous: ~
                logout: ~
                provider: wcf_db
    
                guard:
                    entry_point: wcf.form_login_authenticator
                    authenticators:
                        - wcf.cookie_hash_authenticator
                        - wcf.form_login_authenticator
    
        access_control:
            - { path: ^/login, roles: IS_AUTHENTICATED_ANONYMOUSLY }
            - { path: ^/, roles: ROLE_WCF }


In the main project you will have to also include the wcf sources. Ideally you can point directly to the used wcf installation alternatively you can also use the following in your composer.json

    "repositories": [
        {
            "type": "package",
            "package": {
                "name": "woltlab/wcf",
                "version": "2.0",
                "source": {
                    "url": "https://github.com/WoltLab/WCF",
                    "type": "git",
                    "reference": "2.0"
                }
            }
        }
    ],
    "require": {
        "woltlab/wcf": "*"
    },

It is possible to overwrite the default behaviour of the two guard authenticators. All redirects in cases of success or failure are configurable.
Here is an example with a redirect to the wcf login url:
    
    app.cookie_hash_authenticator:
        class: stepotronic\WcfToSymfonyBridgeBundle\Security\Guard\CookieHashAuthenticator
        arguments:
            - "@wcf.authentication_redirect_to_wcf_login_url"
            - "@wcf.authentication_response_no_action"
            - "@wcf.authentication_redirect_to_wcf_login_url"
            - "%wcf_to_symfony_bridge.cookie_prefix%"


## Next steps
If you use it, be aware of the fact that I did not create a secure login controller here. Don't use it!
It however can help you debug and maybe help me improve this bundle.

Rather implement your own controller with the route names:
    
    security_login
    security_login_check
    security_logout

