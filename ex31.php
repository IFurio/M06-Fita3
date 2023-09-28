<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercici 1.2</title>
        <link href="https://fonts.googleapis.com/css?family=Gruppo" rel="stylesheet">
        <!-- <link rel="stylesheet" href="styles.css"> -->
        <style>
            table, td {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 3px;
                text-align: center;
                height: 15px;
                width: 150px;
            }
        </style>
    </head>
    <body>
        <h1>PROCESSA CONTACTES</h1>
        <?php
        $datos = file('./contactes31.txt');
        
        echo "<table>\n";
        echo "  <tr>\n";
        echo "      <td>\n";
        echo "          <h3>Nombre<h3>\n";
        echo "      </td>\n";
        echo "      <td>\n";
        echo "          <h3>Primer apellido<h3>\n";
        echo "      </td>\n";
        echo "      <td>\n";
        echo "          <h3>Segundo apellido<h3>\n";
        echo "      </td>\n";
        echo "      <td>\n";
        echo "          <h3>Telefono<h3>\n";
        echo "      </td>\n";
        echo "  </tr>\n";
        foreach ($datos as $contacto) {
            $elemento = explode(", ", $contacto);
            echo "  <tr>\n";
            foreach ($elemento as $dato) {
                echo "      <td>\n";
                echo "<p>$dato</p>";
                echo "      </td>\n";
            }
            echo "  </tr>\n";
        }
        echo "</table>\n";

        $file = file('./contactes31.txt');
        $newfile = fopen("contactes31b.txt", "w");
        foreach ($file as $contacto) {
            $resultado = str_replace(",","#",$contacto);
            fwrite($newfile, $resultado."\n");
        }
        ?>
    </body>
</html>