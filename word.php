<?php

if (isset($_GET['word'])) {
  $word = $_GET['word'];
  $dictionary = 'dict.txt';

  $word = strtolower($word);//need lowercase

  $letters = str_split($word);


  //compares dictionary after split
  foreach ($i=0; $i<strlen($word); $i++) {
    if ($letters[$i]==$dictionary[$i]) {
      echo $letters[$i]."<br />";
    }
  }

  function test($word1, $word2) {
    if (isAnagram($word1, $word2)) {
      foreach ($dictionary as $word) {
        echo "true";
      }
    }
  }

  function isAnagram($a, $b) {
    return(count_chars($a, 1) == count_chars($b, 1));
  }


}
