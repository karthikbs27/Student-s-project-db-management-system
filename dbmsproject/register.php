

<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">


<style>
*{margin:0; padding:0; box-sizing: border-box; font-family: 'Josefin Sans', sans-serif;}

body{
  overflow-x: hidden;
}

.imgcontainer {
  text-align: center;
  margin-top: 40px;
}

img .profile_pic {
  width: 300px;
  height: 250px;
  border-radius: 20%;
  object-fit: cover;
}


img.avatar {
  width: 20%;
  border-radius: 20%;
}

input[type=text], select, input[type=tel], input[type=email], input[type=date] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.area {
 /* Stay on top */
  top: 0; /* Stay at the top */
  border-radius: 7px;
  background-color: #f2f2f2;
  overflow-x: hidden; /* Disable horizontal scroll */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

.stu{
  width: 100%;
  left: 0;
  padding: 40px;
}

.ment{
  width: 100%;
  right: 0;
  padding: 40px;
}

.nowpress, .nowpress:hover, .nowpress:focus {
  background-color: #a6a6a6;
}

.mainarea{
  width: 90%;
  margin: 0% 5% 20px 5%; 
}


/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) { input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

</style>
</head>


<body onload="select('student')">
  <div>

    <div class="row align-items-center">
      
      <div class="col"  style="text-align: center">
        <h2 style="font-family: Josefin Sans">REGISTER</h2>
      </div>
      
      <div class="col">
        <div class= "imgcontainer">
          <img class= "profile_pic" src="../images/p21.jpg" id="profile_pic"></img>

          <form action="upload.php" method="post" enctype="multipart/form-data" style="text-align: center">
          <div class= "row align-items-center">
            <div class="col" style="text-align: center">
              <input type="file" name="imageToUpload" id="imageToUpload">
            </div>
            <div class="col" style="text-align: center">
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                  aria-valuemin="0" aria-valuemax="100" style="width:70%">
                  70%
                </div>
              </div>
            </div>
            <div class="col" style="margin-right: 20px">
              <input type="submit" value="Upload" name="add" style="margin: 20px">
            </div>
          </div>
          </form>

        </div>
      </div>
    </div>
  </div>

<div class="row" style="margin: 5% 5% 0px 5%;">
  <div class="col">Choose your profession</div>
  <div class="col align-item-end">
    <div class="btn-group" style="float: right;">
    <button type="button" class="btn btn-primary" onclick="select('student')" id="stdbtn">student</button>
    <button type="button" class="btn btn-primary" onclick="select('mentor')" id="mentbtn" >mentor</button>
    </div>  
  </div>

</div>




<div class="mainarea">


<div class="area stu" id="stuform">
  <form action="/action_page.php">
    
    <div class="row">
      <div class="col-3">
        <label for="name">Name</label>
      </div>
      <div class="col-9">
        <input type="text" id="name" name="name" placeholder="Your name..">
      </div>
    </div>
    
    
    <div class="row">
      <div class="col-3">
        <label for="usn">USN</label>
      </div>
      <div class="col-9">
        <input type="text" id="usn" name="usn" placeholder="your usn..">
      </div>
    </div>
      
      





    <div class="row">

      <div class="col">
        <div class="row align-items-center">
          <div class="col-3">
            <label for="birthday">Date of birth</label>
          </div>
          <div class="col-9">
            <input type="date" id="birthday" name="birthday">
          </div>
        </div>
      </div>

      <div class="col">
        <div class="row">
          <div class="col-3">
            <label for="Department">Department</label>
          </div>
          <div class="col-9">
            <select id="Department" name="Department">
        	    <option value="">select</option>
              <option value="CSE">CSE</option>
              <option value="ECE">ECE</option>
              <option value="ECE">IP</option>
              <option value="ECE">IS</option>
              <option value="ECE">MEC</option>
              <option value="ECE">EEE</option>
              <option value="ECE">CIV</option>
            </select>
          </div>
        </div>
      </div>

    </div>


    <div class="row">

      <div class="col">
        <div class="row align-items-center">
          <div class="col-3">
            <label for="email">Email ID</label>
          </div>
          <div class="col-9">
            <input type="email" id="email" name="email" placeholder="your Email..">
          </div>
        </div>
      </div>

      <div class="col">
        <div class="row align-items-center">
          <div class="col-3">
            <label for="Phone">Phone no</label>
          </div>
          <div class="col-9">
            <input type="tel" id="phoneno" name="phoneno" placeholder="your mobile no..">
          </div>
        </div>
      </div>

    </div>

    <div class="row">

      <div class="col">
        <div class="row align-items-center">
          <div class="col-3">
            <label for="joindyear">Joined year</label>
          </div>
          <div class="col-9">
            <input type="text" id="joinedyear" name="joinedyear" placeholder="University joined year..">
          </div>
        </div>
      </div>

      <div class="col">
        <div class="row align-items-center">
          <div class="col-3">
            <label for="presentyear">Present year</label>
          </div>
          <div class="col-9">
            <input type="text" id="presendyear" name="presendyear" placeholder="present year..">
          </div>
        </div>
      </div>

    </div>
    

    
  </form>
</div>











<div class="area ment" id="mentor">
  <form action="/action_page.php">
    
    <div class="row">
      <div class="col-3">
        <label for="name">Name</label>
      </div>
      <div class="col-9">
        <input type="text" id="name" name="name" placeholder="Your name..">
      </div>
    </div>
    


    <div class="row">

      <div class="col">
        <div class="row align-items-center">
          <div class="col-3">
            <label for="birthday">Date of birth</label>
          </div>
          <div class="col-9">
            <input type="date" id="birthday" name="birthday">
          </div>
        </div>
      </div>

      <div class="col">
        <div class="row">
          <div class="col-3">
            <label for="Department">Department</label>
          </div>
          <div class="col-9">
            <select id="Department" name="Department">
              <option value="">select</option>
              <option value="CSE">CSE</option>
              <option value="ECE">ECE</option>
              <option value="ECE">IP</option>
              <option value="ECE">IS</option>
              <option value="ECE">MEC</option>
              <option value="ECE">EEE</option>
              <option value="ECE">CIV</option>
            </select>
          </div>
        </div>
      </div>

    </div>


    <div class="row">

      <div class="col">
        <div class="row align-items-center">
          <div class="col-3">
            <label for="email">Email ID</label>
          </div>
          <div class="col-9">
            <input type="email" id="email" name="email" placeholder="your Email..">
          </div>
        </div>
      </div>

      <div class="col">
        <div class="row align-items-center">
          <div class="col-3">
            <label for="Phone">Phone no</label>
          </div>
          <div class="col-9">
            <input type="tel" id="phoneno" name="phoneno" placeholder="your mobile no..">
          </div>
        </div>
      </div>

    </div>

    

    
  </form>
</div>

</div>

<div class="row" style="position: relative; background-color: blue;">
    <div class="col align-self-center" style="margin: 20px">
      <input type="submit" value="continue.."> <!--continueing page is password.php-->
    <div>
</div> 


</body>
</html>

<script>

function select(option){

  if(option == "student"){
    document.getElementById("stdbtn").className = "btn btn-primary nowpress";
    document.getElementById("mentbtn").className = "btn btn-primary"; 
    document.getElementById("mentor").style.display =  "none";
    document.getElementById("stuform").style.display =  "block";
  }else if(option == "mentor"){
    document.getElementById("stdbtn").className = "btn btn-primary";
    document.getElementById("mentbtn").className = "btn btn-primary nowpress";
    document.getElementById("mentor").style.display =  "block";
    document.getElementById("stuform").style.display =  "none";
  }
} 


</script> 
