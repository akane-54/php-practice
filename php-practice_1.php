<?php
// Q1 変数と文字列
$name = "小栗";
echo "私の名前は「". $name. "」です。";


// Q2 四則演算
$num = 5 * 4;
echo $num;
echo $num / 2;


// Q3 日付操作
date_default_timezone_set("Asia/Tokyo");
echo "現在時刻は、". date("Y年m月d日"). " ". date("h時m分s秒"). "です。";


// Q4 条件分岐-1 if文
$device = "windows";
if ($device === "windows" || $device === "mac") {
    echo "使用OSは、". $device. "です。";
    
} else {
  echo "どちらでもありません。";
}
    


// Q5 条件分岐-2 三項演算子
$age = 25;
$text = ($age >= 18) ? "成人です。" : "未成年です。";
echo $text;


// Q6 配列
$kanto = ["東京都", "神奈川県", "栃木県", "千葉県", "埼玉県", "群馬県", "茨城県"];
echo $kanto[2]. "と". $kanto[3]. "は関東地方の都道府県です。";


// Q7 連想配列-1
$kanto =
[
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県" => "千葉市",
    "埼玉県" => "さいたま市",
    "栃木県" => "宇都宮市",
    "群馬県" => "前橋市",
    "茨城県" => "水戸市",
];

foreach ($kanto as $city) {
    echo $city. PHP_EOL;
}


// Q8 連想配列-2
foreach ($kanto as $ken => $capital) {
  if ($ken === "埼玉県") {
    echo "埼玉県の県庁所在地は". $capital. "です。";
  }
}


// Q9 連想配列-3
$kanto["北海道"] = "札幌市";
$kanto["沖縄"] = "那覇市";

$kanto_list =
[
    "東京都",
    "神奈川県",
    "千葉県",
    "埼玉県",
    "栃木県",
    "群馬県",
    "茨城県"
];

foreach ($kanto as $ken => $capital) {
    if (in_array($ken, $kanto_list)) {
        echo $ken. "の県庁所在地は". $capital."です。". PHP_EOL;
    } else {
        echo $ken. "は関東地方ではありません。". PHP_EOL;
    }
}


// Q10 関数-1
function hello($name) {
  return $name. "さん、こんにちは。";
}

echo hello("金谷");
echo hello("安藤");


// Q11 関数-2
function calcTaxInPrice ($price) {
  $tax = 1.1;
  $taxPrice = $price * $tax;
  return $taxPrice;
}

$price = 1000;
$taxInPrice = calcTaxInPrice($price);
echo $price. "の商品の税込み価格は". $taxInPrice. "です。";


// Q12 関数とif文
function distinguishNum($num) {
  $judge = "";
  if ($num%2 === 1) {
      $judge = "奇数";
  } else {
      $judge = "偶数";
  }
  return $judge;
}
$odd = 11;
$even = 24;

echo $odd. "は". distinguishNum($odd). "です。";
echo $even. "は". distinguishNum($even). "です。";


// Q13 関数とswitch文
function evaluateGrade($grade) {
  $text = "";
  switch ($grade) {
      case "A":
      case "B":
          $text = "合格です。";
          break;
      
      case "C":
          $text = "合格ですが追加課題があります。";
          break;
      
      case "D":
          $text = "不合格です。";
      
      default:
          $text = "判定不明です。講師に問い合わせてください。";
  }
  return $text;
}

echo evaluateGrade("A");
echo evaluateGrade("X");
?>