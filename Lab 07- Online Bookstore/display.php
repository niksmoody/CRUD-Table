<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
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
            text-align: left;
            padding: 20px 40px 0px 40px;
        }

        .main span.heading{
            font-size: 40px;
            color: #000f2b;
        }

        table{
            width: 100%;
            text-align: center;
            margin-top: 30px;
        }

        td{
            padding: 15px;
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
        <span class="heading">Books</span><br>
        <hr>
        <table>
            <tr>
                <th>Sr. No.</th>
                <th>Book Name</th>
                <th>Author</th>
                <th>No. of Copies</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Divergent</td>
                <td>Veronica Roth</td>
                <td>20</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Pride and Prejudice</td>
                <td>Jane Austen</td>
                <td>29</td>
            </tr>
            <tr>
                <td>3</td>
                <td>We Were Liars</td>
                <td>E. Lockhart</td>
                <td>13</td>
            </tr>
            <tr>
                <td>4</td>
                <td>The Silent Patient</td>
                <td>Alex Michaelides</td>
                <td>21</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Ugly Love</td>
                <td>Colleen Hoover</td>
                <td>41</td>
            </tr>
        </table>
    </div>
</body>
</html>

<!-- Color Palette:
Dark Green: #61892F
Light Green: #86C232
Darkest Grey: #222629
Darker Grey: #474B4F
Grey: #6B6E70 -->