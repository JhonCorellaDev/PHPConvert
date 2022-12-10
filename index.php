<?php
 /*Simple API PHP para descargar musica de youtube*/
// con esta función conseguiremos convertir una URL de Youtube a mp3
function youtube_to_mp3($url)
{
  // Toma la ID del video de youtube
  $video_id = substr($url, 32);
 
  // crea el link de descarga
  $download_link = 'http://www.youtubeinmp3.com/fetch/?video=' . $video_id;
 
  // Hacemos un retorno al link de descarga
  return $download_link;
}
 
// Ejemplo
$url = 'https://www.youtube.com/watch?v=rU6JB_U6HbU';
echo youtube_to_mp3($url);
 
// Finaliza, conectando a tu dominio maquetado
// http://www.youtubeinmp3.com/fetch/?video=rU6JB_U6HbU
 
?>
