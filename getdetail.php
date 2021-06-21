<?php 
session_start();
$con=mysqli_connect('localhost','root','','SparksBank');

$q="select * from users ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);


?>
<html>

<head>
    <title>viewUser</title>
    <!-- <link rel="stylesheet" href="button.css"> -->
    <link rel="stylesheet" href="csss/index_button.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
    <style>
        body {
            text-align: center;
        }
        
        .flat-table-1 {
            background: #ececec;
        }
        
        .flat-table-1 tr:hover {
            background: rgba(0, 0, 0, 0.19);
        }
        
        h1 {
            font-family: Arial, Times, serif;
        }
        
        table {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            border: 4px solid black;
            border-collapse: collapse;
        }
        
        th {
            color: violet;
            font-size: 24px;
            padding: 23px 75px;
        }
        
        td {
            text-align: center;
            font-size: 22px;
            color: #f4f4f4;
            padding: 0px 20px 0px 20px;
        }
        
        tr {
            transition: background 0.3s, box-shadow 0.3s;
        }
        
        th,
        td {
            border-collapse: collapse;
            border: 2px groove black;
            text-shadow: 1px 1px black;
            color: black;
        }
        
        .css-button {
            margin-left: auto;
            margin-right: auto;
        }
        
        .button1 {
            text-align: center;
            padding-top: 2px;
            border-radius: 5px;
            font-size: 20px;
            cursor: pointer;
            background: black;
            color: white;
        }
        
        .button1:hover {
            background-color: rgb(56, 56, 56);
        }
        
        .btn-images {
            height: 99%;
        }
        
        .view {
            top: 50%;
            padding-top: 20px;
            text-align: center;
        }
        
        .ho {
            padding-top: 50px;
            padding-bottom: 100px;
        }
        
        .glow-on-hover {
            /* width: 220px; */
            height: 51px;
            /* outline: none;
            color: #FFFFFF;
            font-size: 18px;
            background: rgb(207, 6, 6);
            text-shadow: 0.7px 0.7px black;
            overflow: hidden; */
            cursor: pointer;
            position: relative;
            /* z-index: 0; */
            border-radius: 10px;
            border: 1px solid #FFFFFF;
        }
        
        .glow-on-hover:before {
            content: '';
            background: #2c2b2b;
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
        
        .glow-on-hover:active {
            color: #8cbed6;
        }
        
        .glow-on-hover:active:after {
            background: transparent;
        }
        
        .glow-on-hover:hover:before {
            opacity: 1;
        }
        
        .glow-on-hover:after {
            z-index: -1;
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            border-radius: 10px;
            border: 2px solid #000000;
            background: transparent;
        }
        
        @keyframes glowing {
            0% {
                background-position: 0 0;
            }
            50% {
                background-position: 400% 0;
            }
            100% {
                background-position: 0 0;
            }
        }
        
        body {
            font-family: 'Baloo Bhai 2', cursive;
        }
    </style>

</head>

<body>
    <h1 style="color: black;text-decoration: underline; font-family: 'Baloo Bhai 2';">Users Information</h1>
    <table class="flat-table-1">
        <thead>
            <th>NO.</th>
            <th>Users Name</th>
            <th>Email Id</th>
            <th>Credit</th>
            <th></th>
        </thead>
        <tbody>
            <tr>
                <?php  
				$row=mysqli_fetch_array($result);
			?>
                <td> 1</td>
                <td>
                    <?php echo  $row["name"]; ?>
                </td>
                <td>
                    <?php echo  $row["email"]; ?>
                </td>
                <td>
                    <?php echo  $row["amount"]; ?>
                </td>
                <td>
                    <form action="user.php" method="post" class="view">
                        <button class="button1" type="submit" name="name" value="Naveen">View</button>
                    </form>
                </td>
            </tr>
            <tr>
                <?php  
				$row=mysqli_fetch_array($result);
			?>
                <td> 2</td>
                <td>
                    <?php echo  $row["name"]; ?>
                </td>
                <td>
                    <?php echo  $row["email"]; ?>
                </td>
                <td>
                    <?php echo  $row["amount"]; ?>
                </td>
                <td>
                    <form action="user.php" method="post" class="view">
                        <button class="button1" type="submit" name="name" value="Vikas">View</button>
                    </form>
                </td>
            </tr>
            <tr>
                <?php  
				$row=mysqli_fetch_array($result);
			?>
                <td> 3</td>
                <td>
                    <?php echo  $row["name"]; ?>
                </td>
                <td>
                    <?php echo  $row["email"]; ?>
                </td>
                <td>
                    <?php echo  $row["amount"]; ?>
                </td>
                <td>
                    <form action="user.php" method="post" class="view">
                        <button class="button1" type="submit" name="name" value="Gaurav">View</button>
                    </form>
                </td>
            </tr>
            <tr>
                <?php  
				$row=mysqli_fetch_array($result);
			?>
                <td> 4</td>
                <td>
                    <?php echo  $row["name"]; ?>
                </td>
                <td>
                    <?php echo  $row["email"]; ?>
                </td>
                <td>
                    <?php echo  $row["amount"]; ?>
                </td>
                <td>
                    <form action="user.php" method="post" class="view">
                        <button class="button1" type="submit" name="name" value="Virat">View</button>
                    </form>
                </td>


            </tr>
            <tr>
                <?php  
				$row=mysqli_fetch_array($result);
			?>
                <td> 5</td>
                <td>
                    <?php echo  $row["name"]; ?>
                </td>
                <td>
                    <?php echo  $row["email"]; ?>
                </td>
                <td>
                    <?php echo  $row["amount"]; ?>
                </td>
                <td>
                    <form action="user.php" method="post" class="view">
                        <button class="button1" type="submit" name="name" value="Vibhor">View</button>
                    </form>
                </td>
            </tr>
            <tr>
                <?php  
				$row=mysqli_fetch_array($result);
			?>
                <td> 6</td>
                <td>
                    <?php echo  $row["name"]; ?>
                </td>
                <td>
                    <?php echo  $row["email"]; ?>
                </td>
                <td>
                    <?php echo  $row["amount"]; ?>
                </td>
                <td>
                    <form action="user.php" method="post" class="view">
                        <button class="button1" type="submit" name="name" value="Ashish">View</button>
                    </form>
                </td>
            </tr>
            <tr>
                <?php  
     
				$row=mysqli_fetch_array($result);
			?>
                <td> 7</td>
                <td>
                    <?php echo  $row["name"]; ?>
                </td>
                <td>
                    <?php echo  $row["email"]; ?>
                </td>
                <td>
                    <?php echo  $row["amount"]; ?>
                </td>
                <td>
                    <form action="user.php" method="post" class="view">
                        <button class="button1" type="submit" name="name" value="Divyansh">View</button>
                    </form>
                </td>
            </tr>
            <tr>
                <?php   
				$row=mysqli_fetch_array($result);
			?>
                <td> 8</td>
                <td>
                    <?php echo  $row["name"]; ?>
                </td>
                <td>
                    <?php echo  $row["email"]; ?>
                </td>
                <td>
                    <?php echo  $row["amount"]; ?>
                </td>
                <td>
                    <form action="user.php" method="post" class="view">
                        <button class="button1" type="submit" name="name" value="Shashank">View</button>
                    </form>
                </td>
            </tr>
            <tr>
                <?php  
				$row=mysqli_fetch_array($result);
			?>
                <td> 9</td>
                <td>
                    <?php echo  $row["name"]; ?>
                </td>
                <td>
                    <?php echo  $row["email"]; ?>
                </td>
                <td>
                    <?php echo  $row["amount"]; ?>
                </td>
                <td>
                    <form action="user.php" method="post" class="view">
                        <button class="button1" type="submit" name="name" value="Puneet">View</button>
                    </form>
                </td>
            </tr>
            <tr>
                <?php  
				$row=mysqli_fetch_array($result);
			?>
                <td> 10</td>
                <td>
                    <?php echo  $row["name"]; ?>
                </td>
                <td>
                    <?php echo  $row["email"]; ?>
                </td>
                <td>
                    <?php echo  $row["amount"]; ?>
                </td>
                <td>
                    <form action="user.php" method="post" class="view">
                        <button class="button1" type="submit" name="name" value="Ashok">View</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table><br><br>

    <div class="buttons">
        <a href="index.php">
            <button class="glow-on-hover"><img src="images/home.png" class="btn-images"></button>
        </a>
    </div>
</body>

</html>