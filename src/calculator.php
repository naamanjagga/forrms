<!DOCTYPE html>
<html lang="en">
<head>

    <title>calculator</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" >
        <lable>Number 1</lable>
        <input type="text" name= "num1"><br>
        <lable>Number 2</lable>
        <input type="text" name= "num2"><br>

        <?php 
    if(isset($_POST["calc"])){
        $x = $_POST["num1"];
        $y = $_POST["num2"];
        if($_POST["calc"] == '+'){
            $result = $x + $y;
        } elseif($_POST["calc"] == "-"){
            $result = $x - $y;
        } elseif($_POST["calc"] == '*'){<?php 
    if(isset($_POST["calc"])){
        echo "naman";
        $x = $_POST["num1"];
        $y = $_POST["num2"];
        //console($_POST["calc"]);
        if($_POST["calc"] == '+'){
            $result = $x + $y;
        } elseif($_POST["calc"] == "-"){
            $result = $x - $y;
        } elseif($_POST["calc"] == '*'){
            $result = $x * $y;
        } else {
            $result = $x / $y;
        }
    echo 'result <input style="margin-left: 28px;" type="text" value="$result" ><br>';
 }
?> 
            $result = $x * $y;
        } else {
            $result = $x / $y;
        }
    echo 'result <input style="margin-left: 28px;" type="text" value="'.$result.'" ><br>';
 }
?> 

        <input style="margin-left: 70px;" type="submit" name= "calc" value= "+">
        <input type="submit" name= "calc" value= "-">
        <input type="submit" name= "calc" value= "*">
        <input type="submit" name= "calc" value= "/">



       

    </form>
    
</body>
</html>