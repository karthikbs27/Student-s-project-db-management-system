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

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin-top: 80px;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=number], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=password], select, textarea {
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



</style>
</head>

<body>




<div class="container">
    <form action="/action_page.php">

    <text>(These options are to retrive the password..)</text>
    
    
    <div class="row" style="padding-top: 20px">

        <div class="col">
            <div class="row align-items-center">
                <div class="col-3">
                    <label for="liked_dish">Dish you like</label>
                </div>
                <div class="col-9">
                    <input type="text" id="likeddish" name="likeddish" placeholder="Kabab, Dosa, pizza, Ramen ..">
                </div>
            </div>
        </div>

        <div class="col">
            <div class="row align-items-center">
                <div class="col-6">
                    <label for="lkno">fav/lucky number</label>
                </div>
                <div class="col-6">
                    <input type="number" id="lkno" name="lkno" placeholder="Choose the number..">
                </div>
            </div>
        </div>

    </div>

    
    <div class="row align-items-center" style="padding-top: 20px">
                <div class="col-6">
                    <label for="place_to_visit">Place that you want to visit</label>
                </div>
                <div class="col-6">
                    <input type="text" id="placetovisit" name="placetovisit" placeholder="Berlin, Helsinki, Tokyo, Denver ..">
                </div>
    </div>

    <div class="row align-items-center" style="padding-top: 20px">
                <div class="col-6">
                    <label for="pass">Password</label>
                </div>
                <div class="col-6">
                <input type="password" value="shish you" id="pass_word" name="pass_word">
                </div>
    </div>

    <div class="row align-items-center" style="padding-top: 20px">
                <div class="col-6">
                    <label for="pass">Confirm Password</label>
                </div>
                <div class="col-6">
                <input type="password" value="shish you" id="pass_word" name="pass_word">
                </div>
    </div>

    <div class="row align-items-center">
                <div class="col-6">
                    
                </div>
                <div class="col-6">
                <input type="checkbox" onclick="myFunction()">Show Password
                </div>
    </div>
    

    </form>
</div>


<div class="row justify-content-end" style="margin: 30px" >
    <input type="submit" value="Submit">
</div>

</body>



<script>
function myFunction() {
  var x = document.getElementById("pass_word");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

</html>