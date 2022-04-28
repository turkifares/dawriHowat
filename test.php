<?php include ('dbcon.php'); 
$ref_table = 'players';
$fetchData = $database -> getReference($ref_table)->getValue();
foreach($fetchData as $key=>$row){
    echo $key;
}
?>

