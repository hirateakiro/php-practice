<?php
// Q1 tic-tac問題
for ($i = 1; $i < 101; $i++) {
  if ($i % 4 === 0 && $i % 20 !== 0) {
      echo "tic\n";  
} elseif ($i % 5 === 0 && $i % 20 !== 0) {
      echo "tac\n";  
} elseif ($i % 20 === 0) {
      echo "tic-tac\n";  
} else {
      echo "{$i}\n";
};
};


// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

// 問題1
echo "Bさんの電話番号は{$personalInfos[1]['tel']}です。";

// 問題2
foreach ($personalInfos as $index => $infoValue) {
  $index++;
  echo "{$index}番目の{$infoValue['name']}のメールアドレスは{$infoValue['mail']}で、電話番号は{$infoValue['tel']}です。\n";
  };

// 問題3
$ageList = [25, 30, 18];

foreach ($ageList as $index=>$age) {
    $personalInfos[$index]['age'] = $age;
};
var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$hirate = new Student (1, '平手');
echo "学籍番号{$hirate->studentId}番の生徒は{$hirate->studentName}です。";

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

    public function attend($language)
    {
        echo "{$this->studentName}は{$language}の授業に参加しました。学籍番号：{$this->studentId}";
    }
}

$yamada = new Student (120, '山田');
$yamada->attend('PHP');


// Q5 定義済みクラス
// 問題1
$date = new DateTime();
echo $date->format('Y-m-d');

// 問題2
$date1 = new DateTIme();
$date2 = new DateTime('1992-04-25');
$diff = $date1->diff($date2)->format('%a日');
echo "あの日から{$diff}経過しました。";

?>