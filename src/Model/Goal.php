<?php
/**
 * Created by PhpStorm.
 * User: juan
 * Date: 4/03/19
 * Time: 21:55
 */

namespace App\Model;


class Goal
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
     * @return Player
     */
    public function getPlayer(): Player
    {
        return $this->player;
    }

    /**
     * @param Player $player
     * @return Goal
     */
    public function setPlayer(Player $player): Goal
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
     * @return Goal
     */
    public function setTime(\DateTime $time): Goal
    {
        $this->time = $time;

        return $this;
    }


}