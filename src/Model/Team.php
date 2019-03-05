<?php

namespace App\Model;

class Team
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Player[]
     */
    private $players;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Team
     */
    public function setName(string $name): Team
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Player[]
     */
    public function getPlayers(): array
    {
        return $this->players;
    }

    /**
     * @param Player[] $players
     * @return Team
     */
    public function setPlayers(array $players): Team
    {
        $this->players = $players;

        return $this;
    }


}