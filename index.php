<!--
Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
 -->
 <?php

 $paragrafo = "Nel mezzo del cammin di nostra vita
 mi ritrovai per una selva oscura
 ché la diritta via era smarrita.
Ahi quanto a dir qual era è cosa dura
 esta selva selvaggia e aspra e forte
 che nel pensier rinova la paura!
Tant’è amara che poco è più morte;
 ma per trattar del ben ch’i’ vi trovai,
 dirò de l’altre cose ch’i’ v’ho scorte.";

 //dichiaro la mia parola da prendere con il get

$word = $_GET ["word"];

//  stampare a schermo il paragrafo
echo $paragrafo;
echo "<br>";
echo "Lunghezza del mio paragrafo : " . strlen($paragrafo);
echo "<br>";
echo "<br>";
echo "Sostituisci con *** se contiene la parola <strong>morte<strong>";


//censurare la parola e riscrivere tutto il paragrafo con le parole censurate
echo "<br>";

if(stripos($paragrafo, "morte") !== false){
    $paragrafo = str_replace("morte", "***", $paragrafo);
}
//dichiaro qui la lunghezza del mio nuovo paragrafo perchè se la dichiaro in cima mi prende la lunghezza del paragrafo originale senza la parola occultata
$lunghezzaParagrafo ="Lunghezza del mio paragrafo : " . strlen($paragrafo);
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP Project</title>
</head>
<body>
    <h1>
        IL MIO PARAGRAFO
    </h1>

    <!-- stampo il paragrafo con la modifica -->
    <p>
        Paragrafo : <?php echo $paragrafo ?>
        
    </p>

    <span>
    <?php echo $lunghezzaParagrafo ?>
    </span>
</body>
</html>