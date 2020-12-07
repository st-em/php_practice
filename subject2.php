<?php
//課題1

$name = ['佐藤江美'];

if ($name == $name ) {
  echo "私は あなたの名前 です";
}  else {
    echo "あなたの名前ではありません";
}


//課題2

$answer = 0; //最終的な合計が入る変数。
 
for($i = 1; $i <= 10000; $i++){
     $answer = $answer + $i; //合計値に$iを加算する
    }
 
echo $answer; 


  
//課題3
$fluits = array("すいか", "リンゴ", "なし", "もも", "ぶどう");
foreach($fluits as $fluit){
  echo  $fluit;
  echo "\n";
}


//課題4

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 === 0) {
    echo $i;
    }

}

    