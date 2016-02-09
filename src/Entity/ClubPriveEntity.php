<?php
namespace Strapieno\NightClub\Model\Entity;

use Matryoshka\Model\Object\ActiveRecord\AbstractActiveRecord;
use Strapieno\Utils\Model\Entity\DateHistoryAwareInterface;
use Strapieno\Utils\Model\Entity\DateHistoryAwareTrait;
use Strapieno\Utils\Model\Entity\EntityInterface;
use Strapieno\Utils\Model\Entity\Place\PlaceEntity;
use Strapieno\Utils\Model\Entity\TypeAwareInterface;
use Strapieno\Utils\Model\Entity\TypeAwareTrait;
use Strapieno\Utils\Model\Object\Place\PlaceObject;
use Strapieno\Utils\Model\Object\Place\PlaceTrait;
use Strapieno\Utils\Model\Object\PostalAddress\PostalAddressAwareTrait;
use Zend\Stdlib\Hydrator\HydratorAwareInterface;
use Zend\Stdlib\Hydrator\HydratorAwareTrait;


/**
 * Class ClubPriveEntity
 */
class ClubPriveEntity extends PlaceEntity implements ClubPriveInterface,
    EntityInterface,
    DateHistoryAwareInterface,
    HydratorAwareInterface,
    TypeAwareInterface
{

}