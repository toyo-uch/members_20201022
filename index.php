<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css" type="text/css">

<!--
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
-->

    <title>title</title>

</head>

<body>
<table>
<tr>
    <th>id</th>
    <th>名前</th>
    <th>グループ</th>
    <th>作成日</th>
</tr>

<?php
//データベースに接続する
$mysqli = new mysqli('localhost','root','root','members_20201022');

//SQLを用意する
$sql = "SELECT * FROM members";

//データベースから情報を読み出す
$result = $mysqli->query($sql);
if ($result) {

    // 連想配列を取得
    while($row = $result->fetch_assoc()) {
        echo(
             '<tr>'
            .'<td>' . $row["id"] . '</td>'
            .'<td>' . $row["name"] .'</td>'
            .'<td>' . $row["group"] .'</td>'
            .'<td>' . $row["created"] . '</td>'
            .'</tr>'
        );
    }
    // 結果セットを閉じる
    $result->close();
}



//データベースを切断する
$mysqli->close();
?>
</table>

<p><a id="click" href="index.html">クリック!</a></p>

</body>
</html>
