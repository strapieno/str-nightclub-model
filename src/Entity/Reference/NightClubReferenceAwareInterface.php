<?php
namespace Strapieno\NightClub\Model\Entity\Reference;

/**
 * Interface NightClubReferenceAwareInterface
 */
interface NightClubReferenceAwareInterface
{
    /**
     * @return NightClubReference|null
     */
    public function getNightClubReference();

    /**
     * @param NightClubReference $nightClubReference
     * @return $this
     */
    public function setNightClubReference(NightClubReference $nightClubReference);
}