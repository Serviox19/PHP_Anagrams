<?php

if (isset($_GET['word'])) {
  // $dict = array('race', 'boat', 'file', 'print');
  $word = $_GET['word'];

  $word = strtolower($word);//need lowercase

  $letters = str_split($word);

  for($i=0;$i<strlen($word);$i++) {
    $letters[$i]=substr($word,$i,1);
  }
  shuffle($letters);
  $anagram=implode($letters);
  echo "One anagram of $word is $anagram.";
}
