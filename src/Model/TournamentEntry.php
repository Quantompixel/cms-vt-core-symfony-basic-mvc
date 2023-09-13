<?php

namespace App\Model;

class TournamentEntry
{
    private string $paperPlaneModel;
    private int $travelledDistance;
    private int $flightDuration;
    private string $participantName;
    private string $participationDate;

    /**
     * @param string $paperPlaneModel
     * @param int $travelledDistance
     * @param int $flightDuration
     * @param string $participantName
     * @param string $participationDate
     */
    public function __construct(string $paperPlaneModel, int $travelledDistance, int $flightDuration, string $participantName, string $participationDate)
    {
        $this->paperPlaneModel = $paperPlaneModel;
        $this->travelledDistance = $travelledDistance;
        $this->flightDuration = $flightDuration;
        $this->participantName = $participantName;
        $this->participationDate = $participationDate;
    }

    /**
     * @return string
     */
    public function getPaperPlaneModel(): string
    {
        return $this->paperPlaneModel;
    }

    /**
     * @return int
     */
    public function getTravelledDistance(): int
    {
        return $this->travelledDistance;
    }

    /**
     * @return int
     */
    public function getFlightDuration(): int
    {
        return $this->flightDuration;
    }

    /**
     * @return string
     */
    public function getParticipantName(): string
    {
        return $this->participantName;
    }

    /**
     * @return string
     */
    public function getParticipationDate(): string
    {
        return $this->participationDate;
    }
}