<?php

namespace Inferno\DoctrineProxies\__CG__\GC\Alliance\Model;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Alliance extends \GC\Alliance\Model\Alliance implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'allianceId', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'name', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'code', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'description', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'metal', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'crystal', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'taxMetal', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'taxCrystal', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'scanRelays', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'extractorPoints', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'rankingPosition', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'averagePoints', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'universe', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'galaxies', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'allianceTechnologies', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'allianceApplications'];
        }

        return ['__isInitialized__', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'allianceId', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'name', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'code', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'description', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'metal', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'crystal', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'taxMetal', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'taxCrystal', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'scanRelays', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'extractorPoints', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'rankingPosition', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'averagePoints', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'universe', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'galaxies', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'allianceTechnologies', '' . "\0" . 'GC\\Alliance\\Model\\Alliance' . "\0" . 'allianceApplications'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Alliance $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getAllianceId(): int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getAllianceId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAllianceId', []);

        return parent::getAllianceId();
    }

    /**
     * {@inheritDoc}
     */
    public function getGalaxies()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGalaxies', []);

        return parent::getGalaxies();
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getCode(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCode', []);

        return parent::getCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCode(string $code): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCode', [$code]);

        parent::setCode($code);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetal(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetal', []);

        return parent::getMetal();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetal(int $metal): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetal', [$metal]);

        parent::setMetal($metal);
    }

    /**
     * {@inheritDoc}
     */
    public function getCrystal(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCrystal', []);

        return parent::getCrystal();
    }

    /**
     * {@inheritDoc}
     */
    public function setCrystal(int $crystal): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCrystal', [$crystal]);

        parent::setCrystal($crystal);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxMetal(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxMetal', []);

        return parent::getTaxMetal();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaxMetal(int $taxMetal): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaxMetal', [$taxMetal]);

        parent::setTaxMetal($taxMetal);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxCrystal(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxCrystal', []);

        return parent::getTaxCrystal();
    }

    /**
     * {@inheritDoc}
     */
    public function setTaxCrystal(int $taxCrystal): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTaxCrystal', [$taxCrystal]);

        parent::setTaxCrystal($taxCrystal);
    }

    /**
     * {@inheritDoc}
     */
    public function getScanRelays(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScanRelays', []);

        return parent::getScanRelays();
    }

    /**
     * {@inheritDoc}
     */
    public function setScanRelays(int $scanRelays): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScanRelays', [$scanRelays]);

        parent::setScanRelays($scanRelays);
    }

    /**
     * {@inheritDoc}
     */
    public function getExtractorPoints(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExtractorPoints', []);

        return parent::getExtractorPoints();
    }

    /**
     * {@inheritDoc}
     */
    public function setExtractorPoints(int $extractorPoints): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExtractorPoints', [$extractorPoints]);

        parent::setExtractorPoints($extractorPoints);
    }

    /**
     * {@inheritDoc}
     */
    public function getRankingPosition(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRankingPosition', []);

        return parent::getRankingPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function setRankingPosition(int $rankingPosition): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRankingPosition', [$rankingPosition]);

        parent::setRankingPosition($rankingPosition);
    }

    /**
     * {@inheritDoc}
     */
    public function getAveragePoints(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAveragePoints', []);

        return parent::getAveragePoints();
    }

    /**
     * {@inheritDoc}
     */
    public function setAveragePoints(int $averagePoints): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAveragePoints', [$averagePoints]);

        parent::setAveragePoints($averagePoints);
    }

    /**
     * {@inheritDoc}
     */
    public function getUniverse(): \GC\Universe\Model\Universe
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUniverse', []);

        return parent::getUniverse();
    }

    /**
     * {@inheritDoc}
     */
    public function setUniverse(\GC\Universe\Model\Universe $universe): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUniverse', [$universe]);

        parent::setUniverse($universe);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlayers(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlayers', []);

        return parent::getPlayers();
    }

    /**
     * {@inheritDoc}
     */
    public function calculateExtractorPointsPerTick(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calculateExtractorPointsPerTick', []);

        return parent::calculateExtractorPointsPerTick();
    }

    /**
     * {@inheritDoc}
     */
    public function increaseExtractorPointsPerTick(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'increaseExtractorPointsPerTick', []);

        parent::increaseExtractorPointsPerTick();
    }

    /**
     * {@inheritDoc}
     */
    public function calculateAverageGalaxyPoints(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calculateAverageGalaxyPoints', []);

        parent::calculateAverageGalaxyPoints();
    }

    /**
     * {@inheritDoc}
     */
    public function getAdmiral(): ?\GC\Player\Model\Player
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdmiral', []);

        return parent::getAdmiral();
    }

    /**
     * {@inheritDoc}
     */
    public function hasResources(int $metal, int $crystal): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasResources', [$metal, $crystal]);

        return parent::hasResources($metal, $crystal);
    }

    /**
     * {@inheritDoc}
     */
    public function increaseMetal(int $number): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'increaseMetal', [$number]);

        parent::increaseMetal($number);
    }

    /**
     * {@inheritDoc}
     */
    public function decreaseMetal(int $number): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'decreaseMetal', [$number]);

        parent::decreaseMetal($number);
    }

    /**
     * {@inheritDoc}
     */
    public function increaseCrystal(int $number): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'increaseCrystal', [$number]);

        parent::increaseCrystal($number);
    }

    /**
     * {@inheritDoc}
     */
    public function decreaseCrystal(int $number): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'decreaseCrystal', [$number]);

        parent::decreaseCrystal($number);
    }

    /**
     * {@inheritDoc}
     */
    public function calculateMetalTaxFor(\GC\Galaxy\Model\Galaxy $galaxy): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calculateMetalTaxFor', [$galaxy]);

        return parent::calculateMetalTaxFor($galaxy);
    }

    /**
     * {@inheritDoc}
     */
    public function calculateCrystalTaxFor(\GC\Galaxy\Model\Galaxy $galaxy): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calculateCrystalTaxFor', [$galaxy]);

        return parent::calculateCrystalTaxFor($galaxy);
    }

    /**
     * {@inheritDoc}
     */
    public function calculateMetalIncomePerTick(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calculateMetalIncomePerTick', []);

        return parent::calculateMetalIncomePerTick();
    }

    /**
     * {@inheritDoc}
     */
    public function calculateCrystalIncomePerTick(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calculateCrystalIncomePerTick', []);

        return parent::calculateCrystalIncomePerTick();
    }

    /**
     * {@inheritDoc}
     */
    public function increaseResourceIncomePerTick(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'increaseResourceIncomePerTick', []);

        parent::increaseResourceIncomePerTick();
    }

    /**
     * {@inheritDoc}
     */
    public function getAllianceTechnologies(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAllianceTechnologies', []);

        return parent::getAllianceTechnologies();
    }

    /**
     * {@inheritDoc}
     */
    public function buildTechnology(\GC\Technology\Model\Technology $technology): \GC\Alliance\Model\AllianceTechnology
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'buildTechnology', [$technology]);

        return parent::buildTechnology($technology);
    }

    /**
     * {@inheritDoc}
     */
    public function hasTechnology(\GC\Technology\Model\Technology $technology): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasTechnology', [$technology]);

        return parent::hasTechnology($technology);
    }

    /**
     * {@inheritDoc}
     */
    public function hasTechnologyByFeatureKey(string $featureKey): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasTechnologyByFeatureKey', [$featureKey]);

        return parent::hasTechnologyByFeatureKey($featureKey);
    }

    /**
     * {@inheritDoc}
     */
    public function hasResourcesForTechnology(\GC\Technology\Model\Technology $technology): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasResourcesForTechnology', [$technology]);

        return parent::hasResourcesForTechnology($technology);
    }

    /**
     * {@inheritDoc}
     */
    public function hasTechnologyRequirementsFor(\GC\Technology\Model\Technology $technology): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasTechnologyRequirementsFor', [$technology]);

        return parent::hasTechnologyRequirementsFor($technology);
    }

    /**
     * {@inheritDoc}
     */
    public function isTechnologyInConstruction(\GC\Technology\Model\Technology $technology): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isTechnologyInConstruction', [$technology]);

        return parent::isTechnologyInConstruction($technology);
    }

    /**
     * {@inheritDoc}
     */
    public function finishTechnologyConstructions(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'finishTechnologyConstructions', []);

        parent::finishTechnologyConstructions();
    }

    /**
     * {@inheritDoc}
     */
    public function getAllianceTechnologiesCompleted(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAllianceTechnologiesCompleted', []);

        return parent::getAllianceTechnologiesCompleted();
    }

    /**
     * {@inheritDoc}
     */
    public function getAllianceTechnologiesInConstruction(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAllianceTechnologiesInConstruction', []);

        return parent::getAllianceTechnologiesInConstruction();
    }

    /**
     * {@inheritDoc}
     */
    public function createAllianceApplicationFor(\GC\Galaxy\Model\Galaxy $galaxy): \GC\Alliance\Model\AllianceApplication
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'createAllianceApplicationFor', [$galaxy]);

        return parent::createAllianceApplicationFor($galaxy);
    }

    /**
     * {@inheritDoc}
     */
    public function acceptAllianceApplication(\GC\Alliance\Model\AllianceApplication $allianceApplication): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'acceptAllianceApplication', [$allianceApplication]);

        parent::acceptAllianceApplication($allianceApplication);
    }

    /**
     * {@inheritDoc}
     */
    public function denyAllianceApplication(\GC\Alliance\Model\AllianceApplication $allianceApplication): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'denyAllianceApplication', [$allianceApplication]);

        parent::denyAllianceApplication($allianceApplication);
    }

}