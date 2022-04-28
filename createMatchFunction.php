<?php 
include ('dbcon.php');
if (isset($_POST["submit"])){
    $joueur11 = $_POST["players_id1_team1"];
    $joueur21 = $_POST["players_id2_team1"];
    $joueur31 = $_POST["players_id3_team1"];
    $joueur41 = $_POST["players_id4_team1"];
    $joueur51 = $_POST["players_id5_team1"];
    $joueur61 = $_POST["players_id6_team1"];
    $joueur12 = $_POST["players_id1_team2"];
    $joueur22 = $_POST["players_id2_team2"];
    $joueur32 = $_POST["players_id3_team2"];
    $joueur42 = $_POST["players_id4_team2"];
    $joueur52 = $_POST["players_id5_team2"];
    $joueur62 = $_POST["players_id6_team2"];
    $date=$_POST["match_date"];
    $time=$_POST["match_datetime"];
    $terrain=$_POST["terrain"];
};
    $postData1 =[
        'joueur1'=> $joueur11,
        'joueur2'=>$joueur21,
        'joueur3'=>$joueur31,
        'joueur4'=>$joueur41, 
        'joueur5'=>$joueur51,
        'joueur6'=>$joueur61,
    ];
    $postData2 =[
        'joueur1'=>$joueur12,
        'joueur2'=>$joueur22,
        'joueur3'=>$joueur32,
        'joueur4'=>$joueur42, 
        'joueur5'=>$joueur52,
        'joueur6'=>$joueur62,
    ];

    $ref_table="teams";
    $postRef = $database->getReference($ref_table)->push($postData1);
    $first_team_id= $postRef->getkey();
    $postRef = $database->getReference($ref_table)->push($postData2);
    $second_team_id=$postRef->getkey();

    $ref_table="match";
    $postMatchData = [
        'equipe1'=>$first_team_id,
        'equipe2'=>$second_team_id,
    ];
    $postRef=$postRef = $database->getReference($ref_table)->push($postMatchData);
?>