<!DOCTYPE html>
<html>
<head>
  <title>Online Quiz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
  <body>
    <nav class="navbar navbar-default navbar-static-top navbar-custom">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand text-muted" href="#"><span class="glyphicon glyphicon-hourglass"></span> Q-U-I-Z</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div  class="col-sm-12">
          <div class="panel panel-info">
            <div class="panel-heading">Registration Form</div>
            <div class="panel-body">
              <?php
                if(isset($_GET['run'])&& $_GET['run']=="success"){
                  echo "<mark>your registration successfully done</mark>";
                }
              ?>
              <form role="form" method="POST" action="signup_sub.php" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="name">Enter User Name</label>
                  <input type="text" class="form-control" name="uname" id="name" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label for="email">Enter User Email</label>
                  <input type="email" class="form-control" name="umail" id="email" placeholder="Enter Your Email">
                </div>

                <div class="form-group">
                  <label for="password">Enter Password</label>
                  <input type="password" class="form-control" name="upass" id="pass" aria-describedby="passwordHelp" placeholder="Password">
                  <small id="passwordHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                  <label for="file">Upload Your Photo</label>
                  <input type="file" class="form-control" name="img" id="file">
                </div>

                <button type="submit" class="btn btn-info">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-default navbar-fixed-bottom">
      <div class="container">
        <a class="navbar-text" href="about.php"><h9 style="color: black;"><span class="glyphicon glyphicon-education"></span> About</h9></a>
        <a class="navbar-text" href="#"><h9 style="color: black;"><span class="glyphicon glyphicon-globe"></span> Created in 2018</h9></a>
      </div>
    </div>

  </body>
</html>
