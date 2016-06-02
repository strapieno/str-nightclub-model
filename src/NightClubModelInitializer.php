<?php
namespace Strapieno\NightClub\Model;

use Strapieno\Utils\Initializer\AbstractModelServiceInitializer;

/**
 * Class NightClubModelInitializer
 */
class NightClubModelInitializer extends AbstractModelServiceInitializer
{
    const SERVICE_NAME = NightClubModelService::class;
    const INSTANCE_CLASS = NightClubModelAwareInterface::class;
    const SETTER_METHOD = 'setNightClubModelService';
}