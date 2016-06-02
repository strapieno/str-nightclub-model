<?php
return [
    'initializers' => [
        'Strapieno\NightClub\Model\NightClubModelInitializer'
    ],
    'invokables' => [
        'Strapieno\NightClub\Model\Validator\EntityExist' => 'Strapieno\NightClub\Model\Validator\EntityExist',
        'Strapieno\Utils\Validator\Latitude' => 'Strapieno\Utils\Validator\Latitude',
        'Strapieno\Utils\Validator\Longitude' => 'Strapieno\Utils\Validator\Longitude'
    ],
    'aliases' => [
        'nightclubentityexist' => 'Strapieno\NightClub\Model\Validator\EntityExist',
        'latitude' => 'Strapieno\Utils\Validator\Latitude',
        'longitude' => 'Strapieno\Utils\Validator\Longitude'
    ],
];