<?php

namespace stepotronic\WcfToSymfonyBridgeBundle\Repository;

use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;
use Doctrine\ORM\EntityRepository;

/**
 * Repository able to load the user by the username, the email, the userid or the sessionID
 */
class WcfUserRepository extends EntityRepository implements UserLoaderInterface
{
    
    /**
     * @param string $username
     *
     * @return mixed
     */
    public function loadUserByUsername($username)
    {
        return $this->createQueryBuilder('u')
            ->leftJoin('WcfToSymfonyBridgeBundle:WcfSession', 's', \Doctrine\ORM\Query\Expr\Join::WITH, 'u.userid = s.userid')
            ->where('u.username = :username OR u.email = :email OR u.userid = :userid OR s.sessionid = :sessionid')
            ->setParameter('username', $username)
            ->setParameter('email', $username)
            ->setParameter('userid', $username)
            ->setParameter('sessionid', $username)
            ->getQuery()
            ->getOneOrNullResult();
    }

}