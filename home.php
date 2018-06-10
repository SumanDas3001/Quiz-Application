<?php
  include("class/users.php");
  $email=$_SESSION['email'];
  $profile=new users;
  $profile->users_profile($email);
  //print_r($profile->data);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <style>
    header{
      background: #e3e3e3;
      padding: 0.5em;
      text-align: center;
    }
  </style>


</head>
<body>


<?php
  if(isset($_SESSION['email'])==null)
  {
    header('Location: login.php');
  }
?>




<nav class="navbar navbar-default navbar-static-top navbar-custom">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand text-muted" href="#"><span class="glyphicon glyphicon-hourglass"></span> Q-U-I-Z</a>
    </div>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1"><class>Profile</a></li>
    <li><a data-toggle="tab" href="#menu2">Rules of exam</a></li>
    <!--<li style="float:right"><a data-toggle="tab" href="#menu3">Logout</a></li> -->
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Select Subject</h3>
      <center><button type="button" class="btn btn-success btn-lg" data-toggle="tab" href="#select">Start Quiz</button></center>
      <div class="col-sm-4"></div>
        <div class="col-sm-4"><br>
          <div id="select" class="tab-pane fade">

            <!-- Show category from category table-->
            <form method="post" action="qus_show.php">
              <select class="form-control" id="" name="cat">
                <option selected>Choose...</option>
                <?php
                    $profile->cat_shows();
                    foreach ($profile->cat as $category)
                    {?>
                      <option value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></option>
                    <?php
                    }?>
              </select><br>
              <input type="submit" value="submit" class="btn btn-primary"/>
            </form>

          </div>
        </div>
      <div class="col-sm-4"></div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Showng Profile</h3>
      <table class="table">
    <thead>
      <tr class="danger">
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>image</th>
      </tr>
    </thead>
    <tbody>
    <?php
      foreach ($profile->data as $prof)
      {?>
        <tr>
          <td><?php echo $prof['id'];?></td>
          <td><?php echo $prof['name'];?></td>
          <td><?php echo $prof['email'];?></td>
          <td><img src="img/<?php echo $prof['image'];?>" alt="" width="40px" height="40px"></td>
        </tr>
        </tbody>
        <?php
      }
      ?>
    </table>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Rules</h3>
      <p>The following rules are mandetory to follow for this exam.</p>
      <ul>
        <li>Do not use any electronic device inside exam room</li>
      </ul>

    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>

</body>
</html>
