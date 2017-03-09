# WcfToSymfonyBridgeBundle

A bundle containing guard authenticators able to login users from the wcf-database or the current session cookie.

## Purpose of this bundle
Interface existing installations of software of the woltlab community framework.
https://www.woltlab.com/

## Configuration
Add the mentioned lines to your parameters.yml.
Since it is possible to have more than one installation the tables can and should be prefixed.
The default is usually "wcf1_"

`stepotronic.wcftosymfonybridgebundle.db.table_prefix: wcf1_`

The cookie prefix can be adjusted in the admin backend of the software so there is a configuration option for it as well:

`stepotronic.wcftosymfonybridgebundle.cookie_prefix: wcf_`

You need to set up a default success route. It will only be used if there is no request-url the user can be redirected to after the request. 

`stepotronic.wcftosymfonybridgebundle.default_success_route: homepage`

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
                        - wcf.token_authenticator
                        - wcf.form_login_authenticator
    
        access_control:
            - { path: ^/login, roles: IS_AUTHENTICATED_ANONYMOUSLY }
            - { path: ^/, roles: ROLE_WCF }


## Next steps
If you use it, be aware of the fact that I did not create a secure login controller here. Don't use it!
It however can help you debug and maybe help me improve this bundle.

Rather implement your own controller with the route names:
    
    security_login
    security_login_check
    security_logout

