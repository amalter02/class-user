<?php require("user.php"); ?>

<html>
    <head>
    </head>
    <body>
        <?php echo "<h1>Bienvenu dans l'arrene</h1>";

            $Utilsateur1 = new user();

        ?>
           <form method="POST" action="">
                <input type="text" name="nom" value=''>
                <input type="text" name="mdp" value=''>
                <input type="submit" value="ok">
           </form>

           <?php
                if (isset($_POST['nom'])){
                    $isConnect = $Utilsateur1->verifMpd($_POST['nom'],$_POST['mdp']);
                    if($isConnect){echo "connecté";
                    
                        try{
                            //execution du code sur la BDD exemple
                           $maBase=new PDO('mysql:host=127.0.0.1; dbname=user; charset=utf8','root', 'root');
                           echo "select * from 'users'" ;
                           $ResultRequet = $maBase->query("select * from 'users'"); 
                           echo "<table>";
                           while ($TableauDeDonnee = $ResultRequet->fetch())
                            {
                                echo "<tr>";
                                echo '<td>'.$TableauDeDonnee["nom"].' </td>';
                                echo "<tr>";
                            }
                            $ResultRequet->closeCursor();
                            echo "</table>";

                        }
                        catch (Exception $erreur){
                            echo $erreur->getMessage();
                         }
                    
                    }else{echo "erreur";}
                }
                
           ?>
    </body>
</html>
