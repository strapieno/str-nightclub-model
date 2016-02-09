<?php
return [
    'service_manager' => [
        'invokables' => [
            'Strapieno\NightClub\Model\Criteria\Mongo\NightClubMongoCollectionCriteria'
                => 'Strapieno\NightClub\Model\Criteria\Mongo\NightClubMongoCollectionCriteria'
        ],
        'aliases' => [
            'Strapieno\NightClub\Model\Criteria\NightClubCollectionCriteria'
                => 'Strapieno\NightClub\Model\Criteria\Mongo\NightClubMongoCollectionCriteria'
        ]
    ],
    'mongodb' => [
        'Mongo\Db' => [
            'database' => 'strapieno',
        ],
    ],
    'mongocollection' => [
        'DataGateway\Mongo\NightClub' => [
            'database' => 'Mongo\Db',
            'collection' => 'nightclub',
        ],
    ],
    'matryoshka-objects' => [
        'Place' => [
            'type' => 'Strapieno\Utils\Model\Entity\Place\PlaceEntity',
            'active_record_criteria' => 'Strapieno\Model\Criteria\NotIsolatedActiveRecordCriteria'
        ],
        'NightClub' => [
            'type' => 'Strapieno\NightClub\Model\Entity\NightClubEntity',
            'active_record_criteria' => 'Strapieno\Model\Criteria\NotIsolatedActiveRecordCriteria'
        ],
        'ClubPrive' => [
            'type' => 'Strapieno\NightClub\Model\Entity\ClubPriveEntity',
            'active_record_criteria' => 'Strapieno\Model\Criteria\NotIsolatedActiveRecordCriteria'
        ],
    ],
    'matryoshka-models' => [
        'Strapieno\NightClub\Model\NightClubModelService' => [
            'datagateway' => 'DataGateway\Mongo\NightClub',
            'type' => 'Strapieno\NightClub\Model\NightClubModelService',
            'object' => 'Place',
            'resultset' => 'Strapieno\Model\ResultSet\HydratingResultSet',
            'paginator_criteria' => 'Strapieno\NightClub\Model\Criteria\NightClubCollectionCriteria',
            'prototype_strategy' => 'Matryoshka\Model\Object\PrototypeStrategy\ServiceLocatorStrategy',
            'hydrator' => 'Strapieno\NightClub\Model\Hydrator\NightClubModelMongoHydrator',
            'listeners' => [
                'Strapieno\Utils\Model\Listener\DateAwareListener',
            ],
        ],
    ],
];
