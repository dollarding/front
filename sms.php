
<?php

/*
    $mailin = new MailinSms('q1ZwR5AY28vfg3JL');

    $mailin->addTo('0059892454856')
        ->setFrom('eyal steinitz')
        ->setText('Text message to send')
        ->setTag('Your tag name')
        ->setType('')
        ->setCallback('http://callbackurl.com/');

    $res = $mailin->send();
*/
    /**
        Successful SMS sent message will be returned as:
            {"status":"OK","number_sent":1,"to":"00XXXXXXXX","remaining_credit":9525,"reference":{"1":"cz2tjvs79vm079hpa"}}
        Error will be returned as:
            {"status":"KO","description":"Invalid telephone number."}
    **/
$objDatos = json_decode(file_get_contents("php://input"));


            $pCelNumber=$objDatos->cel;
            $urlef=$objDatos->url;

                $url = 'https://rest.nexmo.com/sms/json?'. http_build_query([
                'type' => 'unicode',
                'api_key' => 'e3482872',
                'api_secret' => '8862eefe',
                'to' => '00972'.$pCelNumber,
                //'to' => '00598'.$pCelNumber,
                'from' => 'NewDeals',
                'text' => 'ההטבה שווה מחכה לכם בלינק '.$urlef.' NewDeals - רק הטבות טובות'

                //'Enjoy - click on the link! Coupit - '.$urlef.' Benefits you may like!'
                 ]);

                $ch = curl_init($url);
                curl_setopt($ch,CURLOPT_RETURNTRANSFER , true);
                $response = curl_exec($ch);


?>
