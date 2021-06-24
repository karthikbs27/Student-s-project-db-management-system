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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    


<style>
*{margin:0; padding:0; box-sizing: border-box; font-family: 'Josefin Sans', sans-serif;}


body{
  overflow-x: hidden;
}


.imgcontainer {
  text-align: center;
  margin-top: 40px;
}

img.profile_pic {
  width: 300px;
  height: 250px;
  border-radius: 20%;
  object-fit: cover;
}


img.avatar {
  width: 20%;
  border-radius: 20%;
}

input[type=text], select{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

.textarea{
  background-color: white;
  color: black;
  border: 1px solid #666;
  display: block;
  width: 100%;
  overflow: hidden;
  resize: both;
  min-height: 200px;
  border-radius: 4px;
  padding: 12px;
}

.textarea[contenteditable]:empty::before {
  content: "Write something..";
  color: #666;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}


input[type=submit], .remove {
  background-color: #4CAF50;
  color: white;
  margin: 0px 5px;
  padding: 12px 14px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover, .remove:hover {
  background-color: #45a049;
  color: white;
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
  margin: 20px;
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
  text-align: center;
  background-color: #3399ff;
  color: white;
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

.tblclose{
  width: 50px;
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

</style>
</head>


<body onload="yappa()">
  <div>

    <div class="row align-items-center">
      
      <div class="col"  style="text-align: center">
        <h2 style="font-family: Josefin Sans">PROJECT DESCRIPTION</h2>
      </div>
      
      <div class="col">
        <div class= "imgcontainer">
          <img class= "profile_pic" src="../images/p21.jpg" id="profile_pic"></img>

          <form action="upload.php" method="post" enctype="multipart/form-data" style="text-align: center">
          <div class= "row align-items-center">
            <div class="col" style="text-align: center">
              <input type="file" name="imageToUpload" id="imageToUpload">
            </div>

            <div class="col" style="margin-right: 20px">
              <button class="btn remove"><i class="fa fa-upload"><text style="margin: 0px 7px;">upload</text></i></button>
              <button class="btn remove"><i class="fa fa-trash"><text style="margin: 0px 7px;">remove</text></i></button>
            </div>
          </div>
          </form>

        </div>
      </div>
    </div>
  </div>


<div class="area">
  <form action="/action_page.php">
    
    <div class="row">
      <div class="col-3">
        <label for="proname"><b>Project Name</b></label>
      </div>
      <div class="col-9">
        <input type="text" id="proname" name="proname" placeholder="Enter the project name..">
      </div>
    </div>
    <hr class="solid">
    




    <div id="add tools part">

      <div class="row justify-content-between">
        <div class="col-3">
          <label for="ad"><b>Add the tools used</b></label>
        </div>
          
          <div class="col-3">
            <button type="button" class="addbutton" data-toggle="modal" data-target="#myModal" onclick="addtool()"><a href="#" class="btn" style="color:white;">Add</a></button>
          </div>
        </div>

      <div class="row justify-content-center" id="table_tools" style='margin-top: 20px;'>
        <table class="tablestr" id="tooltable">
          <tr><th>tools..</th><th class = "tblclose"></th></tr>
          
        </table>        
      </div>
    
    </div>
    <hr class="solid">

    
    
    <div id="add reference part">

      <div class="row justify-content-between">
        <div class="col-3">
          <label for="ad"><b>Add the reference</b></label>
        </div>
          
          <div class="col-3">
            <button type="button" class="addbutton" data-toggle="modal" data-target="#myModal2" onclick="addref()"><a href="#" class="btn" style="color: white;">Add</a></button>
          </div>
      </div>

      <div class="row justify-content-center" id="table_refer" style='margin-top: 20px;'>
        <table class="tablestr" id="referencetable">
          <tr><th>reference..</th><th class = "tblclose"></th></tr>

        </table>        
      </div>
    
    </div>
    <hr class="solid">





    <div id="add members">
      <div class="row justify-content-between">
        <div class="col-3">
          <label for="ad"><b>Add members</b></label>
        </div>
          
        <div class="col-3">
          <button type="button" class="addbutton" data-toggle="modal" data-target="#myModal3" onclick="addmem()"><a href="#" class="btn" style="color: white;">Add</a></button>
        </div>
      </div>

      <div class="row" id="memcontainer">

      </div>
    </div>
    <hr class="solid">





    <div id="Add files">
      <div class="row justify-content-between">
        <div class="col">
          <label for="ad"><b>Add files</b><br>(save the file name which, best describes the file)</label>
        </div>
        
        <div class="col align-self-center"><input type="file" id="myFile" name="filename"></div>
        <div class="col-2 align-self-center">
          <button type="button" class="btn btn-success" onclick="addfile()">upload file</button>
        </div>
        <div class="col align-self-center" style="text-align: center">
        <label for="source">open source</label>
          <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
          </label>
        </div>
      </div>

      <div class="row" id="filecont">

      </div>
    </div>
    <hr class="solid">

    


    <div id="Add discription">
      <div class="row">
        <div class="col-3">
          <label for="ad"><b>Discription</b><br>(keep the discription short..)</label>
        </div>
      
        <div class="col-9">
          <span class="textarea" role="textbox" id="spankd" contenteditable></span>
        </div>
      </div>

      
    </div>




    


  </form>
</div>    

<input type="submit" value="submit" name="submit" style="margin: 20px;">




















<div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog" >
      
        <!-- Modal content-->
        <div class="modal-content" >
          <div class="modal-header">
            <h4 class="modal-title">Add tools</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body" id="addtools">

            <div class="row" style="margin: 10px;">
            <div class="col">
              <input type="text" id="toolname" name="toolsname" placeholder="Enter tool name..">
            </div>
          </div>

            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-success" onclick="addtltotbl()" data-dismiss="modal">Add</button>
          </div>

        </div>
        
      </div> 


</div>





<div class="modal fade" id="myModal2" role="dialog">
      <div class="modal-dialog" >
      
        <!-- Modal content-->
        <div class="modal-content" >
          <div class="modal-header">
            <h4 class="modal-title">Add reference</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body" id="addreferencepart">

            <div class="row" style="margin: 10px;">
                <div class="col">
                  <input type="text" id="refname" name="refname" placeholder="Enter reference..">
                </div>
            </div>

            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-success" onclick="addtreftotbl()" data-dismiss="modal">Add</button>
          </div>

        </div>
        
      </div> 

</div>




<div class="modal fade" id="myModal3" role="dialog">
      <div class="modal-dialog" >
      
        <!-- Modal content-->
        <div class="modal-content" >
          <div class="modal-header">
            <h4 class="modal-title">Add member</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <input type="text" id="memusn" name="memusn" placeholder="Enter member usn..">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-success" onclick="addmem()">Add</button>
          </div>

        </div>
        
      </div> 

      <template id="cardtemp"> 
            <div class="col-3" style="padding: 10px;">
              <div class="card">
                <img src="../images/p16.jpg" alt="Avatar" style="width:100%">
                <div class="container">
                  <h4 id="usn"><b>John Doe</b></h4>
                  <p><h6 id="branch">Computer Science and Enigineering</h6></p>
                  <div class="container" style="margin-bottom: 10px;">
                    <div class="dropup">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownoptions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        options
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownoptions">
                        <a class="dropdown-item" href="#">remove</a>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </template> 

</div>




<template id="filetemp"> <!--pdf display-->
  <div class="col-3">
    <div class="card">
      <img src="../images/p14.jpg" alt="Avatar" style="width:100%">
      <div class="container" style="margin: 10px;">
        <div class="dropup">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownoptions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            options
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownoptions">
            <a class="dropdown-item" href="#">download</a>
            <a class="dropdown-item" href="#">delete</a>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</template>

<template id="closebtn">
  <i class="fa fa-trash" class="btn"></i>
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






var tools = ["shish"];
function addtltotbl(){
  var toolrow = 1;
  var entry = document.getElementById("toolname").value;
  

  if(!entry){
    alert("fill the box");
    return;}
  else{
    var btn = document.getElementById("closebtn"); 
    var putdata = document.getElementById("tooltable");
    var newRow = putdata.insertRow(toolrow);
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    tools.push(entry);
  
  cell1.innerHTML = entry;
  cell2.appendChild(btn.content.cloneNode(true));

  toolrow++;
  }

}





var refers = ["shish"];
function addtreftotbl(){
  var refrow = 1;
  var entry = document.getElementById("refname").value;


  if(!entry){
    alert("fill the box");
    return;}
  else{
    var btn = document.getElementById("closebtn");
    var putdata = document.getElementById("referencetable");
    var newRow = putdata.insertRow(refrow);
    var cell1 = newRow.insertCell(0);
    var cell2 = newRow.insertCell(1);
    refers.push(entry);
    
  cell1.innerHTML = entry;
  cell2.appendChild(btn.content.cloneNode(true));
  refrow++;
  }

}


function yappa(){
  var temp = document.getElementById("spankd");
  temp.innerHTML = "shdkjja";
}

</script>

