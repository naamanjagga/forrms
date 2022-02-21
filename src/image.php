<!DOCTYPE html>
<html lang="en">
<head>

    <title>upload image</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="image"> <br><br><br>
    <input type="submit" value="submit" name="submit"> <br>

<?php 
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


      if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image ";
            if($check["mime"] == 'image/png') {
                echo '<br>';
                echo 'image is png';

                if($_FILES["image"]["size"] > 500000*4) {
                    echo '<br>';
                    echo "File too lagre";
                } else {
                    echo '<br>';
                    echo "File is of limited size";
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            echo '<br>';
                            echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
                        } else {
                            echo '<br>';
                            echo "Sorry, there was an error uploading your file.";
                        }
                }
            } else {
            echo '<br>';
            echo 'This image is not a png image';
            }
        } else {
             echo '<br>';
             echo "File is not an image.";
        }
            
      }
    ?>
    
</body>
</html>