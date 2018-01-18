
<?php
/**
 *  Example API call
 *  GET profile information
 */


$id = $_GET[id];
$ch = curl_init();


if($id=='home'){

?>


    <!DOCTYPE html>
    <html>




        <head>

            <meta property="fb:app_id" content="190322544333196"/>
            <meta property="og:type" content="article" />

            <meta property="og:title" content="NewDeals - רק הטבות טובות"/>
             <meta property="og:url" content="http://newdeals.co.il/sharedBenefit.php?id=home" />
            <meta property="og:description" content="בלהבלהבלהלהלהלהלהלברק המלך" />

            <meta property="og:image" content="http://newdeals.co.il/img/Home.png"/>
             <meta http-equiv="refresh" content="http://newdeals.co.il/#/"/>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66387150-1', 'auto');
  ga('send', 'pageview');

</script>


        </head>
         <script>
            setTimeout(function(){location.href="http://newDeals.co.il/#/"} , 2000);

        </script>
        <body>
        </body>
    </html>
    <?php


}else if($id=='sales'){

?>


    <!DOCTYPE html>
    <html>
        <head>

            <meta property="fb:app_id" content="190322544333196"/>
            <meta property="og:type" content="article" />

            <meta property="og:title" content="בעל עסק הצטרף בחינם עכשיו!"/>
            <meta property="og:description" content="שירותי הדיגיטל של קופיט מאפשרים לכם לפגוש אלפי לקוחות ביעילות ובחדשנות - נסו עכשיו!"/>
            <meta property="og:url" content="http://newdeals.co.il/sharedBenefit.php?id=sales" />
            <meta property="og:image" content="http://newdeals.co.il/img/OurServices.png"/>
             <meta http-equiv="refresh" content="http://newdeals.co.il/#/sales"/>

             <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66387150-1', 'auto');
  ga('send', 'pageview');

</script>


        </head>
         <script>
            setTimeout(function(){location.href="http://newdeals.co.il/#/sales"} , 2000);

        </script>
        <body>
        </body>
    </html>
    <?php




}
else if($id=='howitwoks'){

?>


    <!DOCTYPE html>
    <html>

        <head>

            <meta property="fb:app_id" content="190322544333196"/>
            <meta property="og:type" content="article" />

            <meta property="og:title" content="מכירות באינטרנט רק עם קופיט!" />
            <meta property="og:description" content="בעולם הדיגיטאלי הלקוחות שלכם נמצאים בטלפון הנייד. קופיט תעזור לכם להביא אותם אליכם.המערכת של קופיט תאפשר לכם ליצור הטבות מהטלפון שלכם ובתוך מספר דקות קופיט תפיץ אותן לכל הלקוחות הפוטנציאלים שלכם." />
            <meta property="og:url" content="http://newdeals.co.il/sharedBenefit.php?id=howitwoks" />
            <meta property="og:image" content="http://newdeals.co.il/img/Howitworks.png"/>
             <meta http-equiv="refresh" content="http://newdeals.co.il/#/howitworks/"/>
             <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66387150-1', 'auto');
  ga('send', 'pageview');

</script>
        </head>
        <script>
            setTimeout(function(){location.href="http://newdeals.co.il/#/howitworks/"} , 2000);

        </script>
        <body>

        </body>
    </html>
    <?php




}

else if($id=='cost'){

?>

    <!DOCTYPE html>
    <html>

        <head>

            <meta property="fb:app_id" content="190322544333196"/>
            <meta property="og:type" content="article" />

            <meta property="og:title" content="מצטרפים לקופיט ורק אם מצליחים משלמים!" />
           <meta property="og:description" content="בקופיט תוכלו ליצור מכירות רבות ולפגוש אלפי לקוחות בעלות נמוכה ביותר. רק אם מצליחים משלמים! בואו ללמוד עוד" />
            <meta property="og:url" content="http://newdeals.co.il/sharedBenefit.php?id=cost" />
            <meta property="og:image" content="http://newdeals.co.il/img/Cost.png"/>
             <meta http-equiv="refresh" content="http://newdeals.co.il/#/cost/"/>
             <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66387150-1', 'auto');
  ga('send', 'pageview');

</script>
        </head>
        <script>
            setTimeout(function(){location.href="http://newdeals.co.il/#/cost/"} , 2000);

        </script>
        <body>

        </body>
    </html>
    <?php




}

