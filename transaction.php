<?php
session_start();
$con=mysqli_connect('localhost','root','','SparksBank');
$q="select *from mini_statement";
$result=mysqli_query($con,$q);
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Transaction</title>
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
                color: black;
                font-size: 26px;
                padding: 16px;
            }
            
            td {
                font-size: 23px;
                color: black;
                padding: 10px 20px 10px 22px;
            }
            
            tr {
                transition: background 0.3s, box-shadow 0.3s;
            }
            
            th,
            td {
                border-collapse: collapse;
                border: 2px groove black;
            }
            
            h2 {
                padding: 20px;
                font-size: 35px;
                color: #805a46;
                text-shadow: 1px 1px black;
                text-align: center;
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
                background-color: rgb(80, 78, 78);
                cursor: pointer;
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
        </ul><br><br><br><br><br><br>

        <table class="flat-table-1">
            <tr>
                <th>Sender</th>
                <th>Beneficiary</th>
                <th>Amount</th>
            </tr>
            <tr>

                <?php while($row = $result->fetch_assoc()) { ?>

                <tr>
                    <td>
                        <?php echo $row["sender"]; ?>
                    </td>
                    <td>
                        <?php echo $row["receiver"]; ?>
                    </td>
                    <td>
                        <?php echo $row["amount"]; ?>
                    </td>
                </tr>
                <?php } ?>
        </table>
        <br>
        <br>
        <form action="index.php" method="post">
            <div class="buttons">
                <button class="glow-on-hover" type="submit" name="name">BACK</button>
            </div>
        </form>

    </body>

    </html>