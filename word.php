<?php

if (isset($_GET['word'])) {
  $word = $_GET['word'];
  $dictionary = 'dict.txt';

  $word = strtolower($word);//need lowercase

  $letters = str_split($word);


  //compares dictionary after split
  for ($i=0; $i<strlen($word); $i++) {
    if ($letters[$i]==$dictionary[$i]) {
        echo $test[$i]."<br />";
    }
  }


}