else if($id=='carousela'){

?>

    <!DOCTYPE html>
    <html>

        <head>

            <meta property="fb:app_id" content="190322544333196"/>
            <meta property="og:type" content="article" />

            <meta property="og:title" content="קרוסלה שמסתובבת בפייסבוק ומספרת לכולם על העסק שלכם!" />
            <meta property="og:description" content="קופיט מאפשרת לכם לפגוש אלפי לקוחות בסביבת בית העסק שלכם בקלות ובחדשנות. לחצו כאן ללמוד עוד!" />
            <meta property="og:url" content="http://newdeals.co.il/sharedBenefit.php?id=carousela" />
            <meta property="og:image" content="http://newdeals.co.il/img/Carrousela.png"/>
             <meta http-equiv="refresh" content="http://newdeals.co.il/#/carousela/"/>
             <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66387150-1', 'auto');
  ga('send', 'pageview');

</script>
        </head>
        <script>
            setTimeout(function(){location.href="http://newdeals.co.il/#/carousela/"} , 2000);

        </script>
        <body>

        </body>
    </html>
    <?php




}



else if($id=='facecoup'){

?>

    <!DOCTYPE html>
    <html>

        <head>

            <meta property="fb:app_id" content="190322544333196"/>
            <meta property="og:type" content="article" />

           <meta property="og:title" content="עם פייסקופ תוכלו להפוך את עמוד הפייסבוק של העסק שלכם למכונת מכירות!" />
           <meta property="og:description" content="בואו להפוך את עמוד הפייסבוק השקט שלכם למכונת מלחמה אמיתית. “הפייסקופ” של קופיט יהפוך את דף הפיסבוק שלכם לזירת מכירות ויניע קונים לבית העסק בקצב חדש. לפרטים נוספים תנו מבט במגוון החבילות המוצעות מטה ותנו קצת קופיט לעסק שלכם" />
            <meta property="og:url" content="http://newdeals.co.il/sharedBenefit.php?id=facecoup" />
            <meta property="og:image" content="http://newdeals.co.il/img/Facecoup.png"/>
             <meta http-equiv="refresh" content="http://newdeals.co.il/#/facecoup/"/>
             <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66387150-1', 'auto');
  ga('send', 'pageview');

</script>
        </head>
        <script>
            setTimeout(function(){location.href="http://newdeals.co.il/#/facecoup/"} , 2000);

        </script>
        <body>

        </body>
    </html>
    <?php




}



else if($id=='budget'){

?>

    <!DOCTYPE html>
    <html>

        <head>

            <meta property="fb:app_id" content="190322544333196"/>
            <meta property="og:type" content="article" />

           <meta property="og:title" content="יש לכם מוצרים טובים - בואו אלינו שנספר לכולם!" />
           <meta property="og:description" content="קופיט מציעה לכם לטעון את ההטבות בתקציב דיגיטאלי איתו יקודמו ההטבות שלכם בערוצי תוכן רבים כדוגמת פייסבוק גוגל ורשת השותפים של קופיט! פתאום את ההטבה והמוצרים שלכם יראו 10,000 אנשים שרוצים את הטבה בחודש. לחצו כאן ללמוד עוד!" />
            <meta property="og:url" content="http://newdeals.co.il/sharedBenefit.php?id=budget" />
            <meta property="og:image" content="http://newdeals.co.il/img/Budget.png"/>
             <meta http-equiv="refresh" content="http://newdeals.co.il/#/budget/"/>
             <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66387150-1', 'auto');
  ga('send', 'pageview');

</script>
        </head>
        <script>
            setTimeout(function(){location.href="http://newdeals.co.il/#/budget/"} , 2000);

        </script>
        <body>

        </body>
    </html>
    <?php




}



else if($id=='print-to-digital'){

?>

    <!DOCTYPE html>
    <html>

        <head>

            <meta property="fb:app_id" content="190322544333196"/>
            <meta property="og:type" content="article" />

           <meta property="og:title" content="הופכים את העיצון למכונת פרסומות עבור העסק שלכם! אלפי קוראים אלפי לקוחות" />
           <meta property="og:description" content="עם קופיט תוכלו לגעת במליוני קוראים בישראל. בואו לקחת חלק בטכנולוגיה שתאפשר לקוראי העיתון שנמצאים סביבכם, להכיר ולבוא לרכוש אצלכם בבית העסק. לחצו כאן ללמוד עוד!" />
            <meta property="og:url" content="http://newdeals.co.il/sharedBenefit.php?id=print-to-digital" />
            <meta property="og:image" content="http://newdeals.co.il/img/Printtodigital.png"/>
             <meta http-equiv="refresh" content="http://newdeals.co.il/#/print-to-digital/"/>
             <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66387150-1', 'auto');
  ga('send', 'pageview');

</script>
        </head>
        <script>
            setTimeout(function(){location.href="http://newdeals.co.il/#/print-to-digital/"} , 2000);

        </script>
        <body>

        </body>
    </html>
    <?php




}




