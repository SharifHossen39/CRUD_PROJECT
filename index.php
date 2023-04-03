<?php
     
     include("function.php");

     $objCrudAdmin = new crupApp();

     if(isset($_POST['submit']))
     {
        $return_msg = $objCrudAdmin->add_data($_POST);
     }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD APPLICATION</title>
</head>
<body>
    <div>

    <?php echo $return_msg; ?>

    <h2>Add Your Information</h2>

    <form action="" method="post" enctype="multipart/form-data">

    <input type="text" name="name" placeholder="Enter Your Name"> <br><br>
    <input type="number" name="number" placeholder="Inter Your Number"><br><br>
    <label for="image">Inter Your Image: </label>
    <input type="file" name="image"><br><br>
    <input type="submit" name="submit" value="Submit">

    </form>


    </div>

    <hr>

    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Roll</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Sharif Hossen</td>
                    <td>17182103299</td>
                    <td></td>
                    <td>
                        <a href="#">Update</a>
                        <a href="#">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>