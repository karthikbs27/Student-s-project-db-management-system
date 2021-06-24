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

input[type=text], input[type=password]{
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

.shish{
    position: absolute;
    top: 95%;
    left: 5%;
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
    margin-top: 40px;
    width: 65%;
    padding: 10px;
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


</style>
  
</head>


<body>


<div class="midcontainer">

    <label for="password"><b>Enter password</b></label>
    <input type="password" placeholder="Enter password.." name="password" id="pass1" required>

    <label for="repass"><b>Re-enter password</b></label>
    <input type="password" placeholder="Re-enter Password" name="repass" id="pass2" onclick="equality()" required>

    <input type="checkbox" onclick="shwpass()">Show Password

    <div class="row justify-content-end">
        <div class="col-3">
        <button type="button" class="btn btn-outline-success" id="submit" ><a href="passresetcomp.php" id="submitbutton">
                submit..</a></button>
        </div>
    </div>

    

    <div class="shish">
        <a href="contact.php">Contact</a>
    </div>

</div>
  
</body>




<script>
function shwpass() {
  var x = document.getElementById("pass2");
  var y = document.getElementById("pass1");
  if (x.type === "password") {
    x.type = "text";
    y.type = "text";
  } else {
    x.type = "password";
    y.type = "password";
  }
}
</script>

<script>
</script>


</html>
