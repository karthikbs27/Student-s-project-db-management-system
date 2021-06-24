<?php
	session_start();
	//include("connection.php");
	if($_GET ['uid' ])
		$usn= $_GET ['uid' ];
	else
		$usn='4NI18CS050';
	
?>

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
	  <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  
<style>

*{margin:0; padding:0; box-sizing: border-box; font-family: 'Josefin Sans', sans-serif;}

#batchbtnli{
    display: inline-block;
    margin: 0px 40px;
    padding-top: 8px;
}


#batchbtn{
  text-decoration: none;
  border-radius: 3px;
  color: white;
  padding: 5px 20px;
  transition: .4s ease;
}

#batchbtn:hover{
  background-color: white;
  color: black;
}
#navbarSupportedContent ul li.search{
  padding-right: 0px;
}

#navbarSupportedContent ul li.filterbtn{
  margin-right: 120px;
}

#navbarSupportedContent ul li.filterbtn ul li a.filteropt{
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
  padding: 20px;
}

img.avatar {
  width: 300px;
  height: 250px;
  object-fit: cover;
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


.sidenavright {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  right: 0;
  background-color: #262626; /* Black*/
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
  background-color: #262626; /* Black*/
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

.yess:hover .nooo{
  color: white;
  transition: .5s;
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

.memcontcard{
  background-color: white;
  width: 100%;
  padding: 7px 3px;
  float: right;
  float: bottom;
  opacity: 70%;
}

</style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" >PROJECT MANAGEMENT</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            
          <li class="search">
            <form action="../action_page.php">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </form>
          </li>

          <li class="filterbtn"> <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Filter
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#" class="filteropt">HTML</a></li>
              <li><a href="#" class="filteropt">CSS</a></li>
              <li><a href="#" class="filteropt">JavaScript</a></li>
            </ul>
          </div>
          </li>


            <li id="batchbtnli" onclick="openNavright()"><a href="#" class="btn" id="batchbtn">Batches</a></li>                                      
            <li><a href="#"><!-- Use any element to open the sidenav -->
            <span onclick="openNavleft()">

              <div class="chip">
                <img src="../images/p14.jpg" alt="Person" width="96" height="96">                                                                    
                <?php echo '<text id="profilename">'.$usn.'</text>'; ?>
              </div>

            </span></a></li>
          </ul>
        </div>
  <!--script>
function goBack() {
  window.history.back();
}
</script-->  
  
</nav>

<div class="addcontainer">  
  <h2>ADD PROJECT</h2>
  <?php echo'<button type="" class="btn btn-outline-secondary btn-block"><a href="trial.php?uid='.$usn.'" class="btn btn-info btn-lg">';?>
    <span class="glyphicon glyphicon-plus"></span>ADD</a></button>
</div>

<hr class="solid">
<div>
<?php
//$name='Pavan C';
	$sql1="SELECT * FROM project WHERE PID in (select PmID from project_members where PmUSN='$usn')";
	$result1=$conn->query($sql1);
	if(!$result1)
		echo "failed sql1";
	//$row1 = $result1->fetch_assoc();
	$count= "SELECT count(PID) FROM project WHERE PID in (select PmID from project_members where PmUSN='$usn')";
	$result2=$conn->query($count);
	if(!$result1)
		echo "failed count";
	$row2 = $result2->fetch_assoc();
	$count=$row2["count(PID)"];
	//$j=$count%4;
	//$i=$count;
echo '<div class="addcontainer">
  <h2>PROJECTS</h2>
	
  
  <div>';
	//for($j=0;$j<$count%4;$j++){
    echo '<div class="row">';
	while($row1= mysqli_fetch_array($result1)){
		
      echo '<div class="col-sm-3">
        <div class="card" style="width: auto">
          <img class="card-img-top" src="../images/p8.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title"><a href="viewproject.php?pid='.$row1["PID"].'">'.$row1["Pname"].'</a></h4>
            <p class="card-text">'.$row1["Pdesc"].'</p>

            <div class="rating">
              <text id="score">20</text>
                <text>/</text>
                <text id="total_score">20</text>
            </div>
            
            <div class="dropup">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Options
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="addproject.php">Edit</a></li>
              <li><a href="delete.php?uid='.$usn.'&pid='.$row1["PID"].'">Delete</a></li>
              <!--li><a href="#">Hide</a></li-->
            </ul>
            </div>

          </div>
        </div>
		

      </div> ';
	}
	//}
?>
</div>

<hr class="solid">

<div class="imgcontainer">
  <img src="../images/p3.jpg" alt="Avatar" class="avatar">
</div>

<?php
	//$usn="4NI18CS050";
	//$usn=$_SESSION['usn'];
	$sql="SELECT * FROM student WHERE usn='$usn'";
	$result=$conn->query($sql);
	if(!$result)
		echo "failed sql";
	$row = $result->fetch_assoc();
?>

<div id="mySidenavleft" class="sidenavleft">
   <a href="javascript:void(0)" class="closebtn" onclick="closeNavleft()">&times;</a>

  <div class="imgcontainer">
    <img src="../images/p14.jpg" alt="Profile pic" class="avatar"></img>
  </div>

  <div class="container">
    
    <div class="row justify-content-evenly" id="columnarr">
      <div class="col">
        <text>Name:</text>
      </div>
      <div class="col">
        <?php echo '<text id= "prof_name">'.$row["Sname"].'</text>'; ?>
      </div>
    </div>
    <hr class="solid" style="background-color:Tomato">

    <div class="row justify-content-evenly" id="columnarr">
      <div class="col">
        <text>USN:</text>
      </div>
      <div class="col">
        <?php echo '<text id= "usn_no">'.$row["USN"].'</text>' ?>
      </div>
    </div>
    <hr class="solid" style="background-color:Tomato">

    <div class="row justify-content-evenly" id="columnarr">
      <div class="col">
        <text>Date of birth:</text>
      </div>
      <div class="col">
        <?php echo '<text id= "dob">'.$row["DOB"].'</text>'; ?>
      </div>
    </div>
    <hr class="solid" style="background-color:Tomato">

    <div class="row justify-content-evenly" id="columnarr">
      <div class="col">
        <text>Phone No:</text>
      </div>
      <div class="col">
        <?php echo '<text id= "ph_no">'.$row["phone_no"].'</text>'; ?>
      </div>
    </div>
    <hr class="solid" style="background-color:Tomato">

    <div class="row justify-content-evenly" id="columnarr">
      <div class="col">
        <text>Email ID</text>
      </div>
      <div class="col">
        <?php echo'<text id= "prof_name">'.$row["email_id"].'</text>'; ?>
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
        <text>Year of studing:</text>
      </div>
      <div class="col">
        <?php echo '<text id= "yeat_std">'.$row["year_of_study"].'</text>'; ?>
      </div>
    </div>
    <hr class="solid" style="background-color:Tomato">

    <div class="row justify-content-evenly" id="columnarr">
      <div class="col">
        <text>joined year:</text>
      </div>
      <div class="col">
        <?php echo '<text id= "year_joined">'.$row["joined_year"].'</text>'; ?>
      </div>
    </div>
    <hr class="solid" style="background-color:Tomato">

    <div class="row justify-content-evenly" id="columnarr">
      <div class="col">
        <text>Project done:</text>
      </div>
      <div class="col">
        <?php echo'<text id= "projects_done">'.$count.'</text>';?>
      </div>
    </div>
    <hr class="solid" style="background-color:Tomato">

	<div class="row justify-content-evenly" id="columnarr">
      <div class="col">
      <?php echo' <button type="button" class="btn btn-block yess"><a href="updateprofile.php?uid='.$usn.'&pro=student" class="btn" style="color: gray"><h4 class="nooo">Edit</h4></a></button>'; ?>             
      </div>               
      <div class="col">
        <button type="button" class="btn btn-block yess"><a href="index.php" class="btn" style="color: gray"><h4 class="nooo">Logout</h4></a></button>
      </div>
    </div>

    <hr class="solid" style="background-color:gray">
    
  </div>

  
</div>
<?php

	$batch="SELECT B_ID,B_name,Mname from batch,mentor where B_ID in (SELECT Bid FROM batch_student WHERE sid='$usn') and Mid=B_MID";
	$bresult=$conn->query($batch);
	if(!$bresult)
		echo "failed batch";
	//$brow = $bresult->fetch_assoc();
?>

<div id="mySidenavright" class="sidenavright">                                                                                 
  <a href="javascript:void(0)" class="closebtn" onclick="closeNavright()">&times;</a>


  <div class="row justify-content-evenly" id="columnarr">
    <div class="col">
    <h4>Batches</h4>
    </div>    
  </div>
<?php
	while($brow= mysqli_fetch_array($bresult)){
  echo '<div class="memcontcard" style="border-bottom: 1px solid #ccc;">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" 
      style="float: right; color: #ccc; background-color: white; border: 0px solid white;">
        <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="trial.php?uid='.$usn.'&bid='.$brow['B_ID'].'" class="btn">Add Project</a></li>
    </ul><a href="viewbatch.php?bid='.$brow['B_ID'].'&flag=1" style="color: black;">
    <p><b id="usn">'.$brow['B_name'].'</b></p>
    <span class="time-left">'.$brow['Mname'].'</span></a>
  </div>';
	}
?>
  <div class="memcontcard" style="border-bottom: 1px solid #ccc;">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" 
      style="float: right; color: #ccc; background-color: white; border: 0px solid white;">
        <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#" class="btn">exit..</a></li>
    </ul><a href="viewstdbatch.php" style="color: black;">
    <p><b id="usn">Database management system mini project</b></p>
    <span class="time-left">Yuraj K M</span></a>
  </div>

  <div class="memcontcard" style="border-bottom: 1px solid #ccc;">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" 
      style="float: right; color: #ccc; background-color: white; border: 0px solid white;">
        <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#" class="btn">exit..</a></li>
    </ul><a href="viewstdbatch.php" style="color: black;">
    <p><b id="usn">Database management system mini project</b></p>
    <span class="time-left">Yuraj K M</span></a>
  </div>

  

</div>


<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->


<div id="main">
  <a href="contact.php">Contact</a>
</div>



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
function openNavright() {
  document.getElementById("mySidenavright").style.width = "250px";
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


</body>
</html>
