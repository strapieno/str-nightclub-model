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
    'strapieno-array-validators' => [
        'PlaceTypesValidator' => [
            'name_key_array_config' => 'PlacesTypes'
        ]
    ],
    'strapieno_input_filter_specs' => [
        'Strapieno\NightClub\Model\InputFilter\DefaultPostalAddressInputFilter' => [
            'address_locality' => [
                'require' => false,
                'allow_empty' => true,
                'name' => 'address_locality',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ]
                // TODO add validator
            ],
            'address_region' => [
                'require' => false,
                'allow_empty' => true,
                'name' => 'address_region',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ]
                // TODO add validator
            ],

            'postal_code' => [
                'require' => false,
                'allow_empty' => true,
                'name' => 'postal_code',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ]
                // TODO add validator
            ],

            'street_address' => [
                'require' => false,
                'allow_empty' => true,
                'name' => 'street_address',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ]
                // TODO add validator
            ],

            'address_country' => [
                'require' => false,
                'allow_empty' => true,
                'name' => 'address_country',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ]
                // TODO add validator
            ],
        ],
        'Strapieno\NightClub\Model\InputFilter\DefaultGeoCoordiateInputFilter' => [
            'latitude' => [
                'require' => false,
                'allow_empty' => true,
                'name' => 'latitude',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ],
                'validators' => [
                    'latitude' => [
                        'name' => 'latitude'
                    ]
                ]
            ],
            'longitude' => [
                'require' => false,
                'allow_empty' => true,
                'name' => 'longitude',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ],
                'validators' => [
                    'longitude' => [
                        'name' => 'longitude'
                    ]
                ]
            ],
            'elevation' => [
                'require' => false,
                'allow_empty' => true,
                'name' => 'elevation',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ],
                'validators' => [
                    'longitude' => [
                        'name' => 'between',
                        'options' => [
                            'min' => -10994, // Challenger Abyss
                            'max' => 8848 // Everest
                        ],
                    ]
                ]

            ],
        ],
        'Strapieno\NightClub\Model\InputFilter\DefaultInputFilter' => [
            'fax_number' => [
                'require' => false,
                'allow_empty' => true,
                'name' => 'fax_number',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ]
                // TODO add validator
            ],
            'telephone' => [
                'require' => false,
                'allow_empty' => true,
                'name' => 'telephone',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ]
                // TODO add validator
            ],
            'name' => [
                'require' => false,
                'allow_empty' => true,
                'name' => 'name',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ],
                'validators' => [
                    'longitude' => [
                        'name' => 'between',
                    ]
                ]
            ],
            'type' => [
                'require' => false,
                'allow_empty' => true,
                'name' => 'type',
                'filters' => [
                    'stringtrim' =>  [
                        'name' => 'stringtrim',
                    ]
                ],
                'validator' => [
                    'PlaceTypesValidator' => [
                        'name' => 'PlaceTypesValidator'
                    ]
                ]
            ],
            'geo_coordinate' => [
                'name' => 'geo_coordinate',
                'type' => 'Strapieno\NightClub\Model\InputFilter\DefaultGeoCoordiateInputFilter'
            ],
            'postal_address' => [
                'name' => 'postal_address',
                'type' => 'Strapieno\NightClub\Model\InputFilter\DefaultPostalAddressInputFilter'
            ],
        ],
    ]
];
