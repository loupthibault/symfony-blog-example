<?php

namespace Peterjmit\BlogBundle\Doctrine;

use Doctrine\ORM\EntityRepository;

class PostRepository extends EntityRepository
{
    public function findAllQb()
    {
        return $this->createQueryBuilder('post');
    }
}
