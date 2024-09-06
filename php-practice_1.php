<?php
// Q1 変数と文字列
$name = '平手';
echo '私の名前は「' . $name . '」です。';

// Q2 四則演算
$num = 5 * 4;
echo $num;

echo "\n";

$num /= 2;
echo $num;

// Q3 日付操作
$date = date('Y年m月d日 H時i分s秒');
echo '現在時刻は、' . $date . 'です。';

// Q4 条件分岐-1 if文
$device = 'mac';
if ($device === 'windows' || $device === 'mac') {
    echo '使用OSは、' . $device . 'です。';
} else {
    echo 'どちらでもありません。';
};

// Q5 条件分岐-2 三項演算子
$age = 17;
echo ($age >= 18) ? '成人です。' : '未成年です。';

// Q6 配列
$kanto =
[
  '東京都',
  '神奈川県',
  '栃木県',
  '千葉県',
  '埼玉県',
  '群馬県',
  '茨城県'
];
echo "{$kanto[2]}と{$kanto[3]}は関東地方の都道府県です。"

// Q7 連想配列-1
$kanto =
[
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];
foreach ($kanto as $prefecturalCapitalLocation) {
    echo $prefecturalCapitalLocation;
    echo "\n";
};

// Q8 連想配列-2
$kanto =
[
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];
foreach ($kanto as $prefectures=>$prefecturalCapitalLocation) {
    if($prefectures === '埼玉県' && $prefecturalCapitalLocation === 'さいたま市'){
        echo "{$prefectures}の県庁所在地は、{$prefecturalCapitalLocation}です。";
    }
};

// Q9 連想配列-3
$kanto =
[
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];

$kanto['愛知県'] = '名古屋市';
$kanto['大阪府'] = '大阪市';
foreach ($kanto as $prefectures=>$prefecturalCapitalLocation) {
    if($prefectures === '愛知県' || $prefectures === '大阪府') {
        echo "{$prefectures}は関東地方ではありません。";
        echo "\n";
    } else {
        echo "{$prefectures}の県庁所在地は、{$prefecturalCapitalLocation}です。";
        echo "\n";
    };
};

// Q10 関数-1
function hello($name) {
  return "{$name}さん、こんにちは。\n" ;
}

echo hello('金谷');
echo hello('安藤');

// Q11 関数-2
const TAX = 1.1;
function calcTaxInPrice($price) {
    return $price * TAX;
};

$taxInPrice = calcTaxInPrice(1000);
echo "1000円の商品の税込価格は{$taxInPrice}です。";

// Q12 関数とif文
function distinguishNum($number) {
  if ($number % 2 === 1) {
      return "{$number}は奇数です。\n";
  } elseif ($number % 2 === 0) {
      return "{$number}は偶数です。\n";
  } else {
      return "数字ではありません。\n";
  }
};

echo distinguishNum(11);
echo distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($grades) {
  switch ($grades) {
      case 'A':
      case 'B';
          return "合格です。\n";
          break;
      case 'C':
          return "合格ですが追加課題があります。\n";
          break;
      case 'D':
          return "不合格です。\n";
          break;
      
      default:
          return "判定不明です。講師に問い合わせてください。\n";
          break;
  };
};

echo evaluateGrade('B');
echo evaluateGrade('E');

?>