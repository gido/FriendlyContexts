<?php

namespace Knp\FriendlyExtension\Context\Helper;

use Doctrine\ORM\EntityManagerInterface;
use Knp\FriendlyExtension\Context\Helper\HelperInterface;
use Knp\FriendlyExtension\Entity\Hydrator;
use Knp\FriendlyExtension\Record\Collection\Bag;

class EntityHelper implements HelperInterface
{
    private $bag;

    public function __construct(EntityManagerInterface $em, Hydrator $hydrator, Bag $bag)
    {
        $this->em       = $em;
        $this->hydrator = $hydrator;
        $this->bag      = $bag;
    }
}