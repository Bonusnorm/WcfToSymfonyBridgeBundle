<?php

namespace stepotronic\WcfToSymfonyBridgeBundle\Security\Guard\AuthenticationResponseStrategy;

/**
 * No response will lead to no further action.
 */
class NoAction implements AuthenticationResponseStrategyInterface
{

    /**
     * Returns null.
     *
     * @return null
     */
    public function getResponse()
    {
        return null;
    }
    
}