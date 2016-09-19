<?php

namespace AppBundle\Security\Authorization\Voter;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\Authorization\Voter\VoterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

/**
 * Description of ClientIpVoter
 *
 * @author artur
 */
class ClientIpVoter implements VoterInterface {
    
    private $em;

    public function __construct(EntityManager $em, ContainerInterface $container) {
        $this->em = $em;
        $this->container = $container;
    }

    public function supportsAttribute($attribute) {
        // you won't check against a user attribute, so return true
        return true;
    }

    public function supportsClass($class) {
        // your voter supports all type of token classes, so return true
        return true;
    }

    function vote(TokenInterface $token, $object, array $attributes) {
        $request = $this->container->get('request');
        $clientIp = $request->getClientIp();
        $em = $this->em;
        $ip_blocked = $em->getRepository("AppBundle:BlacklistIp")->findBy(array('ip' => $clientIp));
        if($ip_blocked)
        {
            return VoterInterface::ACCESS_DENIED;
        }
            return VoterInterface::ACCESS_ABSTAIN;
    }
}
    