<?php
	include('inc_functions.php'); // 関数ファイル読み込み
?>
<?php
	// 送信データのチェック
	// var_dump($_GET);exit();

	// 送信データ受け取り
	$get_sn=$_GET['sn'];

	// DB接続
	$pdo=fn_connect_to_db();

	// DELETE文を作成&実行
	$sql="UPDATE todo_tbl SET is_eliminated=false WHERE sn=:sn";

	$stmt=$pdo->prepare($sql);
	$stmt->bindValue(':sn', $get_sn, PDO::PARAM_INT);
	$status=$stmt->execute();

	// データ登録処理後
	if ($status == false) {
	  // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
	  $error=$stmt->errorInfo();
	  echo json_encode(["error_msg" => "{$error[2]}"]);
	  exit();
	} else {
	  // 正常にSQLが実行された場合は一覧ページファイルに移動し，一覧ページの処理を実行する
	  header("Location:todo_read_eliminated.php");
	  exit();
	}
