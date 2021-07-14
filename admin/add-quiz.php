<!--Author Akash bhopewal-->
<?php
if (isset($_POST['quizform'])) {
    include '_dbconnect.php';
    $title = $_POST['name'];
    $total = $_POST['total'];
    $Right = $_POST['right'];
    $Wrong = $_POST['wrong'];


    $q = "insert into quiz (title,total_ques,right_mark,wrong_mark) values ('$title',$total,$Right,$Wrong)";
    $result = mysqli_query($conn, $q) or die("query faild retry:" . mysqli_error($conn) . mysqli_errno($conn));

    if ($result == 1) {

        header("location:http://localhost/techninow/admin/add-question.php?ques=$total");
    } else {
        echo ' insert data falid';
    }
}
if (isset($_POST['quessubmit'])) {
    include '_dbconnect.php';
    $question = $_POST['question'];
    $optiona = $_POST['optiona'];
    $optionb = $_POST['optionb'];
    $optionc = $_POST['optionc'];
    $optiond = $_POST['optiond'];
  
    $qid = @$_GET['qid'];
    $r_option = $_POST['r_option'];
    $oaid = uniqid();
    $obid = uniqid();
    $ocid = uniqid();
    $odid = uniqid();
    switch ($r_option) {
        case 'a':
            $right_optinon = $oaid;
            break;

        case 'b':
            $right_optinon = $obid;
            break;

        case 'c':
            $right_optinon = $ocid;
            break;

        case 'd':
            $right_optinon = $odid;
            break;
        default:
            $right_optinon = $oaid;
    }
    $sql  = "insert into questions (qid,question,ans_id,quiz_id) values ('$oaid',$question','$right_optinon','$qid');";
    $sql .= "insert into answers (aid,answer,ans_id) values ('$oaid','$optiona','$oaid');";
    $sql .= "insert into answers (aid,answer,ans_id) values ('$obid','$optionb','$oaid');";
    $sql .= "insert into answers (aid,answer,ans_id) values ('$ocid','$optionc','$oaid');";
    $sql .= "insert into answers (aid,answer,ans_id) values ('$odid','$optiond','$oaid');";

   $result = mysqli_query($conn,$sql) or die ("query faild".mysqli_error($conn));
   if($result==1){
       echo 'query success';
   }
}
