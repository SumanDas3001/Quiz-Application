<?php
  include("class/users.php");
  $ans = new users;
  $answer=$ans->answer($_POST);
  //print_r($_POST);
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Answer</title>
    <!-- <link rel="stylesheet" href="css/style.css" type="text/css"> -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
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
      <!--
        <h1 class="greenClass">Right answer <?php echo $answer['right'];?></h2>
        <h1 class="redClass">Wrong answer <?php echo $answer['wrong'];?></h1>
        <h1>No answer <?php echo $answer['no_answer'];?></h1>
      -->



        <?php
          //Calculate total number of questons
          $total_qus=$answer['right']+$answer['wrong']+$answer['no_answer'];
          //Calculate total attempted question
          $attempt_ques=$answer['right']+$answer['wrong'];
        ?>

        <div class="container">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
          <h2>Your Quiz Result</h2>
          <p>The .table-bordered class adds border on all sides of the table and cells:</p>
            <table class="table table-bordered">
              <thead>
                <tr class="danger">
                  <th>Total number of Questions</th>
                  <th><?php echo $total_qus;?></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Atempted Question</td>
                  <td><?php echo $attempt_ques;?></td>
                </tr>
                <tr>
                  <td>Right Aswer</td>
                  <td><?php echo $answer['right'];?></td>
                </tr>
                <tr>
                  <td>Wrong Answer</td>
                  <td><?php echo $answer['wrong'];?></td>
                </tr>
                <tr>
                  <td>No Answer</td>
                  <td><?php echo $answer['no_answer'];?></td>
                </tr>
                <tr>
                  <td>Result</td>
                  <td>
                    <?php
                      $percent=($answer['right']*100)/($total_qus);
                      echo $percent."%";
                    ?>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-sm-2"></div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
