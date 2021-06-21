<?php
session_start();
$con=mysqli_connect('localhost','root','','SparksBank');
$name1=$_SESSION['name'];
$q="select sender,amount from mini_statement where receiver='$name1'";
$result=mysqli_query($con,$q);
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Mi7ni Statement</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="button.css">
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
                padding: 8px 10px;
                text-decoration: none;
                text-transform: uppercase;
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
                font-size: 26px;
                padding: 16px;
            }
            
            td {
                font-size: 23px;
                color: white;
                padding: 10px 20px 10px 22px;
            }
            
            tr {
                transition: background 0.3s, box-shadow 0.3s;
            }
            
            th,
            td {
                border-collapse: collapse;
                border: 2px groove black;
                color: black;
            }
            
            h2 {
                padding: 20px;
                font-size: 35px;
                text-align: center;
                text-decoration: underline;
            }
            
            .btn {
                background-color: black;
                border: none;
                color: white;
                padding: 12px 16px;
                font-size: 23px;
                cursor: pointer;
            }
            
            .buttons {
                right: 42%;
                text-align: center;
            }
            
            .btn:hover {
                background-color: grey;
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
        </ul><br><br><br>
        <h2>
            <?php echo "Mini Statement of ".$name1?>
        </h2>
        <table class="flat-table-1">
            <tr>
                <th>Sender</th>
                <th>Credits</th>
            </tr>
            <tr>

                <?php while($row = $result->fetch_assoc()) { ?>

                <tr>
                    <td>
                        <?php echo $row["sender"]; ?>
                    </td>
                    <td>
                        <?php echo $row["amount"]; ?>
                    </td>
                </tr>
                <?php } ?>
        </table>
        <br>
        <br>
        <div>
            <form action="user.php" method="post">
                <div class="buttons">
                    <br><button class="glow-on-hover" type="submit" name="name" value="<?php echo $name1 ?>">BACK</button>

                </div>
            </form>

    </body>

    </html>