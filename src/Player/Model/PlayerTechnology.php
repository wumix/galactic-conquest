<?php

declare(strict_types=1);

namespace GC\Player\Model;

use GC\Technology\Model\Technology;

/**
 * @Table(name="player_technology")
 * @Entity
 */
class PlayerTechnology
{
    /**
     * @var int
     *
     * @Column(name="player_technology_id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $playerTechnologyId;

    /**
     * @var \GC\Player\Model\Player
     *
     * @ManyToOne(targetEntity="GC\Player\Model\Player", inversedBy="playerTechnologies")
     * @JoinColumn(name="player_id", referencedColumnName="player_id", nullable=false)
     */
    private $player;

    /**
     * @var \GC\Technology\Model\Technology
     *
     * @ManyToOne(targetEntity="\GC\Technology\Model\Technology")
     * @JoinColumn(name="technology_id", referencedColumnName="technology_id", nullable=false)
     */
    private $technology;

    /**
     * @var int
     *
     * @Column(name="ticks_left", type="integer", nullable=false)
     */
    private $ticksLeft;

    /**
     * @param \GC\Player\Model\Player $player
     * @param \GC\Technology\Model\Technology $technology
     * @param int $ticksLeft
     */
    public function __construct(Player $player, Technology $technology, int $ticksLeft)
    {
        $this->player = $player;
        $this->technology = $technology;
        $this->ticksLeft = $ticksLeft;
    }

    /**
     * @return int
     */
    public function getPlayerTechnologyId(): int
    {
        return $this->playerTechnologyId;
    }

    /**
     * @return \GC\Player\Model\Player
     */
    public function getPlayer(): Player
    {
        return $this->player;
    }

    /**
     * @return \GC\Technology\Model\Technology
     */
    public function getTechnology():Technology
    {
        return $this->technology;
    }

    /**
     * @return int
     */
    public function getTicksLeft(): int
    {
        return $this->ticksLeft;
    }
}