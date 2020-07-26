<!DOCTYPE HTML> 
<html> 
<head> 
<style> 
body{ 
    text-align: center; 
    background: #00ECB9; 
  font-family: sans-serif; 
  font-weight: 100; 
} 
h1{ 
  color: #396; 
  font-weight: 100; 
  font-size: 40px; 
  margin: 40px 0px 20px; 
} 
 #clockdiv{ 
    font-family: sans-serif; 
    color: #fff; 
    display: inline-block; 
    font-weight: 100; 
    text-align: center; 
    font-size: 30px; 
} 
#clockdiv > div{ 
    padding: 10px; 
    border-radius: 3px; 
    background: #00BF96; 
    display: inline-block; 
} 
#clockdiv div > span{ 
    padding: 15px; 
    border-radius: 3px; 
    background: #00816A; 
    display: inline-block; 
} 
smalltext{ 
    padding-top: 5px; 
    font-size: 16px; 
} 



button{
  width: 140px;
    height: 45px;
    font-family: 'Roboto', sans-serif;
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 2.5px;
    font-weight: 500;
    color: #777;
    background-color: rgb(17, 84, 47);
    border: none;
    border-radius: 45px;
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease 0s;
    cursor: pointer;
    outline: none;
}

button:hover {
    background-color: rgb(81, 73, 144);
    box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
    color: #fff;
    transform: translateY(-7px);
}


</style>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyA5y5AeQ-PE6Jr4L6z9_5sVuVEHu9LYFJI&sensor=false&v=3&libraries=geometry"></script>
<script src="../../js/jquery-3.3.1.min.js"></script>
<script>
  $(document).ready(function(){
  $('.return').click(function(){

    var latLngA = new google.maps.LatLng(-34, 151);
    var latLngB = new google.maps.LatLng(-34, 160);
    var distance = google.maps.geometry.spherical.computeDistanceBetween(latLngA, latLngB);
    console.log(distance);
    $.ajax({
      url: "countDown.php",
      type:"post",
      data:{distance: distance},
      success: function(response){
        console.log(response);
      }
    })
    // document.getElementById("distance").innerHTML = distance;
  })
})
</script>

</head> 
<body> 
<h1>Countdown Clock</h1> 
<div id="clockdiv"> 
  <div> 
    <span class="hours" id="hour"></span> 
    <div class="smalltext">Hours</div> 
  </div> 
  <div> 
    <span class="minutes" id="minute"></span> 
    <div class="smalltext">Minutes</div> 
  </div> 
  <div> 
    <span class="seconds" id="second"></span> 
    <div class="smalltext">Seconds</div> 
  </div> 
</div> 
  
<p id="demo"></p> 
<input id="tie" value= <?php echo "{$_GET['time']}"; ?> style= "display: none;">  
<br><br><br><br><br><br><br><br>
<form method="POST">
    <button class="return" type="submit" name="return" value="">Trả xe</button>
</form>

<?php
  if(isset($_POST['return'])){
    
//    $id= $_GET['id'];
   
// echo "";

include('../../../model/connect.php');
    $bikeId = $_GET['id'];
    
    $up = mysqli_query($con, "UPDATE bike SET status = 0 WHERE id = '{$_GET['id']}'");
        header("Location: index.php");
  }
?>
<?php
      include('../layouts/front/embed.js.php');
?>
<script  type="text/javascript"> 
  
// var deadline = new Date("July 26, 2020 02:46:00").getTime(); 
var _time= document.getElementById('tie').value;
// var _time= $('#elem).data('id')
var t =  _time*3600000; 

var x = setInterval(function() { 
  
// var now = new Date().getTime(); 
// var t = deadline - now;
    var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
    var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
    var seconds = Math.floor((t % (1000 * 60)) / 1000); 
    document.getElementById("hour").innerHTML =hours; 
    document.getElementById("minute").innerHTML = minutes;  
    document.getElementById("second").innerHTML =seconds;  
    if (t < 0) { 
            clearInterval(x); 
            document.getElementById("demo").innerHTML = "TIME IS UP.GET BIKE BACK NOW??!!!";  
            document.getElementById("hour").innerHTML ='0'; 
            document.getElementById("minute").innerHTML ='0' ;  
            document.getElementById("second").innerHTML = '0'; 
    } 
    else t-=1000;
}, 1000); 
</script> 

</body> 
</html> 