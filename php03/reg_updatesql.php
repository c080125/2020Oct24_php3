<?php
    require_once("funcs.php");

    $id     =   $_POST["id"];
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

// SQLのデータを上書き
    $stmt = $pdo->prepare ("UPDATE 
                                gs_user_table 
                            SET 
                                name = :name,
                                lid = :lid, 
                                lpw = :lpw, 
                                kanri_flg = :kanri_flg,
                                life_flg = :life_flg
                            WHERE 
                                id = :id;
                        ");
    $stmt -> bindValue ('id', "$id", PDO::PARAM_INT);
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