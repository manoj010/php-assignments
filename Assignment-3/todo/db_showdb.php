<?php 
    include('./db_config.php');
    $sql = 'SELECT * FROM todo_list';
    $result = $conn -> query($sql);

     // echo "<pre>";
    // print_r($result);
    // echo "</pre>";

    //   $row=$result->fetch_assoc();
    //   print_r($row);

    //  while($row= $result->fetch_assoc()){
    //   print_r($row);
    
    //  }
?>