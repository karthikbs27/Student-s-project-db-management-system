<!DOCTYPE html>
<html lang="en">
<head>
	<title>view batch</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <style>
    *{margin:0; padding:0; box-sizing: border-box; font-family: 'Josefin Sans', sans-serif;}

.memcontainer, .messcontainer{
  display: grid;
  grid-template-rows: repeat(14, 1fr);
  gap: 0px;
  position: absolute;
  border-radius: 6px;
  border: 1px solid #ccc;
  height: 90%;
  width:90%;
  top: 5%;
}

.memconthead, .messconthead{
  background-color: #f2f2f2;
  width: 100%;
  height: 100%;
  text-align: center;
  margin: auto;
  grid-row: 1;
}


.memcontbottom{
  background-color: #f2f2f2;
  text-align: center;
  margin: auto;
  width: 100%; 
  grid-row: 14;
  height: 100%;
}

.memcontbody, .messcontbody{ 
  overflow-y: scroll;
  grid-row: 2/14;
  height: 100%;
}


.chatboxbottom{
  grid-row: 14;
  width: 100%;
  display: grid;
  grid-template-columns: repeat(10, 1fr);
}

.navbar{
  background-color: white;
  box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2);
  position: absolute;
  height: 10%;
  width: 100%;
}

.area{
  position: absolute;
  height: 90%;
  width: 100%;
  bottom: 0px; 
}

.row{
  position: absolute;
  height: 100%;
  width: 100%;
}

.texttype{
  position: absolute;
  height: 46px;
  bottom: 2px;
  margin-left: 2px;
  margin-top: 2px;
  width: 80%;
  text-align: center;  
}

.attach_pic, .send_pic{
  height: 100%;
  padding: 5px 5px;
  width: auto;
  display: inline-block;
  box-sizing: border-box;
}

.attach_pic{
  grid-column: 9;
}

.send_pic{
  grid-column: 10;
}

.button {
  background-color: white; /* Green */
  border: 2px solid #4CAF50;
  color: #4CAF50;
  padding: 6px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 4px;
  
}

.button:hover {
  background-color: #4CAF50; /* Green */
  color: white;
}
  
 .aboutimg{
 	width: 100%;
 	height: 250px! important ;
 }

body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  font-size: 14px;
}


form {
  border: 3px ;
}

