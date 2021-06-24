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

.imgcontainer {
  text-align: center;
}

img.profile_pic {
  border-radius: 20%;
  width: 40%
}


img.avatar {
  width: 20%;
  border-radius: 20%;
}

input[type=text], select, textarea {
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

.addbutton {
  background-color: #555555;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}


.area {
  border-radius: 5px;
  background-color: #f2f2f2;
  width: 95%;
  padding: 20px;
}

.tablestr {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

.tablestr td{
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

.tablestr tr:nth-child(even){background-color: #f2f2f2;}

.tablestr tr:hover {background-color: #ddd;}

.tablestr th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #3399ff;
  color: white;
  text-align: center;
}

/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) { input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

.discontainer{
    background-color: white;
    border-radius: 4px;
    border: 1px solid #ccc;
}

</style>
</head>


<body>
  

    <div class="row justify-content-center">
        <div class= "imgcontainer">
          <img class= "profile_pic" src="../images/p21.jpg" id="profile_pic"></img>
        </div>
    </div>

<div class="row justify-content-center">

<div class="area align-self-center">
  <form action="/action_page.php">
    
    <div class="row">
      <div class="col-3">
        <label for="proname"><b>Project Name</b></label>
      </div>
      <div class="col-9">
        <label for="proname">Student project data management</label>
      </div>
    </div>
    <hr class="solid">




    <div id="Add discription">
      <div class="row">
        <div class="col-3">
          <label for="ad"><b>Discription</b></label>
        </div>
      
        <div class="col-9">
        <div class="discontainer">
          <text> <p>shkkdjka jdlka lkj adj l; akjfjl  hjh hj jj kjklj  kjkjkllka jklajkl kljk kja  jakljfkla kj kkjkja fjkjjj
          jjl kakkfj  lk kajf jkj k j akfjakj    jakfjklaj  l;jakd ffkklj
           afkakjakklalk adljj a jajkjlkja kajf alj a; fal afj aff jakfja j afjakkj  af ka</p></text>
        </div>
        </div>
      </div>

      
    </div>
    <hr class="solid">

    




    <div id="add tools part">

      <div class="row justify-content-start">
        <div class="col-3">
          <label for="ad"><b>Tools used</b></label>
        </div>
      </div>

      <div class="row justify-content-center" id="table_tools" style='margin-top: 20px;'>
        <table class="tablestr" id="tooltable">
          <tr><th>tools..</th></tr>
          
        </table>        
      </div>
    
    </div>
    <hr class="solid">

    
    
    <div id="add reference part">

      <div class="row justify-content-start">
        <div class="col-3">
          <label for="ad"><b>Reference used</b></label>
        </div>
      </div>

      <div class="row justify-content-center" id="table_refer" style='margin-top: 20px;'>
        <table class="tablestr" id="referencetable">
          <tr><th>reference..</th></tr>

        </table>        
      </div>
    
    </div>
    <hr class="solid">





    <div id="add members">
      <div class="row justify-content-between">
        <div class="col-3">
          <label for="ad"><b>Team members</b></label>
        </div>
          
      </div>

      <div class="row" id="memcontainer">

      </div>
    </div>
    <hr class="solid">





    <div id="Add files">
      <div class="row justify-content-start">
        <div class="col">
          <label for="ad"><b>Files uploaded by team members</b></label>
        </div>
      </div>

      <div class="row" id="filecont">

      </div>
    </div>
    <hr class="solid">

    <div class="assign marks">
        <div class="row">
            <div class="col-9">
                <label for="maxmark"><b>Enter the maximum marks for the project:</b></label>
            </div>
            <div class="col-3">
                <input type="text" id="maxmark" name="maxmark" placeholder="maxmark..">
            </div>
        </div>

        <div class="row">
            <div class="col-9">
                <label for="obtmark"><b>Enter the obtained marks for the project:</b></label>
            </div>
            <div class="col-3">
                <input type="text" id="obtmark" name="obtmark" placeholder="obtained marks..">
            </div>
        </div>

    </div>

    


    

</form>
</div>    
</div>

<input type="submit" value="submit" name="submit" style="margin: 20px;">






<template id="cardtemp">
            <div class="col-3" style="padding: 10px;">
              <div class="card">
                <img src="../images/p16.jpg" alt="Avatar" style="width:100%">
                <div class="container">
                  <h4 id="usn"><b>John Doe</b></h4>
                  <p><h6 id="branch">Computer Science and Enigineering</h6></p>
                </div>
              </div>
            </div>
      </template> 




<template id="filetemp">
  <div class="col-3">
    <div class="card">
      <img src="../images/p14.jpg" alt="Avatar" style="width:100%">
      <div class="container" style="margin: 10px;">
        <h4 id="filename"><b>report.pdf</b></h4>
        <div class="dropup">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownoptions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            options
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownoptions">
            <a class="dropdown-item" href="#">download</a>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</template>
         
 


</body>
</html>




<script>

/*function addtool() {
  
  var temp = document.getElementById("addt");
  var clon = temp.content.cloneNode(true);
  document.getElementById("addtools").appendChild(clon);
}*/

/*function addref() {

  
  var temp = document.getElementById("addreference");
  var clon = temp.content.cloneNode(true);
  document.getElementById("addreferencepart").appendChild(clon);
}*/

function addmem() {
 
  
  var temp = document.getElementById("cardtemp");
  var clon = temp.content.cloneNode(true);
  document.getElementById("memcontainer").appendChild(clon);
}

function addfile() {
 /* var temp, item, a, i;
  temp = document.getElementsByTagName("template")[0];
  //get the div element from the template:
  tempusn = temp.content.querySelector(".usn").innerHTML ="shish you";
  tempbranch = temp.content.querySelector(".branch").innerHTML ="vikas you bit** grow up. shish you bikas";
  var clon = temp.content.cloneNode(true);
  document.body.appendChild(clon);*/
  
  var temp = document.getElementById("filetemp");
  var clon = temp.content.cloneNode(true);
  document.getElementById("filecont").appendChild(clon);
}








function addtltotbl(){
  var toolrow = 1;
  var entry = document.getElementById("toolname").value;

  var putdata = document.getElementById("tooltable");
  var newRow = putdata.insertRow(toolrow);
  var cell = newRow.insertCell(0);
  
  cell.innerHTML = entry;
  toolrow++;

}







function addtreftotbl(){
  var refrow = 1;
  var entry = document.getElementById("refname").value;

  var putdata = document.getElementById("referencetable");
  var newRow = putdata.insertRow(refrow);
  var cell = newRow.insertCell(0);
  
  cell.innerHTML = entry;
  refrow++;


}

</script>

