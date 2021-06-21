<?php
session_start();
$con=mysqli_connect('localhost','root','','SparksBank');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Select User</title>
        <link rel="stylesheet" href="button.css">
        <style>
            body {
                text-align: center;
            }
            
            body {
                object-fit: cover;
            }
            
            html,
            body {
                height: 100%;
                width: 100%;
            }
            
            html {
                display: table;
                margin: auto;
            }
            
            body {
                display: table-cell;
                vertical-align: middle;
            }
            
            .center {
                display: inline-block;
                padding: 50px;
                border: 2px ridge black;
            }
            
            .ho {
                padding-top: 50px;
            }
            
            .butto1 {
                background-color: #bebebe;
            }
            
            .button {
                border-radius: 10px;
                border: 1px solid black;
                height: 51px;
                width: 218px;
                margin: auto;
                overflow: hidden;
                cursor: pointer;
                color: white;
                font-size: 17px;
                font-weight: bold;
                background: black;
            }
            
            .button:hover {
                background-color: rgb(80, 79, 79);
            }
            
            .glow-on-hover {
                width: 220px;
                height: 51px;
                outline: none;
                color: #FFFFFF;
                font-size: 18px;
                background: black;
                text-shadow: 0.7px 0.7px black;
                overflow: hidden;
                cursor: pointer;
                position: relative;
                z-index: 0;
                border-radius: 10px;
                border: 1px solid #FFFFFF;
            }
            
            .glow-on-hover:before {
                content: '';
                background: rgb(80, 79, 79);
                color: rgb(255, 255, 255);
                position: absolute;
                top: -2px;
                left: -2px;
                background-size: 400%;
                z-index: -1;
                filter: blur(5px);
                width: calc(100% + 4px);
                height: calc(100% + 4px);
                animation: glowing 20s linear infinite;
                opacity: 0;
                transition: opacity .3s ease-in-out;
                border-radius: 10px;
            }
        </style>
        <script>
            function random_function() {
                var a = document.getElementById("input").value;
                if (a === "Naveen") {
                    var arr = ["Vikas", "Gaurav", "Virat", "Vibhor", "Ashish", "Divyansh", "Shashank", "Puneet", "Ashok"];
                } else if (a === "Vikas") {
                    var arr = ["Naveen", "Gaurav", "Virat", "Vibhor", "Ashish", "Divyansh", "Shashank", "Puneet", "Ashok"];
                } else if (a === "Gaurav") {
                    var arr = ["Naveen", "Vikas", "Virat", "Vibhor", "Ashish", "Divyansh", "Shashank", "Puneet", "Ashok"];
                } else if (a === "Virat") {
                    var arr = ["Naveen", "Vikas", "Gaurav", "Vibhor", "Ashish", "Divyansh", "Shashank", "Puneet", "Ashok"];
                } else if (a === "Vibhor") {
                    var arr = ["Naveen", "Vikas", "Gaurav", "Virat", "Ashish", "Divyansh", "Shashank", "Puneet", "Ashok"];
                } else if (a === "Ashish") {
                    var arr = ["Naveen", "Vikas", "Gaurav", "Virat", "Vibhor", "Divyansh", "Shashank", "Puneet", "Ashok"];
                } else if (a === "Divyansh") {
                    var arr = ["Naveen", "Vikas", "Gaurav", "Virat", "Vibhor", "Ashish", "Shashank", "Puneet", "Ashok"];
                } else if (a === "Shashank") {
                    var arr = ["Naveen", "Vikas", "Gaurav", "Virat", "Vibhor", "Ashish", "Divyansh", "Puneet", "Ashok"];
                } else if (a === "Puneet") {
                    var arr = ["Naveen", "Vikas", "Gaurav", "Virat", "Vibhor", "Ashish", "Divyansh", "Shashank", "Ashok"];
                } else if (a === "Ashok") {
                    var arr = ["Naveen", "Vikas", "Gaurav", "Virat", "Vibhor", "Ashish", "Divyansh", "Shashank", "Puneet"];
                }
                var string = "";

                for (i = 0; i < arr.length; i++) {
                    string = string + "<option value=" + arr[i] + ">" + arr[i] + "</option>";
                }
                document.getElementById("output").innerHTML = string;
            }
        </script>
    </head>

    <body>
        <h1 style=" font-size:45px;;text-shadow: 1.5px 1.5px black; text-decoration: underline;">Transfer Amount</h1><br>
        <div class="center">
            <form action="updatecredit.php" method="post">
                <label for="sender" align="left" style="color: black">Senders Name: &nbsp;</label>
                <select id="input" name="sender" style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Naveen">Naveen</option>
			<option value="Vikas">Vikas</option>
			<option value="Gaurav">Gaurav</option>
			<option value="Virat">Virat</option>
			<option value="Vibhor">Vibhor</option>
			<option value="Ashish">Ashish</option>
			<option value="Divyansh">Divyansh</option>
			<option value="Shashank">Shashank</option>
			<option value="Puneet">Puneet</option>
			<option value="Ashok">Ashok</option>
		</select><br><br>
                <label for="receiver" align="left" style="color: black">Receiver Name:&nbsp;</label>
                <select id="output" name="receiver" style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()">
			<option>Select Name</option>
		</select><br><br>
                <label for="transfer" align="left" style="color: black">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
                <input type="number" name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
                <div class="button1">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
                </div>
            </form>
        </div><br><br><br>
        <div class="buttons">
            <a href="index.php">
                <button class="glow-on-hover">HOME</button>
            </a>
        </div>
    </body>

    </html>