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

    .frontpart {  
      height: 100%;
      width: 100%;
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      background-color: rgb(0,0,0); /* Black fallback color */
      background-color: rgba(0,0,0, 0.9); /* Black w/opacity */
      overflow-x: hidden; /* Disable horizontal scroll */
      transition: 0.5s; /* 0.5 second transition effect to slide in or slide down the overlay (height or width, depending on reveal) */
    }


    body{
      height: 100%;
      margin: 0;
      position: center;
      background-image: url("../images/studentpic.jpg");
      background-size: cover ;
    }

    .left{
      position: absolute;
      left: 0px;
      top: 3%;
      height: 94%;
      width: 60%;
      border-right: 1px solid #666;
    }

    .right{
      position: absolute;
      right: 0px;
      height: 100%;
      width: 40%;
      padding: 20px;
      overflow-y: scroll;
    }

    #profilepic{
      width: 200px;
      height: 180px;
      object-fit: cover;
      margin: 20px auto;
      border-radius: 15%;
    }

    .col{
      text-align: center;
    }

    text{
      color: #999;
    }

    /* The flip card container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
    .flip-card {
      background-color: transparent;
      width: auto;
      height: 250px;
      margin: 10px;
      margin-top: 20px;
      perspective: 1000px; /* Remove this if you don't want the 3D effect */
    }

    /* This container is needed to position the front and back side */
    .flip-card-inner {
      position: relative;
      width: 100%;
      height: 100%;
      text-align: center;
      transition: transform 0.8s;
      transform-style: preserve-3d;
    }

    /* Do an horizontal flip when you move the mouse over the flip box container */
    .flip-card:hover .flip-card-inner {
      transform: rotateY(180deg);
    }

    /* Position the front and back side */
    .flip-card-front, .flip-card-back {
      position: absolute;
      width: 100%;
      height: 100%;
      -webkit-backface-visibility: hidden; /* Safari */
      backface-visibility: hidden;
    }

    /* Style the front side (fallback if image is missing) */
    .flip-card-front {
      
      color: black;
    }

    /* Style the back side */
    .flip-card-back {
      background-color: dodgerblue;
      color: white;
      transform: rotateY(180deg);
    }

  </style>
</head>

<body>

  <div class="frontpart">
      
    <div class="left projects">
        
      <div class="row" style="margin: 40px 0px;">
        <img src="..\images\p12.jpg" id="profilepic">
      </div>

      
      <div class="row" style="margin: 40px 0px;">
        <div class="col">
          <text>Name</text>
        </div>
        <div class="col">
          <text id= "dept_name">Pavan Kumar Chowdri</text>
        </div>
      </div>
      
      <div class="row" style="margin: 40px 0px;">
        <div class="col">
          <text>Phone no</text>
        </div>
        <div class="col">
          <text id= "dept_name">9535075439</text>
        </div>
      </div>

      <div class="row" style="margin: 40px 0px;">
        <div class="col">
          <text>Email id</text>
        </div>
        <div class="col">
          <text id= "dept_name">karthik2000tbt@gmail.com</text>
        </div>
      </div>

      <div class="row" style="margin: 40px 0px;">
        <div class="col">
          <text>Projects done</text>
        </div>
        <div class="col">
          <text id= "dept_name">8</text>
        </div>
      </div>

    </div>


    <div class="right projects">

      <div class="row">
        <div class="col" style="color: #ccc;">
          <h3>Projects</h3>
        </div>
      </div>

      <div class="row">

        <div class="col-6">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="..\images\p19.jpg" alt="Avatar" style="object-fit: cover; height: 250px; width: 200px;">
              </div>
              <div class="flip-card-back">
                <h1>crime track system</h1>
                <p>CSE</p>
                <p>The is a system where all the crime action and their proof are kept in a single system.</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-6">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="..\images\p18.jpg" alt="Avatar" style="object-fit: cover; height: 250px; width: 200px;">
              </div>
              <div class="flip-card-back">
                <h1>John Doe</h1>
                <p>Architect & Engineer</p>
                <p>We love that guy</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-6">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="..\images\p17.jpg" alt="Avatar" style="object-fit: cover; height: 250px; width: 200px;">
              </div>
              <div class="flip-card-back">
                <h1>John Doe</h1>
                <p>Architect & Engineer</p>
                <p>We love that guy</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="..\images\p16.jpg" alt="Avatar" style="object-fit: cover; height: 250px; width: 200px;">
              </div>
              <div class="flip-card-back">
                <h1>John Doe</h1>
                <p>Architect & Engineer</p>
                <p>We love that guy</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="..\images\p15.jpg" alt="Avatar" style="object-fit: cover; height: 250px; width: 200px;">
              </div>
              <div class="flip-card-back">
                <h1>John Doe</h1>
                <p>Architect & Engineer</p>
                <p>We love that guy</p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>



  </div>


</body>

<script>



</script>
</html>