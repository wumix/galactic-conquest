<?php

namespace Inferno\DoctrineProxies\__CG__\GC\Unit\Model;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Unit extends \GC\Unit\Model\Unit implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'unitId', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'name', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'grouping', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'description', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'isStationary', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'crystalCost', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'metalCost', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'ticksToBuild', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'carrierSpace', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'carrierSpaceConsumption', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'extractorStealAmount', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'faction', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'extractorGuardAmount', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'scanRelaisFactor', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'scanBlockerFactor', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'unitCombatSettings', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'universe', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'requiredTechnology'];
        }

        return ['__isInitialized__', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'unitId', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'name', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'grouping', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'description', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'isStationary', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'crystalCost', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'metalCost', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'ticksToBuild', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'carrierSpace', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'carrierSpaceConsumption', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'extractorStealAmount', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'faction', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'extractorGuardAmount', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'scanRelaisFactor', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'scanBlockerFactor', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'unitCombatSettings', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'universe', '' . "\0" . 'GC\\Unit\\Model\\Unit' . "\0" . 'requiredTechnology'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Unit $proxy) {
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
    public function getUnitId(): int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getUnitId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnitId', []);

        return parent::getUnitId();
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
    public function getGrouping(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrouping', []);

        return parent::getGrouping();
    }

    /**
     * {@inheritDoc}
     */
    public function setGrouping(string $grouping): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGrouping', [$grouping]);

        parent::setGrouping($grouping);
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
    public function isStationary(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isStationary', []);

        return parent::isStationary();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsStationary(bool $isStationary): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsStationary', [$isStationary]);

        parent::setIsStationary($isStationary);
    }

    /**
     * {@inheritDoc}
     */
    public function getCrystalCost(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCrystalCost', []);

        return parent::getCrystalCost();
    }

    /**
     * {@inheritDoc}
     */
    public function setCrystalCost(int $crystalCost): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCrystalCost', [$crystalCost]);

        parent::setCrystalCost($crystalCost);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetalCost(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetalCost', []);

        return parent::getMetalCost();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetalCost(int $metalCost): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetalCost', [$metalCost]);

        parent::setMetalCost($metalCost);
    }

    /**
     * {@inheritDoc}
     */
    public function getTicksToBuild(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTicksToBuild', []);

        return parent::getTicksToBuild();
    }

    /**
     * {@inheritDoc}
     */
    public function setTicksToBuild(int $ticksToBuild): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTicksToBuild', [$ticksToBuild]);

        parent::setTicksToBuild($ticksToBuild);
    }

    /**
     * {@inheritDoc}
     */
    public function getCarrierSpace(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCarrierSpace', []);

        return parent::getCarrierSpace();
    }

    /**
     * {@inheritDoc}
     */
    public function setCarrierSpace(int $carrierSpace): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCarrierSpace', [$carrierSpace]);

        parent::setCarrierSpace($carrierSpace);
    }

    /**
     * {@inheritDoc}
     */
    public function getCarrierSpaceConsumption(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCarrierSpaceConsumption', []);

        return parent::getCarrierSpaceConsumption();
    }

    /**
     * {@inheritDoc}
     */
    public function setCarrierSpaceConsumption(int $carrierSpaceConsumption): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCarrierSpaceConsumption', [$carrierSpaceConsumption]);

        parent::setCarrierSpaceConsumption($carrierSpaceConsumption);
    }

    /**
     * {@inheritDoc}
     */
    public function getExtractorStealAmount(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExtractorStealAmount', []);

        return parent::getExtractorStealAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function setExtractorStealAmount(int $extractorStealAmount): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExtractorStealAmount', [$extractorStealAmount]);

        parent::setExtractorStealAmount($extractorStealAmount);
    }

    /**
     * {@inheritDoc}
     */
    public function getExtractorGuardAmount(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExtractorGuardAmount', []);

        return parent::getExtractorGuardAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function setExtractorGuardAmount(int $extractorGuardAmount): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExtractorGuardAmount', [$extractorGuardAmount]);

        parent::setExtractorGuardAmount($extractorGuardAmount);
    }

    /**
     * {@inheritDoc}
     */
    public function getScanRelaisFactor(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScanRelaisFactor', []);

        return parent::getScanRelaisFactor();
    }

    /**
     * {@inheritDoc}
     */
    public function setScanRelaisFactor(int $scanRelaisFactor): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScanRelaisFactor', [$scanRelaisFactor]);

        parent::setScanRelaisFactor($scanRelaisFactor);
    }

    /**
     * {@inheritDoc}
     */
    public function getScanBlockerFactor(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScanBlockerFactor', []);

        return parent::getScanBlockerFactor();
    }

    /**
     * {@inheritDoc}
     */
    public function setScanBlockerFactor(int $scanBlockerFactor): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScanBlockerFactor', [$scanBlockerFactor]);

        parent::setScanBlockerFactor($scanBlockerFactor);
    }

    /**
     * {@inheritDoc}
     */
    public function getFaction(): \GC\Faction\Model\Faction
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFaction', []);

        return parent::getFaction();
    }

    /**
     * {@inheritDoc}
     */
    public function setFaction(\GC\Faction\Model\Faction $faction): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFaction', [$faction]);

        parent::setFaction($faction);
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
    public function getRequiredTechnology(): ?\GC\Technology\Model\Technology
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRequiredTechnology', []);

        return parent::getRequiredTechnology();
    }

    /**
     * {@inheritDoc}
     */
    public function setRequiredTechnology(?\GC\Technology\Model\Technology $requiredTechnology): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRequiredTechnology', [$requiredTechnology]);

        parent::setRequiredTechnology($requiredTechnology);
    }

    /**
     * {@inheritDoc}
     */
    public function addUnitCombatSetting(\GC\Unit\Model\Unit $targetUnit, int $distribution, string $attackPower): \GC\Unit\Model\UnitCombatSetting
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUnitCombatSetting', [$targetUnit, $distribution, $attackPower]);

        return parent::addUnitCombatSetting($targetUnit, $distribution, $attackPower);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnitCombatSettings(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnitCombatSettings', []);

        return parent::getUnitCombatSettings();
    }

}
