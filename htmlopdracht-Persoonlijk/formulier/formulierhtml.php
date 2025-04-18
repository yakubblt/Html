<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="formuliercss.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="footer-css">


    </div>

    <div class="container">
        <form action="http://localhost/codebase/htmlopdracht/formulier/imagehtml.php" method="post">


            <br>
            <div class=".diva">
                <p>wat is u geslacht?</p>
                <input type="radio" id="option1" name="gender" value="m">
                <label for="option1">Man</label>
                <br>

                <input type="radio" id="option2" name="options" value="f">
                <label for="option2">Vrouw</label>
                <br>

                <input type="radio" id="option3" name="options" value="x">
                <label for="option3">iets anders</label>

            </div>

            <div class="divb">
                <p>welke onderwijs ben je mee bezig?</p>
                <input type="checkbox" id="vehicle1" name="vehicle[]" value="basis">
                <label for="basisschool"> bassisschool</label><br>
                <input type="checkbox" id="vehicle2" name="vehicle[]" value="middel">
                <label for="middelbare"> Middelbare</label><br>
                <input type="checkbox" id="vehicle3" name="vehicle[]" value="hbo">
                <label for="MBO/HBO"> MBO/HBO</label><br>
            </div>
            <br>
            <div class="divc">
                <p>In welke stad studeert u?</p>
                <select name="city" id="keuzemenu" required>
                    <option value="">Selecteer een optie</option>
                    <option value="option1">Amsterdam</option>
                    <option value="option2">Breda</option>
                    <option value="option3">Den haag</option>
                    <option value="option4">Utrecht</option>
                    <option value="option5">Zwolle</option>
                </select>
            </div>
            <br>


            <textarea name="opmerking" input type="text" id="inputField" placeholder="Opmerking (Optioneel)" rows="10"
                cols="30" style="width: 300px; height: 150px;"></textarea>


            <br>

            <button type="submit">Inleveren</button>

        </form>

        <script>
            function voegKeuzeToe() {
                const select = document.getElementById('keuze');
                const gekozenWaarde = select.value;

              
                const nieuweKeuze = document.createElement('div');
                nieuweKeuze.className = 'flex-item';
                nieuweKeuze.textContent = gekozenWaarde;

               
                const flexbox = document.getElementById('flexbox');
                flexbox.appendChild(nieuweKeuze);
            }
        </script>


        <div class="divd">
            <video width="420" height="310" controls>

                <source src="meow.mp4" type="video/mp4">

            </video>

        </div>

    </div>

    <img src="rijksoverheid.svg" class="foto">
</body>

</html>