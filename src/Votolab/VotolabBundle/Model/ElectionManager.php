<?php

namespace Votolab\VotolabBundle\Model;

use Votolab\VotolabBundle\Entity\Election;
use Votolab\VotolabBundle\Entity\ElectionCriteria;

/**
 * election_manager
 */
class ElectionManager extends ManagerAbstract
{
    public function findForUser($user)
    {
        $query = $this->em->getRepository('VotolabBundle:Election')->findForUser($user);
        return $query->getResult();
    }

    public function createElection()
    {
        return new Election();
    }

    public function persist(Election $election)
    {
        $this->em->persist($election);
        $this->em->flush();
    }

    public function createElectionCriteria()
    {
        return new ElectionCriteria();
    }

    public function persistCriteria(ElectionCriteria $criteria)
    {
        $this->em->persist($criteria);
        $this->em->flush();
    }
}