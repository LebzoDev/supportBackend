<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class AdminSystem extends \App\Entity\AdminSystem implements \Doctrine\ORM\Proxy\Proxy
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
     * @see \Doctrine\Persistence\Proxy::__isInitialized
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\AdminSystem' . "\0" . 'id', '' . "\0" . 'App\\Entity\\AdminSystem' . "\0" . 'username', '' . "\0" . 'App\\Entity\\AdminSystem' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\AdminSystem' . "\0" . 'password', '' . "\0" . 'App\\Entity\\AdminSystem' . "\0" . 'email', '' . "\0" . 'App\\Entity\\AdminSystem' . "\0" . 'avatar', '' . "\0" . 'App\\Entity\\AdminSystem' . "\0" . 'telephone', '' . "\0" . 'App\\Entity\\AdminSystem' . "\0" . 'profil', '' . "\0" . 'App\\Entity\\AdminSystem' . "\0" . 'prenom', '' . "\0" . 'App\\Entity\\AdminSystem' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\AdminSystem' . "\0" . 'archive', '' . "\0" . 'App\\Entity\\AdminSystem' . "\0" . 'agencePartenaire', '' . "\0" . 'App\\Entity\\AdminSystem' . "\0" . 'depots', '' . "\0" . 'App\\Entity\\AdminSystem' . "\0" . 'transactions'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\AdminSystem' . "\0" . 'id', '' . "\0" . 'App\\Entity\\AdminSystem' . "\0" . 'username', '' . "\0" . 'App\\Entity\\AdminSystem' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\AdminSystem' . "\0" . 'password', '' . "\0" . 'App\\Entity\\AdminSystem' . "\0" . 'email', '' . "\0" . 'App\\Entity\\AdminSystem' . "\0" . 'avatar', '' . "\0" . 'App\\Entity\\AdminSystem' . "\0" . 'telephone', '' . "\0" . 'App\\Entity\\AdminSystem' . "\0" . 'profil', '' . "\0" . 'App\\Entity\\AdminSystem' . "\0" . 'prenom', '' . "\0" . 'App\\Entity\\AdminSystem' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\AdminSystem' . "\0" . 'archive', '' . "\0" . 'App\\Entity\\AdminSystem' . "\0" . 'agencePartenaire', '' . "\0" . 'App\\Entity\\AdminSystem' . "\0" . 'depots', '' . "\0" . 'App\\Entity\\AdminSystem' . "\0" . 'transactions'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (AdminSystem $proxy) {
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
    public function getUsername(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername(string $username): \App\Entity\AdminSystem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles): \App\Entity\AdminSystem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): \App\Entity\AdminSystem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(?string $email): \App\Entity\AdminSystem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvatar()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvatar', []);

        return parent::getAvatar();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvatar($avatar): \App\Entity\AdminSystem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvatar', [$avatar]);

        return parent::setAvatar($avatar);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelephone(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelephone', []);

        return parent::getTelephone();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelephone(?string $telephone): \App\Entity\AdminSystem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelephone', [$telephone]);

        return parent::setTelephone($telephone);
    }

    /**
     * {@inheritDoc}
     */
    public function getProfil(): ?\App\Entity\Profil
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfil', []);

        return parent::getProfil();
    }

    /**
     * {@inheritDoc}
     */
    public function setProfil(?\App\Entity\Profil $profil): \App\Entity\AdminSystem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProfil', [$profil]);

        return parent::setProfil($profil);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom(string $prenom): \App\Entity\AdminSystem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom(string $nom): \App\Entity\AdminSystem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getArchive(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArchive', []);

        return parent::getArchive();
    }

    /**
     * {@inheritDoc}
     */
    public function setArchive(?bool $archive): \App\Entity\AdminSystem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArchive', [$archive]);

        return parent::setArchive($archive);
    }

    /**
     * {@inheritDoc}
     */
    public function getAgencePartenaire(): ?\App\Entity\AgencePartenaire
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAgencePartenaire', []);

        return parent::getAgencePartenaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setAgencePartenaire(?\App\Entity\AgencePartenaire $agencePartenaire): \App\Entity\AdminSystem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAgencePartenaire', [$agencePartenaire]);

        return parent::setAgencePartenaire($agencePartenaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepots(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepots', []);

        return parent::getDepots();
    }

    /**
     * {@inheritDoc}
     */
    public function addDepot(\App\Entity\Depot $depot): \App\Entity\AdminSystem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDepot', [$depot]);

        return parent::addDepot($depot);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDepot(\App\Entity\Depot $depot): \App\Entity\AdminSystem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDepot', [$depot]);

        return parent::removeDepot($depot);
    }

    /**
     * {@inheritDoc}
     */
    public function getTransactions(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTransactions', []);

        return parent::getTransactions();
    }

    /**
     * {@inheritDoc}
     */
    public function addTransaction(\App\Entity\Transaction $transaction): \App\Entity\AdminSystem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTransaction', [$transaction]);

        return parent::addTransaction($transaction);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTransaction(\App\Entity\Transaction $transaction): \App\Entity\AdminSystem
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTransaction', [$transaction]);

        return parent::removeTransaction($transaction);
    }

}
