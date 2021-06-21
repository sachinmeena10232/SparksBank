<?php
session_start();
$con=mysqli_connect('localhost','root','','SparksBank');
$name1=$_SESSION['name'];
$q="select name from users where not name='$name1'";
$result=mysqli_query($con,$q);
?>


    <html>

    <head>
        <title>Transfer</title>
        <link rel="stylesheet" href="button.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .nav-ul {
                list-style-type: none;
                margin: 0;
                padding: 5px;
                overflow: hidden;
            }
            
            .nav-li {
                float: left;
            }
            
            .nav-li a {
                display: block;
                color: #010114;
                text-align: center;
                padding: 5px 5px;
                text-decoration: none;
                text-transform: uppercase;
            }
            
            .form {
                text-align: center;
            }
            
            .button {
                text-align: center;
            }
            
            button {
                border-radius: 10px;
                background-color: white;
            }
            
            button:hover {
                background-color: black;
            }
            
            table {
                padding: 50px;
                border: 2px ridge black;
            }
            
            .btn {
                background-color: black;
                border: none;
                color: white;
                padding: 12px 16px;
                font-size: 23px;
                cursor: pointer;
            }
            
            .btn:hover {
                background-color: dogerblue;
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
    </head>

    <body>
        <ul class="nav-ul">
            <a href="index.php">
                <li class="nav-li"><button class="btn"><i class="fa fa-home"></i></button></li>
            </a>
        </ul>
        <center>
            <div class="view">
                <br><br>
                <h2 style=" font-size:45px;color:black; text-decoration:underline">Transfer Amount</h2>
                <form action="checkcredit.php" method="post">
                    <div class="border">
                        <table>
                            <tr>
                                <td style="font-size:12pt;color:black;">
                                    <label for="sender" align="left">Receiver Name:</label> &nbsp; <select name="receiver" style="font-size: 12pt; height: 28px; width:290px;">
           <?php while($row = $result->fetch_assoc()) { ?>
			<option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
			<?php } ?>
			</td>
		</tr><br>
		<tr>
			<td style="font-size:12pt;color:black;">
			<br><label for="transfer">Amount:</label> 
			 &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<input type="number" name="transfer" style="font-size: 12pt; height: 28px; width:290px;" required></td>
		</tr>
       <tr>
			<td>
				<div class="button">
				<br> &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;<button type="submit" class="c" onMouseOver="this.style.color='white'"onMouseOut="this.style.color='black'" value="Credit" style="color:black;font-size:18px;height:40px; width:100px; cursor:pointer">Transfer</button>
				</div>
		   </td>
        </tr>
       </table>
	   </div>
      </form>
    </div><br>
	<form action="user.php" method="post">
			<div class="buttons">
				<button class="glow-on-hover" type="submit" name="name" value="<?php echo $name1 ?>">BACK</button>
			</div>
	</form>
</center>
</body>
</html>