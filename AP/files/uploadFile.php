<?php

$db = new PDO('mysql:dbname=lesson;host=localhost;port=3306;charset=utf8','root','root');
//var_dump($_FILES);

if(isset($_POST['submit'])) {
    //var_dump $_FILES all attributes files
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileType = $_FILES['file']['type'];
    $fileError = $_FILES['file']['error'];
    $fileSize = $_FILES['file']['size'];

    //get file extension
    $fileExtension = explode('.', $fileName);
    $fileExtension = strtolower(end( $fileExtension));

    //get file name without extension
    $fileName = explode('.',$fileName)[0];
    $fileName = preg_replace('/[0-9]/','',$fileName);

    //allowed format to upload on server
    $allowedExtensions = ['jpg','png', 'jpeg'];

    //check if uploaded file consist in extension array
    if (in_array($fileExtension,$allowedExtensions)){
        //check file size
        if($fileSize < 50000000){
            //if $fileError == 0, file uploaded successful on the server
            if($fileError == 0){
                //insert information about file in our DB
                $db->query("INSERT INTO `images` (`imagname`,`extension`) VALUES ('$fileName', '$fileExtension');");
                //get last id from DB
                $lastID = $db->query("SELECT MAX(id) FROM `images`");
                $lastID = $lastID->fetchAll();
                $lastID = $lastID[0][0];

                //set fileName
                $fileNameNew = $lastID . $fileName . '.' . $fileExtension;
                //set filePath
                $fileDestination = './uploads/'. $fileNameNew;
                //move file from tmp to upload catalog
                move_uploaded_file($fileTmpName,$fileDestination);
                echo 'Good work';
            } else {
                echo 'Something wrong';
            }
        } else {
            echo 'Size is too big';
        }
    } else {
        echo 'Wrong extension';
    }
}

//get all images from BD
$data = $db->query("SELECT * FROM `images`");
echo "<div style='display:flex; align-items: flex-end; flex-wrap: wrap'>";
foreach ($data as $img) {
    //get file path
    $image = "uploads/".$img['id'].$img['imagname'].'.'.$img['extension'];
    //variable for delete images
    $delete = "delete".$img['id'];

    //check if isset variable POST like as $delete
    if(isset($_POST[$delete])){
        //delete info about file from DB
        $db->query("DELETE FROM `images` WHERE id = '$img[id]'");
        if(file_exists($image)){//delete file
           unlink($image);
        }
    }

    if(file_exists($image)){
        echo "<div>";
        echo "<img width='150px' height='150px' src=$image>";
        echo "<form method='POST'><button name='delete".$img['id']."' style='display: block; margin: auto'>Delete</button></form></div>";
    }
}
echo "</div>"
?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <button name="submit">Send</button>
</form>
</body>
</html>

