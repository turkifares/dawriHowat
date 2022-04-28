<?php include ('dbcon.php');
        $ref_table="players";
        $fetchData = $database -> getReference($ref_table)->getValue(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <title>add match</title>
</head>
<body>
<?php require('templates/nav.php'); ?>
<form action="createMatchFunction.php" method="post">
    <div class="wrapper">

    <div id="team1">
        <h1>team 1</h1>
        <table>
        <tr>
        <!--  <td> <img src=" ?>"  width="100" height="100"  alt="photo indisponible"> </td> -->
            <td>
                <select name="players_id1_team1" id="player_id" required>
                <?php 
                    foreach ($fetchData as $key=>$row){
                ?>
                <option value="<?php echo $key; ?>"><?php echo $row["nom"].' '. $row["prenom"]; ?></option>
                <?php   }; ?>
                </select>
            </td>
            <td></td>
        </tr>
        <tr>
        <!--  <td> <img src=" ?>"  width="100" height="100"  alt="photo indisponible"> </td> -->
            <td>
                <select name="players_id2_team1" id="player_id" required>
                <?php 
                    foreach ($fetchData as $key=>$row){
                ?>
                <option value="<?php echo $key; ?>"><?php echo $row["nom"].' '. $row["prenom"]; ?></option>
                <?php   }; ?>
                </select>
            </td>
            <td></td>
        </tr>
        <tr>
        <!--  <td> <img src=" ?>"  width="100" height="100"  alt="photo indisponible"> </td> -->
            <td>
                <select name="players_id3_team1" id="player_id" required>
                <?php 
                    foreach ($fetchData as $key=>$row){
                ?>
                <option value="<?php echo $key; ?>"><?php echo $row["nom"].' '. $row["prenom"]; ?></option>
                <?php   }; ?>
                </select>
            </td>
            <td></td>
        </tr>
        <tr>
        <!--  <td> <img src=" ?>"  width="100" height="100"  alt="photo indisponible"> </td> -->
            <td>
                <select name="players_id4_team1" id="player_id" required>
                <?php 
                    foreach ($fetchData as $key=>$row){
                ?>
                <option value="<?php echo $key; ?>"><?php echo $row["nom"].' '. $row["prenom"]; ?></option>
                <?php   }; ?>
                </select>
            </td>
            <td></td>
        </tr>
        <tr>
        <!--  <td> <img src=" ?>"  width="100" height="100"  alt="photo indisponible"> </td> -->
            <td>
                <select name="players_id5_team1" id="player_id" required>
                <?php 
                    foreach ($fetchData as $key=>$row){
                ?>
                <option value="<?php echo $key; ?>"><?php echo $row["nom"].' '. $row["prenom"]; ?></option>
                <?php   }; ?>
                </select>
            </td>
            <td></td>
        </tr>
        <tr>
        <!--  <td> <img src=" ?>"  width="100" height="100"  alt="photo indisponible"> </td> -->
            <td>
                <select name="players_id6_team1" id="player_id" required>
                <?php 
                    foreach ($fetchData as $key=>$row){
                ?>
                <option value="<?php echo $key; ?>"><?php echo $row["nom"].' '. $row["prenom"]; ?></option>
                <?php   }; ?>
                </select>
            </td>
            <td></td>
        </tr>
        
        </table>
    </div>
    <div id="team2">
         <h1>team 2</h1>
         <table>
        <tr>
        <!--  <td> <img src=" ?>"  width="100" height="100"  alt="photo indisponible"> </td> -->
            <td>
                <select name="players_id1_team2" id="player_id" required>
                <?php 
                    foreach ($fetchData as $key=>$row){
                ?>
                <option value="<?php echo $key; ?>"><?php echo $row["nom"].' '. $row["prenom"]; ?></option>
                <?php   }; ?>
                </select>
            </td>
            <td></td>
        </tr>
        <tr>
        <!--  <td> <img src=" ?>"  width="100" height="100"  alt="photo indisponible"> </td> -->
            <td>
                <select name="players_id2_team2" id="player_id" required>
                <?php 
                    foreach ($fetchData as $key=>$row){
                ?>
                <option value="<?php echo $key; ?>"><?php echo $row["nom"].' '. $row["prenom"]; ?></option>
                <?php   }; ?>
                </select>
            </td>
            <td></td>
        </tr>
        <tr>
        <!--  <td> <img src=" ?>"  width="100" height="100"  alt="photo indisponible"> </td> -->
            <td>
                <select name="players_id3_team2" id="player_id" required>
                <?php 
                    foreach ($fetchData as $key=>$row){
                ?>
                <option value="<?php echo $key; ?>"><?php echo $row["nom"].' '. $row["prenom"]; ?></option>
                <?php   }; ?>
                </select>
            </td>
            <td></td>
        </tr>
        <tr>
        <!--  <td> <img src=" ?>"  width="100" height="100"  alt="photo indisponible"> </td> -->
            <td>
                <select name="players_id4_team2" id="player_id" required>
                <?php 
                    foreach ($fetchData as $key=>$row){
                ?>
                <option value="<?php echo $key; ?>"><?php echo $row["nom"].' '. $row["prenom"]; ?></option>
                <?php   }; ?>
                </select>
            </td>
            <td></td>
        </tr>
        <tr>
        <!--  <td> <img src=" ?>"  width="100" height="100"  alt="photo indisponible"> </td> -->
            <td>
                <select name="players_id5_team2" id="player_id" required>
                <?php 
                    foreach ($fetchData as $key=>$row){
                ?>
                <option value="<?php echo $key; ?>"><?php echo $row["nom"].' '. $row["prenom"]; ?></option>
                <?php   }; ?>
                </select>
            </td>
            <td></td>
        </tr>
        <tr>
        <!--  <td> <img src=" ?>"  width="100" height="100"  alt="photo indisponible"> </td> -->
            <td>
                <select name="players_id6_team2" id="player_id" required>
                <?php 
                    foreach ($fetchData as $key=>$row){
                ?>
                <option value="<?php echo $key; ?>"><?php echo $row["nom"].' '. $row["prenom"]; ?></option>
                <?php   }; ?>
                </select>
            </td>
            <td></td>
        </tr>
        </table>
    </div>
    </div>
    <div id="underTable">
    <input type="text" name="terrain" id="terrain" placeholder="win el le3ba ?">    
    <input type="date" name="match_date" id="match_date">
    <input type="datetime" name="match_datetime" id="match_datetime" placeholder="el wa9t ?">
    <input type="submit" name="submit" value="valider les equipes">
    </div>
    </form>
</body>
</html>
