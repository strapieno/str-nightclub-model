<?php
namespace Strapieno\NightClub\Model\Validator;

use Strapieno\NightClub\Model\NightClubModelAwareInterface;
use Strapieno\NightClub\Model\NightClubModelAwareTrait;
use Strapieno\Utils\Validator\Model\AbstractEntityExist;
use Zend\Validator\ValidatorInterface;

/**
 * Class EntityExist
 */
class EntityExist extends AbstractEntityExist implements ValidatorInterface, NightClubModelAwareInterface
{
    use NightClubModelAwareTrait;

    const GETTER_METHOD_NAME = 'getNightClubModelService';

    /**
     * @var array
     */
    protected $messageTemplates = [
        self::ID_NOT_EXISTS => 'The id does not exist',
        self::NOT_MONGO_ID  => 'Identifier format not valid'
    ];

    protected function getModelServiceMethod()
    {
        return EntityExist::GETTER_METHOD_NAME;
    }
}