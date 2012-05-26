<?php
$dateTime = new DateTime();
$ny     = $dateTime->setTimeZone(new DateTimeZone('America/New_York'))->format('m/d/Y H:i:s');
$kyiv   = $dateTime->setTimeZone(new DateTimeZone('Europe/Kiev'))->format('m/d/Y H:i:s');
$london = $dateTime->setTimeZone(new DateTimeZone('Europe/London'))->format('m/d/Y H:i:s');
$paris  = $dateTime->setTimeZone(new DateTimeZone('Europe/Paris'))->format('m/d/Y H:i:s');
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
        <title>jqClock</title>
        <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
        <script src="js/jqClock.js"></script>
        <link rel="stylesheet" href="css/jqClock.css"/>
        <style>
ul {
    list-style: none outside none;
    margin: 0;
    padding: 0;
}
ul li {
    float: left;
    height: 250px;
    margin: 5px;
    width: 250px;
}
#clock .jqc-clock-face {
    background-color: #66f;
}
#local .jqc-clock-face{
    background: url("img/local.png") no-repeat scroll 0 0 transparent;
}
#kyiv .jqc-clock-face{
    background: url("img/kyiv.png") no-repeat scroll 0 0 transparent;
}
#ny .jqc-clock-face{
    background: url("img/ny.png") no-repeat scroll 0 0 transparent;
}
#london .jqc-clock-face{
    background: url("img/london.png") no-repeat scroll 0 0 transparent;
}
#paris .jqc-clock-face{
    background: url("img/paris.png") no-repeat scroll 0 0 transparent;
}
.jqc-clock-sec span {
    background: url("img/seconds.png") no-repeat scroll 0 0 transparent;
    box-shadow: 0 0;
    height: 106px;
    margin-top: 36px;
    width: 4px;
}
.jqc-clock-min span {
    background: url("img/minutes.png") no-repeat scroll 0 0 transparent;
    box-shadow: 0 0;
    height: 106px;
    margin-top: 51px;
    width: 6px;
}
.jqc-clock-hour span {
    background: url("img/hours.png") no-repeat scroll 0 0 transparent;
    box-shadow: 0 0;
    height: 106px;
    margin-top: 69px;
    width: 10px;
}
        </style>
        <script>
jQuery(function () {
    jQuery('#local').clock({
        graduations: 0,
        size: 250
    });
    jQuery('#kyiv').clock({
        graduations: 0,
        size: 250,
        date: new Date('<?php echo $kyiv; ?>')
    });
    jQuery('#ny').clock({
        graduations: 0,
        size: 250,
        date: new Date('<?php echo $ny; ?>')
    });
    jQuery('#london').clock({
        graduations: 0,
        size: 250,
        date: new Date('<?php echo $london; ?>')
    });
    jQuery('#paris').clock({
        graduations: 0,
        size: 250,
        date: new Date('<?php echo $paris; ?>')
    });
});
        </script>
    </head>
    <body>
        <ul>
            <li id="local"></li>
            <li id="kyiv"></li>
            <li id="ny"></li>
            <li id="london"></li>
            <li id="paris"></li>
        </ul>
    </body>
</html>