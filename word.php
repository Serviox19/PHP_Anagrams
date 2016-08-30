<?php

  if (isset($_REQUEST['word']) && !empty($_REQUEST['word'])) {

    $word = $_REQUEST['word'];
    $dictionary = file('dict.txt');
    $word = strtolower($word);//need lowercase
    $letters = str_split($word);

    echo $word;

    // foreach ($dictionary as $thisword) {
    //   test($thisword, $word) {
    //     echo "Anagram for \$word: $thisword[$i]. \n";
    //   }
    // }
    //
    // function test($word1, $word2) {
    //   if (isAnagram($word1, $word2)) {
    //     echo "true";
    //   }
    // }
    //
    // function isAnagram($a, $b) {
    //   return(count_chars($a, 1) == count_chars($b, 1));
    // }
  };
