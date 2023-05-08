<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error:(</title>
    <style>
        html{
            height: 100%;
            font-family: sans-serif;
            background: linear-gradient(to top, #fff1eb 0%, #ace0f9 100%);
        }

        .container{
            display: flex;
            justify-content: space-around;
        }

        .text{
            padding: 150px 0px 0px 150px;
        }

        .text span.heading{
            font-size: 150px;
            color: #000f2b;
        }

        .subtext{
            color: #000f2b;
            font-size: 23px;
            margin-left: 12px;
            margin-top:20px;
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
            margin: 55px 0px 0px 6px;
            min-height: 60px;
            min-width: 0;
            outline: none;
            padding: 16px 24px;
            text-align: center;
            transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            /* width: 24%; */
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
    <div class="container">
        <div class="text">
            <span class="heading">Error!</span><br>
            <span class="subtext">Please recheck and enter the correct credentials!</span><br>
            <button class="button" role="button"><a href="./userLogin.php">Login again</button>
        </div>
        
        <div class="image">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_0pgmwzt3.json"  background="transparent"  speed="1"  style="width: 500px; height: 500px;"  loop  autoplay></lottie-player>
        </div>
    </div>
</body>
</html>