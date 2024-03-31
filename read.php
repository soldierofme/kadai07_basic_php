<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>読み込み一覧</title>
</head>

<body>
  <div class = management>
        <p>一覧表示</p>
        <button onclick="location.href='index.php'">入力画面に戻る</button>
  </div>
  <br>


<?php
//fopen関数により、指定したファイル(csv)を読み込みモードで開いて
//ファイルハンドル(今回は$f_handleとします)を指定する。
//開いたファイルの操作には、ファイル名ではなく、
//ファイル操作には、このファイルハンドルを指定してコードを記載する。
$f_handle = fopen('question.csv', 'r');
//テーブルの見出し項目のHTMLをechoで表示する。
echo '<table border="1">
  <tr>
  <th>回答日時</th>
  <th>お名前</th>
  <th>e-mail</th>
  <th>満足度</th>
  <th>理由</th>
  <th>ご意見</th>
  </tr>';
//fgetcsvでCSVファイルのデータを一行読み込み配列に入れ、
//テーブルの一行に表示させる処理を
//while文によりcsvのデータがある行分繰り返す。
while($read_csv = fgetcsv($f_handle)){
   // テーブルに配列の値を格納。
  echo '<tr>';
  echo '<td>'.$read_csv[0].'</td>';
  echo '<td>'.$read_csv[1].'</td>';
  echo '<td>'.$read_csv[2].'</td>';
  echo '<td>'.$read_csv[3].'</td>';
  echo '<td>'.$read_csv[4].'</td>';
  echo '<td>'.$read_csv[5].'</td>';
  echo '</tr>';
}
// テーブルを閉じる。
echo '</table>';
// fopen関数により開いたファイルを閉じる。
fclose($f_handle);
?>

</body>
</html>
