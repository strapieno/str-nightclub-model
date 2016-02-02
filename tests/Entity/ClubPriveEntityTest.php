<?php
namespace Strapieno\NightClub\ModelTest\Entity;

use Strapieno\NightClub\Model\Entity\ClubPriveEntity;
use Strapieno\NightClub\Model\Entity\NightClubEntity;
use Strapieno\NightClub\Model\Entity\NightClubInterface;


/**
 * Class NightClubEntityTest
 */
class ClubPriveEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var NightClubInterface
     */
    protected $entity;

    public function setUp()
    {
        $this->entity = new ClubPriveEntity();
    }

    public function testGetSetElevation()
    {
        $input = "test";
        $this->entity->setName($input);
        $this->assertSame($input, $this->entity->getName());
    }
}