<?php

$folder01 = "folder_01";
$folder02 = "folder_02";

if (!is_dir($folder01)) mkdir($folder01);

if (!is_dir($folder02)) mkdir($folder02);

$filename = "README.txt";

if (!file_exists($folder01 . DIRECTORY_SEPARATOR . $filename)) {

  $file = fopen($folder01 . DIRECTORY_SEPARATOR . $filename, "w+");

  fwrite($file, date("Y-m-d H:i:s"));

  fclose($file);
}

rename(
  $folder01 . DIRECTORY_SEPARATOR . $filename, //origem
  $folder02 . DIRECTORY_SEPARATOR . $filename //destino
);
