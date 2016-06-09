<?php
namespace Strapieno\NightClub\Model\Entity;

use Strapieno\User\Model\Entity\Reference\UserReferenceAwareInterface;
use Strapieno\User\Model\Entity\Reference\UserReferenceAwareTrait;
use Strapieno\Utils\Model\Entity\DateHistoryAwareInterface;
use Strapieno\Utils\Model\Entity\EntityInterface;
use Strapieno\Utils\Model\Entity\Place\PlaceEntity;
use Strapieno\Utils\Model\Entity\TypeAwareInterface;
use Strapieno\Utils\Model\Object\AggregateRating\AggregateRatingAwareInterface;
use Strapieno\Utils\Model\Object\AggregateRating\AggregateRatingAwareTrait;
use Zend\Stdlib\Hydrator\HydratorAwareInterface;

/**
 * Class AbstractEntity
 */
class AbstractEntity extends PlaceEntity implements EntityInterface,
    DateHistoryAwareInterface,
    HydratorAwareInterface,
    TypeAwareInterface,
    AggregateRatingAwareInterface,
    UserReferenceAwareInterface
{
    use AggregateRatingAwareTrait;
    use UserReferenceAwareTrait;
}