else if($id=='adnetworks'){

?>

    <!DOCTYPE html>
    <html>

        <head>

            <meta property="fb:app_id" content="190322544333196"/>
            <meta property="og:type" content="article" />

           <meta property="og:title" content="הגולשים באינטרנט - קופיט תביא אותם לבית העסק שלך!" />
           <meta property="og:description" content="טכנולוגיית המכירות של קופיט תציג את המוצרים וההטבות שלכם במגוון אתרים, ללקוחות הנמצאים סביב בית העסק שלכם ואשר בוודאי יבקשו לרכוש אותם! - נסו עכשיו!" />
            <meta property="og:url" content="http://newdeals.co.il/sharedBenefit.php?id=adnetworks" />
            <meta property="og:image" content="http://newdeals.co.il/img/Adnetworks.png"/>
             <meta http-equiv="refresh" content="http://newdeals.co.il/#/adnetworks/"/>
             <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66387150-1', 'auto');
  ga('send', 'pageview');

</script>
        </head>
        <script>
            setTimeout(function(){location.href="http://newdeals.co.il/#/adnetworks/"} , 2000);

        </script>
        <body>

        </body>
    </html>
    <?php




}


else if($id=='adnetworks'){

?>

    <!DOCTYPE html>
    <html>

        <head>

            <meta property="fb:app_id" content="190322544333196"/>
            <meta property="og:type" content="article" />

           <meta property="og:title" content="הגולשים באינטרנט - קופיט תביא אותם לבית העסק שלך!" />
           <meta property="og:description" content="טכנולוגיית המכירות של קופיט תציג את המוצרים וההטבות שלכם במגוון אתרים, ללקוחות הנמצאים סביב בית העסק שלכם ואשר בוודאי יבקשו לרכוש אותם! - נסו עכשיו!" />
            <meta property="og:url" content="http://newdeals.co.il/sharedBenefit.php?id=adnetworks" />
            <meta property="og:image" content="http://newdeals.co.il/img/Adnetworks.png"/>
             <meta http-equiv="refresh" content="http://newdeals.co.il/#/adnetworks/"/>
             <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66387150-1', 'auto');
  ga('send', 'pageview');

</script>
        </head>
        <script>
            setTimeout(function(){location.href="http://newdeals.co.il/#/adnetworks/"} , 2000);

        </script>
        <body>

        </body>
    </html>
    <?php




}




else if($id=='newproduct'){

?>

    <!DOCTYPE html>
    <html>

        <head>

            <meta property="fb:app_id" content="190322544333196"/>
            <meta property="og:type" content="article" />

           <meta property="og:title" content="מעלים עכשיו הטבות ומוצרים שיחשפו לעשרות אלפי אנשים בחינם!" />
           <meta property="og:description" content="קופיט מאפשרת לכם להכיר את הטכנולוגיה שלה ללא עלות! בואו ללמוד כיצד בעידן החדש מגדילים את כמות הלקוחות בבית העסק שלכם - לחצו עכשיו!" />
            <meta property="og:url" content="http://newdeals.co.il/sharedBenefit.php?id=newproduct" />
            <meta property="og:image" content="http://newdeals.co.il/img/landing.png"/>
             <meta http-equiv="refresh" content="http://newdeals.co.il/#/newproduct/"/>
             <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66387150-1', 'auto');
  ga('send', 'pageview');

</script>
        </head>
        <script>
            setTimeout(function(){location.href="http://newdeals.co.il/#/newproduct/"} , 2000);

        </script>
        <body>

        </body>
    </html>
    <?php




}



else if($id=='contact'){

?>

    <!DOCTYPE html>
    <html>

        <head>

            <meta property="fb:app_id" content="190322544333196"/>
            <meta property="og:type" content="article" />

           <meta property="og:title" content="מדברים עם קופיט - והם יעזרו לכם להביא עשרות ומאות לקוחות לבית העסק שלכם - לחצו עכשיו! " />
           <meta property="og:description" content="שירות הלקוחות של קופיט זמין עבורכם עכשיו! " />
            <meta property="og:url" content="http://newdeals.co.il/sharedBenefit.php?id=contact" />
            <meta property="og:image" content="http://newdeals.co.il/img/ContactUs.png"/>
             <meta http-equiv="refresh" content="http://newdeals.co.il/#/contact/"/>
             <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66387150-1', 'auto');
  ga('send', 'pageview');

</script>
        </head>
        <script>
            setTimeout(function(){location.href="http://newdeals.co.il/#/contact/"} , 2000);

        </script>
        <body>

        </body>
    </html>
    <?php




}



