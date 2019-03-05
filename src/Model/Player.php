<?php

namespace App\Model;

class Player
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Team
     */
    private $team;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Player
     */
    public function setName(string $name): Player
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Team
     */
    public function getTeam(): Team
    {
        return $this->team;
    }

    /**
     * @param Team $team
     * @return Player
     */
    public function setTeam(Team $team): Player
    {
        $this->team = $team;

        return $this;
    }

}