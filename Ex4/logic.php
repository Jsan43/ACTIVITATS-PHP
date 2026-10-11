<?php  
$musica = $_GET['musica'];

switch ($musica) {
    case 'rock':
        echo "T'agrada el rock!";
        break;
    case 'pop':
        echo "T'agrada el pop!";
        break;
    case 'jazz':
        echo "T'agrada el jazz!";
        break;
    case 'classica':
        echo "T'agrada la música clàssica!";
        break;
    default:
        echo "No has seleccionat cap estil de música.";
}
?>