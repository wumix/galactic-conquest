<?php

declare(strict_types=1);

namespace GC\Combat\Model;

use GC\Player\Model\Player;
use DateTime;

/**
 * @Table(name="combat_report", indexes={@Index(name="fk-combat_report-player_id", columns={"player_id"})})
 * @Entity
 */
final class CombatReport
{
    /**
     * @var int
     *
     * @Column(name="combat_report_id", type="bigint", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $combatReportId;

    /**
     * @var string
     *
     * @Column(name="data_json", type="text", length=65535, nullable=false)
     */
    private $dataJson;

    /**
     * @var DateTime
     *
     * @Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var string
     *
     * @Column(name="external_id", type="string", length=40, nullable=false)
     */
    private $externalId;

    /**
     * @var \GC\Player\Model\Player
     *
     * @ManyToOne(targetEntity="\GC\Player\Model\Player")
     * @JoinColumns({
     *   @JoinColumn(name="player_id", referencedColumnName="player_id")
     * })
     */
    private $player;

    /**
     * @param string $dataJson
     * @param string $externalId
     * @param \GC\Player\Model\Player $player
     * @throws \Exception
     */
    public function __construct(string $dataJson, string $externalId, Player $player)
    {
        $this->dataJson = $dataJson;
        $this->externalId = $externalId;
        $this->player = $player;
        $this->createdAt = new DateTime();
    }

    /**
     * @return int
     */
    public function getCombatReportId(): int
    {
        return $this->combatReportId;
    }

    /**
     * @return string
     */
    public function getDataJson(): string
    {
        return $this->dataJson;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }

    /**
     * @return \GC\Player\Model\Player
     */
    public function getPlayer(): Player
    {
        return $this->player;
    }
}