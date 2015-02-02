<html>

  <head>
  </head>
      <body>
              <?php
                    $dbhost = "localhost";
                    $dbusername = "root";
                    $dbpassword = "";
                    $dbname = "attsite";

                    $connection = mysql_connect($dbhost, $dbusername, $dbpassword) or die('Could not connect');
                    $db = mysql_select_db($dbname);




                    //$db = new DB_CONNECT();
                    if(isset($_GET['username']) && isset($_GET['password'])) {
                                    $username = $_GET['username'];
                                    $password = $_GET['password'];
                                    $correct_credentials = mysql_query("SELECT * FROM login WHERE username = '$username' AND password = '$password' ") or die(mysql_error());
                                    if(mysql_num_rows($correct_credentials)>0){
                                                
                                               header("Location: sec.php");
die();
                                              exit();
                                    }
                                    else{      

                                                echo " Wrong Credentials :";
                                    }
                      }	



?>
      </body>
</html>