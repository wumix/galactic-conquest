<?php

declare(strict_types=1);

namespace GC\Player\Model;

/**
 * @Table(name="player_fleet", indexes={@Index(name="fk-player_fleet-player_id", columns={"player_id"}), @Index(name="fk-player_fleet-target_player_id", columns={"target_player_id"})})
 * @Entity
 */
final class PlayerFleet
{
    public const MISSION_TYPE_ATTACK = 'attack';
    public const MISSION_TYPE_DEFEND = 'defend';

    /**
     * @var int
     *
     * @Column(name="player_fleet_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $playerFleetId;

    /**
     * @var bool
     *
     * @Column(name="is_offensive", type="boolean", nullable=false)
     */
    private $isOffensive;

    /**
     * @var bool
     *
     * @Column(name="is_defensive", type="boolean", nullable=false)
     */
    private $isDefensive;

    /**
     * @var string|null
     *
     * @Column(name="mission_type", type="string", length=100, nullable=true)
     */
    private $missionType;

    /**
     * @var int|null
     *
     * @Column(name="ticks_left_until_turn_back", type="integer", nullable=true)
     */
    private $ticksLeftUntilTurnBack;

    /**
     * @var \GC\Player\Model\Player
     *
     * @ManyToOne(targetEntity="Player")
     * @JoinColumns({
     *   @JoinColumn(name="player_id", referencedColumnName="player_id")
     * })
     */
    private $player;

    /**
     * @var \GC\Player\Model\Player|null
     *
     * @ManyToOne(targetEntity="Player")
     * @JoinColumns({
     *   @JoinColumn(name="target_player_id", referencedColumnName="player_id")
     * })
     */
    private $targetPlayer;

    /**
     * @param \GC\Player\Model\Player $player
     */
    public function __construct(Player $player)
    {
        $this->player = $player;
        $this->isOffensive = false;
        $this->isDefensive = false;
        $this->missionType = null;
        $this->targetPlayer = null;
    }

    /**
     * @return int
     */
    public function getPlayerFleetId(): int
    {
        return $this->playerFleetId;
    }

    /**
     * @return bool
     */
    public function isOffensive(): bool
    {
        return $this->isOffensive;
    }

    /**
     * @param bool $isOffensive
     *
     * @return void
     */
    public function setIsOffensive(bool $isOffensive): void
    {
        $this->isOffensive = $isOffensive;
    }

    /**
     * @return bool
     */
    public function isDefensive(): bool
    {
        return $this->isDefensive;
    }

    /**
     * @param bool $isDefensive
     *
     * @return void
     */
    public function setIsDefensive(bool $isDefensive): void
    {
        $this->isDefensive = $isDefensive;
    }

    /**
     * @return string
     */
    public function getMissionType(): ?string
    {
        return $this->missionType;
    }

    /**
     * @param string|null $missionType
     *
     * @return void
     */
    public function setMissionType(?string $missionType): void
    {
        $this->missionType = $missionType;
    }

    /**
     * @return int
     */
    public function getTicksLeftUntilTurnBack(): ?int
    {
        return $this->ticksLeftUntilTurnBack;
    }

    /**
     * @param int|null $ticksLeftUntilTurnBack
     *
     * @return void
     */
    public function setTicksLeftUntilTurnBack(?int $ticksLeftUntilTurnBack): void
    {
        $this->ticksLeftUntilTurnBack = $ticksLeftUntilTurnBack;
    }

    /**
     * @return \GC\Player\Model\Player
     */
    public function getPlayer(): Player
    {
        return $this->player;
    }

    /**
     * @param \GC\Player\Model\Player $player
     *
     * @return void
     */
    public function setPlayer(Player $player): void
    {
        $this->player = $player;
    }

    /**
     * @return \GC\Player\Model\Player
     */
    public function getTargetPlayer(): ?Player
    {
        return $this->targetPlayer;
    }

    /**
     * @param \GC\Player\Model\Player|null $targetPlayer
     *
     * @return void
     */
    public function setTargetPlayer(?Player $targetPlayer): void
    {
        $this->targetPlayer = $targetPlayer;
    }
}