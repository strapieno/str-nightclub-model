<?php
namespace Strapieno\NightClub\Model;

/**
 * Class NightClubModelAwareTrait
 */
trait NightClubModelAwareTrait
{
    /**
     * @var null|NightClubModelInterface
     */
    protected $nightClubModelService;

    /**
     * @return null|NightClubModelInterface
     */
    public function getNightClubModelService()
    {
        return $this->nightClubModelService;
    }

    /**
     * @param NightClubModelInterface $nightClubModelService
     * @return $this
     */
    public function setNightClubModelService($nightClubModelService)
    {
        $this->nightClubModelService = $nightClubModelService;
        return $this;
    }
}