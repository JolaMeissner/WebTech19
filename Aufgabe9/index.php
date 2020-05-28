<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?php
    include_once 'player.php';
    ?>
    <title>Uebung 9</title>

    <style>
        .container-fluid{
            display:flex;
        }
        #links{
            flex: 1;
        }
        #mitte{
            flex: 1;
        }
        #rechts{
            flex: 2;
        }
        header> h1
        {
            text-align: center;
            color: white;
            background-color:#888888;
           padding-top: 10px;
            padding-bottom: 10px;
            width: 100%;
            height: 80px;
            padding: 10px;
        }
        footer
        {
            text-align: center;
            color: white;
            background-color: #888888;
            padding-top: 10px;
            padding-bottom: 10px;
           position:absolute;
            bottom: 0px;
            width: 100%;
            height:60px;
        }
        #b1{

        color:white;
        border:none;
        background-color: royalblue;
            display: inline-block;
            font-size: 16px;


        }
        @media screen and (max-width: 768px){
            #mitte{
                display: none;
            }
        }

    </style>
</head>
<header><h1>Ein Spiel</h1></header>
<body>
<div class="container-fluid">

    <div id="links" class="col-sm-12 col-md-3">
        <h3>Auswahl Spielerin</h3>
        <ul>
            <?php
            for($i=0; $i<count($player); $i++)
            {
                echo '<li>'.$player[$i]["name"].'('.$player[$i]["moves"].')</li>';
            }
            ?>
        </ul>

    </div>

    <div id="mitte" class="col-md-2">
        <h3> oder </h3>
    </div>

    <div id="rechts" class="col-sm-12 col-md-7">
        <h3> Neue Spielerin anlegen </h3>
        <form action="index.php" method="post">

            <input type="text" placeholder="Name" name="spielerin"/>
            <button type="submit" id="b1">Neue Spielerin anlegen</button>
        </form>
    </div>

    <p> </p>



</div>
</body>
<footer>
    <p> Jola Meissner </p>
</footer>
</html>