<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontrolpanel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="preview">
        <h1 class="heading">Valg 2020 i USA</h1>
        <div>
            <img src="trump1.jpg">
            <img src="biden1.jpg">
        </div>
        <?php
            echo file_get_contents("data.txt");
        ?>
    </div>
    <div class="row col3">
            <section class="padding-r container">
            </section>
            
            <section class="padding-l-r">
                <form class="form" action="submit.php">
                    <label>Indtast dato:</label>
                    <br>
                    <input class="form-width" type="date" name="date" id="date" required>
                    <br>
                    <label>State navn:</label>
                    <br>

                    <select class="form-width" name="state" id="state" required>
                        <option value="" disabled selected>Vælg en Staten</option>
                        <option value="Californien">Californien </option>
                        <option value="Florida">Florida</option>
                        <option value="New York">New York</option>
                        <option value="Washington">Washington </option>
                        <option value="Georgia">Georgia</option>
                        <option value="New Jersey">New Jersey</option>
                        <option value="Texas">Texas </option>
                        <option value="Oregon">Oregon</option>
                        <option value="South Carolina">South Carolina</option>
                        <option value="South Dakota">South Dakota </option>
                        <option value="Rhode Island">Rhode Island</option>
                        <option value="Louisiana">Louisiana</option>
                    </select>

                    <!-- <input type="text" name="state" id="" required> -->
                    <br>
                    <label>Trump</label>
                    <br>
                    <input class="form-width" type="number" name="rep" id="rep" required min="0" max="100">
                    <br>
                    <label>Biden</label>
                    <br>
                    <input class="form-width" type="number" name="dem" id="dem" required min="0" max="100">
                    <br>
                    <br>
                    <input class="form-width" type="submit"  name="submit" value="Udgiv">

                </form>
            </section>
            
            <section class="padding-r container">
            </section>
        </div>
</body>
</html>