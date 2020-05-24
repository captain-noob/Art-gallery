<?php 
function upload_image(){
    include 'Admin/conn.php';
    $id=$_GET['id'];
    $file=$_FILES['uploadxxx'];
    $artist=$_POST['artistxxx'];
    $rate=$_POST['ratexxx'];
    $name=$_POST['namexxx'];
    $filename=$_FILES['uploadxxx']['name'];
    $filetype=$_FILES['uploadxxx']['type'];
    $temppath=$_FILES['uploadxxx']['tmp_name'];
    $filesize=$_FILES['uploadxxx']['size'];
    $fileExt=explode('.',$filename);
    $filenewext=strtolower(end($fileExt));
    $allowed=array('jpg','jpeg','png');
    if(in_array($filenewext,$allowed)){
            if($filesize <12000000000){
                $filenewname=uniqid('',true).'.'.$filenewext;
                $filedest='../uploads/'.$filenewname;
                $filedest1='uploads/'.$filenewname;
                move_uploaded_file($temppath,$filedest);
                $sql1="INSERT INTO `uploads` (`id`, `image`, `name`, `artist`, `rate`,`artist_id`) VALUES (NULL, '$filedest1','$name', '$artist', '$rate','$id')";
                mysqli_query($link,$sql1);
                echo('uploaded successfully');
            }else{
                echo"more size";
            }
        }else{
            echo "Unknown file extension_loaded";
        }
    
}

?>