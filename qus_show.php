<?php
  include("class/users.php");
  $qus=new users;
  $cat=$_POST['cat']; // store category id
  $qus->qus_show($cat); // pass category id to qus_show($qus) method at user.php page
  $_SESSION['cat']=$cat;
  //echo "<pre>";
  //print_r($qus->qus);
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- This javascript function is used for timeout purpose -->
  <script type="text/javascript">
    function timeout()
    {
      var minute=Math.floor(timeLeft/60);
      var second=timeLeft%60;
      var mint = checktime(minute);
      var sec = checktime(second);
      if(timeLeft<=0)
      {
        clearTimeout(tm);
        document.getElementById("form1").submit();
      }
      else
      {
        document.getElementById("time").innerHTML=mint+":"+sec;
      }
      timeLeft--;
      var tm = setTimeout(function(){timeout()},1000); // It define how many times after questions will submit & it also define change of time
    }
    function checktime(msg) // work of this function i to add zero's to minute and second
    {
      if(msg<10)
      {
        msg="0"+msg;
      }
      return msg;
    }
  </script>

  <style>
    header{
      background: #e3e3e3;
      padding: 1em;
      text-align: center;
    }
  </style>

</head>
<body onload="timeout()">
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
  <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <h2>
        <script type="text/javascript">
          var timeLeft=2*60;
        </script>
        <div id="time" style="float:right">timeout</div>
      </h2>

        <?php
        $i=1;
        foreach ($qus->qus as $qust) {?>
        <form method="post" id="form1" action="answer.php">
        <table class="table table-bordered">
          <thead>
            <tr class="danger">
              <th><?php echo $i;?>&nbsp;<?php echo $qust['question'];?></th>
            </tr>
          </thead>
          <tbody>
            <!-- ______________________Selete radio buttion of answer ___________________________-->
            <?php if(isset($qust['ans1'])) {?>
              <tr class="info">
                <td>&nbsp;1&emsp;<input type="radio" value="0" name="<?php echo $qust['id']; ?>"/>&nbsp;<?php echo $qust['ans1'];?></td>
              </tr>
            <?php } ?>

            <?php if(isset($qust['ans2'])) {?>
              <tr class="info">
                <td>&nbsp;2&emsp;<input type="radio" value="1" name="<?php echo $qust['id']; ?>"/>&nbsp;<?php echo $qust['ans2'];?></td>
              </tr>
            <?php } ?>

            <?php if(isset($qust['abs3'])) {?>
              <tr class="info">
                <td>&nbsp;3&emsp;<input type="radio" value="2" name="<?php echo $qust['id']; ?>"/>&nbsp;<?php echo $qust['abs3'];?></td>
              </tr>
            <?php } ?>

            <?php if(isset($qust['ans4'])) {?>
            <tr class="info">
              <td>&nbsp;4&emsp;<input type="radio" value="3" name="<?php echo $qust['id']; ?>"/>&nbsp;<?php echo $qust['ans4'];?></td>
            </tr>
            <?php } ?>

            <!--___If answer radio buttion is not select then the below statement will execute _______________________-->

            <tr class="info">
              <td><input type="radio" checked="checked" style="display:none" value="no_attempt" name="<?php echo $qust['id']; ?>"/></td>
            </tr>
          </tbody>
        </table>
      <?php $i++;}?>
      <div>
      <center><input type="submit" value="submit" class="btn btn-primary"/></center>
    </form>
  </div>
  <div class="col-sm-2"></div>
</div>

</body>
</html>
