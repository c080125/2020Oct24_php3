<?php
    require_once('funcs.php');

// DB接続
    try {
        $pdo = new PDO ('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
    } catch (PDOException $e) {
        exit('DBConnectError:'.$e->getMessage());
    };

// ユーザー情報呼び出し
    $stmt   =   $pdo->prepare ("SELECT * FROM gs_user_table");
    $status =   $stmt -> execute();
    
    $view   =   "";
    if ($status == false) {
        sql_error($status);
        // $error  =   $stmt -> errorInfo();
        // exit ("ErrorQuery:".error[2]);
    }else{
        while ($result = $stmt -> fetch(PDO::FETCH_ASSOC)){
            $view   .=  '<p>';
            $view   .=  '<a href = "reg_update.php?id=' . $result["id"] . '">';
            // $view   .=   '<tr>';
            // $view   .=   '<td class="id">'.$result[id].'</td>' . '<td class="title">'.$result[title].'</td>' . '<td class="url">'.$result["url"].'</td>' . '<td class="comm">'.$result["comm"].'</td>' . '<td class="datetime">'.$result["datetime"].'</td>';
            // $view   .=   '</tr>';
            $view   .=   $result[id] . " : " . $result[name] . " : " . $result[lid] . " : " . $result[lpw] . " : " .$result[kanri_flg] . " : " .$result[life_flg];
            $view   .=  '</a>';
            $view   .=  '        ';
            $view   .=  '<a href = "reg_deletesql.php?id= '.$result["id"].'">';
            $view   .=  '[ 削除 ]';
            $view   .=  '</a>';
            $view   .=  '</p>';
        };
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?= $view ?></p>
</body>
</html>