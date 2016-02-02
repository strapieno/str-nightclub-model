<?php
namespaceStrapieno\NightClub\Model;

/**
 * Interface NightClubModelAwareInterface
 */
interface NightClubModelAwareInterface
{
    /**
     * @return null|NightClubModelInterface
     */
    public function getNightClubModelService();

    /**
     * @param NightClubModelInterface $nightClubModelService
     * @return $this
     */
    public function setNightClubModelService($nightClubModelService);
}