<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
  $tic = $i % 4;
  $tac = $i % 5;

  if ($tic === 0 && $tac === 0) {
      echo "tic-tac". "\n";
      
  } elseif ($tic === 0) {
    echo "tic". PHP_EOL;

  } elseif ($tac === 0) {
    echo "tac". PHP_EOL;

  } else {
    echo $i. PHP_EOL;
  }
}


// Q2 多次元連想配列
// --問題1
echo $personalInfos[1]["name"]. "の電話番号は". $personalInfos[1]["tel"]. "です。";

// --問題2
foreach ($personalInfos as $i => $person) {
  echo ($i+1). "番目の". $person["name"]. "のメールアドレスは". $person["mail"]. 
  "で、電話番号は". $person["tel"]. "です。". PHP_EOL;
}

// --問題3
$ageList = [25, 30, 18];
foreach ($personalInfos as $i => &$person) {
    $person["age"] = $ageList[$i];
}
var_dump($personalInfos);


// Q3 オブジェクト-1
$yamada = new student(120, "山田");
echo "学籍番号". $yamada->studentId. "番の生徒は". $yamada->studentName. "です。";


// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($class)
    {
        echo $this->studentName. "は". $class. 'の授業に出席しました。
        学籍番号：'. $this->studentId;
    }
}

$yamada = new student(120, "山田");
$yamada->attend("PHP");


// Q5 定義済みクラス
// --問題1
date_default_timezone_set("Asia/Tokyo");
$date = new DateTime();
$date->modify("-1 month");
echo $date->format("Y-m-d"). PHP_EOL;

// --問題2
date_default_timezone_set("Asia/Tokyo");
$today = new DateTime();
$pastDate = new DateTime("1992-4-25");
$diff = $today->diff($pastDate);

echo "あの日から". $diff->days. "日経過しました。"


?>