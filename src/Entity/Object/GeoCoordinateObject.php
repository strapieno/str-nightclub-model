<?php
namespace Strapieno\NightClub\Model\Entity\Object;

use Strapieno\Utils\Model\Object\AbstractObject;
use Strapieno\Utils\Model\Object\GeoCoordinate\GeoCoordinateInterface;
use Strapieno\Utils\Model\Object\GeoCoordinate\GeoCoordinateTrait;
use Strapieno\Utils\Model\Object\Media\MediaInterface;
use Strapieno\Utils\Model\Object\ObjectInterface;
use Strapieno\Utils\Model\Object\Media\MediaTrait;

/**
 * Class GeoCoordinateObject
 */
class GeoCoordinateObject extends AbstractObject implements GeoCoordinateInterface, ObjectInterface
{
    use GeoCoordinateTrait;
}