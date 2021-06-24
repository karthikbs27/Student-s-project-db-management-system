<!DOCTYPE html>
<html>
<head>
	<title>Project Management Home</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <style>
    *{margin:0; padding:0; box-sizing: border-box; font-family: 'Josefin Sans', sans-serif;}



.carousel-inner img {
    width: 100%;
    height: 100vh;
  }
  
 .aboutimg{
 	width: 100%;
 	height: 250px! important ;
 }

body {
  font-family: Arial, Helvetica, sans-serif;
}


form {
  border: 3px ;
}

input[type=text], input[type=number]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}


button {
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}


.imgcontainer {
  text-align: center;
  margin: 14px 0 12px 0;
}

img.avatar {
  width: 20%;
  border-radius: 20%;
}

.container {
  padding: 16px;
}

.midcontainer{
    margin: auto;
    width: 65%;
    padding: 10px;
}

.shish{
    position: absolute;
    top: 95%;
    left: 5%;
}

#submitbutton{
    color: #4bb543
}

#submitbutton:hover{
    color: white;
}

#submit:hover #submitbutton{
    color: white;
}

/* The side navigation menu */
.sidenavright {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  right: 0;
  background-color: white; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* Position and style the close button (top right corner) */
.sidenavright .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
  color: gray;
}
.sidenavright .closebtn:hover {
  color: black;
}


/* The side navigation menu */
.sidenavleft {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color: white; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* Position and style the close button (top right corner) */
.sidenavleft .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
  color: gray;
}
.sidenavleft .closebtn:hover {
  color: black;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

/* Change styles for span and cancel button on extra small screens */

@media screen and (max-width: 300px) {
  .cancelbtn {
     width: 100%;
  }
}

</style>
  
</head>


<body>


    
    


<div id="mySidenavleft" class="sidenavleft">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNavleft()">&times;</a>
  
  <div class="midcontainer">

    <div class="row">
        <div class="col">
            <text class="container"><b>Send an OTP to your mail..</b></text>
        </div>
    </div>

    <div class="row">
        <div class="col-8">
            <input type="text" placeholder="Enter usn.." name="usn" required id="usnbar">
        </div>

        <div class="col-4 align-self-center">
            <button type="button" class="btn btn-outline-success" data-toggle="collapse" data-target="#otpcontainer" 
                id="hidesend">send</button>
        </div>
    </div>
    
    <div id="otpcontainer" class="collapse">
        <div class="row">
            <input type="text" placeholder="Enter otp.." name="otp" required>
        </div>

        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-outline-success" id="resend">resend..</button>
            </div>
            <div class="col">
                <button type="button" class="btn btn-outline-success" id="submit" ><a href="reenterpass.php" id="submitbutton">
                submit..</a></button>
            </div>
        </div>
                

    </div>

  </div>
  
</div>






<div id="mySidenavright" class="sidenavright">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNavright()">&times;</a>
    <div class="midcontainer">

        <div class="row">
            <div class="col-4 align-self-center">
                <label for="favnumber">fav number</label>
            </div>
            <div class="col-8">
                <input type="number" id="favnumber" name="favnumber" placeholder="enter fav number..">
            </div>
        </div>

        <div class="row">
            <div class="col-4 align-self-center">
                <label for="dishliked">dish you like</label>
            </div>
            <div class="col-8">
                <input type="text" id="dishliked" name="dishliked" placeholder="dish that you like..">
            </div>
        </div>

        <div class="row">
            <div class="col-4 align-self-center">
                <label for="placetovisit">place you want to visit</label>
            </div>
            <div class="col-8">
                <input type="text" id="placevisit" name="placevisit" placeholder="enter place name..">
            </div>
        </div>

        <div class="row justify-content-end">
            <div class="col-4">
                <button type="button" class="btn btn-outline-success" id="submit" ><a href="reenterpass.php" id="submitbutton">
                    submit..</a></button>
            </div>
        </div>



    </div>
</div>






<div id="main">
  <div class="container">

        <div class="imgcontainer">
            <img src="../images/p18.jpg" alt="Avatar" class="avatar">
        </div>

        <div class="row">
            <div class="col"><b>
                Choose your option
            </b></div>
        </div>

        <div class="row">
            <div class="col">
                <button type="submit"><span onclick="openNavleft()">verify using registered email..</span></button>
            </div>

            <div class="col">
                <button type="submit"><span onclick="openNavright()">verify using the given data..</span></button>
            </div>
        </div>

    </div>

</div>
  
</body>




<script>
/* Open the sidenav */
function openNavright() {
  document.getElementById("mySidenavright").style.width = "100%";
}

function openNavleft() {
  document.getElementById("mySidenavleft").style.width = "100%";
}

/* Close/hide the sidenav */
function closeNavright() {
  document.getElementById("mySidenavright").style.width = "0";
}

function closeNavleft() {
  document.getElementById("mySidenavleft").style.width = "0";
}

</script>

<script>
$(document).ready(function(){
  $("#hidesend").click(function(){
    $("#hidesend").hide(),$("#usnbar").hide();
  });
});
</script>


</html>
