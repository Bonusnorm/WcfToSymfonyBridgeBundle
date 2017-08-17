<?php

namespace stepotronic\WcfToSymfonyBridgeBundle\Security\Core\Encoder;

use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;
use wcf\util\PasswordUtil;

/**
 * Password Encoder for the WCF.
 */
class WcfPasswordEncoder implements PasswordEncoderInterface
{

    /**
     * Encodes the raw password.
     *
     * @param string $raw  The password to encode
     * @param string $salt The salt
     *
     * @return string The encoded password
     */
    public function encodePassword($raw, $salt)
    {
        return PasswordUtil::getDoubleSaltedHash($raw, $salt);
    }

    /**
     * Checks a raw password against an encoded password.
     *
     * @param string $encoded An encoded password
     * @param string $raw     A raw password
     * @param string $salt    The salt
     *
     * @return bool true if the password is valid, false otherwise
     */
    public function isPasswordValid($encoded, $raw, $salt)
    {
        // wcf supports multiple ways to encode the password, some of them need the username
        $isValid = false;
        // first we can check if it is the recently added blowfish
        if (PasswordUtil::isBlowfish($encoded) 
            &&
            PasswordUtil::secureCompare($encoded, PasswordUtil::getDoubleSaltedHash($raw, $encoded))
        ) {
            $isValid = true;
        } elseif (PasswordUtil::detectEncryption($encoded) === 'unknown') {
            // we are here unable to detect the encryption, the next method would throw an exception
            $isValid = false;            
        } elseif (PasswordUtil::checkPassword(null, $raw, $encoded)) {
            $isValid = true;
        }

        return $isValid;
    }
}
