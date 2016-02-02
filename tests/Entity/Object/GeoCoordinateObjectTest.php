<?php
namespace Strapieno\NightClub\ModelTest\Entity\Object;

use Strapieno\NightClub\Model\Entity\ClubPriveEntity;
use Strapieno\NightClub\Model\Entity\NightClubEntity;
use Strapieno\NightClub\Model\Entity\NightClubInterface;
use Strapieno\NightClub\Model\Entity\Object\GeoCoordinateObject;
use Strapieno\NightClub\Model\Entity\Object\MediaObject;


/**
 * Class GeoCoordinateObjectTest
 */
class GeoCoordinateObjectTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GeoCoordinateObject
     */
    protected $object;

    public function setUp()
    {
        $this->object = new GeoCoordinateObject();
    }

    public function testGetSetLongitude()
    {
        $input = "test";
        $this->object->setLongitude($input);
        $this->assertSame($input, $this->object->getLongitude());
    }
}