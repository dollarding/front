<?php
            
            $urlef = $_COOKIE["urlsd"];
            $mail = $_COOKIE["mailds"];

            
            $mailin = new Mailin('coupit@votalix.com', 'q1ZwR5AY28vfg3JL');
            $mailin->
            addTo($mail, 'Coupit')->
            setFrom('coupit@votalix.com', 'Coupit')->
            setReplyTo('coupit@votalix.com','Coupit')->
            setSubject('Coupit-Benefits')->
            setText('Hola')->
            setHtml('<strong>Coupit-Benefits </strong> ,</n> <a href = ""/> Enjoy - click on the link!   Coupit - Benefits you may like!</a>');
            $res = $mailin->send();
            
            ?>