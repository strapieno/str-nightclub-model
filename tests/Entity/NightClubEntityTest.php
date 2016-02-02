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

    public function testtest()
    {
        $hydrator = new NightClubModelMongoHydrator();
        $geo =new GeoCoordinateObject();
        $this->nightClub->setGeoCoordinate($geo);

        $hydrator->hydrate(['geo_coordinate' =>['latitude' => 3]], $this->nightClub);
        $ref = new RefIdentityCollection();
        $media = (new MediaObject())->setEmbedUrl('test');
        $ref->append($media);
        $media = (new MediaObject())->setEmbedUrl('test1');
        $ref->append($media);
        $this->nightClub->setMedia($ref);
        var_dump($hydrator->extract($this->nightClub));
    }
}