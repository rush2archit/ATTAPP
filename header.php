<!DOCTYPE html>
<html lang="en">
              <head>
                      <title>Whats' Your Excuse</title>
                      <meta charset="utf-8">
                      <meta name="viewport" content="width=device-width, initial-scale=1">
                      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                      <!-- Latest compiled and minified CSS -->
                      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
                      <!-- Optional theme -->
                      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
                      <!-- Latest compiled and minified JavaScript -->
                      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> 
                      <script>
                            function goBack() {
                                         window.history.back()
                                }
</script> 
              </head>
              <body>

                      <div class="container">
                            <div class="page-header">
                              <h1>Whats Your Excuse</h1> 
                             <a href="campaign_company_name.php"> <button type="button" class="btn btn-default">Home</button> </a> 
                             <div class="row">
                                    <div class="col-sm-9" >
                                    </div>
                                    <div class="col-sm-3" >
                                            <button type="button" onclick="history.go(0)" class="btn btn-primary btn-sm">Refresh</button> 
                                            <button type="button" onclick="goBack()" class="btn btn-primary btn-sm">Back</button>
                                            <button type="button" onclick="document.location='login.php'" class="btn btn-primary btn-sm">Log Out</button>
                                          
                                    </div>
                              </div>
                          </div>

                    </div>

