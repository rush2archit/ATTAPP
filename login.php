<!DOCTYPE html>
<html>
<head>
  <!-- This is for loading external scripts -->
  <title>AttApp </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  <script>

  function login_checking()
  {
    var xmlhttp;
    var username ;
    var password;
    var datastring;
    username = document.getElementById("username").value;
    password = document.getElementById("password").value;
    datastring = "?username=" +username + "&password="+password;
    loging_page = "login_check.php"+datastring;
      document.location = loging_page ;
  }
  </script>
</head>
<body>

<div class="row">
</div>
  <div id="myDiv" >
    <div class="container" >
      <div class="row">
        <div class="col-sm-3" >
         
           <br><br><br><br><br><br><br>  
          <a href="#" class="thumbnail">
          <img src="ic_launcher-web.png" alt="icon">
          </a></div>
          
          <div class="col-sm-1" >
          </div>
          
          <div class="col-sm-4" >
            <div class="page-header" >
              <br><br><br><br>
              <h1><b>Department of CSE<b><h1>
              </div>
              <br>
              <form role="form"  action="login_check.php" method="GET">
                <div class="form-group">
                  <label >USERNAME</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
                </div>
                <div class="form-group">
                  <label >PASSWORD</label>
                  <input type="password" class="form-control" id="password" name= "password"placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary" >Login</button>
              </form>
            </div>
            <div class="col-sm-4" ></div>
          </div>
        </div>
      </div>
    </body>
    </html>
        