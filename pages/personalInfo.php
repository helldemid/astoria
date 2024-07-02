<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PersonalInformation</title>

    <style>

    body, html {
        background-color: #ebecf0;
        font-family: 'Montserrat', sans-serif;
        letter-spacing: -0.2px;
        font-size: 16px;
    }
        .personalHeader {
            padding-left: 50px;
            padding-top: 50px;
        }
        .shortInfo {
            margin-top: 30px;
        }
        .shortInfo > p {
            margin: 0 10px !important;
            font-size: 18px;
        }
        .functions {
            display: flex;
            flex-wrap: wrap;
            max-width: 1300px;
            justify-content: center;
            margin-left: 4.86%;
        }

        button {
            color: #61677c;
            font-weight: bold;
            box-shadow: -5px -5px 20px #fff, 5px 5px 20px #babecc;
            transition: all 0.2s ease-in-out;
            cursor: pointer;
            font-weight: 600;
            border-radius: 8px;
            line-height: 0;
            width: 280px;
            height: 150px;
            margin: 20px;
            font-size: 17.2px;
            border: solid transparent;
        }
        button:hover {
            box-shadow: -2px -2px 5px #fff, 2px 2px 5px #babecc;
        }
        button:active {
            box-shadow: inset 1px 1px 2px #babecc, inset -1px -1px 2px #fff;
        }
    </style>
</head>
<body>

    <?php
        require_once 'db.php';
        session_start();
    ?>
    <div class="personalHeader">
        <img src="../media/pHeaderLogo.png" width="300px">
        <div class="shortInfo">
            <p>Вітамед</p>
            <p>Філія: Vitamed</p>
            <p>В роботі: 3 картриджа</p>
        </div>
    </div>
    
    <h2> Мої персональні дані</h2>



</body>
</html>