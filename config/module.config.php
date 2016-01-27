<?php
return [
    'service_manager' => [
        'abstract_factories' => [
            'Matryoshka\Model\Wrapper\Mongo\Service\MongoDbAbstractServiceFactory',
            'Matryoshka\Model\Wrapper\Mongo\Service\MongoCollectionAbstractServiceFactory'
        ],
        'invokables' => [
            'Strapieno\NightClub\Model\Criteria\Mongo\NightClubMongoCollectionCriteria'
                => 'Strapieno\NightClub\Model\Criteria\Mongo\NightClubMongoCollectionCriteria',
            'Matryoshka\Model\Wrapper\Mongo\Criteria\Isolated\ActiveRecordCriteria'
                => 'Matryoshka\Model\Wrapper\Mongo\Criteria\Isolated\ActiveRecordCriteria',
            'Matryoshka\Model\Wrapper\Mongo\Criteria\ActiveRecord\ActiveRecordCriteria'
                => 'Matryoshka\Model\Wrapper\Mongo\Criteria\ActiveRecord\ActiveRecordCriteria',
            'Matryoshka\Model\Wrapper\Mongo\ResultSet\HydratingResultSet' =>
                'Matryoshka\Model\Wrapper\Mongo\ResultSet\HydratingResultSet'
        ],
        'aliases' => [
            'Strapieno\NightClub\Model\Criteria\NightClubCollectionCriteria'
                => 'Strapieno\NightClub\Model\Criteria\Mongo\NightClubMongoCollectionCriteria',
            'Strapieno\Model\Criteria\IsolatedActiveRecordCriteria'
                => 'Matryoshka\Model\Wrapper\Mongo\Criteria\Isolated\ActiveRecordCriteria',
                'Strapieno\Model\Criteria\NotIsolatedActiveRecordCriteria'
                => 'Matryoshka\Model\Wrapper\Mongo\Criteria\ActiveRecord\ActiveRecordCriteria',
            'Strapieno\Model\ResultSet\HydratingResultSet'
                => 'Matryoshka\Model\Wrapper\Mongo\ResultSet\HydratingResultSet',
        ],
        'shared' => [
            // Do not share instance of ResultSet to avoid collisions on prototype strategies,
            'Matryoshka\Model\Wrapper\Mongo\ResultSet\HydratingResultSet' => false,
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
            'collection' => 'user',
        ],
    ],
    'matryoshka-objects' => [
        'NightClub' => [
            'type' => 'Strapieno\NightClub\Model\Entity\NightClubEntity',
            'active_record_criteria' => 'Strapieno\Model\Criteria\NotIsolatedActiveRecordCriteria'
        ],
    ],
    'matryoshka-models' => [
        'Strapieno\NightClub\Model\NightClubModelService' => [
            'datagateway' => 'DataGateway\Mongo\NightClub',
            'type' => 'Strapieno\NightClub\Model\NightClubModelService',
            'object' => 'NightClub',
            'resultset' => 'Strapieno\Model\ResultSet\HydratingResultSet',
            'paginator_criteria' => 'Strapieno\NightClub\Model\Criteria\NightClubCollectionCriteria',
            'hydrator' => 'Strapieno\NightClub\Model\Hydrator\NightClubModelMongoHydrator',
            'listeners' => [
                'Strapieno\Utils\Model\Listener\DateAwareListener',
            ],
        ],
    ],
];
