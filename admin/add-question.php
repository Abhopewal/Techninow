<!--Author Akash bhopewal-->
<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("location:http://localhost/techninow/admin/admin-dash.php");
}
?>
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Techninow || QUIZ DASHBOARD </title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/font.css">
  <script src="js/jquery.js" type="text/javascript"></script>
  <link rel="icon" href="../Images/Techninow.png">
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <link rel="icon" href="Images/Techninow.png">
  <script src="js/jquery-3.6.0.min.js"></script>


</head>

<body>
  <script>
    $(document).ready(function () {
      $("#add").click(function () {

        $("#home").hide();
        $("#quizremove").hide();
        $("#quizadd").show();

      });
      $("#remove").click(function () {

        $("#home").hide();
        $("#quizadd").hide();
        $("#quizremove").show();

      });
    });
  </script>
  
  <nav class="navbar navbar-default title1">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
          data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="Admin-dash.php"><b>Back to Dashboard</b></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="quiz.php">Home<span class="sr-only">(current)</span></a></li>
          <li><a href="quiz.php" id="add">Add Quiz<span class="sr-only">(current)</span></a></li>
          <li><a href="quiz.php" id="remove">Remove Quiz<span class="sr-only">(current)</span></a></li>



        


        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div class="container" id="home">
    <!--container start-->
  
  </div>

  <!--add quiz start-->

  

  <!--add quiz end-->
  <!--add quiz start step 2-->
  <div class="row" >
       <span class="title1" style="margin-left:40%;font-size:30px;"><b>Enter Questions</b></span><br /><br />
         <div class="col-md-3"></div>
         
         <div class="col-md-6">
         
  <?php 
   $qid =  @$_GET['qid'] ;
   $num_ques = @$_GET['ques'];

   if(isset($num_ques)){
     for($i=1;$i<$num_ques;$i++){
       echo '
       <form class="form-horizontal title1" name="form" action="quiz.php" method="post">
       <fieldset>
               <b>Enter Question&nbsp;&nbsp'.$i.'</><br /><!-- Text input-->
                 <div class="form-group">
                   <label class="col-md-12 control-label" for="qns"></label>
                   <div class="col-md-12">
                     <textarea rows="3" cols="5" name="question" class="form-control"
                       placeholder="Write question number here..."></textarea>
                   </div>
                 </div>
                 <!-- Text input-->
                 <div class="form-group">
                   <label class="col-md-12 control-label" for="1"></label>
                   <div class="col-md-12">
                     <input id="1" name="optiona" placeholder="Enter option a" class="form-control input-md"
                       type="text">
     
                   </div>
                 </div>
                 <!-- Text input-->
                 <div class="form-group">
                   <label class="col-md-12 control-label" for="2"></label>
                   <div class="col-md-12">
                     <input id="2" name="optionb" placeholder="Enter option b" class="form-control input-md"
                       type="text">
     
                   </div>
                 </div>
                 <!-- Text input-->
                 <div class="form-group">
                   <label class="col-md-12 control-label" for="'.$i.'3"></label>
                   <div class="col-md-12">
                     <input id="3" name="optionc" placeholder="Enter option c" class="form-control input-md"
                       type="text">
     
                   </div>
                 </div>
                 <!-- Text input-->
                 <div class="form-group">
                   <label class="col-md-12 control-label" for="4"></label>
                   <div class="col-md-12">
                     <input id="4" name="optiond" placeholder="Enter option d" class="form-control input-md"
                       type="text">
     
                   </div>
                 </div>
                 <br />
                 
                 <b>Correct answer</b>:<br />
               
                 <select id="ans" name="r_option" placeholder="Choose correct answer " class="form-control input-md">
                   <option value="a">Select answer for question</option>
                   <option value="a">option a</option>
                   <option value="b">option b</option>
                   <option value="c">option c</option>
                   <option value="d">option d</option>
                 </select><br /><br />';
     }
   }
   ?>
  
 
     
           
       
                  
                  <div class="form-group">
       <labyel class="col-md-12 control-label" for=""></label>
       <div class="col-md-12">
         <input type="submit" name="quessubmit" style="margin-left:45%" class="btn btn-primary" value="Submit"
           class="btn btn-primary" />
       </div>
     </div>
     
     </fieldset>
     </form>
     </div>
     </div>



  <!--add quiz start step  2 end-->
  <!--remove quiz-->
 
  <!--remove quiz end-->
  <!--quiz quetions start-->
  <div class="container">
    <!--container start-->
    <div class="row">
 
      <!--quiz quetions end-->
</body>

</html>