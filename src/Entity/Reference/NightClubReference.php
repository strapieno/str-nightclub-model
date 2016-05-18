<?php
namespace Strapieno\NightClub\Model\Entity\Reference;

use Strapieno\NightClub\Model\NightClubModelService;
use Strapieno\Utils\Model\Object\AbstractObject;
use Strapieno\Utils\Model\Object\EntityReference\EntityReferenceInterface;
use Strapieno\Utils\Model\Object\EntityReference\EntityReferenceTrait;
use Strapieno\Utils\Model\Object\ObjectInterface;

/**
 * Class NightClubReference
 */
class NightClubReference extends AbstractObject implements ObjectInterface, EntityReferenceInterface
{
    use EntityReferenceTrait;

    /**
     * @return String
     */
    public function getServiceName()
    {
        return NightClubModelService::class;
    }
}