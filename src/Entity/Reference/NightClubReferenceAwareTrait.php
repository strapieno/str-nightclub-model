<?php
namespace Strapieno\NightClub\Model\Entity\Reference;

/**
 * Class NightClubReferenceAwareInterface
 */
trait NightClubReferenceAwareTrait
{
    /**
     * @var NightClubReference|null
     */
    protected $nightClubReference;

    /**
     * @return NightClubReference|null
     */
    public function getNightClubReference()
    {
        return $this->nightClubReference;
    }

    /**
     * @param NightClubReference $nightClubReference
     * @return $this
     */
    public function setNightClubReference(NightClubReference $nightClubReference)
    {
        $this->nightClubReference = $nightClubReference;
        return $this;
    }
}