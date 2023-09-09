<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chessboard Generator</title>

    <style>
        table {
            border: 1px solid black;
            border-spacing:0;
        }
        td {
            padding: 20px;
            border: 1px solid black;
        }
        .bgcolor{
            background-color:black;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        
        <input type="text" name="cb" id="cb" required>
        <input type="submit" name="submit" value="Generate Chessboard" required><br><br>
    </form>

    <table>
        <?php
        if (isset($_POST['submit'])) {
            $data = $_POST['cb'];
            for ($row = 1; $row <= $data; $row++) {
                echo "<tr> ";
                for($col=1; $col<=$data; $col++){
                    if(($row+$col)%2==0){
                        echo "<td class='bgcolor'> </td>";
                    }
                    else{
                        echo "<td > </td>";
                    }
                }
                  echo "<tr> ";
                  
            }
        }

        ?>
    </table>
</body>
</html>
