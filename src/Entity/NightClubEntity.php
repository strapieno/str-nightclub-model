<?php
namespace Strapieno\NightClub\Model\Entity;

use Matryoshka\Model\Object\ActiveRecord\AbstractActiveRecord;
use Strapieno\Utils\Model\Entity\DateHistoryAwareTrait;
use Strapieno\Utils\Model\Entity\TypeAwareTrait;
use Strapieno\Utils\Model\Object\GeoCoordinate\GeoCoordinateAwareTrait;
use Strapieno\Utils\Model\Object\Place\PlaceObject;
use Strapieno\Utils\Model\Object\Place\PlaceTrait;
use Strapieno\Utils\Model\Object\PostalAddress\PostalAddressAwareTrait;
use Zend\Stdlib\Hydrator\HydratorAwareTrait;

/**
 * Class NightClub
 */
class NightClubEntity extends AbstractActiveRecord implements NightClubInterface
{
    use TypeAwareTrait;
    use DateHistoryAwareTrait;
    use PlaceTrait;
}