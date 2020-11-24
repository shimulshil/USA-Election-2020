<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valg 2020 i USA</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Eagle+Lake&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">
</head>
<body>

    <div class="row11 col2">
        <section class="padding-r wrapper">
            <a class="link" href="http://localhost/us-valg-2020/backend.php">Indsættelse af data</a> <br>
            <a class="link" href="http://localhost/us-valg-2020/delete.php">Slette af data</a> 
                <div class="row1">
                    <img src="trump.png">
                    <img src="biden.png">
                </div>  
                
        </section>
        <section class="padding-l wrapper1">
            <div>
                <h1 class="heading">Valg 2020 i USA</h1>
                <div class="candidate">
                    <h2 style="color:red">Donald Trump</h2>
                    <h2 style="color:blue">Joe Biden</h2>
                </div> 


                <?php
                    echo file_get_contents("data.txt");
                ?>
            </div>
                
        </section>
    </div>
</body>
</html>