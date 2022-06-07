<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Testo</h2>

    <p>
        <?php
            $my_text = "Sopra la panca la capra campa, sotto la panca la capra crepa";
            echo $my_text
        ?>
    </p>

    <h2>Questa è la lunghezza del testo:</h2>

    <p>
        <?php
            $my_text_length = strlen($my_text);
            echo "Il testo inserito è lungo " . $my_text_length . " caratteri"
        ?>
    </p>

    <h2>La badword è:</h2>

    <p>
        <?php
        $_GET["badword"];
        echo "badword: " . $_GET["badword"]; 
        ?>
    </p>

    <h2>Testo senza badWord:</h2>

    <p>
        <?php
            $text_whitout_badword = str_replace($_GET["badword"], "***", $my_text);
            echo $text_whitout_badword
        ?>
    </p>

    <h2>Lunghezza del testo senza badword:</h2>

    <p>
        <?php
            $text_whitout_badword_length = strlen($text_whitout_badword);
            echo "La lunghezza del testo senza badword è di " . $text_whitout_badword_length . " caratteri" 
        ?>
    </p>
</body>
</html>
