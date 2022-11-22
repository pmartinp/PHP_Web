<?php

# File validation
if ($_FILES['inputFile']['error'] > 0) {
    echo 'There is problem in file upload';
    switch ($_FILES['inputFile']['error']) {
        case 1:
            echo 'File exceeded upload_max_filesize';
            break;
        case 2:
            echo 'File exceeded max_file_size';
            break;
        case 3:
            echo 'File only partially uploaded';
            break;
        case 4:
            echo 'No file uploaded';
            break;
    }
    exit;
}else{
    echo "File uploaded succesfully<br>";
}
# Anchura
if (isset($_POST["ancho"])) {
    $ancho = $_POST["ancho"];
    if (filter_var($ancho, FILTER_VALIDATE_INT)) {
        echo $ancho . " es válido<br>";
    } else {
        echo $ancho . " no es válido<br>";
    }
}
# aLTURA
if (isset($_POST["alto"])) {
    $alto = $_POST["alto"];
    if (filter_var($alto, FILTER_VALIDATE_INT)) {
        echo $alto . " es válido<br>";
    } else {
        echo $alto . " no es válido<br>";
    }
}
