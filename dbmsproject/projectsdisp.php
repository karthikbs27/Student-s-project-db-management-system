

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

*{margin:0; padding:0; box-sizing: border-box; font-family: 'Josefin Sans', sans-serif;}

#navbarSupportedContent ul li{
    display: inline-block;
    padding: 5px 10px;
}

#navbarSupportedContent ul li a{
  text-decoration: none;
  border-radius: 3px;
  color: white;
  padding: 5px 20px;
  transition: .4s ease;
}

#navbarSupportedContent ul li.active a{
  color=black;
  background-color: rgb(105,105,105);
}

#navbarSupportedContent ul li a:hover{
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


/* The side navigation menu */
.sidenav {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color: #111; /* Black*/
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


            <li class="active"><a href="projectsdisp.php">Projects</a></li>
          </ul>
        </div>
    
  
</nav>

  
<div class="addcontainer">

  
  <h2>PROJECTS</h2>


  <div class="dropdown" style="text-align: right">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">sort
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li value="date"><a href="#">High grade</a></li>
              <li value="score"><a href="#">Low grade</a></li>
              <li value="recent"><a href="#">Recent</a></li>
            </ul>
  
  </div>

  
  
  
  <div>
    <div class="row">
      <div class="col-sm-3">
      
        <div class="card"><a href ="viewproject.php">
          <img class="card-img-top" src="../images/p8.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">John Doe</h4>
            <p class="card-text">Some examkjfgkdjl;gkjlkjgl skjflskjgb lskjlkgjslkj glskjlkple text.</p>

            <div class="rating">
              <text id="score">20</text>
                <text>/</text>
                <text id="total_score">20</text>
            </div>

          </div></a>
        </div>

      </div>

      <div class="col-sm-3">
        
      <div class="card"><a href ="viewproject.php">
          <img class="card-img-top" src="../images/p12.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">John Doe</h4>
            <p class="card-text">Some examkjfgkdjl;gkjlkjgl skjflskjgb lskjlkgjslkj glskjlkple text.</p>

            <div class="rating">
              <text id="score">20</text>
                <text>/</text>
                <text id="total_score">20</text>
            </div>

          </div>
        </div></a>

      </div>

      <div class="col-sm-3">
        
      <div class="card"><a href ="viewproject.php">
          <img class="card-img-top" src="../images/p5.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">John Doe</h4>
            <p class="card-text">Some examkjfgkdjl;gkjlkjgl skjflskjgb lskjlkgjslkj glskjlkple text.</p>

            <div class="rating">
              <text id="score">20</text>
                <text>/</text>
                <text id="total_score">20</text>
            </div>


          </div>
        </div></a>

      </div>

      <div class="col-sm-3">
        
      <div class="card"><a href ="viewproject.php">
          <img class="card-img-top" src="../images/p6.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">John Doe</h4>
            <p class="card-text">Some examkjfgkdjl;gkjlkjgl skjflskjgb lskjlkgjslkj glskjlkple text.</p>

            <div class="rating">
              <text id="score">20</text>
                <text>/</text>
                <text id="total_score">20</text>
            </div>

          </div>
        </div></a>

      </div>

    </div>

    <div class="row">

      <div class="col-sm-3">
        
      <div class="card"><a href ="viewproject.php">
          <img class="card-img-top" src="../images/p7.jpg" alt="Card image">
          <div class="card-body">
            <h4 class="card-title">John Doe</h4>
            <p class="card-text">Some examkjfgkdjl;gkjlkjgl skjflskjgb lskjlkgjslkj glskjlkple text.</p>

            <div class="rating">
              <text id="score">20</text>
                <text>/</text>
                <text id="total_score">20</text>
            </div>

          </div>
        </div></a>

      </div>
    </div>
  </div>
</div>

<div style="text-align: center;">
  <button type="button" class="btn btn-outline-light text-dark">view more..</button>
</div>

<div>
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


</script>


</body>
</html>
