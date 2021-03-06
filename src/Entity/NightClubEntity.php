<?php
namespace Strapieno\NightClub\Model\Entity;

use Strapieno\Utils\Model\Entity\DateHistoryAwareInterface;
use Strapieno\Utils\Model\Entity\EntityInterface;
use Strapieno\Utils\Model\Entity\Place\PlaceEntity;
use Strapieno\Utils\Model\Entity\TypeAwareInterface;
use Strapieno\Utils\Model\Object\AggregateRating\AggregateRatingAwareInterface;
use Strapieno\Utils\Model\Object\AggregateRating\AggregateRatingAwareTrait;
use Strapieno\Utils\Model\Object\Place\PlaceObject;
use Zend\Stdlib\Hydrator\HydratorAwareInterface;

/**
 * Class NightClub
 */
class NightClubEntity extends AbstractEntity implements NightClubInterface { }