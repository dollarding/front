<?php include 'mailin-api/Mailin.php';?>

<?php
     
          $objDatos = json_decode(file_get_contents("php://input"));

            $mail = 'coupit@votalix.com';
            $url=$objDatos->mensaje;

            $mailin = new Mailin('coupit@votalix.com', 'q1ZwR5AY28vfg3JL');
            $mailin->
            addTo($mail, 'Coupit')->
            setFrom('coupit@votalix.com', 'Coupit')->
            setReplyTo('coupit@votalix.com','Coupit')->
            setSubject('?בעל עסק')->
            setText('Coupit site')->
            setHtml($url);
            $res = $mailin->send();

            
            ?>