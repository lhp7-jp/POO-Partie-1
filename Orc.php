<?php
class Orc extends Characters
{
    private int $_damage;
    
     public function __construct(int $_health, int $_rage)
     {
         parent::__construct($_health,$_rage);
     }

    // initialiser la valeur de damage avec un nombre aléatoire compris entre 600 et 800.
    public function Attack()
    {
        $this->_damage = random_int(600, 800);
    }

    /**
     * permet de récupérer la valeur de getDamages
     * 
     * @return int la valeur de damages
     */
    public function getDamage()
    {
        return $this->_damage;
    }

    /**
     * initialise la valeur de setDamage
     * 
     * @param int $value -- est la valeur de damages
     */
    public function setDamage(int $_damage)
    {
        $this->_damage = $_damage;
    }
}
?>
