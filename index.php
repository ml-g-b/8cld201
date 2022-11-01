<?php
  
  
  
 ?>
<!DOCTYPE html>
<!--
    
    CREATION : 
 
 SUBJECT : 
 
  -->
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="mlgb.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Accueil</title>
    <style>
    td, th{
    width : 50vw;
    height : 5vh;
    }
    tr:nth-child(2n){
    background-color : #eee;
    }
    tr:nth-child(2n+1){
    background-color : #aaa;
    }
    </style>
  </head>
  <body>
    <h1>Liste des sites</h1>
    <table>
      <tr>
        <th>Nom</th>
        <th>Lien</th>
      </tr>
      <?php
            $dir="sites/";
        $liste=scandir($dir);
        foreach($liste as $directory){
            if($directory != "." && $directory!=".."){
                $link=$dir.$directory."/index.php";
                echo "<tr><td>".$directory."</td><td><a href=\"".$link."\">".$link."</a></td></tr>";
                }
        }
?>
    </table>
  </body>
<html>
