

<!DOCTYPE html>
<html lang="en">
<head>

  <title>logged in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  
<style>

*{margin:0; padding:0; box-sizing: border-box; font-family: 'Josefin Sans';}

#navbarSupportedContent ul li{
    padding-right: 10px;
}

#navbarSupportedContent ul li.filterbtn{
  margin-right: 120px;
}

.filteropt{
  background-color: white;
  color: black;
}

.addcontainer{
  margin: 60px;
}

.addcontainer .row {
  padding: 10px;
}

.addcontainer .row .col-sm-3 {
  padding: 10px;
}

.imgcontainer {
  text-align: center;
  margin: 14px 0 12px 0;
}

img.avatar {
  width: 20%;
  border-radius: 20%;
}

.addcontainer.addcontbtn{
  text-align: center;
}

.checked {
  color: orange;
}

#columnarr .col{
  text-align: center;
  color: rgb(204, 204, 204);
  
}

input[type=text] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}


/* The side navigation menu */
.sidenav {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color: #262626; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left .5s;
  padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.chip {
  display: inline-block;
  padding: 0 25px;
  height: 50px;
  font-size: 16px;
  line-height: 50px;
  border-radius: 25px;
  background-color: #b3e6ff;
  color: black;
}

.chip:hover{
  background-color: #80d4ff;
  transition: .5s;
}

.chip img {
  float: left;
  margin: 0 10px 0 -25px;
  height: 50px;
  width: 50px;
  border-radius: 50%;
}

.flip-card {
  background-color: transparent;
  width: 180px;
  height: 180px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
.cardid col{
  text-align: center;
}


</style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" id="head">PROJECT MANAGEMENT</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto align-items-start">
            
          <li class="search">
            <form action="../action_page.php">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </form>
          </li>

          <li class="filterbtn"> <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownoptions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownoptions">
              <a class="dropdown-item" href="#">cse</a>
              <a class="dropdown-item" href="#">mec</a>
              <a class="dropdown-item" href="#">ip</a>
              <a class="dropdown-item" href="#">is</a>
              <a class="dropdown-item" href="#">EEE</a>
            </div>
          </div>
          </li>


            
          <li><a href="#"><!-- Use any element to open the sidenav -->
            <span onclick="openNav()">

              <div class="chip">
                <img src="../images/p14.jpg" alt="Person" width="96" height="96">
                <text id="profilename">pavan</text>
              </div>

            </span></a></li>
          </ul>
        </div>
    
  
</nav>




  
<div class="addcontainer">

  
  
  <div class="addbatch">


    <div class="row justify-content-between" style ="margin-bottom: 20px;">
      <div class="col-4"><label><h2><b>Add a batch </b></h2></label></div>
      <div class="col-3">
        <button type="button" class="btn btn-outline-success btn-block" data-toggle="modal" data-target="#addnamebatch">Add</button>
      </div>
    </div>



    <div>
    <ul id="batchescontainer" style="list-style-type: none">
    <li>
        

          <div class="card" style="margin-bottom:30px;">
            <div class="card-header" data-toggle="collapse" data-target="#collapseOne" id="batchnamecoll">
            <div class="row justify-content-between align-items-center">


              <div class="col-9"><b  id="cardname">Shish you pavan</b></div>

              <div class="col-2 align-self-center"><label for="proname" id="batchid" >546525</label></div>

              <div class="col-1">
              <div class="dropdown"  style="float: right;">
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Options
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#" id="option1" onclick = "visitbatch(id)">visit</a>
                    <a class="dropdown-item" href="#" id="option2" onclick = "alterbatch(id)">alter</a>
                    <a class="dropdown-item" href="#" id="option3" onclick = "deletebatch(id)">Delete</a>
                  </div>
              </div>
              </div>
                          
            </div>
            
              
            </div>

            <div id="collapseOne" class="collapse" data-parent="#batchescontainer">
              <div class="card-body">
              <div class="row" id = "collapsebody">
              
              
              
              <div class="col-2" style ="padding: 10px;"><a href = "#">
                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="../images/p14.jpg" alt="photo" style ="width: 180px; object-fit: cover; height: 180px;">
                    </div>
                    <div class="flip-card-back">
                      <h1 id = "projectname">John Doe</h1> 
                      <p id = "projectdiscript">Architect & Engineer</p>
                    </div>
                  </div>
                </div></a>
              </div>

              <div class="col-2" style ="padding: 10px;"><a href = "#">
                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="../images/p16.jpg" alt="photo" style ="width: 180px; object-fit: cover; height: 180px;">
                    </div>
                    <div class="flip-card-back">
                      <h1 id = "projectname">John Doe</h1> 
                      <p id = "projectdiscript">Architect & Engineer</p>
                    </div>
                  </div>
                </div></a>
              </div>

              



              






              </div>
                
              </div>
            </div>
          </div>
        
        </li>  
        </ul>
    </div>
  </div>
</div>





<div class="imgcontainer">
  <img src="../images/p3.jpg" alt="Avatar" class="avatar">
</div>




<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <div class="imgcontainer">
    <img src="../images/p14.jpg" alt="Profile pic" class="avatar"></img>
  </div>

  <div class="container">
    
    <div class="row justify-content-evenly" id="columnarr">
      <div class="col">
        <text>Name:</text>
      </div>
      <div class="col">
        <text id= "prof_name">Pavan</text>
      </div>
    </div>
    <hr class="solid" style="background-color:Tomato">

    <div class="row justify-content-evenly" id="columnarr">
      <div class="col">
        <text>User id:</text>
      </div>
      <div class="col">
        <text id= "usn_no">yogesh27</text>
      </div>
    </div>
    <hr class="solid" style="background-color:Tomato">

    <div class="row justify-content-evenly" id="columnarr">
      <div class="col">
        <text>Date of birth:</text>
      </div>
      <div class="col">
        <text id= "dob">20-10-2000</text>
      </div>
    </div>
    <hr class="solid" style="background-color:Tomato">

    <div class="row justify-content-evenly" id="columnarr">
      <div class="col">
        <text>Phone No:</text>
      </div>
      <div class="col">
        <text id= "ph_no">9535075439</text>
      </div>
    </div>
    <hr class="solid" style="background-color:Tomato">

    <div class="row justify-content-evenly" id="columnarr">
      <div class="col">
        <text>Email ID</text>
      </div>
      <div class="col">
        <text id= "prof_name">karthik2000tbt@gmail.com</text>
      </div>
    </div>
    <hr class="solid" style="background-color:Tomato">

    <div class="row justify-content-evenly" id="columnarr">
      <div class="col">
        <text>Department:</text>
      </div>
      <div class="col">
        <text id= "dept_name">Computer Science and Engineering</text>
      </div>
    </div>
    <hr class="solid" style="background-color:Tomato">

    <div class="row justify-content-evenly" id="columnarr">
      <div class="col">
        <text>joined year:</text>
      </div>
      <div class="col">
        <text id= "year_joined">2018</text>
      </div>
    </div>
    <hr class="solid" style="background-color:Tomato">


    <div class="row justify-content-evenly" id="columnarr">
      <div class="col">
        <button type="button" class="btn btn-block"><a href="register.php">Edit</a></button>
      </div>
      <div class="col">
        <button type="button" class="btn btn-block"><a href="index.php">Logout</a></button>
      </div>
    </div>


    
    

    <hr class="solid" style="background-color:gray">
    
  </div>

  

  
</div>




<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">
</div>




<div class="modal fade" id="addnamebatch" role="dialog">
      <div class="modal-dialog" >
      
        <!-- Modal content-->
        <div class="modal-content" >
          <div class="modal-header">
            <h4 class="modal-title">Enter batch name</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <input type="text" id="batchname" name="batchname" placeholder="Enter batch name..">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary"  onclick="createbatch()" data-dismiss="modal">Add</button>
          </div>

        </div>
        
      </div> 

      <template id ="batchtemp">
        <li>
        

          <div class="card" style="margin-bottom:30px;">
            <div class="card-header" data-toggle="collapse" data-target="#collapseOne" id="batchnamecoll">
            <div class="row justify-content-between align-items-center">

              <div class="col-9"><b  id="cardname"> </b></div>

              <div class="col-2 align-self-center"><label for="proname" id="batchid" ></label></div>

              <div class="col-1">
              <div class="dropdown"  style="float: right;">
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Options
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#" id="option1" onclick = "visitbatch(id)">visit</a>
                    <a class="dropdown-item" href="#" id="option2" onclick = "alterbatch(id)">alter</a>
                    <a class="dropdown-item" href="#" id="option3" onclick = "deletebatch(id)">Delete</a>
                  </div>
              </div>
              </div>
                          
            </div>
            
              
            </div>

            <div id="collapseOne" class="collapse" data-parent="#accordion">
              <div class="card-body">
              <div class="row" id = "collapsebody"></div>
                
              </div>
            </div>
          </div>
        
        </li>  
      </template>

</div>


<template id = "cardid">
<div class="col-2" style ="padding: 10px;"><a href = "#">
  <div class="flip-card">
    <div class="flip-card-inner">
      <div class="flip-card-front">
        <img src="../images/p14.jpg" alt="photo" style ="width: 180px; object-fit: cover; height: 180px;">
      </div>
      <div class="flip-card-back">
        <h1 id = "projectname">John Doe</h1> 
        <p id = "projectdiscript">Architect & Engineer</p>
      </div>
    </div>
  </div></a>
</div>
</template>




<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

/* Open the sidenav */
function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

/* Close/hide the sidenav */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

var batch_id = "652423";
var shish1 = "#shish";
var shish2 = "shish";
var shish3 = "nooo";
var shish4 = "name";
var opt1 = "view";
var opt2 = "alter";
var opt3 = "del";
var code = "code";
var body = "body";
function createbatch(){
  var name = document.getElementById("batchname").value;
  

  if(!name){
    alert("Please enter batch name..");
  }else{

  var temp = document.getElementById("batchtemp");
  var clon = temp.content.cloneNode(true);
  
  
  document.getElementById("batchescontainer").appendChild(clon);
  document.getElementById("cardname").innerHTML = name ;
  document.getElementById("cardname").id = shish4.concat(batch_id);
  document.getElementById("option1").id = opt1.concat(batch_id);
  document.getElementById("option2").id = opt2.concat(batch_id);
  document.getElementById("option3").id = opt3.concat(batch_id);
  document.getElementById("batchid").innerHTML = batch_id;
  document.getElementById("batchid").id = code.concat(batch_id);
  document.getElementById("collapsebody").id = body.concat(batch_id);
  document.getElementById("batchnamecoll").dataset.target = shish1.concat(batch_id);
  document.getElementById("collapseOne").id = shish2.concat(batch_id);
  document.getElementById("batchnamecoll").id = shish3.concat(batch_id);

  batch_id++;
  }
}
     

function put(cardidno, name, discription){
  var temp1 = document.getElementById("cardid");
  var clon1 = temp1.content.cloneNode(true);
  
  var codeof = body.concat(cardidno);
  document.getElementById(codeof).appendChild(clon1);
  document.getElementById("projectname").innerHTML = name;
  document.getElementById("projectdiscript").innerHTML = discription;
}


function visitbatch(idname){}
function alterbatch(idname){}
function deletebatch(idname){} 

</script>


</body>
</html>
