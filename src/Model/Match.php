<?php

namespace App\Model;

class Match
{
    /**
     * @var Team[]
     */
    private $teams;

    /**
     * @var string
     */
    private $location;

    /**
     * @var \DateTime;
     */
    private $time;

    /**
     * @var Player[][]
     */
    private $players;

    /**
     * @var Goal
     */
    private $goals;

    /**
     * @var Card
     */
    private $cards;

    /**
     * @return Team[]
     */
    public function getTeams(): array
    {
        return $this->teams;
    }

    /**
     * @param Team[] $teams
     * @return Match
     */
    public function setTeams(array $teams): Match
    {
        $this->teams = $teams;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @param string $location
     * @return Match
     */
    public function setLocation(string $location): Match
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTime(): \DateTime
    {
        return $this->time;
    }

    /**
     * @param \DateTime $time
     * @return Match
     */
    public function setTime(\DateTime $time): Match
    {
        $this->time = $time;

        return $this;
    }

    /**
     * @return Player[][]
     */
    public function getPlayers(): array
    {
        return $this->players;
    }

    /**
     * @param Player[][] $players
     * @return Match
     */
    public function setPlayers(array $players): Match
    {
        $this->players = $players;

        return $this;
    }

    /**
     * @return Goal
     */
    public function getGoals(): Goal
    {
        return $this->goals;
    }

    /**
     * @param Goal $goals
     * @return Match
     */
    public function setGoals(Goal $goals): Match
    {
        $this->goals = $goals;

        return $this;
    }

    /**
     * @return Card
     */
    public function getCards(): Card
    {
        return $this->cards;
    }

    /**
     * @param Card $cards
     * @return Match
     */
    public function setCards(Card $cards): Match
    {
        $this->cards = $cards;

        return $this;
    }

}