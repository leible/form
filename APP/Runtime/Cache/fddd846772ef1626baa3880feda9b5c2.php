<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title>form表单的应用</title>
<meta http-equiv="Content-Type" content="text/html" charset="utf8">
</head>
<body>
	<form action="form.php" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>用户名：</td><td><input type="text" name="username" size=10></td>
		</tr>
		<tr>
			<td>性  别：</td> 
			<td>
			<input type="radio" name="sex" value="0" checked>女
			<input type="radio" name="sex" value="1">男
			</td>
		</tr>
		<tr>
			<td>
			所在地：
			</td>
			<td>
			<select name="gn">
				<option value="">--请选择--</option>
				<option value="shanxi">山西</option>
				<option value="beijing">北京</option>
				<option value="hebei">河北</option>
			</select>
			</td>
		</tr>
		<tr>
			<td>爱  好：</td>
			<td>
			<input type="checkbox" name="hobby[]">玩游戏
			<input type="checkbox" name="hobby[]">上  网
			<input type="checkbox" name="hobby[]">看  书 
			<input type="checkbox" name="hobby[]">爬  山
			</td>
		</tr>
		<tr>
			<td>个性签名：</td>
			<td>
			<textarea rows="6" cols="40" name="message">这里输入内容</textarea>
			</td>
		</tr>
		<tr>
			<td>
			<input type="submit" value="提交">
			<input type="hidden" name="id" value="1">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>