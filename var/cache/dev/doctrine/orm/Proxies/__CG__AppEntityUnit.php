<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Unit extends \App\Entity\Unit implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Unit' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Unit' . "\0" . 'UnitName', '' . "\0" . 'App\\Entity\\Unit' . "\0" . 'nurses', '' . "\0" . 'App\\Entity\\Unit' . "\0" . 'doctors', '' . "\0" . 'App\\Entity\\Unit' . "\0" . 'technicians', '' . "\0" . 'App\\Entity\\Unit' . "\0" . 'consultants', '' . "\0" . 'App\\Entity\\Unit' . "\0" . 'Department', '' . "\0" . 'App\\Entity\\Unit' . "\0" . 'wards', '' . "\0" . 'App\\Entity\\Unit' . "\0" . 'Hospital'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Unit' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Unit' . "\0" . 'UnitName', '' . "\0" . 'App\\Entity\\Unit' . "\0" . 'nurses', '' . "\0" . 'App\\Entity\\Unit' . "\0" . 'doctors', '' . "\0" . 'App\\Entity\\Unit' . "\0" . 'technicians', '' . "\0" . 'App\\Entity\\Unit' . "\0" . 'consultants', '' . "\0" . 'App\\Entity\\Unit' . "\0" . 'Department', '' . "\0" . 'App\\Entity\\Unit' . "\0" . 'wards', '' . "\0" . 'App\\Entity\\Unit' . "\0" . 'Hospital'];
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

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getUnitName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnitName', []);

        return parent::getUnitName();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnitName(string $UnitName): \App\Entity\Unit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnitName', [$UnitName]);

        return parent::setUnitName($UnitName);
    }

    /**
     * {@inheritDoc}
     */
    public function getNurses(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNurses', []);

        return parent::getNurses();
    }

    /**
     * {@inheritDoc}
     */
    public function addNurse(\App\Entity\Nurse $nurse): \App\Entity\Unit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addNurse', [$nurse]);

        return parent::addNurse($nurse);
    }

    /**
     * {@inheritDoc}
     */
    public function removeNurse(\App\Entity\Nurse $nurse): \App\Entity\Unit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeNurse', [$nurse]);

        return parent::removeNurse($nurse);
    }

    /**
     * {@inheritDoc}
     */
    public function getDoctors(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDoctors', []);

        return parent::getDoctors();
    }

    /**
     * {@inheritDoc}
     */
    public function addDoctor(\App\Entity\Doctor $doctor): \App\Entity\Unit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDoctor', [$doctor]);

        return parent::addDoctor($doctor);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDoctor(\App\Entity\Doctor $doctor): \App\Entity\Unit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDoctor', [$doctor]);

        return parent::removeDoctor($doctor);
    }

    /**
     * {@inheritDoc}
     */
    public function getTechnicians(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTechnicians', []);

        return parent::getTechnicians();
    }

    /**
     * {@inheritDoc}
     */
    public function addTechnician(\App\Entity\Technician $technician): \App\Entity\Unit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTechnician', [$technician]);

        return parent::addTechnician($technician);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTechnician(\App\Entity\Technician $technician): \App\Entity\Unit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTechnician', [$technician]);

        return parent::removeTechnician($technician);
    }

    /**
     * {@inheritDoc}
     */
    public function getConsultants(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConsultants', []);

        return parent::getConsultants();
    }

    /**
     * {@inheritDoc}
     */
    public function addConsultant(\App\Entity\Consultant $consultant): \App\Entity\Unit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addConsultant', [$consultant]);

        return parent::addConsultant($consultant);
    }

    /**
     * {@inheritDoc}
     */
    public function removeConsultant(\App\Entity\Consultant $consultant): \App\Entity\Unit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeConsultant', [$consultant]);

        return parent::removeConsultant($consultant);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getDepartment(): ?\App\Entity\Department
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepartment', []);

        return parent::getDepartment();
    }

    /**
     * {@inheritDoc}
     */
    public function setDepartment(?\App\Entity\Department $Department): \App\Entity\Unit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepartment', [$Department]);

        return parent::setDepartment($Department);
    }

    /**
     * {@inheritDoc}
     */
    public function getWards(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWards', []);

        return parent::getWards();
    }

    /**
     * {@inheritDoc}
     */
    public function addWard(\App\Entity\Ward $ward): \App\Entity\Unit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addWard', [$ward]);

        return parent::addWard($ward);
    }

    /**
     * {@inheritDoc}
     */
    public function removeWard(\App\Entity\Ward $ward): \App\Entity\Unit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeWard', [$ward]);

        return parent::removeWard($ward);
    }

    /**
     * {@inheritDoc}
     */
    public function getHospital(): ?\App\Entity\Hospital
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHospital', []);

        return parent::getHospital();
    }

    /**
     * {@inheritDoc}
     */
    public function setHospital(?\App\Entity\Hospital $hospital): \App\Entity\Unit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHospital', [$hospital]);

        return parent::setHospital($hospital);
    }

}
