


<?php
$file = $_FILES["file"]["name"];

if(!is_dir("files/"))
	mkdir("files/", 0777);

if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "files/".$file))
{
	echo $file;
}

/*

  	$to = "mgonzalezbernal@gmail.com"; // this is your Email address
   // $email = $_POST['email']; // this is the sender's Email address
    $nombreCupon = $_POST['nombreCupon'];
    $descripcion = $_POST['descripcion'];
    $marketing = $_POST['marketing'];
    $precio = $_POST['marketing'];
    $smallLeters=$_POST['small'];
    $nombreNegocio=$_POST['nombreNegocio'];
    $logo=$_POST['nombreNegocio'];
    $imagen=$_POST[''];


    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
*/


           
?>