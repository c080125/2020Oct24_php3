<?php
    require_once("funcs.php");

// 利用者情報を登録する
// 裏の処理のみ、処理が終わったらスタートページに戻る

    $name   =   $_POST["name"];
    $lid    =   $_POST["lid"];
    $lpw    =   $_POST["lpw"];
    $kanri_flg    =   $_POST["kanri_flg"];
    $life_flg    =   $_POST["life_flg"];

// DB接続
    try {
        $pdo = new PDO ('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
    } catch (PDOException $e) {
        exit('DBConnectError:'.$e->getMessage());
    };

// SQLにデータを挿入
    $stmt = $pdo->prepare ("INSERT INTO gs_user_table (id, name, lid, lpw, kanri_flg, life_flg) VALUES (NULL, :name, :lid, :lpw, :kanri_flg, :life_flg)");
    $stmt -> bindValue ('name', "$name", PDO::PARAM_STR);
    $stmt -> bindValue ('lid', "$lid", PDO::PARAM_STR);
    $stmt -> bindValue ('lpw', "$lpw", PDO::PARAM_STR);
    $stmt -> bindValue ('kanri_flg', "$kanri_flg", PDO::PARAM_STR);
    $stmt -> bindValue ('life_flg', "$life_flg", PDO::PARAM_STR);
    $status = $stmt -> execute();

if ($status == false){
    sql_error($stmt);
    // $error = $stmt -> errorInfo();
    // exit ("ErrorMessage:".$error[2]);
}else{
    redirect('reg_view.php');
    // header ('Location: reg_start.php');
};

?>