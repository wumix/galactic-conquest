<?php

declare(strict_types=1);

namespace GC\Galaxy\Model;

use Doctrine\Common\Collections\ArrayCollection;
use GC\Alliance\Model\Alliance;
use GC\Faction\Model\Faction;
use GC\Player\Model\Player;
use GC\Technology\Model\Technology;
use GC\Universe\Model\Universe;
use GC\User\Model\User;

use function round;
use function str_shuffle;
use function substr;

/**
 * @Table(name="galaxy")
 * @Entity(repositoryClass="GC\Galaxy\Model\GalaxyRepository")
 */
class Galaxy
{
    /**
     * @var int
     *
     * @Column(name="galaxy_id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $galaxyId;

    /**
     * @var int
     *
     * @Column(name="number", type="integer", nullable=false)
     */
    private $number;

    /**
     * @var string|null
     *
     * @Column(name="password", type="string", length=70, nullable=true)
     */
    private $password;

    /**
     * @var int
     *
     * @Column(name="metal", type="integer", nullable=false)
     */
    private $metal;

    /**
     * @var int
     *
     * @Column(name="crystal", type="integer", nullable=false)
     */
    private $crystal;

    /**
     * @var int
     *
     * @Column(name="metal_per_tick", type="integer", nullable=false)
     */
    private $metalPerTick;

    /**
     * @var int
     *
     * @Column(name="crystal_per_tick", type="integer", nullable=false)
     */
    private $crystalPerTick;

    /**
     * @var int
     *
     * @Column(name="tax_metal", type="integer", nullable=false)
     */
    private $taxMetal;

    /**
     * @var int
     *
     * @Column(name="tax_crystal", type="integer", nullable=false)
     */
    private $taxCrystal;

    /**
     * @var int
     *
     * @Column(name="extractor_points", type="integer", nullable=false)
     */
    private $extractorPoints;

    /**
     * @var int
     *
     * @Column(name="average_points", type="integer", nullable=false)
     */
    private $averagePoints;

    /**
     * @var int
     *
     * @Column(name="ranking_position", type="integer", nullable=false)
     */
    private $rankingPosition;

    /**
     * @var \GC\Alliance\Model\Alliance|null
     *
     * @ManyToOne(targetEntity="\GC\Alliance\Model\Alliance", inversedBy="galaxies")
     * @JoinColumn(name="alliance_id", referencedColumnName="alliance_id", nullable=true)
     */
    private $alliance;

    /**
     * @var \GC\Galaxy\Model\GalaxyTechnology[]|\Doctrine\Common\Collections\ArrayCollection
     *
     * @OneToMany(targetEntity="\GC\Galaxy\Model\GalaxyTechnology", mappedBy="galaxy", cascade={"all"}, orphanRemoval=true)
     */
    private $galaxyTechnologies;

    /**
     * @var \GC\Player\Model\Player[]|\Doctrine\Common\Collections\ArrayCollection
     *
     * @OneToMany(targetEntity="\GC\Player\Model\Player", mappedBy="galaxy", fetch="EXTRA_LAZY", cascade={"all"}, orphanRemoval=true)
     * @OrderBy({"galaxyPosition" = "ASC"})
     */
    private $players;

    /**
     * @var \GC\Universe\Model\Universe
     *
     * @ManyToOne(targetEntity="GC\Universe\Model\Universe", inversedBy="galaxies")
     * @JoinColumn(name="universe_id", referencedColumnName="universe_id", nullable=false)
     */
    private $universe;

    /**
     * @param \GC\Universe\Model\Universe $universe
     * @param bool $isPrivate
     */
    public function __construct(Universe $universe, bool $isPrivate = false)
    {
        $this->players = new ArrayCollection();
        $this->galaxyTechnologies = new ArrayCollection();

        $this->universe = $universe;
        $this->number = $universe->getNextFreeGalaxyNumber();
        $this->metal = 0;
        $this->crystal = 0;
        $this->metalPerTick = 0;
        $this->crystalPerTick = 0;
        $this->taxCrystal = 0;
        $this->taxMetal = 0;
        $this->extractorPoints = 0;
        $this->rankingPosition = 0;
        $this->averagePoints = 0;

        if ($isPrivate) {
            $this->generateGalaxyPassword();
        }
    }

    /**
     * @return int
     */
    public function getGalaxyId(): int
    {
        return $this->galaxyId;
    }

