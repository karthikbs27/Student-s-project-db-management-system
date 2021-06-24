<!DOCTYPE html>
<html>
<head>
	<title>Project Management Home</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">


    <style>
        *{margin:0; padding:0; box-sizing: border-box; font-family: 'Josefin Sans';}

        body, html {
            height: 100%;
            margin: 0;
            position: center;
        }
    
        .imagecont{
            background-image: url("../images/studentpic.jpg");
            height: 80%; 

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            
        }

        .vertical-center{
            margin: 0;
            position: absolute;
            top: 70%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        button {
            background-color: black;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: auto;
        }

        button:hover {
            opacity: 0.8;
        }

        .linkbutton{
            color: white;
        }

        .linkbutton:hover{
            color: gray;
        }
    
    </style>
</head>
<body>
    <div class="imagecont"></div>
    <div class="vertical-center">
            <div class="row">
                <div class="col">
                <text><b>Password reset complete..</b></text>
                </div>
            </div>
            
            <button type="submit"><a href="index.php" class="linkbutton">continue search..</a></button>
    </div>
</body>
</html>
