<?php 
include ('dbcon.php');
if( isset($_POST["submit"])){
    $nom=$_POST["last_name"];
    $prenom=$_POST["first_name"];
    $img_url=$_POST["img_url"];

    $postData = [
        'nom'=>$nom,
        'prenom'=>$prenom,
        'img_url'=>$img_url,
    ];

    $refTable = 'players';
    $postRef = $database->getReference($refTable)->push($postData);
    header('location: addPlayer.php');
}
 ?>