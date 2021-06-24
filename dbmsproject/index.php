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
  border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
#navbarSupportedContent ul li{
  padding-right: 20px;
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


.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 14px 0 12px 0;
}

img .avatar {
  width: 20%;
  border-radius: 20%;
}


.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

.topnav .search-container button {
  float: right;
  padding: 8px 12px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}




/* Change styles for span and cancel button on extra small screens */

@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

</style>
  
</head>


<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" >PROJECT MANAGEMENT</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li><form action="projectsdisp.php">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          </form></li>

      <li>    
          <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="shish" data-toggle="dropdown">Filter
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#"><option>CSE</option></a></li>
              <li><a href="#"><option>MEC</option></a></li>
              <li><a href="#"><option>EEE</option></a></li>
            </ul>
          </div>
        </li>

  </div>

        

        </ul>
    </div>
</nav>

<form method="POST" action="indexphp.php"> 
  <div class="imgcontainer">
    <img src="images/p2.jpeg" alt="Avatar" class="avatar">
 </div>

    <div class="container">
    
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        <?php
			$fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		
			if(strpos($fullurl, "index=invalid")==true){
				echo "<p style='color:red;' >Invalid username or password </p>";
			}
		?>
    <button type="submit">Login</button>

    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    </div>

    <div class="container" style="background-color:f1f1f1">
      <span class="psw"> Don't have an account?  <a href="register.php"> Register here  </a></span>
    </div>
  
  <div class="container" style="background-color:f1f1f1">
   <!-- <button type="button" class="cancelbtn">Cancel</button> -->
    <span class="psw"> <a href="forgotpass.php">Forgot password?</a></span>
  </div>



<a href="contact.php">Contact</a>
</form>
	


</body>
</html>
