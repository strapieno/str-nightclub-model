<?php
return [
    'initializers' => [
        'Strapieno\NightClub\Model\NightClubModelInizializer'
    ],
    'invokables' => [
        'Strapieno\NightClub\Model\Validator\EntityExist' => 'Strapieno\NightClub\Model\Validator\EntityExist'
    ],
    'aliases' => [
        'nightclubentityexist' => 'Strapieno\NightClub\Model\Validator\EntityExist'
    ],
];