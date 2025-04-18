<!DOCTYPE html>
<html lang="nl">
<style>
    table,
    th,
    td {
        border: 3px solid black;
        border-collapse: collapse;
        padding: 10px;
        text-align: center;
        background-color: white;
    }

    body {
        background-image: url('download1.jpg');
        background-repeat: repeat;
        background-size: "width:1920";
        display: flex;
        justify-content: space-between;
    }
</style>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tafels</title>
</head>

<body>
    <div>
        <h1 style="color:white;"> Tafels</h1>
        <form>
            <p style="color:white;"> Geef de tafel</p>
            <input name="tafels" type="number">
            <br>
            <p style="color:white;"> Geef het begin van de tafel</p>
            <input name="begin" type="number">
            <br>
            <p style="color:white;"> Geef het einde van de tafel</p>
            <input name="einde" type="number">
            <br><br>
            <input type="submit" value="Genereer Tafel">
        </form>

        <table>
            <div>
                <?php
                if (isset($_GET['tafels']) && isset($_GET['begin']) && isset($_GET['einde'])) {

                    $tafel = $_GET['tafels'];
                    $begin = $_GET['begin'];
                    $einde = $_GET['einde'];

                    for ($x = $begin; $x <= $einde; $x++) {
                        echo "<tr>";
                        echo "<td>" . $x . "</td>";
                        echo "<td>" . $x * $tafel . "</td>";
                        echo "</tr>";
                    }
                }
                ?>

                <tr>
                    <th>Getal</th>
                    <th>Resultaat</th>
                </tr>
            </div>




        </table>
    </div>

    <div>
        <video width="640" height="360" controls>
            <source src="tafel.mp4" type="video/mp4">
        </video>
    </div>
</body>

</html>