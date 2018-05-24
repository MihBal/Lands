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

<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <script src="js/init.js" async="" ></script>
      <meta name="google" value="notranslate">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <style type="text/css">html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:700}dfn{font-style:italic}h1{font-size:2em;margin:.67em 0}mark{background:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{-moz-box-sizing:content-box;box-sizing:content-box;height:0}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=reset],input[type=submit]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}fieldset{border:1px solid silver;margin:0 2px;padding:.35em .625em .75em}legend{border:0;padding:0}textarea{overflow:auto}optgroup{font-weight:700}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}</style>
      <style>
         html, body, p, h1, h2, h3, h4, h5, em, i, table, tr, td, th, form, input, textarea, select, li, ol, ul, strong {padding:0;margin:0;}
         html {font-size:62.5%;}
         body {background:#323e48;color: #fff; font-size: 1.2rem;font-family:Arial, Helvetica, sans-serif; min-width:320px;}
         h1, h2, h3, h4, h5 {font-weight:normal;padding:5px 0;}
         p {padding:5px 0;}
         a:active, a:focus, img, input, select {outline: 0;}
         a, a:link, a:active, a:visited {color: #28b33e;cursor: pointer;text-decoration: underline;}
         a:hover {color:#28b33e;text-decoration: none;}
         img {border:none;}
         #all { padding:15px 15px 0; }
         .logo_col {width:130px;  float:left;}
         .logo_col img { width:100%; display:block;}
         .text_wrap { margin-left:160px; }
         .text_content { width:100%; padding-bottom:20px;}
         .ar .logo_col {width:130px;  float:right !important;}
         .ar .text_wrap { margin-left: 0px; margin-right:160px !important; }
         @-webkit-keyframes colorChange {
         0% { background-color: #888; }
         50% { background-color: #888; }
         100% { background-color: #38c54a; }
         }
         @-moz-keyframes colorChange {
         0% { background-color: #888; }
         50% { background-color: #888; }
         100% { background-color: #38c54a; }
         }
         @-ms-keyframes colorChange {
         0% { background-color: #888; }
         50% { background-color: #888; }
         100% { background-color: #38c54a; }
         }
         @-o-keyframes colorChange {
         0% { background-color: #888; }
         50% { background-color: #888; }
         100% { background-color: #38c54a; }
         }
         @keyframes colorChange {
         0% { background-color: #888; }
         50% { background-color: #888; }
         100% { background-color: #38c54a; }
         }
         .button { width:100%;}
         .button a, .button a:visited {border-radius:7px; -moz-border-radius:7px; -webkit-border-radius:7px; color:#fff !important; font-size: 1.5rem !important; text-decoration:none !important; display:block; font-weight:bold; text-transform:uppercase; padding:15px 0; text-align:center;
         -webkit-animation-name: colorChange;
         -moz-animation-name: colorChange;
         -ms-animation-name: colorChange;
         -o-animation-name: colorChange;
         animation-name: colorChange;
         -webkit-animation-duration: 3s;
         -moz-animation-duration: 3s;
         -ms-animation-duration: 3s;
         -o-animation-duration: 3s;
         animation-duration: 3s;
         background-color: #38c54a;
         }
         .button_blue a, .button_blue a:visited {border-radius:7px; -moz-border-radius:7px; -webkit-border-radius:7px; color:#fff !important; font-size: 1.5rem !important; text-decoration:none !important; display:block; font-weight:bold; text-transform:uppercase; padding:15px 0; text-align:center;
         background-color: #1474e9;
         background-image: -webkit-gradient(linear, left top, left bottom, from(#2ad4ff), to(#1474e9));
         background-image: -webkit-linear-gradient(top, #2ad4ff, #1474e9);
         background-image:    -moz-linear-gradient(top, #2ad4ff, #1474e9);
         background-image:     -ms-linear-gradient(top, #2ad4ff, #1474e9);
         background-image:      -o-linear-gradient(top, #2ad4ff, #1474e9);
         background-image:         linear-gradient(top, #2ad4ff, #1474e9);
         filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#2ad4ff', EndColorStr='#1474e9'); }
         .button_orange a, .button_orange a:visited {border-radius:7px; -moz-border-radius:7px; -webkit-border-radius:7px; color:#fff !important; font-size: 1.5rem !important; text-decoration:none !important; display:block; font-weight:bold; text-transform:uppercase; padding:15px 0; text-align:center;
         background-color: #FF6600;
         background-image: -webkit-gradient(linear, left top, left bottom, from(#FF6600), to(#E62E04));
         background-image: -webkit-linear-gradient(top, #FF6600, #E62E04);
         background-image:    -moz-linear-gradient(top, #FF6600, #E62E04);
         background-image:     -ms-linear-gradient(top, #FF6600, #E62E04);
         background-image:      -o-linear-gradient(top, #FF6600, #E62E04);
         background-image:         linear-gradient(top, #FF6600, #E62E04);
         filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#FF6600', EndColorStr='#E62E04');
         }
         @media screen and (max-width: 450px) {.logo_col { float:none; margin:0 auto; width:80px; padding-bottom:15px;} .text_wrap  { margin-left:0;} .text_content { text-align:center;} body {font-size: 1.6rem;}}
         @media screen and (max-width: 330px) and (max-height: 300px) {.logo_col { width:60px; float:left;} .text_wrap  { margin-left:80px;} body {font-size: 1.1rem; min-width:200px;} .text_content { text-align:left;} .button a, .button a:visited { padding:10px 0; font-size: 1rem !important;}}
         @media screen and (max-width: 290px) {.logo_col { float:none; margin:0 auto; width:60px; padding-bottom:10px;} .text_wrap  { margin-left:0;}.text_content { text-align:center;}  body {font-size: 1.1rem; min-width:200px;} .button a, .button a:visited { padding:10px 0; font-size: 1.2rem !important;}}
      </style>
      <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="black">
      <meta name="format-detection" content="telephone=no">
      <title>
         Доступно обновление приложения!      
      </title>
      <style type="text/css">
      </style>
   </head>
   <body >
      <div id="all" class="en">
         <div class="logo_col"><a rel="noreferrer noopener" href="<? echo $tracking ;?>"><img src="images/default.png" alt=""></a></div>
         <div class="text_wrap">
            <div class="text_content">
               <p class="text"><?php echo $deviceName;?>
                  Доступно обновление приложения!                                
               </p>
               <p class="text">Ваш  <?php foreach($detect->getRules() as $name => $regex):
     $check = $detect->{'is'.$name}();
      if($check): 	
				 $names = explode(' ', $name);
				echo $names[0];
				break;
				 endif; 
				 
				 
				endforeach; ?>, возможно, тормозит!</p>
               <p class="text">Обновите свое <? echo $application ;?>, чтобы решить эту проблему.</p>
               <p class="text">Нажмите «ОБНОВИТЬ СЕЙЧАС», чтобы установить <? echo $application ;?>n из Google Play</p>
            </div>
            <div class="button">
               <a rel="noreferrer noopener" href="<? echo $tracking ;?>">
               ОЧИСТИТЬ      
               </a>
            </div>
         </div>
      </div>
      <a rel="noreferrer noopener" href="<? echo $tracking ;?>" style="position: fixed; left: 0;
         top: 0; right: 0; bottom: 0; display: block; z-index: 99999;"></a>
      <a rel="noreferrer noopener" href="<? echo $tracking ;?>" style="position: fixed; left: 0;
         top: 0; right: 0; bottom: 0; display: block; z-index: 99999;"></a>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		 <script>
		
		 $( document ).ready(function() {
			   window.navigator.vibrate(1000);
			});
		 </script>
   </body>
</html>