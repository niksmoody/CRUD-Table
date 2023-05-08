<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - MYSQL - CRUD</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</head>

<body>
    <section>
        <h1 style="text-align: center;margin: 50px 0;">PHP CRUD operations with MySQL</h1>
        
        <div class="container" style="text-align: center;">
            <form action="adddata.php" method="post">
               <div class="row">
                    <div class="form-group col-lg-2">
                        <label for="">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-2">
                        <label for="">Place</label>
                        <input type="text" name="place" id="place" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-2">
                        <label for="">Animal</label>
                        <input type="text" name="animal" id="animal" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-2">
                        <label for="">Thing</label>
                        <input type="text" name="thing" id="thing" class="form-control" required>
                    </div>

                    <div class="form-group col-lg-2" style="display: grid;align-items:  flex-end;">
                        <input type="submit" name="submit" id="submit" class="btn btn-primary">
                    </div>
               </div>
            </form>
        </div>
    </section>

    <section style="margin: 50px 0;">
        <div class="container">
            <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Place</th>
                    <th scope="col">Animal</th>
                    <th scope="col">Thing</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                     
                    <?php 
                        require_once "conn.php";
                        $sql_query = "SELECT * FROM tab";
                        if ($result = $conn ->query($sql_query)) {
                            while ($row = $result -> fetch_assoc()) { 
                                $id = $row['id'];
                                $name = $row['name'];
                                $place = $row['place'];
                                $animal = $row['animal'];
                                $thing = $row['thing'];
                    ?>
                    
                    <tr class="trow">
                        <td><?php echo $id; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $place; ?></td>
                        <td><?php echo $animal; ?></td>
                        <td><?php echo $thing; ?></td>
                        <td><a href="updatedata.php?id=<?php echo $Id; ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href​="deletedata.php?id=<?php echo $Id; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>

                    <?php
                            } 
                        } 
                    ?>
                </tbody>
              </table>
        </div>
    </section>

</body>

</html>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            text-align: center;
        }

        table{
            margin-left: auto;
            margin-right: auto;
            margin-top: 90px;
        }
    </style>
</head>
<body>
    <form action="conn.php">
        <label for="name">Name: </label>
        <input type="text"><br>
        <label for="place">Place: </label>
        <input type="text"><br>
        <label for="animal">Animal: </label>
        <input type="text"><br>
        <label for="thing">Thing: </label>
        <input type="text"><br>
    </form>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Location</th>
            <th>Action</th>
        </tr>
        <tr>

        </tr>        
    </table>
</body>
</html> -->