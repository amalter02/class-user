<?php
class user{
    //propriété :
    private $_nom;
    private $_mdp;

 public function verifMpd($nom,$mdp){
    if($nom == $this->_nom){
        if($mdp == $this->_mdp){
            try{
            //execution du code sur la BDD exemple
        $maBase=new PDO('mysql:host=127.0.0.1; dbname=exot; charset=utf8','root', 'root');
        echo "select * from 'user'" ;
        $ResultRequet = $maBase->query("select * from 'user'"); 
        echo "<table>";
        while ($TableauDeDonnee = $ResultRequet->fetch())
            {
                return true;
            }
            $ResultRequet->closeCursor();
            echo "</table>";

    }
    catch (Exception $erreur){
        echo $erreur->getMessage();
     }
           
    }
    }

    return false;
}
}
 
?>