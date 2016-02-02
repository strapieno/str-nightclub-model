<?php
namespace Strapieno\NightClub\Model\Entity\Object;

use Strapieno\Utils\Model\Object\AbstractObject;
use Strapieno\Utils\Model\Object\Media\MediaInterface;
use Strapieno\Utils\Model\Object\ObjectInterface;
use Strapieno\Utils\Model\Object\Media\MediaTrait;
use Strapieno\Utils\Model\Object\PostalAddress\PostalAddressInterface;
use Strapieno\Utils\Model\Object\PostalAddress\PostalAddressTrait;

/**
 * Class MediaObject
 */
class PostalAddressObject extends AbstractObject implements PostalAddressInterface, ObjectInterface
{
    use PostalAddressTrait;
}