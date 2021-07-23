# 課題の回答は このファイル をご利用下さい。
# 回答の出力を確認される際は，「php task.php」をターミナルから実行して下さい。

<?php
print("#####q1#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

  # 以下に回答を記載
  $names[]= "斉藤";
  // $array_push($name,"斉藤")でも可;
  print_r($names);
  echo PHP_EOL;
?>

<?php
print("#####q2#####".PHP_EOL);
$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

  # 以下に回答を記載
  $array = array_merge($array1,$array2);
  print_r($array);
  echo PHP_EOL;
?>

<?php
print("#####q3#####".PHP_EOL);
$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 1, 4, 5, 9];

  # 以下に回答を記載
  //task_answer参照
  $count = 0;
  foreach($numbers as $number){
    if($number == 3){
      $count++;
    }
  }
  print_r($count."回".PHP_EOL);
echo PHP_EOL;
?>

<?php
print("#####q4#####".PHP_EOL);
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

  # 以下に回答を記載
  $result = array_diff($sports,[null]);
  $result = array_values($result); //配列の全ての値を順番に返す
  print_r($result);
echo PHP_EOL;
?>

<?php
print("#####q5#####".PHP_EOL);
$array1 = [];
$array2 = [1, 5, 8, 10];

  # 以下に回答を記載
  if(empty($array1)){
    echo "ture";
  }else{
    echo "false";
  }
  echo PHP_EOL;

  if(empty($array2)){
    echo "ture";
  }else{
    echo "false";
  }
  echo PHP_EOL;

  //その他の回答法(task_answerより)
  //var_export — 変数の文字列表現を出力または返す
    // $array1 = [];
    // var_export(empty($array1));
    // echo PHP_EOL;

    // $array2 = [1, 5, 8, 10];
    // var_export(empty($array2));
    // echo PHP_EOL;
echo PHP_EOL;
?>

<?php
print("#####q6#####".PHP_EOL);
$numbers1 = [1, 2, 3, 4, 5];

  # 以下に回答を記載
  function multiple_number($numbers1){
    return $numbers1 * 10;
  }
  $numbers2 = array_map('multiple_number' ,$numbers1);
  print_r($numbers2); 
echo PHP_EOL;
?>

<?php
print("#####q7#####".PHP_EOL);
$array = ["1", "2", "3", "4", "5"];

  # 以下に回答を記載
  $array = array_map('intval',$array);
  //指定した変数を整数型に変換する関数 intval()

  # 以下は変更しないで下さい
var_dump($array);

echo PHP_EOL;
?>

<?php
print("#####q8#####".PHP_EOL);
$programming_languages = ["php", "ruby", "python", "javascript"];

  # 以下に回答を記載
  $programming_languages = array_map('ucfirst',$programming_languages);
  //ucfirstは、最初の1文字を大文字に変換する関数。

  $upper_case_programming_languages = array_map('strtoupper',$programming_languages); 
  //stroupper:指定した文字列のアルファベット（英字）部分を大文字に変換する関数

  # 以下は変更しないで下さい
print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);

echo PHP_EOL;
?>

