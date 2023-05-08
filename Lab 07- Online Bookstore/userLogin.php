<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        html{
            font-family: sans-serif;
        }

        body{
            align-items: center;
            background: linear-gradient(to top, #fff1eb 0%, #ace0f9 100%);
            display: flex;
            justify-content: center;
            text-align: center;
            height: 100vh;
        }

        .form{
            /* background-color: #15172b; */
            background-color: #91a1c720;
            border-radius: 20px;
            box-sizing: border-box;
            height: 400px;
            padding: 20px;
            width: 320px;
        }

        .title{
            color: #000f2b;
            font-family: sans-serif;
            font-size: 36px;
            font-weight: 600;
            margin-top: 30px;
        }

        .subtitle{
            color: #000f2b;
            font-family: sans-serif;
            font-size: 16px;
            font-weight: 600;
            margin-top: 10px;
        }

        .input-container{
            height: 50px;
            position: relative;
            width: 100%;
        }

        .ic1{
            margin-top: 40px;
        }
        .ic2{
            margin-top: 30px;
        }

        .input{
            background-color: #000f2b;
            border-radius: 12px;
            border: 0;
            box-sizing: border-box;
            color: #eee;
            font-size: 18px;
            height: 100%;
            outline: 0;
            padding: 4px 20px 0px;
            width: 100%;
        }

        /* .cut{
            background-color: #15172b;
            border-radius: 10px;
            height: 20px;
            left: 20px;
            position: absolute;
            top: -20px;
            transform: translateY(0);
            transition: transform 200ms;
            width: 76px;
        }

        .cut-short{
            width: 50px;
        }

        .input:focus ~ .cut,
        .input:not(:placeholder-shown) ~ .cut {
            transform: translateY(8px);
        } */

        .placeholder{
            color: #65657b;
            font-family: sans-serif;
            left: 20px;
            line-height: 30px;
            pointer-events: none;
            /* position: absolute; */
            /* transform-origin: 0 50%; */
            /* transition: transform 200ms, color 200ms; */
            top: 20px;
        }

        /* .input:focus ~ .placeholder,
        .input:not(:placeholder-shown) ~ .placeholder {
            transform: translateY(-30px) translateX(10px) scale(0.75);
        } */

        /* .input:not(:placeholder-shown) ~ .placeholder {
            color: #808097;
        } */

        /* .input:focus ~ .placeholder {
            color: #dc2f55;
        } */

        .submit{
            appearance: none;
            text-decoration: none;
            background-color: #91a1c7;
            border: none;
            border-radius: 15px;
            border: 0;
            box-sizing: border-box;
            font-family: Roobert,-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
            color: #FFFFFF;
            cursor: pointer;
            font-size: 18px;
            height: 50px;
            margin-top: 38px;
            outline: 0;
            text-align: center;
            width: 100%;
            transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            will-change: transform;
        }

        .button:disabled {
            pointer-events: none;
        }

        .submit:hover{
            box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
            transform: translateY(-2px);
            background-color: #06b;
        }
    </style>
</head>
<body>
    <form action="./userProcess.php" method="POST">
        <div class="form">
            <div class="title">Welcome</div>
            <div class="subtitle">Let's log you in!</div>
            <div class="input-container ic2">
                <input type="email" id="email" class="input" name="email" placeholder=" " required>
                <div class="cut cut-short"></div>
                <label for="email" class="placeholder">Email</label>
            </div>
            <div class="input-container ic2">
                <input type="password" id="password" class="input" name="password" placeholder=" " required>
                <div class="cut"></div>
                <label for="password" class="placeholder">Password</label>
            </div>
            <button class="submit" type="text">Log in</button>
        </div>
    </form>
</body>
</html>