<?php 
$tracking = "";
?>
<!DOCTYPE html">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head id="hheader">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <script src="html5media.min.js"></script>
      <link rel="stylesheet" href="css/style.css">
      <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
      <!--<script src="http://geoapi123.appspot.com" type="text/javascript"></script>-->
      <script src="jquery.min.js"></script>
      <script language="JavaScript">
         var offerlink="<?php echo $tracking ?>";
         var siteTitle="www.HotChatDate.com";
         var siteConv="hotchatdate";
         var playsound=false;
         var lng=new Array("is typing...","Chat has timed out. Please","sign up","to resume.","Chat  Request from","New Chat Request from","in","wants to chat with you!","Online","Name","ID","Profile","Click Here","Free Chat","Send");
         var conversation=new Array(
         	"'oh, hello there sweetie :)'",
         	"'everyone can see this, lets go chat privately, k?'",
         	"'ok, i think we have to be friends first...just add me :)'",
         	"'wtf?! you dont have an account??? its free, the registration'",
         	"'maybe we can chat on video if you have a webcam...ill show you my.......everything :P :P :P'",
         	"'i recently moved to breadsall, wanna help me fit in? ;) where are you from?'",
         	"'aaaa!!! why didnt you say so?!?! :D lets go out, yeah?'",
         	"'ok, give me your cell number...but not here...send it in my inbox :) others may see it'",
         	"'im doing this just for fun, this is not fake, dont worry :) try me and youll find out :P'",
         	"'did you try to register? cmon, hurry up :)'",
         	"'im here, waiting... ready for you ;)'"
         );
         var waitForResponse=new Array(false,true,false,true,false,true,true,false,false,true,false);
         var noAnswerConv=new Array("'Hellooooo...'", "'anyone there...'", "'say something baby...'", "'...'", "'talk to me'", "'cmon i know you there'", "'is this working?'", "'Yo!'", "'answer baby...'", "'hey... you still here?'", "'where are you???'", "'hello!'", "'hellooooo'", "'........'", "'are you still there?'");
         var girl = "<i>Emma</i>";var age="19";var img="03a";var ptype="c";
      </script>
      <title id="site_title">Chat  Request from <i>Emma</i> 19</title>
   </head>
   <body>
      <script src="corelib.js"></script>
     
         <div id="mainChatBox">
            <div style="    display: flex; " class="wrapperCol">
               <div id="chatBoxLeft">
			   
				   <div id="topinfo">
					  
						 <p>(1) New Chat Request from &nbsp;<a href="<?php echo $tracking ?>" class="girlName">Emma</a>&nbsp; in &nbsp;<span class="girlCity red underline">Breadsall</span>!</p>
					  
				   </div>
				   <br>
				
                  <div id="ppcontainer">
                     
                        <video  muted="" loop="" autoplay="">
                           <source src="video/girl1.mp4" type="video/mp4">
                           <source src="video/girl1.ogv" type="video/ogg">
                           <source src="video/girl1.webm" type="video/webm">
                        </video>
                    
                  </div>              
                  <div id="InfoLine">
                     <div class="infolineLeft"><a href="<?php echo $tracking ?>" ><i>Emma</i></a>, 31, Breadsall</div>
                     <div class="statuss">Online  <img src="images/available.gif"></div>
                  </div>
                  <div id="profileInfo">
				 <b>Name:</b> <a href="<?php echo $tracking ?>" ><i>Emma</i></a><br><b>ID:</b> 83478<br><b>Profile:</b> <a href="<?php echo $tracking ?>"  id="lbc3link">Click Here</a></div>
				  
               </div>
               <div id="rightBoxContainer">
                  <div id="rightBox">
                     <div id="siteInfo">
                        <div id="sHeader"><a href="<?php echo $tracking ?>" >Online</a> - Free Chat</div>
                        <div style="clear:both"></div>
                     </div>
                     <div id="chatbox">
                        <b><span style="color:red;text-decoration:underline;"><i>Emma</i></span> </b>(7:31): oh, hello there sweetie :)<br>
                        <div id="lo" style="color:#aaa;"><i><i>Emma</i> is typing...</i></div>
                     </div>
                     <script>document.getElementById('chatbox').innerHTML = '';</script>
                     <form name="message" action="">
                        <input name="usermsg" id="usermsg" type="text" autocomplete="off">
                        <input name="submitmsg" id="submitmsg" value="Send" type="submit">
                     </form>
                  </div>
               </div>
               <div style="clear:both;"></div>
            </div>
         </div>
     
      <div id="msgcount"></div>
      <div id="sound_element"></div>
   </body>
</html>