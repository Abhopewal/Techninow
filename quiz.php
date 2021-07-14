<!--Author Akash bhopewal-->
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("location:http://localhost/techninow/login.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        $(document).ready(function() {
            $("#add").click(function() {

                $("#home").hide();
                $("#quizremove").hide();
                $("#quizadd").show();

            });
            $("#remove").click(function() {

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
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <?php 
               if(isset($_SESSION['u_id'])){
                $user_id  = $_SESSION['u_id'];
               }
               ?>
                <a class="navbar-brand" href='<?php echo "user-dash.php?uid=$user_id"; ?>'><b>Back to Dashboard</b></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   
              
                    
                    <li><a href="#" id="remove"><strong>
                        <i class="fa fa-user"> 
                                <?php
                               
                                $usern = $_SESSION['user'];
                                echo "<h3> Test Your skill $usern $user_id</h3>";
                                ?>
                                </i>
                                </strong>
                             <span class="sr-only">(current)</span>
                        </a></li>






                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="container" id="home">
        <!--container start-->
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="table-responsive">
                        <?php
                        include 'admin/_dbconnect.php';
                        $q = "SELECT * from quiz";
                        $result = mysqli_query($conn, $q) or die("error 500");
                        $row = mysqli_num_rows($result);
                        if ($row > 0) {


                        ?>
                            <table class="table table-striped title1">
                                <tr>
                                    <td><b>S.N.</b></td>
                                    <td><b>Topic</b></td>
                                    <td><b>Total question</b></td>
                                    <td><b>Right Marks</b></td>
                                    <td><b>Negative Marks</b></td>

                                    <td></td>
                                </tr>
                                <tr>
                                    <?php
                                    while ($row = mysqli_fetch_array($result)) {


                                    ?>
                                        <td><?php echo $row['id']; ?></td>
                                        <td> <?php echo $row['title']; ?></td>
                                        <td><?php echo $row['total_ques']; ?></td>
                                        <td><?php echo $row['right_mark']; ?></td>
                                        <td><?php echo $row['wrong_mark']; ?></td>
                                      
                <td><b><a href="#" class="pull-right btn sub1" style="margin:0px;background:#99cc32"><span
                        class="glyphicon glyphicon-new-window" aria-hidden="true"></span><span
                        class="title1"><b>Start</b></span></a></b></td>
                                </tr>
                        <?php
                                    }
                                } else {
                                    echo 'No data found';
                                }
                        ?>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--add quiz start-->

    <div class="row" id="quizadd" style="display: none;">
        <span class="title1" style="margin-left:40%;font-size:30px;"><b>Enter Quiz Details</b></span><br /><br />
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form class="form-horizontal title1" action="add-quiz.php" method="POST">
                <fieldset>


                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="name"></label>
                        <div class="col-md-12">
                            <input id="name" name="name" placeholder="Enter Quiz title" class="form-control input-md" type="text">

                        </div>
                    </div>



                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="total"></label>
                        <div class="col-md-12">
                            <input id="total" name="total" placeholder="Enter total number of questions" class="form-control input-md" type="number">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="right"></label>
                        <div class="col-md-12">
                            <input id="right" name="right" placeholder="Enter marks on right answer" class="form-control input-md" min="0" type="number">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-12 control-label" for="wrong"></label>
                        <div class="col-md-12">
                            <input id="wrong" name="wrong" placeholder="Enter Negative marks on wrong answer" class="form-control input-md" min="0" type="number">

                        </div>
                    </div>




                    <div class="form-group">
                        <label class="col-md-12 control-label" for=""></label>
                        <div class="col-md-12">
                            <input type="submit" style="margin-left:45%" name="quizform" class="btn btn-primary" value="Submit" class="btn btn-primary" />
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>

    <!--add quiz end-->
    <!--add quiz start step 2-->
    <div class="row" style="display: none;">
        <span class="title1" style="margin-left:40%;font-size:30px;"><b>Enter Question Details</b></span><br /><br />
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form class="form-horizontal title1" name="form" action="practice.php" method="POST">
                <fieldset>
                    <b>Question number&nbsp;&nbsp;:</><br /><!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="qns'.$i.' "></label>
                            <div class="col-md-12">
                                <textarea rows="3" cols="5" name="qns'.$i.'" class="form-control" placeholder="Write question number here..."></textarea>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="'.$i.'1"></label>
                            <div class="col-md-12">
                                <input id="'.$i.'1" name="'.$i.'1" placeholder="Enter option a" class="form-control input-md" type="text">

                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="'.$i.'2"></label>
                            <div class="col-md-12">
                                <input id="'.$i.'2" name="'.$i.'2" placeholder="Enter option b" class="form-control input-md" type="text">

                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="'.$i.'3"></label>
                            <div class="col-md-12">
                                <input id="'.$i.'3" name="'.$i.'3" placeholder="Enter option c" class="form-control input-md" type="text">

                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-12 control-label" for="'.$i.'4"></label>
                            <div class="col-md-12">
                                <input id="'.$i.'4" name="'.$i.'4" placeholder="Enter option d" class="form-control input-md" type="text">

                            </div>
                        </div>
                        <br />

                        <b>Correct answer</b>:<br />
                        <form action="practice.php" method="POST">
                            <select id="ans'.$i.'" name="ans" placeholder="Choose correct answer " class="form-control input-md">
                                <option value="a">Select answer for question </option>
                                <option value="a">option a</option>
                                <option value="b">option b</option>
                                <option value="c">option c</option>
                                <option value="d">option d</option>
                            </select><br /><br />
                            <input type="submit" value="submit">
                        </form>
                        <div class="form-group">
                            <label class="col-md-12 control-label" for=""></label>
                            <div class="col-md-12">
                                <input type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary" />
                            </div>
                        </div>

                </fieldset>
            </form>
        </div>
    </div>

    <!--add quiz start step  2 end-->
    <!--remove quiz-->
    <div class="container" style="display: none;" id="quizremove">
        <div class="panel">
            <div class="table-responsive">
                <?php
                include 'admin/_dbconnect.php';
                $q = "SELECT * from quiz";
                $result = mysqli_query($conn, $q) or die("error 500");
                $row = mysqli_num_rows($result);
                if ($row > 0) {


                ?>
                    <table class="table table-striped title1">
                        <tr>
                            <td><b>S.N.</b></td>
                            <td><b>Topic</b></td>
                            <td><b>Total question</b></td>
                            <td><b>Marks</b></td>
                            <td><b>Time limit</b></td>
                            <td></td>
                        </tr>
                        <?php
                        while ($row = mysqli_fetch_array($result)) {


                        ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['title']; ?></td>
                                <td><?php echo $row['total_ques']; ?></td>
                                <td><?php echo $row['right_mark']; ?></td>
                                <td><?php echo $row['wrong_mark']; ?></td>
                                <td><b><a href="" class="pull-right btn sub1" style="margin:0px;background:red"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Remove</b></span></a></b></td>
                            </tr>
                    <?php
                        }
                    } else {
                        echo 'No data found';
                    }
                    ?>
                    </table>
            </div>
        </div>
    </div>
    <!--remove quiz end-->
    <!--quiz quetions start-->
    <div class="container">
        <!--container start-->
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="table-responsive" style="display: none;">

                        <div class="panel" style="margin:5%"></div>
                        <b>Question &nbsp;'.$sn.'&nbsp;::<br />'.$qns.'</b><br /><br />
                        <form action="update.php?q=quiz&step=2&eid='.$eid.'&n='.$sn.'&t='.$total.'&qid='.$qid.'" method="POST" class="form-horizontal">
                            <br />
                            <input type="radio" name="ans" value="'.$optionid.'">'.$option.'<br /><br />
                            <br /><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Submit</button>
                        </form>
                    </div>

                    <!--result display-->
                    <div class="panel" style="display: none;">
                        <center>
                            <h1 class="title" style="color:#660033">Result</h1>
                            <center><br />
                                <table class="table table-striped title1" style="font-size:20px;font-weight:1000;">
                                    <tr style="color:#66CCFF">
                                        <td>Total Questions</td>
                                        <td>'.$qa.'</td>
                                    </tr>
                                    <tr style="color:#99cc32">
                                        <td>right Answer&nbsp;<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td>
                                        <td>'.$r.'</td>
                                    </tr>
                                    <tr style="color:red">
                                        <td>Wrong Answer&nbsp;<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
                                        </td>
                                        <td>'.$w.'</td>
                                    </tr>
                                    <tr style="color:#66CCFF">
                                        <td>Score&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td>
                                        <td>
                                    <tr style="color:#990000">
                                        <td>Overall Score&nbsp;<span class="glyphicon glyphicon-stats" aria-hidden="true"></span></td>
                                        <td>'.$s.'</td>
                                    </tr>
                                </table>
                    </div>
                </div>

            </div>
            <!--quiz quetions end-->
</body>

</html>