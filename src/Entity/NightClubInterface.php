<?php
namespace Strapieno\NightClub\Model\Entity;

use Strapieno\Utils\Model\Entity\DateHistoryAwareInterface;
use Strapieno\Utils\Model\Entity\EntityInterface;
use Strapieno\Utils\Model\Entity\TypeAwareInterface;
use Strapieno\Utils\Model\Object\Place\PlaceInterface;
use Strapieno\Utils\Model\Object\Place\PlaceTrait;
use Zend\Stdlib\Hydrator\HydratorAwareInterface;


/**
 * Interface NightClubInterface
 */
interface NightClubInterface extends
    PlaceInterface,
    EntityInterface,
    DateHistoryAwareInterface,
    HydratorAwareInterface,
    TypeAwareInterface
{

}