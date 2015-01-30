<!DOCTYPE html>
<html lang="en">
              <head>
                      <meta charset="utf-8">
                      <meta http-equiv="X-UA-Compatible" content="IE=edge">
                      <meta name="viewport" content="width=device-width, initial-scale=1">
                      <meta name="keywords" content="">
                      <meta name="description" content="Share your excuses at Whatsyourexcuse.co">
                      <meta name="author" content="Pratik Upacharya">
                      <title>Whats your excuse?</title>                
                      <style type="text/css">
                        @font-face {
                                    font-family: 'Oswald';
                                    font-style: normal;
                                    font-weight: 300;
                                    src: local('Oswald Light'), local('Oswald-Light'), url(css/font.woff) format('woff');
                       }
                      </style>
                      <!-- Bootstrap core CSS -->    
                      <link href="css/bootstrap.css" rel="stylesheet">
                      <link href="css/bootstrap-social.css" rel="stylesheet">
                      <!-- Custom styles-->
                      <link href="css/style.css" rel="stylesheet">
                      <!-- This are scripts for slider-->
                  						
                  						<link rel="stylesheet" href="styles/media-queries.css">
                  						<link rel="stylesheet" href="flex-slider/flexslider.css" type="text/css" media="screen">
                  						<link href="styles/prettyPhoto.css" rel="stylesheet" type="text/css" media="screen">
                  						<link href="styles/tipsy.css" rel="stylesheet" type="text/css" media="screen">
                  						<script src="scripts/jquery-1.7.1.min.js"></script>
                  						<script src="flex-slider/jquery.flexslider-min.js"></script>
                  						<script src="scripts/jquery.prettyPhoto.js"></script>
                  						<script src="scripts/jquery.tipsy.js"></script>
                  						<script src="scripts/jquery.knob.js"></script>
                  				    <script src="scripts/jquery.isotope.min.js"></script>
                  						<script src="scripts/jquery.smooth-scroll.min.js"></script>
                  						<script src="scripts/waypoints.min.js"></script>
                              <script src="scripts/setup.js"></script>
                              <link rel="stylesheet" href="styles/style.css" media="screen">
                                          
                      <!--   This is Ajax Script to refreshing page   -->
                      
                      <script type="text/javascript">
                       // This funcion is used to refresh the current page Using Ajax 
                                  function refresh_page()
                                          {     //This code is to change background color  
                                                var bgcolorlist=new Array("#55A292;", "#FF1D43", "#55A292", "#FF9A52" , "#0F7FC9", "#1abc9c", "#e74c3c", "#9b59b6", "#CF000F", "#F16272" ,"#4A5269", "#FB6800", "#342E2A", "#1F8D85")
                                                document.body.style.background=bgcolorlist[Math.floor(Math.random()*bgcolorlist.length)]
                                       
                                                var xmlhttp;
                                                if (window.XMLHttpRequest)
                                                  {// code for IE7+, Firefox, Chrome, Opera, Safari
                                                    xmlhttp=new XMLHttpRequest();
                                                  }
                                                else
                                                  {// code for IE6, IE5
                                                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                                                 }
                                                xmlhttp.onreadystatechange=function()
                                                {
                                                    if (xmlhttp.readyState==4 && xmlhttp.status==200)
                                                      { 

                                                        document.getElementById("myDiv").innerHTML=xmlhttp.responseText;

                                                        document.getElementById("loading").innerHTML = '';
                                                      }
                                                }
                                                
                                               document.getElementById("loading").innerHTML = '<img src="images/photos/loading.gif" style="width:50px;height:50px"/>';
                                                xmlhttp.open("GET","index.php",true);
                                                xmlhttp.send();
                                               

                                            }
                                 


                      </script>
                      
                      <script type="text/javascript">
                                // Ajax Script to add answer to database 
                               function add_answer()
                                        {     
                                              var xmlhttp;
                                              var answer;
                                              var question; 
                                              var datastring; 
                                              answer = document.getElementById("answer").value;
                                              question = document.getElementById("question").value;
                                              datastring = "?answer=" + answer + "&question=" + question ;
                                              
                                              if (window.XMLHttpRequest)
                                                {// code for IE7+, Firefox, Chrome, Opera, Safari
                                                  xmlhttp=new XMLHttpRequest();
                                                }
                                              else
                                                {// code for IE6, IE5
                                                  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                                               }
                                              xmlhttp.onreadystatechange=function()
                                              {
                                                  if (xmlhttp.readyState==4 && xmlhttp.status==200)
                                                    { 

                                                     // document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
                                                      document.getElementById("loading").innerHTML = '';


                                                    }
                                              }
                                               document.getElementById("loading").innerHTML = '<img src="images/photos/loading.gif" style="width:50px;height:50px"/>';
                                              xmlhttp.open("GET","send.php"+datastring,true);
                                              xmlhttp.send();
                                              refresh_page();

                                          }


                      </script>
                      <!-- This script is written to add question entered by users into the database . -->     
                      <script type="text/javascript">
                      
                             
                function add_question()
                          {     
                                var xmlhttp;
                                var answer;
                                var entered_question; 
                                var datastring; 
                                entered_question = document.getElementById("entered_question").value;
                                datastring = "?entered_question=" + entered_question ;
                               // document.location = "add_entered_question.php"+datastring;
                      //          document.getElementById("Shared").innerHTML= <img src="images/photos/loading.gif" alt="Loading Icon">;
                           
                                 if (window.XMLHttpRequest)
                                  {// code for IE7+, Firefox, Chrome, Opera, Safari
                                    xmlhttp=new XMLHttpRequest();
                                  }
                                else
                                  {// code for IE6, IE5
                                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                                 }
                                xmlhttp.onreadystatechange=function()
                                {

                                

                                    if (xmlhttp.readyState==4 && xmlhttp.status==200)
                                      { 

                                       // document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
                                        // This call is to loade image 
                                        document.getElementById("loading").innerHTML = '';
                                        document.getElementById("submit_question").innerHTML = "";

                                      }

                                }
                                document.getElementById("loading").innerHTML = '<img src="images/photos/loading.gif" style="width:50px;height:50px"/>';
                                xmlhttp.open("GET","add_entered_question.php"+datastring,true);
                                xmlhttp.send();
                              //  refresh_page();

                            }  
                                 

                                  </script>
                                  <script type="text/javascript">
                                    function show_submit_question(){
                            
                                         document.getElementById("submit_question").innerHTML = '<form id="excuse" class="form-inline cbp-mc-form" role="form" ><br><input type="text" class=".col-md-8 " name="entered_question" id = "entered_question" placeholder="Enter Your Question Here ..."><input type="button" class="button cbp-mc-submit"     value="Submit" onclick="add_question()"> </form>'; 
 
                                            }
                                  </script>



                      <!--This code is to chage background color  -->
                      <script language="JavaScript">
                              
                                // document.write("hi");
                                var bgcolorlist=new Array("#55A292;", "#FF1D43", "#55A292", "#FF9A52" , "#0F7FC9", "#1abc9c", "#e74c3c", "#9b59b6", "#CF000F", "#F16272" ,"#4A5269", "#FB6800", "#342E2A", "#1F8D85")
                                document.body.style.background=bgcolorlist[Math.floor(Math.random()*bgcolorlist.length)]
                              
                             
                            </script>
              </head>

  <body oncontextmenu="return false"  >
                                
                                      <div id = "slider">
    
                                      </div>  
                                      <div id= "myDiv">
                                            <div class="container"  >
                                       
    
                                                  <div class="head">
                                                    <div class="headText"></div>  
                                                    <!-- Modal  for adding users questions-->
                                                  
                                                        <p>
                                                                <script language="JavaScript">
                                                            
                                                                 // document.write("hi");
                                                                  var bgcolorlist=new Array("#55A292;", "#FF1D43", "#55A292", "#FF9A52" , "#0F7FC9", "#1abc9c", "#e74c392", "#FF9A52" , "#0F7FC9", "#1abc9c", "#e74c3c", "#9b59b6", "#CF000F", "#F16272" ,"#4A5269", "#FB6800", "#342E2A", "#1F8D85")
                                                                  document.body.style.background=bgcolorlist[Math.floor(Math.random()*bgcolorlist.length)]
                                                                </script>
                                                                <?php
                                                                       require_once ('db_connection/db_connect.php');
                                                                        $db = new DB_CONNECT();
                                                                        $result = mysql_query("SELECT qid FROM questions WHERE qflag = '1' ORDER BY qid DESC LIMIT 1; ") or die(mysql_error());
                                                                        if(mysql_num_rows($result)>0){
                                                                                while ($row = mysql_fetch_array($result)){
                                                                                  $last_id = $row["qid"];
                                                                                }
                                                                        }
                                                                       $random_id_for_question = rand (1, $last_id);
                                                                        while ($random_id_for_question != null ){
                                                                          
                                                                                 $question_array = mysql_query("SELECT qtext FROM validques WHERE qid = '$random_id_for_question' AND qflag = '1'      AND cflag = '1';");                   
                                                                                 

                                                                                if(mysql_num_rows($question_array)>0){
                                                                                  break ;
                                                                                }else{
                                                                                   $random_id_for_question = rand (1, $last_id);
                                                                                }
                                                                       }
                                                                        if(mysql_num_rows($question_array)>0){
                                                                            while($question_row = mysql_fetch_array($question_array)){
                                                                              echo $question_row["qtext"];
                                                                              $question_text = $question_row["qtext"];
                                                                            }

                                                                    }
                                                            ?>
                                                       
                                                    </p>
                                                  </div>
                                    <form id="excuse" class="form-inline cbp-mc-form" role="form" >   

                                              
                                      <input type="text" class=".col-md-8 " id="answer" name="answer" value="">
                                      <input type="hidden" id="question" name="question" value="<?php echo $question_text ?>">
                                    
                                      <input type='button'   class="button cbp-mc-submit"   value='Submit' onclick="add_answer()">
                                      <input type='button' class="button cbp-mc-submit"     value='Skip' onclick="refresh_page()">

                                         <br>
                                         <br>
                                              <a rel = "prettyPhoto[gallery]" href="images/photos/1.png"><input type="button" onclick = "slider()"  class="button cbp-mc-submit" value = "Excuses"> </a>

                                             <!--   <input type="button" onclick = "slider()"  class="button cbp-mc-submit" value = "Excuses"> -->
                                              <?php 
                                                  

                                                  for($i = 1 ; $i<= 10 ; $i++){
                                                    $result = mysql_query("SELECT * FROM images ") or die(mysql_error());
                                                    $image_count = 0;
                                                                        if(mysql_num_rows($result)>0){
                                                                                while ($row = mysql_fetch_array($result)){
                                                                                  $image_count++;
                                                                                  $image_id = $row["id"];
                                                                                }
                                                                        }


                                                    $var = rand(1,$image_count);

                                              			echo 	"<a rel=\"prettyPhoto[gallery]\" href=\"images/photos/$var.png\"></a>";
                              		            }
                              		           ?> 
   
                                              <input type='button' class="button cbp-mc-submit"   value = "Submit Question" onclick="show_submit_question()">

                                              </form>
                                              <div id="loading"></div>
                                              <div id="submit_question">
                                                    
                                                </div>



                                              
                           </div>
                       <br><br><br>
                       
                         <footer>
                               <div class="container">

                                      <p style = "font-size:20px;"><?php 
                                        $message = mysql_query("SELECT status FROM status ORDER BY id DESC LIMIT 1; ") or die(mysql_error());
                                        if(mysql_num_rows($message)>0){
                                                while ($status = mysql_fetch_array($message)){
                                                  $update_status = $status["status"];
                                                  echo $update_status;
                                                }
                                        }




                              ?></p>
                            </div>
                      </footer>


                          <SCRIPT TYPE="text/javascript"> 

                            var message="Sorry, right-click has been disabled"; 
                            function clickIE()  {
                                                  if (document.all) {
                                                                      (message);
                                                                      return false;
                                                                    }
                                                } 
                            function clickNS(e) {
                                                  if (document.layers||(document.getElementById&&!document.all)) { 
                                                                                                                  if (e.which==2||e.which==3) {
                                                                                                                                                (message);
                                                                                                                                                return false;
                                                                                                                                              }
                                                                                                                }
                                                } 
                            if (document.layers) 
                              {
                                document.captureEvents(Event.MOUSEDOWN);
                                document.onmousedown=clickNS;
                              } 
                            else
                              {
                                document.onmouseup=clickNS;
                                document.oncontextmenu=clickIE;
                              } 
                            document.oncontextmenu=new Function("return false")  
                          </SCRIPT>
                          <SCRIPT TYPE="text/javascript"> 
                            function disableselect(e){
                                                        return false
                                                      } 
                            function reEnable(){
                                                return true
                                                }
                            document.onselectstart=new Function ("return false")
                            if (window.sidebar){
                                                document.onmousedown=disableselect
                                                document.onclick=reEnable
                                              }
                          </SCRIPT>


  <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=1437129503180367&version=v2.0";
                          fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                          <div style="width:350px;margin:0px auto;">
                                <div class="fb-share-button" style="float:left;" data-href="http://www.whatsyourexcuse.co" data-type="button_count"></div>
                                <div class="fb-share-button" style="float:right;"><a href="https://twitter.com/share" class="twitter-share-button" data-hashtags="WhatsYourExcuse"></a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                                </div>

                              </div>

                          <div>
                        <div class="container"><a style="text-shadow: 2px 0 0 #fff, -2px 0 0 #fff, 0 2px 0 #fff, 0 -2px 0 #fff, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff;
                        " class="btn btn-block btn-social btn-facebook" target="_blank" href="https://www.facebook.com/whatsyourexcuse.co">Facebook</a></div>

                         </div> 













                          </div>

  
  </body>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43559311-22', 'whatsyourexcuse.co');
  ga('send', 'pageview');

</script>
</html>