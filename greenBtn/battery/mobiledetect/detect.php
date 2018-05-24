<?php
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
$scriptVersion = $detect->getScriptVersion();
$deviceName="";
$tracking ="";
?>
 <?php foreach($detect->getRules() as $name => $regex):
     $check = $detect->{'is'.$name}();
      if($check): 	
				 $names = explode(' ', $name);
				echo $names[0];
				break;
				 endif; 
				 
				 
				 ?>
            
        <?php endforeach; ?>
