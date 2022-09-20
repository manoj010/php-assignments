<?php   
    include('./db_showdb.php');

        if($_SERVER['REQUEST_METHOD'] === "GET"){
        $id = $_GET['id'];
        $sql = "DELETE FROM `todo_list` WHERE `todo_list`.`id` = $id";
        $result = $conn -> query($sql);
        if($result) {
            // echo "deleted";
            header('location: ./index.php');
        } else {
            die($conn->connect_error);   
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container p-3">
        <form action="save-todo.php" method="get">
            <p class="text-center h3">Update</p>
            <input type="text" class="form-control mt-3" name="todo" placeholder="Enter Todo">
            <div class="d-grid gap-2 col-2 mx-auto">
                <button type="submit" class="btn btn-primary mt-3">Update</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>