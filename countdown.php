<html>
<head>
	<style>
	body{
  background-color:#2D3047;
}

div{
  background-color:#419D78;
  color:#EFD0CA;
  font-size:20px;
  text-align:center;
}</style>

</head>

<body>
  <div>Time left = <span id="timer"></span></div>
<script type="text/javascript">
	document.getElementById('timer').innerHTML =
  0 + ":" +10;
startTimer();

function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){
if(m==0){

}
else{
  	m=m-1}
  }
  //if(m<0){alert('timer completed')}
  
  document.getElementById('timer').innerHTML =
    m + ":" + s;
  setTimeout(startTimer, 1000);
  if(m==0 && s==0)
  {
  	$a="1";
  	alert("jb");
  	return;
  }
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
}
</script>
</body>

</html>