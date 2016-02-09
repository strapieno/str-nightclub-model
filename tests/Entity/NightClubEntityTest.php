<?php
namespace Strapieno\NightClub\ModelTest\Entity;

use Strapieno\NightClub\Model\Entity\NightClubEntity;
use Strapieno\NightClub\Model\Entity\NightClubInterface;
use Strapieno\NightClub\Model\Entity\Object\GeoCoordinateObject;
use Strapieno\NightClub\Model\Entity\Object\MediaObject;
use Strapieno\NightClub\Model\Hydrator\Mongo\NightClubModelMongoHydrator;
use Strapieno\Utils\DataStructure\RefIdentityCollection;


/**
 * Class NightClubEntityTest
 */
class NightClubEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var NightClubInterface
     */
    protected $nightClub;

    public function setUp()
    {
        $this->nightClub = new NightClubEntity();
    }

    public function testGetSetElevation()
    {
        $input = "test";
        $this->nightClub->setName($input);
        $this->assertSame($input, $this->nightClub->getName());
    }
}