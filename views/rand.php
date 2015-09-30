<?php 
//1～43までの数字をランダムで6つ取得するやつを作る
//これが出力用データになります
$randNums = array();
//ランダムのやつ
for ($i = 0; $i < 10000; $i++) {
    $rand = "0";
    while (true) {
        if ($rand > 1281) {
            $rand -= 1281;
            break;
        } else {
            $rand += mt_rand(1,43);
        }
    }
    $randNums[] = $rand;
    if (count($randNums) > 5){
        break;
    }
}

var_dump($randNums);
//どんなロジックにするか
//->1000になるまで足す
//->1000を超えたところで足すことをやめる
//->その値から1000を引いてみる(仮)
//※重複はしないこと
// for ($i = 0; $i < 1000; $i++) {
// }

