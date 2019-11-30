<?php

    echo ini_get("upload_max_filesize"). "<br>";
    $allowedType=["jpg","jpeg","gif","png","tif","tiff"];
    $fileType=explode("/",$_FILES["filepic"]["type"]);
    $size = $_FILES["filepic"]["size"];
    //image/png fileType=["image","png"]
    if(!in_array($fileType[1],$allowedType)){
        //เมื่อ Upload File ที่ไม่ตรงกับ Type ใน AllowedType
        echo "Non-image file is not allowed.";
    }
    else if($size>1.00){
        echo "File size exceeds maximun treshold.";
    }
    else{
        echo  "Type: ". $_FILES["filepic"]["type"]. "<br>";
        echo  "Name: ". $_FILES["filepic"]["name"]. "<br>";
        echo  "Size: ". $_FILES["filepic"]["size"]. "<br>";
        echo  "Temp name: ". $_FILES["filepic"]["tmp_name"]. "<br>";
        echo  "Error: ". $_FILES["filepic"]["error"]. "<br>";

        move_uploaded_file($_FILES["filepic"]["tmp_name"],"img/product/".$_FILES["filepic"]["name"]);
    }

?>