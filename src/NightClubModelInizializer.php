<?php
namespace Strapieno\NightClub\Model;

use Strapieno\Utils\Inizilizer\AbstractModelServiceInizilizer;

/**
 * Class NightClubModelInizializer
 */
class NightClubModelInizializer extends AbstractModelServiceInizilizer
{
    const SERVICE_NAME = NightClubModelService::class;
    const INSTANCE_CLASS = NightClubModelAwareInterface::class;
    const SETTER_METHOD = 'setNightClubModelService';
}