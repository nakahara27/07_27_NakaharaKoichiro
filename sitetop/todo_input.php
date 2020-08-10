<!DOCTYPE html>
<html lang='ja'>

<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<title>ToDo Manager</title>
	<link rel='stylesheet' type='text/css' href='css/reset.css' />
	<link rel='stylesheet' type='text/css' href='css/sanitize.css' />
	<link rel='stylesheet' type='text/css' href='css/style.css' />
</head>

<body>
	<form action='todo_input_act.php' method='POST'>
		<fieldset>
			<legend>ToDo新規入力</legend>
			<a href='index.php'>ToDoリスト</a>
			<div>
				締切日: <input type='date' name='tdt_deadline'>
			</div>
			<div>
				ToDo: <input type='text' class='txt_todo' name='txt_todo'>
			</div>
			<div>
				<button>ToDo登録</button>
			</div>
		</fieldset>
	</form>

</body>

</html>