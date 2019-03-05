<?php

namespace App\Model;


class Card
{

    /**
     * @var Player
     */
    private $player;

    /**
     * @var \DateTime
     */
    private $time;

    /**
     * @var string
     */
    private $color;

    /**
     * @return Player
     */
    public function getPlayer(): Player
    {
        return $this->player;
    }

    /**
     * @param Player $player
     * @return Card
     */
    public function setPlayer(Player $player): Card
    {
        $this->player = $player;

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
     * @return Card
     */
    public function setTime(\DateTime $time): Card
    {
        $this->time = $time;

        return $this;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return Card
     */
    public function setColor(string $color): Card
    {
        $this->color = $color;

        return $this;
    }


}
