<?php
class user{
    //propriété :
    private $_nom;
    private $_mdp;

 public function verifMpd($nom,$mdp){
    if($nom == $this->_nom){
        if($mdp == $this->_mdp){
            return true;
        }
    }

    return false;
}
}
 
?>