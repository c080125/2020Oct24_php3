<?php
    require_once('funcs.php');

    // DB接続
    try {
        $pdo = new PDO ('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
    } catch (PDOException $e) {
        exit('DBConnectError:'.$e->getMessage());
    };

    $id =   $_GET['id'];

    $stmt   =   $pdo->prepare ("SELECT * FROM gs_user_table WHERE id=" . $id);
    $status =   $stmt -> execute();

    // $view   ="";
    if ($status == false){
        sql_error($status);
    } else {
        $result =   $stmt->fetch();
        echo ($result);
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー情報変更</title>
</head>
<body>
    <form method="POST" action="reg_updatesql.php">
        <input type="hidden" name="id" value=<?= $result['id']?>>
        <label for="">氏名：</label><input type="text" name="name" value=<?= $result['name']?>><br>
        <label for="">ID：</label><input type="text" name="lid" value=<?= $result['lid']?>><br>
        <label for="">Password：</label><input type="text" name="lpw" value=<?= $result['lpw']?>><br>
        <label for="">管理者ですか？：</label><input type="select" name="kanri_flg" value=<?= $result['kanri_flg']?>><br>
        <label for="">現役ですか？：</label><input type="select" name="life_flg" value=<?= $result['life_flg']?>><br>
        <input type="submit" value=更新>
    </form>
</body>
</html>