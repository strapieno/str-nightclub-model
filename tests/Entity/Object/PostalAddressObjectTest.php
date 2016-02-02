<?php
namespace Strapieno\NightClub\ModelTest\Entity\Object;

use Strapieno\NightClub\Model\Entity\ClubPriveEntity;
use Strapieno\NightClub\Model\Entity\NightClubEntity;
use Strapieno\NightClub\Model\Entity\NightClubInterface;
use Strapieno\NightClub\Model\Entity\Object\MediaObject;
use Strapieno\NightClub\Model\Entity\Object\PostalAddressObject;


/**
 * Class MediaObjectTest
 */
class PostalAddressObjectTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PostalAddressObject
     */
    protected $object;

    public function setUp()
    {
        $this->object = new PostalAddressObject();
    }

    public function testGetSetPostalCode()
    {
        $input = "test";
        $this->object->setPostalCode($input);
        $this->assertSame($input, $this->object->getPostalCode());
    }
}