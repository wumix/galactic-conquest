<?php

declare(strict_types=1);

namespace GC\Player\Model;

use GC\Unit\Model\Unit;

/**
 * @Table(name="player_fleet_unit", indexes={@Index(name="fk-player_fleet_unit-unit_id", columns={"unit_id"}), @Index(name="fk-player_fleet_unit-player_fleet_id", columns={"player_fleet_id"})})
 * @Entity
 */
final class PlayerFleetUnit
{
    /**
     * @var int
     *
     * @Column(name="player_fleet_unit_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $playerFleetUnitId;

    /**
     * @var int
     *
     * @Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var \GC\Player\Model\PlayerFleet
     *
     * @ManyToOne(targetEntity="\GC\Player\Model\PlayerFleet")
     * @JoinColumns({
     *   @JoinColumn(name="player_fleet_id", referencedColumnName="player_fleet_id")
     * })
     */
    private $playerFleet;

    /**
     * @var \GC\Unit\Model\Unit
     *
     * @ManyToOne(targetEntity="\GC\Unit\Model\Unit")
     * @JoinColumns({
     *   @JoinColumn(name="unit_id", referencedColumnName="unit_id")
     * })
     */
    private $unit;

    /**
     * @param \GC\Player\Model\PlayerFleet $playerFleet
     * @param \GC\Unit\Model\Unit $unit
     * @param int $quantity
     */
    public function __construct(PlayerFleet $playerFleet, Unit $unit, int $quantity)
    {
        $this->playerFleet = $playerFleet;
        $this->unit = $unit;
        $this->quantity = $quantity;
    }

    /**
     * @return int
     */
    public function getPlayerFleetUnitId(): int
    {
        return $this->playerFleetUnitId;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     *
     * @return void
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return \GC\Player\Model\PlayerFleet
     */
    public function getPlayerFleet(): PlayerFleet
    {
        return $this->playerFleet;
    }

    /**
     * @param \GC\Player\Model\PlayerFleet $playerFleet
     *
     * @return void
     */
    public function setPlayerFleet(PlayerFleet $playerFleet): void
    {
        $this->playerFleet = $playerFleet;
    }

    /**
     * @return \GC\Unit\Model\Unit
     */
    public function getUnit(): Unit
    {
        return $this->unit;
    }

    /**
     * @param \GC\Unit\Model\Unit $unit
     *
     * @return void
     */
    public function setUnit(Unit $unit): void
    {
        $this->unit = $unit;
    }
}