    /**
     * @return int
     */
    public function getAveragePoints(): int
    {
        return $this->averagePoints;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @param int $number
     *
     * @return void
     */
    public function setNumber(int $number): void
    {
        $this->number = $number;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string|null $password
     *
     * @return void
     */
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return int
     */
    public function getMetal(): int
    {
        return $this->metal;
    }

    /**
     * @param int $metal
     *
     * @return void
     */
    public function setMetal(int $metal): void
    {
        $this->metal = $metal;
    }

    /**
     * @return int
     */
    public function getMetalPerTick(): int
    {
        return $this->metalPerTick;
    }

    /**
     * @return int
     */
    public function getCrystalPerTick(): int
    {
        return $this->crystalPerTick;
    }

    /**
     * @return int
     */
    public function getCrystal(): int
    {
        return $this->crystal;
    }

    /**
     * @param int $crystal
     *
     * @return void
     */
    public function setCrystal(int $crystal): void
    {
        $this->crystal = $crystal;
    }

    /**
     * @return int
     */
    public function getTaxMetal(): int
    {
        return $this->taxMetal;
    }

    /**
     * @param int $taxMetal
     *
     * @return void
     */
    public function setTaxMetal(int $taxMetal): void
    {
        $this->taxMetal = $taxMetal;
    }

    /**
     * @return int
     */
    public function getTaxCrystal(): int
    {
        return $this->taxCrystal;
    }

    /**
     * @param int $taxCrystal
     *
     * @return void
     */
    public function setTaxCrystal(int $taxCrystal): void
    {
        $this->taxCrystal = $taxCrystal;
    }

    /**
     * @return int
     */
    public function getExtractorPoints(): int
    {
        return $this->extractorPoints;
    }

    /**
     * @param int $extractorPoints
     *
     * @return void
     */
    public function setExtractorPoints(int $extractorPoints): void
    {
        $this->extractorPoints = $extractorPoints;
    }

    /**
     * @return int
     */
    public function getRankingPosition(): int
    {
        return $this->rankingPosition;
    }

    /**
     * @param int $rankingPosition
     *
     * @return void
     */
    public function setRankingPosition(int $rankingPosition): void
    {
        $this->rankingPosition = $rankingPosition;
    }

    /**
     * @return \GC\Alliance\Model\Alliance|null
     */
    public function getAlliance(): ?Alliance
    {
        return $this->alliance;
    }

    /**
     * @return bool
     */
    public function hasAlliance(): bool
    {
        return $this->alliance !== null;
    }

    /**
     * @param \GC\Alliance\Model\Alliance|null $alliance
     *
     * @return void
     */
    public function setAlliance(?Alliance $alliance): void
    {
        $this->alliance = $alliance;
    }

    /**
     * @return \GC\Universe\Model\Universe
     */
    public function getUniverse(): Universe
    {
        return $this->universe;
    }

    /**
     * @return bool
     */
    public function isPublicGalaxy(): bool
    {
        return $this->password === null;
    }

    /**
     * @return bool
     */
    public function isPrivateGalaxy(): bool
    {
        return $this->password !== null;
    }

    /**
     * @return string
     */
    public function generateGalaxyPassword(): string
    {
        $this->password = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 8);

        return $this->password;
    }

    /**
     * @return int
     */
    public function getMaximumNumberOfPlayers(): int
    {
        if ($this->isPrivateGalaxy()) {
            return $this->universe->getMaxPrivateGalaxyPlayers();
        }

        return $this->universe->getMaxPublicGalaxyPlayers();
    }

    /**
     * @return bool
     */
    public function hasSpaceForNewPlayer(): bool
    {
        return $this->players->count() < $this->getMaximumNumberOfPlayers();
    }

    /**
     * @param \GC\User\Model\User $user
     * @param \GC\Faction\Model\Faction $faction
     *
     * @return \GC\Player\Model\Player
     */
    public function createPlayer(User $user, Faction $faction): Player
    {
        $player = new Player($user, $faction, $this);
        $this->players->add($player);

        return $player;
    }

    /**
     * @param string $name
     * @param string $code
     *
     * @return \GC\Alliance\Model\Alliance
     */
    public function createAlliance(string $name, string $code): Alliance
    {
        $this->alliance = new Alliance($name, $code, $this);

        return $this->alliance;
    }

    /**
     * @return \GC\Player\Model\Player[]
     */
    public function getPlayers(): array
    {
        return $this->players->getValues();
    }

    /**
     * @return int
     */
    public function getPlayerCount(): int
    {
        return $this->players->count();
    }

    /**
     * @return int
     */
    public function getNextFreeGalaxyPosition(): int
    {
        $freeGalaxyPosition = 1;

        foreach ($this->players as $index => $galaxyPlayer) {
            if ($galaxyPlayer->getGalaxyPosition() > $freeGalaxyPosition) {
                return $freeGalaxyPosition;
            }

            $freeGalaxyPosition++;
        }

        return $freeGalaxyPosition;
    }

    /**
     * @return int
     */
    public function calculateTotalPlayerPoints(): int
    {
        $playerPoints = 0;

        foreach ($this->getPlayers() as $player) {
            $playerPoints += $player->getPoints();
        }

        return $playerPoints;
    }

    /**
     * @return int
     */
    public function calculateAverageExtractors(): int
    {
        $extractors = 0;

        foreach ($this->getPlayers() as $player) {
            $extractors += $player->getNumberOfExtractors();
        }

        $calculation = $extractors / count($this->getPlayers());

        return (int) round($calculation);
    }

    /**
     * @return int
     */
    public function calculateAverageMetalExtractors(): int
    {
        $calculation = $this->calculateTotalMetalExtractors() / count($this->getPlayers());

        return (int) round($calculation);
    }

    /**
     * @return int
     */
    public function calculateTotalMetalExtractors(): int
    {
        $extractors = 0;

        foreach ($this->getPlayers() as $player) {
            $extractors += $player->getExtractorMetal();
        }

        return $extractors;
    }

    /**
     * @return int
     */
    public function calculateAverageCrystalExtractors(): int
    {
        $calculation = $this->calculateTotalCrystalExtractors() / count($this->getPlayers());

        return (int) round($calculation);
    }

    /**
     * @return int
     */
    public function calculateTotalCrystalExtractors(): int
    {
        $extractors = 0;

        foreach ($this->getPlayers() as $player) {
            $extractors += $player->getExtractorCrystal();
        }

        return $extractors;
    }

    /**
     * @return int
     */
    public function calculateUnitsMovableAverageQuantity(): int
    {
        $calculation = $this->calculateUnitsMovableTotalQuantity() / count($this->getPlayers());

        return (int) round($calculation);
    }

    /**
     * @return int
     */
    public function calculateUnitsMovableTotalQuantity(): int
    {
        $quantity = 0;

        foreach ($this->getPlayers() as $player) {
            $quantity += $player->getUnitsMovableQuantity();
        }

        return $quantity;
    }

    /**
     * @return int
     */
    public function calculateUnitsStationaryAverageQuantity(): int
    {
        $calculation = $this->calculateUnitsStationaryTotalQuantity() / count($this->getPlayers());

        return (int) round($calculation);
    }

    /**
     * @return int
     */
    public function calculateUnitsStationaryTotalQuantity(): int
    {
        $quantity = 0;

        foreach ($this->getPlayers() as $player) {
            $quantity += $player->getUnitsStationaryQuantity();
        }

        return $quantity;
    }

    /**
     * @return \GC\Player\Model\Player|null
     */
    public function getCommander(): ?Player
    {
        foreach ($this->getPlayers() as $player) {
            if ($player->isCommander()) {
                return $player;
            }
        }

        return null;
    }

    /**
     * @param int $metal
     * @param int $crystal
     *
     * @return bool
     */
    public function hasResources(int $metal, int $crystal): bool
    {
        return $this->metal >= $metal && $this->crystal >= $crystal;
    }

    /**
     * @param int $number
     *
     * @return void
     */
    public function increaseMetal(int $number): void
    {
        $this->metal += $number;
    }

    /**
     * @param int $number
     *
     * @return void
     */
    public function decreaseMetal(int $number): void
    {
        $this->metal -= $number;
    }

    /**
     * @param int $number
     *
     * @return void
     */
    public function increaseCrystal(int $number): void
    {
        $this->crystal += $number;
    }

    /**
     * @param int $number
     *
     * @return void
     */
    public function decreaseCrystal(int $number): void
    {
        $this->crystal -= $number;
    }

    /**
     * @param \GC\Player\Model\Player $player
     *
     * @return int
     */
    public function calculateMetalTaxFor(Player $player): int
    {
        $calculation = ($player->calculateMetalIncomePerTick() / 100) * $this->taxMetal;

        return (int) round($calculation);
    }

    /**
     * @param \GC\Player\Model\Player $player
     *
     * @return int
     */
    public function calculateCrystalTaxFor(Player $player): int
    {
        $calculation = ($player->calculateCrystalIncomePerTick() / 100) * $this->taxCrystal;

        return (int) round($calculation);
    }

    /**
     * @return int
     */
    public function calculateMetalIncomePerTick(): int
    {
        $income = 0;
        foreach ($this->getPlayers() as $player) {
            $income += $this->calculateMetalTaxFor($player);
        }

        return $income;
    }

    /**
     * @return int
     */
    public function calculateCrystalIncomePerTick(): int
    {
        $income = 0;
        foreach ($this->getPlayers() as $player) {
            $income += $this->calculateCrystalTaxFor($player);
        }

        return $income;
    }

    /**
     * @return int
     */
    public function calculateMetalTaxPerTick(): int
    {
        if ($this->hasAlliance()) {
            return $this->alliance->calculateMetalTaxFor($this);
        }

        return 0;
    }

    /**
     * @return int
     */
    public function calculateCrystalTaxPerTick(): int
    {
        if ($this->hasAlliance()) {
            return $this->alliance->calculateCrystalTaxFor($this);
        }

        return 0;
    }

    /**
     * @param \GC\Technology\Model\Technology $technology
     *
     * @return \GC\Galaxy\Model\GalaxyTechnology
     */
    public function buildTechnology(Technology $technology): GalaxyTechnology
    {
        $galaxyTechnology = new GalaxyTechnology($this, $technology);
        $this->galaxyTechnologies->add($galaxyTechnology);

        $this->decreaseMetal($technology->getMetalCost());
        $this->decreaseCrystal($technology->getCrystalCost());

        return $galaxyTechnology;
    }

    /**
     * @param \GC\Technology\Model\Technology $technology
     *
     * @return bool
     */
    public function hasTechnology(Technology $technology): bool
    {
        foreach ($this->getGalaxyTechnologies() as $galaxyTechnology) {
            if ($galaxyTechnology->isCompleted()
                && $galaxyTechnology->getTechnology()->getTechnologyId() === $technology->getTechnologyId()) {

                return true;
            }
        }

        return false;
    }

    /**
     * @param string $featureKey
     *
     * @return bool
     */
    public function hasTechnologyByFeatureKey(string $featureKey): bool
    {
        foreach ($this->getGalaxyTechnologies() as $galaxyTechnology) {
            if ($galaxyTechnology->isCompleted()
                && $galaxyTechnology->getTechnology()->getFeatureKey() === $featureKey) {

                return true;
            }
        }

        return false;
    }

    /**
     * @param \GC\Technology\Model\Technology $technology
     *
     * @return bool
     */
    public function hasResourcesForTechnology(Technology $technology): bool
    {
        return $this->hasResources(
            $technology->getMetalCost(),
            $technology->getCrystalCost()
        );
    }

    /**
     * @param \GC\Technology\Model\Technology $technology
     *
     * @return bool
     */
    public function hasTechnologyRequirementsFor(Technology $technology): bool
    {
        foreach ($technology->getTechnologyConditions() as $technologyCondition) {
            if (!$this->hasTechnology($technologyCondition->getTargetTechnology())) {
                return false;
            }
        }

        return true;
    }

    /**
     * @param \GC\Technology\Model\Technology $technology
     *
     * @return bool
     */
    public function isTechnologyInConstruction(Technology $technology): bool
    {
        foreach ($this->getGalaxyTechnologies() as $galaxyTechnology) {
            if ($galaxyTechnology->getTechnology()->getTechnologyId() === $technology->getTechnologyId()) {
                return true;
            }
        }

        return false;
    }

    /**
     * @return \GC\Galaxy\Model\GalaxyTechnology[]
     */
    public function getGalaxyTechnologies(): array
    {
        return $this->galaxyTechnologies->getValues();
    }

    /**
     * @return \GC\Galaxy\Model\GalaxyTechnology[]
     */
    public function getGalaxyTechnologiesCompleted(): array
    {
        $galaxyTechnologies = [];
        foreach ($this->getGalaxyTechnologies() as $galaxyTechnology) {
            if ($galaxyTechnology->isCompleted()) {
                $galaxyTechnologies[] = $galaxyTechnology;
            }
        }

        return $galaxyTechnologies;
    }

    /**
     * @return \GC\Galaxy\Model\GalaxyTechnology[]
     */
    public function getGalaxyTechnologiesInConstruction(): array
    {
        $galaxyTechnologies = [];
        foreach ($this->getGalaxyTechnologies() as $galaxyTechnology) {
            if ($galaxyTechnology->isInConstruction()) {
                $galaxyTechnologies[] = $galaxyTechnology;
            }
        }

        return $galaxyTechnologies;
    }
}
