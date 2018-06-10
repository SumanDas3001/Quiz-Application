<!DOCTYPE html>
<html>
<head>
  <title>Online Quiz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/style.css" type="text/css">
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
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-sm-2"></div>
        <div  class="col-sm-8">
          <div class="panel panel-info">
            <div class="panel-heading">Login Form</div>
            <div class="panel-body">

              <?php
                if(isset($_GET['run']) && $_GET['run']=="failed")
                {
                  echo "<mark>Your email and password is not correct</mark>";
                }
              ?>

              <form role="form" action="sigin_sub.php" method="post">
                <div class="inner-addon left-addon">
                  <label for="email">Enter User Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <label for="password">Enter Password</label>
                  <input type="password" class="form-control" id="pass" name="pass" aria-describedby="passwordHelp" placeholder="Password">
                  <small id="passwordHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-sm-2"></div>
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
