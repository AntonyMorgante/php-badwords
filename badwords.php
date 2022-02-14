<?php
$paragraph = "Apelle figlio di Apollo fece una palla di pelle di pollo e tutti i pesci vennero a galla per vedere la palla di pelle di pollo fatta da Apelle figlio di Apollo.";
$censoredWord = $_GET["classify"];
$censoredWith = "*riservato*";
$censoredParagraph = str_replace($censoredWord, $censoredWith, $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php echo $paragraph ?> (Lunghezza: <?php echo strlen($paragraph) ?>)
    </p>
    <p>
        <?php echo $censoredParagraph ?>
    </p>
</body>
</html>