<?php
namespace Strapieno\NightClub\Model\Entity;

use Matryoshka\Model\Object\ActiveRecord\AbstractActiveRecord;
use Strapieno\Utils\Model\Entity\DateHistoryAwareTrait;
use Strapieno\Utils\Model\Entity\TypeAwareTrait;
use Strapieno\Utils\Model\Object\Place\PlaceObject;
use Strapieno\Utils\Model\Object\Place\PlaceTrait;
use Strapieno\Utils\Model\Object\PostalAddress\PostalAddressAwareTrait;
use Zend\Stdlib\Hydrator\HydratorAwareTrait;


/**
 * Class ClubPriveEntity
 */
class ClubPriveEntity extends AbstractActiveRecord implements ClubPriveInterface
{
    use TypeAwareTrait;
    use DateHistoryAwareTrait;
    use PlaceTrait;
}