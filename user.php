<?php 
session_start();
$con=mysqli_connect('localhost','root','','SparksBank');
$name=$_POST['name'];
$q="select * from users where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$mail=$row['email'];
$amount=$row['amount'];
$_SESSION['name']=$name;

?>
<html>

<head>
    <title>
        <?php echo $name?>
    </title>
    <link rel="stylesheet" href="button.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: "Lato", sans-serif;
            margin: 0px;
            text-align: center;
        }
        
        .nav-ul {
            list-style-type: none;
            margin: 0;
            padding: 10px;
            overflow: hidden;
        }
        
        .nav-li {
            float: left;
        }
        
        .nav-li a {
            display: block;
            color: #010114;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            text-transform: uppercase;
        }
        
        .nav-li a:hover:not(.active) {
            color: #444444;
            /* cursor: pointer; */
            text-decoration: underline;
        }
        
        table {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            border: 4px solid black;
            border-collapse: collapse;
        }
        
        th {
            color: black;
            font-size: 24px;
            padding: 16px;
        }
        
        td {
            font-size: 22px;
            padding: 11px 16px 11px 18px;
        }
        
        tr {
            transition: background 0.3s, box-shadow 0.3s;
        }
        
        th,
        td {
            border-collapse: collapse;
            border: 2px groove black;
        }
        
        body {
            background: white;
            /* background-image:url("images/134.jpg");
			background-position: center;
			background-repeat: no-repeat;
			background-size:cover; */
        }
        
        .flat-table-1 tr:hover {
            background: rgba(0, 0, 0, 0.19);
        }
        /* .btn1 {
            text-align: center;
            padding-top: 2px;
            border-radius: 5px;
            font-size: 20px;
            background: black;
            color: white;
        } */
        
        .btn:hover {
            background-color: rgb(253, 247, 247);
            cursor: pointer;
            filter: invert(100%);
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
    <ul class="nav-ul" style="height:53px;">
        <a href="index.php">
            <li class="nav-li"><button class="btn"><i class="fa fa-home" style="font-size:24px"></i></button></li>
        </a>
        <li class="nav-li" style="float:right;height:53px;text-align:center;font-size:20px">
            <a class="nav-link">
                <?php echo $name?>
            </a>
        </li>
    </ul>
    <br><br><br>
    <div class="view">
        <table class="flat-table-1">
            <tr>
                <th>Name</th>
                <td>
                    <?php echo $name?>
                </td>
            </tr>

            <tr>
                <?php  
					$row=mysqli_fetch_array($result);
				?>
                <th>Email</th>
                <td>
                    <?php echo $mail?>
                </td>
            </tr>

            <tr>
                <?php  
					$row=mysqli_fetch_array($result);
				?>
                <th> Credits</th>
                <td>
                    <?php echo $amount?>
                </td>
            </tr>


        </table>

    </div>
    <br>
    <br>
    <div class="buttons">
        <a href="transfer_to.php">
            <button class="glow-on-hover"> Transfer To</button>
        </a>
    </div>
    <br>
    <br>


    <div class="buttons">
        <a href="ministatement.php">
            <button class="glow-on-hover">Mini Statement</button>
        </a>
    </div>



</body>

</html>