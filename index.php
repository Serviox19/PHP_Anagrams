<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Challenge</title>
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
  </head>
  <body>

    <form action=# method=GET>
    	<input type="text" name="text">
    	<input type="submit">
    </form>

    <?php
      $start=microtime(true);
      $filename="dict.txt";
      $online_dict="http://web.stanford.edu/class/cs106l/assignments/dictionary.txt";

      function reorder_word($word){
      	$word=str_split(trim(strtolower($word)));
      	sort($word);
      	return join($word);
      }

      if(!isset($_GET['text']))die();
      $input=reorder_word($_GET['text']);
      $len=strlen($input);

      if(file_exists($filename)){
      	$answer=array_keys(unserialize(file_get_contents($filename)),$input);
      }else{
      	$arr=$answer=array();
      	foreach(file($online_dict) as $word){
      		$word=trim($word);
      		$word_f=reorder_word($word);
      		$arr[$word]=$word_f;
      		if(strlen($word_f)!=$len)continue;
      		if($input==$word_f){
      			$answer[]=$word;
      		}
      	}
      	file_put_contents($filename,serialize($arr));
      }
      foreach($answer as $string)
      	echo "$string<br>";

      echo microtime(true)-$start;
    ?>

    <div id="response"></div>


  </body>
</html>
