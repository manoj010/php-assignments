<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problem-1</title>
</head>
<body>
    <?php

        function evaluate($name, $attendance, $hygiene, $rating) {
            if ($attendance <= 100 && $hygiene <= 100 && $rating <= 10) {
                if ($attendance < 80) {
                    echo "$name, You are fired from Rojan Kirana Pasal";
                }

                elseif ($hygiene < 50) {
                    echo "$name, You are fired from Rojan Kirana Pasal";
                }

                elseif ($rating < 2) {
                    echo "$name, You are fired from Rojan Kirana Pasal";
                }

                else { 
                    echo "Not fired for now.";
                }
            }

            else { 
                echo "Value must not be greater than 100.";
            }
        }

        evaluate("Kushal Karki", 20, 70, 3);
        
    ?>
</body>
</html>