input[type=text], input[type=number]{
  grid-column: 1 / 8;
  width: 100%;
  padding: 7px 10px;
  background-color: lightblue;
  margin: 5px 5px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.vl {
  position: absolute;
  border-left: 1px solid #ccc;
  height: 96%;
  top: 2%;
  left: 50%;
}

.container {
  border: 1px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  width: 80%;
  padding: 3px;
  margin: 10px 5px;
  float: right;
  float: bottom;
}

.darker {
  background-color: #ddd;
  float: left;
}

.blue{
  background-color: #3377ff;
  float: right;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.time-right {
  float: right;
  color: white;
}

.time-left {
  float: left;
  color: #999;
}

.chatbox {
  overflow-y: scroll;
  grid-row: 2/14;
  height: 100%;
}

.memcontcard{
  background-color: white;
  width: 100%;
  padding: 7px 3px;
  float: right;
  float: bottom;
}

.memcontcard img {
  float: left;
  margin-left: 20px;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.backbutton{
  position: absolute;
  height: 30px;
  width: 65px; 
  border: 0px;
  background-color: white;
  text-align: right;
  border-radius: 5px;
}

.backimg{
  position: absolute;
  height: 30px;
  width: 30px;
  bottom: 0px;
  left: 0px;
}
.submit{
  position: absolute;
  right: 20px;
}

#stuusn{
  height: 50px;
  background-color: white;
}


</style>
  
</head>




<body>

<div class="navbar">
  <button class="backbutton"><img src="../images/backbutton.png" class="backimg">Back</button>
  <!--<button class="button submit"><h7>submit</h7></button>-->
</div>


<div class="area">

  <div class="row">


    <div class="col-5">
      <div class="memcontainer" style="left: 10%;">

        <div class="memconthead">
          <p><h6>This text is centered..</h6></p>
        </div>

        <div class="memcontbody">
          
        
          <div class="memcontcard" style="border-bottom: 1px solid #ccc;">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" 
            style="float: right; color: #ccc; background-color: white; border: 0px solid white;">
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a href="#" class="btn">remove..</a></li>
              </ul>
            <img src="../images/p12.jpg" alt="Avatar" class="right" style="width:100%;">
            <p><b>Pavan</b></p>
            
            <span class="time-left">4NI18CS029</span>
          </div>
          

          <div class="memcontcard" style="border-bottom: 1px solid #ccc;">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" 
            style="float: right; color: #ccc; background-color: white; border: 0px solid white;">
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a href="#" class="btn">remove..</a></li>
              </ul>
            <img src="../images/p12.jpg" alt="Avatar" class="right" style="width:100%;">
            <p><b id="usn">Pavan</b></p>
            
            <span class="time-left">4NI18CS029</span>
          </div>



          

          
          
          
        </div>

        <div class="memcontbottom">
          <button class="button" data-toggle="modal" data-target="#addmem"><h7>Add members</h7></button>
        </div>

      </div>
    </div>



    
    
    
    <div class="col-1"><div class="vl"></div>
    </div>

    

    
    
    
    <div class="col-6">
      <div class="messcontainer" style="right: 10%;">

        <div class="messconthead">
          <p><h6>Message</h6></p>
        </div>

          <div class="messcontbody" id="messcontbody">
            


              <div class="container darker">
                <p id="othermess">Hey! I'm fine. Thanks for asking!</p>
                <span class="time-left" style="margin-right: 20px;"><b id="userid"> shish you</b></span>
                <span class="time-left">11:01</span>
              </div>


              <div class="container blue">
                <p id="mymess" style="color: white;">Hey! I'm fine. Thanks for asking!</p>
                <span class="time-right">11:01</span>
              </div>

              <div class="container blue">
                <p id="mymess" style="color: white;">Hey! I'm fine. Thanks for asking!</p>
                <span class="time-right">11:01</span>
              </div>

              <div class="container blue">
                <p id="mymess" style="color: white;">Hey! I'm fine. Thanks for asking!</p>
                <span class="time-right">11:01</span>
              </div>

              <div class="container blue">
                <p id="mymess" style="color: white;">Hey! I'm fine. Thanks for asking!</p>
                <span class="time-right">11:01</span>
              </div>

              <div class="container blue">
                <p id="mymess" style="color: white;">Hey! I'm fine. Thanks for asking!</p>
                <span class="time-right">11:01</span>
              </div>

              <div class="container blue">
                <p id="mymess" style="color: white;">Hey! I'm fine. Thanks for asking!</p>
                <span class="time-right">11:01</span>
              </div>

              <div class="container blue">
                <p id="mymess" style="color: white;">Hey! I'm fine. Thanks for asking!</p>
                <span class="time-right">11:01</span>
              </div>

              <div class="container blue">
                <p id="mymess" style="color: white;">Hey! I'm fine. Thanks for asking!</p>
                <span class="time-right">11:01</span>
              </div>

              <div class="container blue">
                <p id="mymess" style="color: white;">Hey! I'm fine. Thanks for asking!</p>
                <span class="time-right">11:01</span>
              </div>


            </div>

            <div class="chatboxbottom">
              <input type="text" placeholder="your messaage" name="message" required>
              <img class= "attach_pic" src="../images/attach.png" id="attach"></img>
              <img class= "send_pic" src="../images/send.png" id="send"></img>
            </div>
          </div>

          

      </div>
    </div>




  </div>




</div>  




<div class="modal fade" id="addmem" role="dialog">
      <div class="modal-dialog" >
      
        <!-- Modal content-->
        <div class="modal-content" >
          <div class="modal-header">
            <h4 class="modal-title">Add student</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <input type="text" id="stuusn" name="stuusn" placeholder="Enter student USN..">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary"  onclick="addstudent()" data-dismiss="modal">shish</button>
          </div>

        </div>
        
      </div> 

</div>


<template class="my_message">
  <div class="container blue">
    <p id="mymess" style="white">Hey! I'm fine. Thanks for asking!</p>
    <span class="time-right">11:01</span>
  </div>
</template>

<template class="others_message">
  <div class="container darker">
    <p>Hey! I'm fine. Thanks for asking!</p>
    <span class="time-left" style="margin-right: 20px;"><b id="userid"> shish you</b></span>
    <span class="time-left">11:01</span>
  </div>
<template>




<script>

function addstudent(){
  alert("Please enter batch name..");
}

</script>

</body>



</html>

