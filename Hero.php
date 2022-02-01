<?php
class Hero extends Characters
{
    private string $_weapon;
    private int $_weaponDamagerage;
    private string $_shield;
    private int $_shieldValue;

    public function __construct(int $_health, int $_rage, string $_weapon, int $_weaponDamagerage, string $_shield, int $_shieldValue)
    {
        parent::__construct($_health, $_rage);
        $this->setWeapon($_weapon);
        $this->setweaponDamagerage($_weaponDamagerage);
        $this->setShield($_shield);
        $this->setshieldValue($_shieldValue);
    }

    // point de vie = vie actuelle - (dégat - bouclier)
    public function getDamage(int $damage)
    {
        $this->setHealth($this->getHealth()-($damage-$this->getshieldValue()));
    }

    // rage = rage actuelle + (nombre d'attaque*30)
    
    public function growRage(int $nbAttack)
    {
        $this->setRage($this->getRage()+($nbAttack*30));
        $this->_nbAttack = $nbAttack;
    }


    // public function __destruct()
    // {
    //     echo "<p>Création d'un nouveau Hero</p>";
    //     echo "<ul>";
    //     echo "<li>Vie : " . $this->getHealth(). " .";
    //     echo "<li>Rage : ". $this->getRage() . " .";
    //     echo "<li>Arme : ". $this->getWeapon(). " .";
    //     echo "<li>Dégats : ". $this->getweaponDamagerage()." .";
    //     echo "<li>Bouclier : ". $this->getShield(). " .";
    //     echo "<li>Valeur du bouclier : ". $this->getshieldValue()." .";
    // }
    /**
     * permet de récupérer la valeur de getWeapon
     * 
     * @return int la valeur de weapon
     */
    public function getWeapon(): string
    {
        return $this->_weapon;
    }
    /**
     * initialise la valeur de setWeapon
     * 
     * @param int $value -- est la valeur de weapon
     */
    public function setWeapon(string $_weapon)
    {
        $this->_weapon = $_weapon;
    }
    /**
     * permet de récupérer la valeur de getweaponDamagerage
     * 
     * @return int la valeur de weaponDamagerage
     */
    public function getweaponDamagerage(): int
    {
        return $this->_weaponDamagerage;
    }
    /**
     * initialise la valeur de setweaponDamagerage
     * 
     * @param int $value -- est la valeur de weaponDamagerage
     */
    public function setweaponDamagerage(int $_weaponDamagerage)
    {
        $this->_weaponDamagerage = $_weaponDamagerage;
    }
    /**
     * permet de récupérer la valeur de getShield
     * 
     * @return int la valeur de shield
     */
    public function getShield(): string
    {
        return $this->_shield;
    }
    /**
     * initialise la valeur de setShield
     * 
     * @param int $value -- est la valeur de shield
     */
    public function setShield(string $_shield)
    {
        $this->_shield = $_shield;
    }
    /**
     * permet de récupérer la valeur de getshieldValue
     * 
     * @return int la valeur de shieldValue
     */
    public function getshieldValue(): int
    {
        return $this->_shieldValue;
    }
    /**
     * initialise la valeur de setshieldValue
     * 
     * @param int $value -- est la valeur de shieldValue
     */
    public function setshieldValue(int $_shieldValue)
    {
        $this->_shieldValue = $_shieldValue;
    }
}
// $testjp1 = new Hero(2000,0,'Sabre',250,'Bouclier bois',600);
// var_dump($testjp1);
// var_dump($testjp1->getHealth());
// var_dump($testjp1->getRage());
// var_dump($testjp1->getWeapon());
// var_dump($testjp1->getweaponDamagerage());
// var_dump($testjp1->getShield());
// var_dump($testjp1->getshieldValue());
?>