else if($id=='application'){

?>

    <!DOCTYPE html>
    <html>

        <head>

            <meta property="fb:app_id" content="190322544333196"/>
            <meta property="og:type" content="article" />

          <meta property="og:title" content="אפליקציית קופיט בחינם" />
           <meta property="og:description" content="מצאתם משהו שאהבתם, פשוט לחצו 'תן לי את זה' וההטבה תישמר למימוש מתי שנוח לכם. אין כרטיסי אשראי ואין כאבי ראש. תמונה כמו בעמוד עם הטלפון" />
            <meta property="og:url" content="http://newdeals.co.il/sharedBenefit.php?id=application" />
            <meta property="og:image" content="http://newdeals.co.il/img/Application.png"/>
             <meta http-equiv="refresh" content="http://newdeals.co.il/#/application/"/>
             <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66387150-1', 'auto');
  ga('send', 'pageview');

</script>
        </head>
        <script>
            setTimeout(function(){location.href="http://newdeals.co.il/#/application/"} , 2000);

        </script>
        <body>

        </body>
    </html>
    <?php




}


else if($id=='testimonials'){

?>

    <!DOCTYPE html>
    <html>

        <head>

            <meta property="fb:app_id" content="190322544333196"/>
            <meta property="og:type" content="article" />

          <meta property="og:title" content="לקוחות רבים אוהבים את קופיט!" />
          <meta property="og:description" content="בואו ללמוד מה חלק מהלקוחות חושבים על קופיט" />
            <meta property="og:url" content="http://newdeals.co.il/sharedBenefit.php?id=testimonials" />
            <meta property="og:image" content="http://newdeals.co.il/img/Testimonials.png"/>
             <meta http-equiv="refresh" content="http://newdeals.co.il/#/testimonials/"/>
             <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66387150-1', 'auto');
  ga('send', 'pageview');

</script>
        </head>
        <script>
            setTimeout(function(){location.href="http://newdeals.co.il/#/testimonials/"} , 2000);

        </script>
        <body>

        </body>
    </html>
    <?php




}


else{


curl_setopt($ch, CURLOPT_URL, "http://34.251.180.226/coupons/".$id);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);

// execute the request

$output = curl_exec($ch);


// output the profile information - includes the header
$array=json_decode($output,true);

//echo($array['coupon']['_id']);
//echo($array['coupon']['couponName']);
//echo($array['coupon']['couponDescription']);
//echo($array['coupon']['couponImage']);
//echo($array['coupon']['contactName']);
/*<meta property="og:url" content="http://newdeals.co.il/#/benefit/<?php echo($array['coupon']['_id']); ?>" />
  */
?>


    <!DOCTYPE html>
    <html>
        <head>

            <meta property="fb:app_id" content="190322544333196"/>
            <meta property="og:type" content="article" />
            <meta property="og:title" content="<?php echo($array['coupon']['couponName']); ?>" />
            <meta property="og:description" content="<?php echo($array['coupon']['couponDescription']); ?>" />
            <meta property="og:image" content="<?php echo($array['coupon']['couponImage']); ?>" />
            <meta property="og:url" content="http://newdeals.co.il/sharedBenefit.php?id=<?php echo($array['coupon']['_id']); ?>" />
             <meta http-equiv="refresh" content="http://newdeals.co.il/#/benefit/<?php echo($array['coupon']['_id']); ?>"/>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66387150-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '668600609956234');
fbq('track', "PageView");</script>

<!-- End Facebook Pixel Code -->
            <!-- etc. -->
        </head>
        <body>
            <p><?php echo($array['coupon']['couponDescription']);?></p>
            <img src="<?php echo($array['coupon']['couponImage']); ?>">
            <a href="http://newdeals.co.il/#/benefit/<?php echo($array['coupon']['_id']); ?>"> Link to benefit </a>

        </body>

         <script>

            setTimeout(function(){location.href="http://newdeals.co.il/#/benefit/<?php echo($array['coupon']['_id']); ?>"} , 2000);

        </script>

    </html>
    <?php



}

curl_close($ch);




?>
