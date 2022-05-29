<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/skeleton.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Baguio | Cultures</title>
</head>
<body>
<div class="container u-full-width u-max-full-width">
        <div class="row tcenter">
            <div class="two columns">
                <h4><a href="./landmark.php">Landmarks</a></h4>
            </div>
            <div class="two columns">
                <h4><a href="./cultures.php">Cultures</a></h4>
            </div>
            <div class="two columns">
                <h4><a href="./foods.php">Foods</a></h4>
            </div>
            <div class="two columns">
                <h4><a href="./festivals.php">Festivals</a></h4>
            </div>
            <div class="two columns">
                <h4><a href="./mountains.php">Mountains</a></h4>
            </div>
            <div class="two columns">
                <h4><a href="./churches.php">Churches</a></h4>
            </div>
        </div>
        <div class="row">
            <div class="twelve columns" style="background-color: black;">
                <img src="./images/cbg.jpg" alt="" id="lmbg">
                <h2 style="text-align: center; color:crimson;">Cultures</h2>
            </div>
        </div>
        <?php
            $file = simplexml_load_file("Danao-Jimenez-Zoleta_IT2E_Baguio.xml");

            foreach($file->cultures->culture as $c){
                echo "
                <div class='row cont'>
                <div class='five columns'>
                    <img src='$c->image' class='fimage'>
                </div>
                <div class='seven columns marl'>
                    <br>
                    <h4>$c->name</h4>
                    <h5>Description</h5>
                    <p>$c->desc</p>
                </div>
            </div>
            <hr/>
                ";
            }
        ?>

        <div class="row footer">
            <div class="twelve columns">
                <p>Copyright &reg; 2022</p>
            </div>
        </div>
    </div>
</body>
</html>