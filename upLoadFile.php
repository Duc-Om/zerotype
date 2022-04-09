<?php

class UpLoadFile{
    public function upload(){
        $fileType = $_FILES["file"]["type"];
        $fileSize = $_FILES["file"]["size"];
        if(!($fileType == "image/jpeg") && !($fileType == "image/png")){
            echo "<script>alert('format file exception')</script>"; 
            return null;
        }
        if(!($fileSize <= 2097152)){
            echo "<script>alert('file size must <= 2MB')</script>";   
            return null;
        }
        $file = move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
        return "upload/".$_FILES["file"]["name"];
    }
}

?>
