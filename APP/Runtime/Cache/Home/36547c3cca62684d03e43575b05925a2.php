<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title>在线报名 </title>
<meta http-equiv="Content-Type" content="text/html" charset="utf8">
</head>
<body style="background: #cccccc;">
	<form action="__URL__/insert" method="post">
        <div style="height: 50px;width:460px;margin:auto;padding: auto;margin-top: 40px; margin-bottom: 20px;border-bottom:2px solid #009933;">在线报名 （带*为必填项）</div>
	<table align="center" >
 		<tr>
			<td style="color: #1D880D;">
           <span style="color:red;">*</span>
			报名科目：
			</td>
			<td>
			<select name="area">
				<option value="">--请选择--</option>
				<option value="yypx">英语培训</option>
				<option value="xxjy">小学教育</option>
				<option value="zxjy">中学教育</option>
			</select>
			</td>
		</tr>
		<tr>
			<td style="color: #1D880D;">
                <span style="color:red;">*</span>
                姓     名：
            </td>
            <td><input type="text" name="username" size=10></td>
		</tr>
		<tr>
			<td style="color: #1D880D;">
                <span style="color:red;">*</span>
                性     别：
            </td>
			<td>
			<input type="radio" name="sex" value="nv" checked>女
			<input type="radio" name="sex" value="nan">男
			</td>
		</tr>
        <tr>
			<td style="color: #1D880D;">
                <span style="color:red;">*</span>
                手     机：
            </td>
            <td><input type="text" name="tel" size=20></td>
        </tr>
        <tr>
			<td style="color: #1D880D;">
                <span style="color:red;">*</span>
                详细地址：
            </td>
			<td>
			<textarea rows="1" cols="40" name="dress"></textarea>
			</td>
		</tr>
		<tr>

			<td style="color: #1D880D;">
                <span style="color:red;">*</span>
                报名留言：
            </td>
			<td>
			<textarea rows="6" cols="40" name="message"></textarea>
			</td>
		</tr>
		<tr>
            <td>
			<input type="submit" style="color: #1D880D;" value="提交订单">
			</td>
		</tr>
	</table>
	</form>
</body>
</html>