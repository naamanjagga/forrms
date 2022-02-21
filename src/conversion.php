<!DOCTYPE html>
<html lang="en">
<head>

    <title>conversion</title>
</head>
<body style="margin: 70px 300px;"> 
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
         <input style="margin: 20px 0px; padding: 20px 80px; border-radius: 10px;" type="number" name="number" > <br>
         <input type="radio" name="conversion" value="H_T_M" > hours to min <br>
         <input type="radio" name="conversion" value="H_T_S" > hours to seconds <br>
         <?php 
         if(isset($_POST['number'])){
            $x = $_POST['number'];
            if($_POST['conversion'] == 'H_T_M'){
                $result = $x*60;
                echo '<br>';
                echo $x.' hours = '.$result.' mins';
            } else {
                echo '<br>';
                $result = $x*3600;
                echo $x.' hours = '.$result.' seconds';
            }
         }  
         echo '<br>';
         echo '<br>';
         ?>
         <input style="padding: 20px 150px" type="submit" value="Convert">
         

    </form>
    
</body>
</html>