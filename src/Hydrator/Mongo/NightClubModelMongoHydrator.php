<?php
namespace Strapieno\NightClub\Model\Hydrator\Mongo;

use Matryoshka\Model\Hydrator\Strategy\HasManyStrategy;
use Matryoshka\Model\Hydrator\Strategy\HasOneStrategy;
use Matryoshka\Model\Hydrator\Strategy\SetTypeStrategy;
use Strapieno\NightClub\Model\Entity\Object\AggregateRatingObject;
use Strapieno\NightClub\Model\Entity\Object\GeoCoordinateObject;
use Strapieno\NightClub\Model\Entity\Object\MediaObject;
use Strapieno\NightClub\Model\Entity\Object\PostalAddressObject;
use Strapieno\User\Model\Entity\Reference\UserReference;
use Strapieno\Utils\DataStructure\RefIdentityCollection;
use Strapieno\Utils\Hydrator\Mongo\DateHistoryHydrator;
use Strapieno\Utils\Hydrator\Strategy\NamingStrategy\MapUnderscoreNamingStrategy;

/**
 * Class NightClubModelMongoHydrator
 */
class NightClubModelMongoHydrator extends DateHistoryHydrator
{

    public function __construct($underscoreSeparatedKeys = true)
    {
        parent::__construct($underscoreSeparatedKeys);

        $this->addStrategy(
            'geo_coordinate',
            new HasOneStrategy(new GeoCoordinateObject(), false)
        );

        $aggregateRating = new AggregateRatingObject();
        $aggregateRating->getHydrator()->addStrategy('partial', new SetTypeStrategy('array', 'array'));
        $this->addStrategy(
            'aggregate_rating',
            new HasOneStrategy($aggregateRating, false)
        );

        $this->addStrategy(
            'postal_address',
            new HasOneStrategy(new PostalAddressObject(), false)
        );
        $this->addStrategy(
            'media',
            // FIXME library 2 param type function
            new HasManyStrategy(new MediaObject(), new RefIdentityCollection(), true)
        );

        $this->addStrategy(
            'user_reference',
            new HasOneStrategy(new UserReference(), false)
        );
    }
}