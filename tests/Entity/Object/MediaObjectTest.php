<?php
namespace Strapieno\NightClub\ModelTest\Entity\Object;

use Strapieno\NightClub\Model\Entity\ClubPriveEntity;
use Strapieno\NightClub\Model\Entity\NightClubEntity;
use Strapieno\NightClub\Model\Entity\NightClubInterface;
use Strapieno\NightClub\Model\Entity\Object\MediaObject;


/**
 * Class MediaObjectTest
 */
class MediaObjectTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var MediaObject
     */
    protected $object;

    public function setUp()
    {
        $this->object = new MediaObject();
    }

    public function testGetSetEmbedUrl()
    {
        $input = "test";
        $this->object->setEmbedUrl($input);
        $this->assertSame($input, $this->object->getEmbedUrl());
    }
}