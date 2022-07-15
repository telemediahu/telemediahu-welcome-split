
<?php
    $query=@unserialize(file_get_contents('https://pro.ip-api.com/php/'.$_SERVER['REMOTE_ADDR']."?key=5WdEafA3O88lsHC"));
    $country=strtolower($query['countryCode']);
    
    if($country!="hu"){$lang="en";}else{$lang="hu";}
    if(!empty($_GET['lang'])){$lang=$_GET['lang'];}
    // default
    $loc['th']['url']="calltv.com";
    $loc['tm']['url']="telemedia.hu";

    // hu lang
    $loc['th']['h2']['hu']="A világ legnagyobb élő, interaktív TV-műsorok gyártója";
    $loc['th']['btn']['hu']="Tovább";

    $loc['tm']['h2']['hu']="Professzionális CRM és call center megoldások 8 nyelven";
    $loc['tm']['btn']['hu']="Tovább";

    // en lang 
    $loc['th']['h2']['en']="The world`s largest producer of live, revenue-producing, interactive TV shows";
    $loc['th']['btn']['en']="Read more";

    $loc['tm']['h2']['en']="Professional CRM and call center solutions in 8 languages";
    $loc['tm']['btn']['en']="Read more";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Telemedia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
</head>
<body>

    <div class="split left animate__animated animate__slideInLeft" onclick="self.location='https://www.<?=$loc['th']['url']?>/<?=$lang?>'">
        <div class="centered">
            <img src="assets/img/holding.png" class="logo animate__animated animate__bounceIn animate__delay-1s" alt="Telemedia Holding" height="133">
            <div class="banner animate__animated animate__slideInLeft animate__slow"></div>
            <div class="content">
                <h2><?=$loc['th']['h2'][$lang]?></h2>
                <p><?=$loc['th']['url']?></p>
                <a href="https://www.<?=$loc['th']['url']?>/<?=$lang?>" class="btn btn-primary btn-lg"><?=$loc['th']['btn'][$lang]?></a>
            </div>
        </div>
    </div>

    <div class="split right animate__animated animate__slideInRight" onclick="self.location='https://www.<?=$loc['tm']['url']?>/<?=$lang?>'">
        <div class="centered">
            <img src="assets/img/callcenter.png" class="logo animate__animated animate__bounceIn animate__delay-1s" alt="Telemedia Callcenter" height="133">
            <div class="banner animate__animated animate__slideInRight animate__slow"><img src="assets/img/call-team.png" alt="" class="animate__animated animate__slideInRight animate__delay-1s"></div>
            <div class="content">
                <h2><?=$loc['tm']['h2'][$lang]?></h2>
                <p><?=$loc['tm']['url']?></p>
                <a href="https://www.<?=$loc['tm']['url']?>/<?=$lang?>" class="btn btn-primary btn-lg"><?=$loc['tm']['btn'][$lang]?></a>
            </div>
        </div>
    </div>

</body>
</html>
