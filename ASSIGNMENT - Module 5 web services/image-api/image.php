<?php
header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    $connect_to_db = mysqli_connect('localhost', 'root', '', 'db');

    // $user = $_POST['user'];

    $allowedExts = array("gif", "jpeg", "jpg", "png");
    $temp = explode(".", $_FILES["file"]["name"]);
    $extension = end($temp);

    if ((($_FILES["file"]["type"] == "image/gif")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/jpg")
    || ($_FILES["file"]["type"] == "image/pjpeg")
    || ($_FILES["file"]["type"] == "image/x-png")
    || ($_FILES["file"]["type"] == "image/png"))
    && in_array($extension, $allowedExts)) {

      if ($_FILES["file"]["error"] > 0) {

        echo json_encode(array('status' => 'error', 'msg' => 'File could not be uploaded.'));

      } else {

        //Move the file to the uploads folder
        move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $_FILES["file"]["name"]);

        //Get the File Location
        $filelocation = 'http://localhost/image-api/uploads/'.$_FILES["file"]["name"];

        //Get the File Size
        $size = ($_FILES["file"]["size"]/1024).' kB';

        //Save to your Database
        mysqli_query($connect_to_db, "INSERT INTO images (filelocation, size) VALUES ('$filelocation', '$size')");

        //Return the data in JSON format
        echo json_encode(array('status' => 'success', 'data' => array('filelocation' => $filelocation, 'size' => $size)));
      }
    } else {
      //File type was invalid, so throw up a red flag!
      echo json_encode(array('status' => 'error', 'msg' => 'Invalid File Format'));
    }
?>