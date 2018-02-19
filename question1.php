<?php
@session_start();
$_SESSION['login']=1;
require 'connect.php';
if($_SESSION['id'])
{}
else{
  header('location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/mdb.min.css" rel="stylesheet">
  <link href="assets/css/animate.css" rel="stylesheet">
  <link href="assets/css/dashboard.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/mdb.min.js"></script>
  <script>
    function submitEvent(){
  var k=answer1.qid.value;
  var ans=answer1.selector.value;
 var  the_data='k='+k+'&ans='+ans;
     var xhttp;
     xhttp = new XMLHttpRequest();
     xhttp.open('POST','question_inc.php',true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
     xhttp.onreadystatechange=function() {
      if (xhttp.readyState==4 && xhttp.status==200) {
  //    document.getElementById('').innerHTML = xhttp.responseText;

}
}

xhttp.send(the_data);  
}
/*function submitQues(){

  var k=answer1.qid.value;
  var ans=answer1.selector.value;
  
  var  the_data='k='+k+'&ans='+ans;
  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.open('POST','answer_submit.php',true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
  xhttp.onreadystatechange=function() {
    if (xhttp.readyState==4 && xhttp.status==200) {
  //    document.getElementById('').innerHTML = xhttp.responseText;

}
}

xhttp.send(the_data); 
} */
//   $(document).ready(function(){
// setInterval(function(){
//      var l=answer1.qid.value;
//     l=parseInt(l);
//   $.ajaxSetup({cache:false});
//    $('#show').load("showanswer.php",{l: l});

// }, 500);

//});
</script>
<style type="text/css">
input[type="radio"]{
  color: grey;
  display: block;
  position: relative;
  letter-spacing: 0.5px;
  width: 100%;
  margin-left: -34rem;
  height: 25px;
  background-color: transparent;
}
button#submit_ans{
  background-color: transparent;
  padding: 1rem 2rem;
  font-size: 15px;
  margin-top: 0rem;
  border: 2px solid grey;
  border-radius: 6px;
  text-decoration: none;
  color: grey;
  outline: none;
  font-weight: bold;
}
button#submit_ans:hover,button#submit_ans:focus{
  outline: none;
  text-decoration: none;
  color:  #D50000;
  border: 2px solid  #D50000;
}
button.next{
  margin-top: -11.5rem;
  margin-right: 50rem;
}
p#response {
  margin-top: -1.5rem;
  margin-left: 2.5rem;
}
div#show_ans {
  margin-top: 3rem;
  background-color: lightgrey;
  border: 1px solid grey;
  color: black;
  padding: 1rem 1rem;
}

</style>
</head>

<body class="fixed-sn animated fadeIn">

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark elegant-color">
      <a href="http://jssmmil.in/" class="navbar-brand" title="MMIL website"><img src="assets/img/logo.png">
        <p id="head">MMIL</p>
      </a>
      <ul class="nav navbar-nav nav-flex-icons ml-auto">
        <li class="nav-item">
          <form name="signout" action="signout.php">
            <input type="submit" value="Submit Test">
          </form>                    
        </li>
      </ul>
    </nav>
  </header>
  <?php
  require 'countdown.php';
  ?>
  <main class="container-fluid">
    <div class="row parent_row">
     <div class="col-lg-3 col-md-3 col-12">
      <div class="panel">
        <div class="panel panel-body" id="border">
         <div class="row">

          <?php
          $query_run=@mysqli_query($conn,"select * from questions");
          if(@mysqli_num_rows($query_run)>0)
          {
            $rid=$_SESSION['id'];
            while($row=@mysqli_fetch_assoc($query_run))
            {
              $i=$row['id'];
              echo "<div class='col-lg-4 col-4 col-md-6'>";
              echo "<form  method='post' name='form2' class='side' action='ques_inc1.php'>";
              echo "<input type='hidden' name='item' class='item' value='" .$i ."'>";
              $query_run3=@mysqli_query($conn,"select * from try where rid='$rid' and qid='$i'");
              if(@mysqli_num_rows($query_run3)>0)
              {
               echo "<input type='submit' id='oneD' class='one' name='sub1' value='" .$i ."' style=' padding: 1rem 1.7rem;
               margin: 0.5rem 0.5rem;
               outline: none;
               border:2px solid #28B463  ;
               color: #28B463  ;
               background-color: transparent;
               border-radius: 50%;'>";

             }
             else{
              echo "<input type='submit' id='oneD' class='one' name='sub1' value='" .$i ."' style=' padding: 1rem 1.7rem;
              margin: 0.5rem 0.5rem;
              border: 1.5px solid #616161;
              outline: none;
              background-color: transparent;
              border-radius: 50%;'>";
            }
            echo "</form></div>";

          }
        } 

        ?>

      </div>    
    </div>
  </div>
</div>
<div class="col-lg-9 col-md-9 col-12">
  <div class="panel">
    <div class="panel panel-body">
      <form name="answer1" method="post">
        <?php
        $c=$_SESSION['no'];
        $u=$_SESSION['id'];
        $query_run1=@mysqli_query($conn,"select * from questions where id='$c'");
        $query_run2=@mysqli_query($conn,"select ans from try where rid='$u' && qid='$c'");
        $row2 = @mysqli_fetch_assoc($query_run2);
        $ans = $row2['ans'];
        if(@mysqli_num_rows($query_run1)>0)
        {
          $row1=@mysqli_fetch_assoc($query_run1);
          $id=$row1['id'];
          $q=$row1['question'];
          echo "<h1>Question ". $id."</h1><hr><br>";
          echo $q;
          echo"<br><br>";
          ?>
          <?php if($ans =='a'): ?>
           <input type="radio" value="a" checked="true" name="selector"><p id="response"><?php echo $row1['a']; ?></p><br>
         <?php else: ?>
           <input type="radio" value="a" name="selector"><p id="response"><?php echo $row1['a']; ?></p><br>
         <?php endif; ?>
         <?php if($ans =='b'): ?>
           <input type="radio" value="b" checked="true" name="selector"><p id="response"><?php echo $row1['b']; ?></p><br>
         <?php else: ?>
           <input type="radio" value="b" name="selector"><p id="response"><?php echo $row1['b']; ?></p><br>
         <?php endif; ?>
         <?php if($ans =='c'): ?>
           <input type="radio" value="c" checked="true" name="selector"><p id="response"><?php echo $row1['c']; ?></p><br>
         <?php else: ?>
           <input type="radio" value="c" name="selector"><p id="response"><?php echo $row1['c']; ?></p><br>
         <?php endif; ?>
         <?php if($ans =='d'): ?>
           <input type="radio" value="d" checked="true" name="selector"><p id="response"><?php echo $row1['d']; ?></p><br>
         <?php else: ?>
           <input type="radio" value="d" name="selector"><p id="response"><?php echo $row1['d']; ?></p><br>
         <?php endif; ?>
         <br><br>
         
         <input type="hidden" name="qid" value="<?php echo $id; ?>">
         
         <?php

       }
       ?></form><br>
       <form action="" method="post">
        <button onclick="submitEvent()" style="float: right;" class="next"><i class="glyphicon glyphicon-chevron-right">next</i></button>
      </form>

    </div>
  </div>
</div>
</div>
</main>
</body>
</html>
<?php

?>