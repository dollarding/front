
<?php
if (isset($_POST["submit"])) {
$name = $_POST['name'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$message = $_POST['message'];

$from = 'Coupit Adnetwork';
$to = 'coupit@votalix.com';
$subject = 'Adnetwork';

$body = "From: $name\n Tel: $telefono\n E-Mail: $email\n Comment: $comment\n Message:\n $message";

if (!$_POST['name']) {
    $errName = 'Please enter your name';
}

if (!$_POST['telefono']) {
    $errTel = 'Please enter your tel';
}

if (!$_POST['email'] || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
    $errEmail = 'Please enter a valid email address';
}

if (!$_POST['message']) {
    $errMessage = 'Please enter your message';
}


if (!$errName && !$errTel && !$errEmail && !$errMessage) {
  if (mail ($to, $subject, $body, $from)) {
    $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
  } else {
    $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
  }
}


  }



?>

<script type="text/javascript">

setTimeout(function(){ pepa() }, 1000);
setTimeout(function(){ pepa() }, 2000);

var contador =1;
pepa = function(){
contador=1;

switch(contador){

case 1:
if(screen.width >= 700){
efecto(document.getElementById('a1'));
document.getElementById('a1').style.display = 'block';
document.getElementById('a2').style.display = 'none';
document.getElementById('a3').style.display = 'none';
document.getElementById('a4').style.display = 'none';
document.getElementById('a5').style.display = 'none';
document.getElementById('a6').style.display = 'none';
}else if(screen.width >= 510){
  efecto(document.getElementById('a2'));
document.getElementById('a1').style.display = 'none';
document.getElementById('a2').style.display = 'block';
document.getElementById('a3').style.display = 'none';
document.getElementById('a4').style.display = 'none';
document.getElementById('a5').style.display = 'none';
document.getElementById('a6').style.display = 'none';
}
else if(screen.width >= 340){
document.getElementById('a1').style.display = 'none';
document.getElementById('a2').style.display = 'none';
document.getElementById('a3').style.display = 'block';
document.getElementById('a4').style.display = 'none';
document.getElementById('a5').style.display = 'none';
document.getElementById('a6').style.display = 'none';
}

break;
case 2:

if(screen.width >= 700){
  efecto(document.getElementById('a2'));
document.getElementById('a1').style.display = 'none';
document.getElementById('a2').style.display = 'block';
document.getElementById('a3').style.display = 'none';
document.getElementById('a4').style.display = 'none';
document.getElementById('a5').style.display = 'none';
document.getElementById('a6').style.display = 'none';
}else if(screen.width >= 510){
  efecto(document.getElementById('a2'));
document.getElementById('a1').style.display = 'none';
document.getElementById('a2').style.display = 'block';
document.getElementById('a3').style.display = 'none';
document.getElementById('a4').style.display = 'none';
document.getElementById('a5').style.display = 'none';
document.getElementById('a6').style.display = 'none';
}
else if(screen.width >= 340){
document.getElementById('a1').style.display = 'none';
document.getElementById('a2').style.display = 'none';
document.getElementById('a3').style.display = 'block';
document.getElementById('a4').style.display = 'none';
document.getElementById('a5').style.display = 'none';
document.getElementById('a6').style.display = 'none';
}


break;
case 3:
if(screen.width >= 510){
efecto(document.getElementById('a3'));
}
document.getElementById('a1').style.display = 'none';
document.getElementById('a2').style.display = 'none';
document.getElementById('a3').style.display = 'block';
document.getElementById('a4').style.display = 'none';
document.getElementById('a5').style.display = 'none';
document.getElementById('a6').style.display = 'none';

break;

case 4:
contador =1;

break;

}



}

function cambioPc(){

console.log('Muestro PC');
pcF2();


}

function cambioTablet(){

console.log('Muestro Tablet');
tabletF2();

}
function cambioCel(){

console.log('Muestro Celurar');
celF2();

}


function tabletF(){
 efecto(document.getElementById('a2'));

document.getElementById('a1').style.display = 'none';
document.getElementById('a2').style.display = 'block';
document.getElementById('a3').style.display = 'none';
document.getElementById('a4').style.display = 'none';
document.getElementById('a5').style.display = 'none';
document.getElementById('a6').style.display = 'none';



}

function celF(){
 efecto(document.getElementById('a3'));
document.getElementById('a1').style.display = 'none';
document.getElementById('a2').style.display = 'none';
document.getElementById('a3').style.display = 'block';
document.getElementById('a4').style.display = 'none';
document.getElementById('a5').style.display = 'none';
document.getElementById('a6').style.display = 'none';


}
function pcF(){
 efecto(document.getElementById('a1'));
document.getElementById('a1').style.display = 'block';
document.getElementById('a2').style.display = 'none';
document.getElementById('a3').style.display = 'none';
document.getElementById('a4').style.display = 'none';
document.getElementById('a5').style.display = 'none';
document.getElementById('a6').style.display = 'none';


}


function tabletF2(){

efecto(document.getElementById('a5'));

document.getElementById('a1').style.display = 'none';
document.getElementById('a2').style.display = 'none';
document.getElementById('a3').style.display = 'none';
document.getElementById('a4').style.display = 'none';
document.getElementById('a5').style.display = 'block';
document.getElementById('a6').style.display = 'none';



}

function celF2(){

efecto(document.getElementById('a6'));
document.getElementById('a1').style.display = 'none';
document.getElementById('a2').style.display = 'none';
document.getElementById('a3').style.display = 'none';
document.getElementById('a4').style.display = 'none';
document.getElementById('a5').style.display = 'none';
document.getElementById('a6').style.display = 'block';


}
function pcF2(){
efecto(document.getElementById('a4'));
document.getElementById('a1').style.display = 'none';
document.getElementById('a2').style.display = 'none';
document.getElementById('a3').style.display = 'none';
document.getElementById('a4').style.display = 'block';
document.getElementById('a5').style.display = 'none';
document.getElementById('a6').style.display = 'none';

}






 function setOp(obj, value) {
    obj.style.opacity = value/100;
    obj.style.MozOpacity = value/100;
    obj.style.KhtmlOpacity = value/100;
    obj.style.filter = 'alpha(opacity=' + value+ ')';
    obj.style.zoom=1;//necesario para Explorer
}
function efecto(o){
    for (var c=0 ; c < 100; c++)
        (function(c){
             setTimeout(function(){setOp(o,c);} , 10*c);
        })(c);
}








</script>


<!DOCTYPE html>
<html lang="he" ng-app="Adnetworks">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
		<title>Adnetworks</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="js/modernizr.custom.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

		<script src="script.js"></script>
	</head>
	<body>
    <div class="modal-content" style="margin-top: 80px;height: 580px;" >
      <div class="modal-header">
         <button type="button" class="close" style="color: white;font-size: 33px;" data-dismiss="modal">&times;</button>
        <h3 class="modal-title" dir="rtl">בעל עסק? תשאירו פרטים ואנו נחזור אליכם בהקדם</h3>
      </div>
      <form id="contactForm" class="modal-body" method="post">
        <div class="form-group">
         <input id="name" type="text" maxlength="25" class="form-control2 control-label inpito" name='name' placeholder="שם">
         <input id="telefono" type="text" maxlength="25" class="form-control2 control-label inpito" name='telefono' placeholder="טלפון">
         <input id="email" type="text" maxlength="25" class="form-control2 control-label inpito" name="email" placeholder="דוא''ל">
         <input id="comment" type="text" maxlength="25" class="form-control2 inpito" name="comment" placeholder="הערות">
         <textarea id="message" rows="4" cols="50" class="form-control2 control-label" style="width:90%;margin-bottom: 20px;border: 1px solid grey; border-radius: 5px;" name="message" placeholder="הערות"></textarea>
         <button type="submit" class="btn btn-success" id="submit" name="submit" style="width:90%;"><h4>שלחו לנו את זה!</h4></button>
        </div>
      </form>

      <div class="modal-footer">

      </div>

    </div>









	</body>
</html>



<script>
$(document).ready(function(){
    $('#contactForm').formValidation({
        framework:'bootstrap',
        excluded:':disabled',
        icon: {
            valid:'glyphicon glyphicon-ok',
            invalid:'glyphicon glyphicon-remove',
            validating:'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message:'Please enter your name'
                    }
                }
            },
            telefono: {
                validators: {
                    notEmpty: {
                        message:'Please enter your tel'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message:'Please enter a valid email address'
                    }
                }
            },
            message: {
                validators: {
                    notEmpty: {
                        message:'Please enter your message'
                    }
                }
            }
        }
    });
});


$('#contactForm').on('hidden.bs.modal', function() {
    $('#contactForm').formValidation('resetForm', true);
});

</script>
