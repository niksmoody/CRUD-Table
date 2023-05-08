<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        html{
            height: 100%;
            font-family: sans-serif;
            /* background: radial-gradient(circle at -8.9% 51.2%, #6B6E70 0%, #6B6E70 15.9%, #474B4F 15.9%, #474B4F 24.4%, #222629 24.5%, #222629 66%); */
            /* background: linear-gradient(112.1deg, rgb(32, 38, 57) 11.4%, rgb(63, 76, 119) 70.2%); */
            background: linear-gradient(to top, #fff1eb 0%, #ace0f9 100%);
            z-index: 9;
        }

        body{
            margin: 0;
            padding: 0;
        }

        ul{
            width: 100%;
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #91a1c720;
            
        }

        li{
            float: right;
        }

        li a{
            display: block;
            color: #000f2b;
            font-weight: bold;
            text-align: center;
            padding: 20px 30px;
            text-decoration: none;
            font-size: 20px;
        }

        li a:hover{
            color: #06b;
        }

        .main{
            text-align: center;
            padding: 130px 0px 0px 0px;
        }

        .main span.heading{
            font-size: 150px;
            color: #000f2b;
        }

        .subtext{
            color: #000f2b;
            font-size: 23px;
            margin-left: 30px;
            /* float: right; */
            /* margin-right: 50px; */
        }

        .button{
            appearance: none;
            text-decoration: none;
            background-color: #91a1c7;
            border: none;
            border-radius: 15px;
            margin-top: 30px;
            box-sizing: border-box;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-block;
            font-family: Roobert,-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
            font-size: 20px;
            font-weight: 600;
            line-height: normal;
            /* margin: 60px 0px 0px 30px; */
            min-height: 60px;
            min-width: 0;
            outline: none;
            padding: 16px 24px;
            text-align: center;
            transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            width: 15%;
            will-change: transform;
        }

        .button:disabled {
            pointer-events: none;
        }

        .button:hover {
            box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
            transform: translateY(-2px);
            background-color: #06b;
        }

        .button:active {
            box-shadow: none;
            transform: translateY(0);
        }

        .button a{
            text-decoration: none;
            color: white;
            display: block;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </div>
    <div class="main">
        <span class="heading">Book It</span><br>
        <span class="subtext">Pune's largest online bookstore. Register today!</span> <br>
        <button class="button" role="button"><a href="./userLogin.php">Login</button><br>
        <button class="button" role="button"><a href="./register.php">Register</button><br>
        
    </div>
    <!-- <div class="subtext"> -->
            <!-- Not a user? -->
            <!-- <button class="button">Login as admin</button> -->
        </div>
</body>
</html>

<!-- Color Palette:
Dark Green: #61892F
Light Green: #86C232
Darkest Grey: #222629
Darker Grey: #474B4F
Grey: #6B6E70 -->