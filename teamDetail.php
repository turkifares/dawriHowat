<?php
    include ('dbcon.php');
 if(isset($_GET["team_id"])){
    $key=$_GET["team_id"];
    $ref_table="teams";
    $fetchData = $database -> getReference($ref_table)->getchild($key)->getValue();

} ?>
<ul>
    <?php foreach($fetchData as $key=>$row){
            $joueur=$database -> getReference("players")->getchild($row)->getValue();

        ?>
        <li><?php echo $joueur["prenom"].' '.$joueur["nom"]; ?></li>
        <?php }; ?>

</ul>
