<html>



<head>
    <meta charset="UTF-8">
    <!--<link rel="stylesheet" href="css/style.css" type="text/css">-->
    <title>入力フォーム</title>
</head>



<body>

    <!--
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/script.js"></script>
-->

    <form method="GET" action="save.php">
        名前<input type="text" name="name"><br>
        グループ<input type="text" name="group"><br>
        <button>送信</button>
    </form>

    <?php

        //データベースに接続する
        $mysqli = new mysqli('localhost','root','root','members_20201022');

        //SQLを組み立てる
        $sql = "INSERT INTO members(name,`group`) VALUES('".$_GET['name']."','".$_GET['group']."')";

        //組み立てたSQLを確認する
        echo("保存されました");

        //SQLを実行する
        $mysqli->query($sql);

        //データベースを切断する
        $mysqli->close();
        ?>

    <p><a id="click" href="index.php">一覧に戻る</a></p>

</body>



</html>
