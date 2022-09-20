<?php   
    include('./db_showdb.php');
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
            <p class="text-center h3">Todo Application</p>
            <input type="text" class="form-control mt-3" name="todo" placeholder="Enter Todo">
            <div class="d-grid gap-2 col-2 mx-auto">
                <button type="submit" class="btn btn-primary mt-3">Add Todo</button>
            </div>
        </form>
    
        <table class="table mt-5">
            <thead>
                <tr>
                <th>SN</th>
                <th>Todo</th>
                <th>Update</th>
                <th>Delete</th>
                <th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sn = 1; 
                    while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <th><?php
                                    echo $sn++; 
                                ?>
                            </th>
                            <td><?php echo $row['title'] ?></td>
                            <td><button type="button" class="btn btn-success"><a class="text-white text-decoration-none" href="update.php?id=<?php echo $row['id']; ?>"> Update </a></button></td>
                            <td><button type="button" class="btn btn-danger"><a class="text-white text-decoration-none" href="delete.php?id=<?php echo $row['id']; ?>"> Delete </a></button></td>
                        </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>