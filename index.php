<html>

<head>
    <title>Sparks Bank</title>
    <link rel="shortcut icon" href="images/cm.png">

    <link rel="stylesheet" href="csss/index_button.css">
    <style>
        button {
            background-color: #8cbed6;
        }
        
        body {
            text-align: center;
            background-image: url("images/sparkbank.png");
            background-position: left;
            background-repeat: no-repeat;
            
        }
        
        .primary_btn1 {
            
            display: inline-block;
            background: #05050500;
            
            padding: 0px 50px;
            margin-left: 600px !important;
           
            font-family: 'Baloo Bhai 2';
            margin-left: 600px;
            font-size: 14px;
            font-weight: 500;
            line-height: 48px;
            
            border-radius: 15px;
            
            font-weight: 600;
            text-transform: uppercase;
           
            transition: all 300ms linear 0s;
            cursor: pointer;
			font-size: 1.5rem;
        }
        
        .primary_btn1:hover {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>

    <div id="header" class="header">
        <br>
        <h1> Welcome to Spark's Bank </h1>

    </div>
    <div id="section">
        <table>
            <tr></tr>
            <tr><br>
                <a href="getdetail.php">
                    <button class="primary_btn1" id="button " type="button" href="getdetail.php">View users</button>
                </a>


            </tr>

            <tr>
                <br> <br> <br>
                <a href="transfer.php">
                    <button class="primary_btn1" id="button" type="button">Credit Transfer</button>
                </a>

            </tr>

            <tr>
                <br> <br> <br>
                <a href="transaction.php">
                    <button class="primary_btn1" id="button" type="button">All Transaction</button>
                </a>

        </table>
    </div>

</body>

</html>