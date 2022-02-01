<?php
class Characters
{
    private int $_health;
    private int $_rage;

    /**
     * permet de récupérer la valeur de getHealth
     * 
     * @return int la valeur de health
     */

public function getHealth():int
{
    return $this->_health;
}
/**
     * initialise la valeur de setHealth
     * 
     * @param int $value -- est la valeur de health
     */
public function setHealth(int $_health) {
    $this->_health=$_health;
}

/**
     * permet de récupérer la valeur de getRage
     * 
     * @return int la valeur de rage
     */

public function getRage():int
{
    return $this->_rage;
}
/**
     * initialise la valeur de setRage
     * 
     * @param int $value -- est la valeur de rage
     */
public function setRage(int $_rage) {
    $this->_rage=$_rage;
}
public function __construct(int $_health,int $_rage)
    {
        $this->setHealth($_health);
        $this->setRage($_rage);
    }
public function __destruct()
{
    // echo "Salam vient de créer un requin avec ".$this->getHealth()." vies et ".$this->getRage()." rages.";
}
}
$test = new Characters(200, 300);
// var_dump ($test);
// var_dump ($test->getHealth());
// var_dump ($test->getRage());
?>