<?php
print("#####q9#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

  # 以下に回答を記載
  // $names = [1 => "田中", "佐藤", "佐々木", "高橋"];
  // foreach($names as $key => $value){
  //   echo ("会員No.".$key." ".$value.PHP_EOL);
  // }

  //期待結果でずtask_anser参照
  $names2 = [];
  foreach($names as $key => $name){
    $number = $key + 1;
    $name2 = "会員No.".$number." ".$name;
    array_push($names2,$name2);//$names2にたいして$name2をarray_pushで要素を配列の最後に追加する
  } 
  print_r($names2);
echo PHP_EOL;
?>

<?php
print("#####q10#####".PHP_EOL);
$foods = ["いか", "たこ", "うに", "しゃけ", "うにぎり", "うに軍艦", "うに丼", "高級なうに"];

  # 以下に回答を記載

  //正規表現で文字列検索するにはpreg_match関数
  //preg_match(正規表現, 検索対象文字)
foreach($foods as $food){
  if(preg_match('/うに/',$food)){
    print_r("好物です".PHP_EOL);
  }else{
    print_r("まあまあ好きです".PHP_EOL);
  }
}
echo PHP_EOL;
?>

<?php
print("#####q11#####".PHP_EOL);
$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];

  # 以下に回答を記載
  //多次元配列から新しい配列を作成
  $sports2 = [];
  foreach($sports as $key => $sport) {
    if(is_array($sport)) {
      $sports2 = array_merge($sports2, $sport);
    }else{
      array_push($sports2, $sport);
    }
    //is_array:指定した変数が配列かどうかを調べる。
    //配列ならarray_mergeで結合される（一つの配列になる）
    //array_pushで要素を配列の最後に追加する。
  }

  // print_r($sports2);//一次元配列になったか確認//OK

  $sports2 = array_unique($sports2);
  //配列で重複しているものを削除
  $sports2 = array_values($sports2);
  //キーを振り直す

  $sports3 = [];
  foreach($sports2 as $key => $sport) {
    $number = $key + 1;
    $sport3 = "No".$number." ".$sport;
    array_push($sports3, $sport3);
  }
  print_r("ユーザーの趣味一覧".PHP_EOL);
  foreach($sports3 as $sport){
    print($sport.PHP_EOL);
  }
  //foreachで配列の要素だけ順にを取り出す。
echo PHP_EOL;
?>

<?php
print("#####q12#####".PHP_EOL);
$data = ["user" => ["name" => "satou", "age" => 33]];

  # 以下に回答を記載
  print_r($data[user][name]);
echo PHP_EOL;
?>

