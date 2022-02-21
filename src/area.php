<!DOCTYPE html>
<html lang="en">
<head>

    <title>area</title>
</head>
<body style="margin: 100px;">
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        <lable>Length of Rectangle</lable>
        <input style="margin: 10px; padding: 15px 30px; border-radius: 5px" type="text" name= "length">
        <span>mtrs</span><br>
        <lable>Width of Rectangle</lable>
        <input style="margin: 10px 13px; padding: 15px 30px; border-radius: 5px" type="text" name= "width">
        <span>mtrs</span><br>
        <input style="margin: 10px 140px; padding: 15px 10px; border-radius: 5px" type="submit" value="Calculated Area & Perimeter" ><br>

        <?php 
         if(isset($_POST['length']) && isset($_POST['width'])) {
             $x = $_POST['length'];
             $y = $_POST['width'];
             $area = $x * $y;
             $peri = 2*($x + $y);
            
             echo '<br>';
             echo '<br>';
             echo 'Area is '.$area.' sq mtrs';
             echo '<br>';
             echo '<br>';
             echo 'perimeter is '.$peri.' mtrs';
         }
        ?>
    
</body>
</html>