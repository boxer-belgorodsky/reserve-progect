<?php


require_once( 'phpmorphy/src/common.php');
$dir = 'phpmorphy/dicts';


$lang = 'ru_RU';

$opts = array(
    'storage' => PHPMORPHY_STORAGE_MEM
);

try {
    $morphy = new phpMorphy($dir, $lang, $opts);
} catch(phpMorphy_Exception $e) {
    die('Error occured while creating phpMorphy instance: ' . $e->getMessage());
}


$content = $_POST["searchOne"];

$content = strip_tags($content);

$content = preg_replace( '/&([a-zA-Z0-9]+);/' , " ", $content);

$content = mb_strtoupper( $content, 'UTF-8' );

$content = str_ireplace( 'Ё', 'Е', $content );

preg_match_all( '/([a-zа-я0-9]+)/ui', $content , $words_src );



$lemmas = array();

for ($i = 0 ; $i < count($words_src) ; $i++){
   for($j = 0 ; $j < count($words_src[$i]) ; $j++){
    $lemmas[] = $morphy->lemmatize( $words_src[$i][$j] );
   }
}


$count = 0;

for ($i = 0 ; $i < count($lemmas) ; $i++){
  if ($lemmas[$i][0] == "ЯМСКИЙ" && $count == 0){
      echo "<a href='ymskaya-step.php'>Вы искали статью про заповедник Ямская степь<a>";
      $count++;
  }
  if ($lemmas[$i][0] == "ВОРСКЛА" && $count == 0){
      echo "<a href='forest-in-vorscla.php'>Вы искали статью про заповедник Лес-на-Ворскле<a>";
      $count++;
  }
  if (($lemmas[$i][0] == "ЛЫСЫЙ" || $lemmas[$i][0] == "ГОР") && $count == 0){
      echo "<a href='bald-mountain.php'>Вы искали статью про заповедник Лысые горы<a>";
      $count++;
  }
  if (($lemmas[$i][0] == "ОСТРАСЬЕВ" || $lemmas[$i][0] == "ОТРАСЬЕВ" || $lemmas[$i][1] == "ЯР") && $count == 0){
      echo "<a href='ostravaevy-yar.php'>Вы искали статью про заповедник Острасьевы яры<a>";
      $count++;
  }
  if (($lemmas[$i][0] == "БОР" || $lemmas[$i][0] == "БЕКАРЮКОВСКИЙ" || $lemmas[$i][0] == "БЕРЮКОВСКИЙ") && $count == 0){
      echo "<a href='bekaryukovsky-bor.php'>Вы искали статью про заповедник Бекарюковский бор<a>";
      $count++;
  }
  if (($lemmas[$i][0] == "ИЗГОРЬЕ" || $lemmas[$i][0] == "СТЕНКА" ) && $count == 0){
      echo "<a href='walls-highlands.php'>Вы искали статью про заповедник Стенки - Изгорья<a>";
      $count++;
  }

}




$content = $_POST["searchTwo"];

$content = strip_tags($content);

$content = preg_replace( '/&([a-zA-Z0-9]+);/' , " ", $content);

$content = mb_strtoupper( $content, 'UTF-8' );

$content = str_ireplace( 'Ё', 'Е', $content );

preg_match_all( '/([a-zа-я0-9]+)/ui', $content , $words_src );



 $lemmas = array();

  for ($i = 0 ; $i < count($words_src) ; $i++){
     for($j = 0 ; $j < count($words_src[$i]) ; $j++){
      $lemmas[] = $morphy->lemmatize( $words_src[$i][$j] );
     }
  }


$count = 0;

  for ($i = 0 ; $i < count($lemmas) ; $i++){
    if ($lemmas[$i][0] == "ЯМСКИЙ" && $count == 0){
        echo "<a href=\"ymskaya-step.php\">Вы искали статью про заповедник Ямская степь</a>";
        $count++;
    }
    if ($lemmas[$i][0] == "ВОРСКЛА" && $count == 0){
        echo "<a href=\"forest-in-vorscla.php\">Вы искали статью про заповедник Лес-на-Ворскле</a>";
        $count++;
    }
     if (($lemmas[$i][0] == "ЛЫСЫЙ" || $lemmas[$i][0] == "ГОР") && $count == 0){
      echo "<a href='bald-mountain.php'>Вы искали статью про заповедник Лысые горы<a>";
      $count++;
  }
   if (($lemmas[$i][0] == "ОСТРАСЬЕВ" || $lemmas[$i][0] == "ОТРАСЬЕВ" || $lemmas[$i][1] == "ЯР") && $count == 0){
      echo "<a href='ostravaevy-yar.php'>Вы искали статью про заповедник Острасьевы яры<a>";
      $count++;
  }
   if (($lemmas[$i][0] == "БОР" || $lemmas[$i][0] == "БЕКАРЮКОВСКИЙ" || $lemmas[$i][0] == "БЕРЮКОВСКИЙ") && $count == 0){
      echo "<a href='bekaryukovsky-bor.php'>Вы искали статью про заповедник Бекарюковский бор<a>";
      $count++;
  }
   if (($lemmas[$i][0] == "ИЗГОРЬЕ" || $lemmas[$i][0] == "СТЕНКА" ) && $count == 0){
      echo "<a href='walls-highlands.php'>Вы искали статью про заповедник Стенки - Изгорья<a>";
      $count++;
  }
}






