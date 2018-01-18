<?php include 'mailin-api/Mailin.php';?>

<?php
     
          $objDatos = json_decode(file_get_contents("php://input"));

            $mail = $objDatos->mail;
            $emailc = $objDatos->email;



            $mailin = new Mailin('coupit@votalix.com', 'q1ZwR5AY28vfg3JL');
            $mailin->
            addTo($mail, 'Coupit')->
            setFrom('coupit@votalix.com', 'Coupit')->
            setReplyTo('coupit@votalix.com','Coupit')->
            setSubject('Newslater for Coupit > '.$emailc)->
            setText($email)->
            setHtml('<p Newslater Mail of bisness ='.$emailc.' </p> ');
             $res = $mailin->send();
            ?>