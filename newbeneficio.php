<?php include 'mailin-api/Mailin.php';?>

<?php
     
          $objDatos = json_decode(file_get_contents("php://input"));

            //$mail = $objDatos->mail;
           // $mail ='kevin@votalix.com';
           $mail="coupit@votalix.com";
            $ImageBeneficio=$objDatos->ImageBenefcio;
            $logo =$objDatos->logo;
            $nameBenefico=$objDatos->nameBeneficio;
            $prise=$objDatos->prise;
            $prise2=$objDatos->prise2;
            $nameBisnes=$objDatos->nameBisnes;
            $loc=$objDatos->loc;
            $tel=$objDatos->tel;
            


            $mailin = new Mailin('coupit@votalix.com', 'q1ZwR5AY28vfg3JL');
            $mailin->
            addTo($mail, 'Coupit')->
            setFrom('coupit@votalix.com', 'Coupit')->
            setReplyTo('coupit@votalix.com','Coupit')->
            setSubject('New Coupon')->
            setText('Coupit site')->
            setHtml('<p align=right><strong> New Benefit </strong> <br/>Name of Benefit = '.$nameBenefico. '<br/>Image of Benefit ='.$ImageBeneficio. '<br/>Logo ='.$logo.'<br/>Price ='.$prise.'<br/>Price 2='.$prise2.'<br/>Name Business = '.$nameBisnes.'<br/>Tel of Business='.$tel.'<br/>Localization of Business ='.$loc.' </p> ');
                  
                  $res = $mailin->send();
            ?>