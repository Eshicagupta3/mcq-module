<head>

</head>
<body>
    <div id="divCounter"></div>
    <script type="text/javascript">
  function par(sec){
  m=Math.floor(sec/60);
  console.log(m);
  s=sec - m*60;
  console.log(s);
  return [m,s];
}
    if(localStorage.getItem("counter")){
      if(localStorage.getItem("counter") <= 0){
        window.location.replace("signout.php");
      }else{
        var value = localStorage.getItem("counter");
      }
    }else{
      var value = 1800;
    }
    t = par(value);
    document.getElementById('divCounter').innerHTML = t[0]+':'+t[1];

    var counter = function (){
      if(value <= 0){
       window.location.replace("signout.php");
      }else{
        value = parseInt(value)-1;
        localStorage.setItem("counter", value);
      }
      t = par(value);
      document.getElementById('divCounter').innerHTML = t[0]+':'+t[1];
    };

    var interval = setInterval(function (){counter();}, 1000);
  </script>
</body>