<?php include 'mailin-api/Mailin.php';?>

<?php

          $objDatos = json_decode(file_get_contents("php://input"));

            $mail = $objDatos->mail;
            $url=$objDatos->url;
            $Namebenebit=$objDatos->Namebenebit;
            $mailin = new Mailin('coupit@votalix.com', 'q1ZwR5AY28vfg3JL');
            $mailin->
            addTo($mail, 'NewDeals')->
            setFrom('info@newdeals.co.il', 'NewDeals')->
            setReplyTo('info@newdeals.co.il','NewDeals')->
            setSubject('Newdeals -  '.$Namebenebit)->
            setText('משתמשים יקרים')->
            setHtml('<p align=right>  ההטבה '.$Namebenebit.' זמינה עבורכם  <a href="'.$url.'">בקישור זה</a>
            <br/><br/><a href="https://www.facebook.com/new.deals.73">NewDeals-Facebook</a> או חפשו אותנו בפייסבוק <a href="http://Newdeals.co.il/">Newdeals.co.il</a> להטבות נוספות היכנסו ל
            <br/><br/>,תהנו<br/><strong>NewDeals - רק הטבות טובות</strong><br/><br/><br/><br/><img  src="http://Newdeals.co.il/img/big.jpg" height="200" width="400"><br/><br/> </p>');
            $res = $mailin->send();

            ?>
