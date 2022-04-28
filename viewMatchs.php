<?php
include ('dbcon.php');
$ref_table="match";
$fetchData = $database -> getReference($ref_table)->getValue();
if (isset($_POST["submit"])){
    $golesFirstTeam=$_POST["golesFirstTeam"];
    $golesSecondTeam=$_POST["golesSecondTeam"];

    $updates=[
        'golesFirstTeam'=>$golesFirstTeam,
        'golesSecondTeam'=>$golesSecondTeam,
    ];

    $database->getReference('match')->getchild($_GET["match_id"])->update($updates);
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>matchs history</title>
 </head>
 <body>
     <?php foreach($fetchData as $key=>$row){?>
        
        <span><a href="teamDetail.php?team_id=<?php echo $row["equipe1"]?>">equipe 1</a>:<?php if (isset($row["golesFirstTeam"])) echo $row["golesFirstTeam"] ?></span> <span> <a href="teamDetail.php?team_id=<?php echo $row["equipe1"]?>">equipe 2</a>:<?php if (isset($row["golesSecondTeam"])) echo $row["golesSecondTeam"] ?></span> <span>date:</span> <span>heure:</span> 
        <?php if (!isset($row["golesFirstTeam"])){ ?>
         <form action="viewMatchs.php?match_id=<?php echo $key ?>" method="post">   
        <input type="number" name="golesFirstTeam" id="golesFirstTeam" placeholder="bountouwet equipe1?">
        <input type="number" name="golesSecondTeam" id="golesSecondTeam" placeholder="bountouwet equipe2?">
        <input type="submit" value="confirmi" name="submit">
        </form>
        <?php };?>    
        <br>
     <?php };?>   
 </body>
 </html>