<?php
print("#####q13#####".PHP_EOL);
$user_data = ["name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = ["age" => 32, "address" => "沖縄"];

  # 以下に回答を記載
  $result = array_merge($user_data, $update_data);
  //array_merge:配列の結合の他に、keyが同じインデックスの場合は追加した配列に上書きされる。
  print_r($result);
echo PHP_EOL;
?>

<?php
print("#####q14#####".PHP_EOL);
$data = ["name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com"];

  # 以下に回答を記載 
  //新しい配列を作る。
  $new_data = [];
  //全てのキーを取り出す。
  foreach($data as $key => $one_data) {
    array_push($new_data, $one_data);
    //array_push:配列の最後に要素を追加する
  }
  print_r($new_data);
  //keyがなくなり、添字配列として出力される。


  # 以下は変更しないで下さい
var_dump($array);
echo PHP_EOL;
?>

<?php
print("#####q15#####".PHP_EOL);
$data1 = ["name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin"];
$data2 = ["name" => "yamada", "hobby" => "baseball", "role" => "normal"];

  # 以下に回答を記載
  //array_key_exists():配列の特定のキーの有無を調べる
  //array_key_exists(キー,対象の配列);
  if(array_key_exists(age,$data1)){
    print_r("OK".PHP_EOL);
  }else{
    print_r("NG".PHP_EOL);

  }if(array_key_exists(age,$data2)){
    print_r("OK".PHP_EOL);
  }else{
    print_r("NG".PHP_EOL);
  }
echo PHP_EOL;
?>

<?php
print("#####q16#####".PHP_EOL);
$users = [
  ["name" => "satou", "age" => 22],
  ["name" => "yamada", "age" => 12],
  ["name" => "takahashi", "age" => 32],
  ["name" => "nakamura", "age" => 41]
];

  # 以下に回答を記載
  foreach($users as $key => $user){
    print_r("私の名前は".$user["name"]."です。 年齢は".$user["age"]."歳です。".PHP_EOL);
  }
echo PHP_EOL;
?>
<?php
print("#####q17#####".PHP_EOL);
class User
{

  # コードを追加
  //変数(プロパティ)を作成
  private $name;
  private $age;
  private $gender;

  //constructメソッド(関数)作成
  //上記の変数の代入にならない様に変数名を$user_とつける。
  public function __construct($user_name,$user_age,$user_gender) {
      $this->name = $user_name;
      $this->age = $user_age;
      $this->gender = $user_gender;
  }
    
  public function info() {
    print("名前:".$this->name.PHP_EOL);
    print("年齢:".$this->age.PHP_EOL);
    print("性別:".$this->gender.PHP_EOL);
  }
 
}

$user1 = new User("神里", 32, "男");
$user2 = new User("あじー", 32, "男");

$user1->info();
print("-------------".PHP_EOL);
$user2->info();

echo PHP_EOL;
?>

<?php
print("#####q18#####".PHP_EOL);

  # コードを追加
  class Man {
    private $name;
    private $age;

    public function __construct($man_name,$man_age) {
        $this->name = $man_name;
        $this->age = $man_age;
    }
  
    public function introduce() {
      //if文で年齢を用いた場合分け
        if($this->age >= 20) {
          print("こんにちは,".$this->name."と申します。宜しくお願いいたします。".PHP_EOL);
        }else{
          print("はいさいまいど〜,".$this->name."です！！！".PHP_EOL);
        }
    }

  }
  

$man1 = new Man("あじー", 32);
$man2 = new Man("ゆたぼん", 10);

$man1->introduce();
$man2->introduce();

echo PHP_EOL;
?>

<?php
print("#####q19#####".PHP_EOL);
class Item{
  # 以下を修正して下さい
//アクセス修飾子：privateとprotectedはクラス内または派生クラスからのみアクセス可能。
//今回はクラス外からアクセスしようとしているのでアクセス修飾子のpublicに変更する必要がある。
  public $name;

  function __construct($book_name){
    $this->name = $book_name;
  }
}
  # 以下は変更しないで下さい

$book = new Item("ゼロ秒思考");
print($book->name.PHP_EOL);

echo PHP_EOL;
?>

<?php
print("#####q20#####".PHP_EOL);
class Human
{

  # コードを追加
    //変数を用意
    public $name;
    public $age;

    //メソッド
    function __construct($user_name,$user_age) {
        $this->name = $user_name;
        $this->age = $user_age;
    }
}

class Zoo
{

  # コードを追加
    //変数を用意
    protected $zoo_name;
    protected $fee;

    //メソッド
    function __construct($zoo_name,$zoo_entry_fee) {
      $this->zoo = $zoo_name;
      $this->entry_fee = $zoo_entry_fee;
    }
//引数にクラスのインスタンス？？？？？？？？？？↓
    function info_entry_fee(Human $human) {
      if($human->age <= 5){
        print($human->name."さんの入場料金は ".$this->entry_fee["infant"]." 円です。".PHP_EOL);
        }elseif($human->age <= 12){
            print($human->name."さんの入場料金は ".$this->entry_fee["children"]." 円です。".PHP_EOL);
        }elseif($human->age <= 64){
            print($human->name."さんの入場料金は ".$this->entry_fee["adult"]." 円です。".PHP_EOL);
        }elseif($human->age <= 120){
            print($human->name."さんの入場料金は ".$this->entry_fee["senior"]." 円です。".PHP_EOL);
      }
    }
    
}

$zoo = new Zoo("旭山動物園",["infant" => 0, "children" => 400, "adult" => 800, "senior" => 500]);

$human1 = new Human("たま", 3);
$human2 = new Human("ゆたぼん", 10);
$human3 = new Human("あじー", 32);
$human4 = new Human("ぎん", 108);

$humans = [$human1, $human2, $human3, $human4];

foreach($humans as $human){
  $zoo->info_entry_fee($human);
}

echo PHP_EOL;
?>

<?php
print("#####q21#####".PHP_EOL);

  //rang() - 指定した範囲の値を持つ配列を作成する
  foreach(range(1, 30) as $num) {
    if($num % 21 == 0) {
      echo "FizzHoge".PHP_EOL;
    }elseif($num % 15 == 0) {
      echo "FizzBuzz".PHP_EOL;
    }elseif($num % 7 == 0) {
      echo "Hoge".PHP_EOL;
    }elseif($num % 5 == 0) {
      echo "Buzz".PHP_EOL;
    }elseif($num % 3 == 0) {
      echo "Fizz".PHP_EOL;
    }else{
      echo $num.PHP_EOL;
    }
  }
?>