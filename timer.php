<html>
<head>
  <style>
  

.timer{
  background-color:#419D78;
  color:#EFD0CA;
  font-size:20px;
  text-align:center;
}</style>

</head>

<body>
  <div class="timer">Time left = <span id="timer"></span></div>
<script type="text/javascript">
  // console.log()
  if(localStorage.getItem("s")=="59"&&localStorage.getItem("29")){
    document.getElementById('timer').innerHTML =
    30 + ":" +59;
  }else{
    document.getElementById('timer').innerHTML =
    30 + ":" +00;    
  }
startTimer();
function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1),m);
 
  if(localStorage.getItem("s")==59){
if(localStorage.getItem("m")==0){

}
else{
    m= localStorage.getItem("m")-1;
     localStorage.setItem("m", m);
  }
  }
  //if(m<0){alert('timer completed')}
  
  document.getElementById('timer').innerHTML =
    localStorage.getItem("m") + ":" + localStorage.getItem("s");
  setTimeout(startTimer, 1000);
  if(localStorage.getItem("m")==0 && localStorage.getItem("s")==0)
  {
    $a="1";
    alert("TIMES UP !!")
    window.location.replace("signout.php");


  }

}

function checkSecond(s,m) {
   localStorage.setItem("m", m);
  localStorage.setItem("s", s);
  if ((localStorage.getItem("s")) < 10 && (localStorage.getItem("s")) >= 0) {s = "0" + localStorage.getItem("s");
  localStorage.setItem("s", s);}; // add zero in front of numbers < 10
  if (localStorage.getItem("s") < 0) {
    if(localStorage.getItem("m")==0)
      return;
    else{
      s = "59"
      localStorage.setItem("s", s);
    }};
  return localStorage.getItem("s");
}
</script>
</body>

</html>