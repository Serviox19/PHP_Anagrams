<?php

  if (isset($_REQUEST['word']) && !empty($_REQUEST['word'])) {

    $word = $_REQUEST['word'];
    $word = strtolower($word);//need lowercase
    $letters = str_split($word);

    // echo $word . "\n";

    $filename = 'dict.txt';
    $contents = file($filename);

    foreach ($contents as $line) {
      //check for words with same amount of letters & are actually in the file.
      // echo $line . "\n";
    }


    // function isAnagram($a, $b) {
    //   return(count_chars($a, 1) == count_chars($b, 1));
    // }
  };
