<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset=”utf-8”>
<title>HellowServlet</title>
</head>
<body>
<input type="button" value="HelloServlet" onclick="location.herf='HelloServlet'">
<input type="button" value="WelcomeServlet" onClick="location.href='welcome.jsp'">
<input type="button" value="問い合わせ" onClick="location.href='inquiry.jsp'">
<input type="button" value="MySQLServlet" onClick="location.href='MySQLServlet'">
GET 通信
<form method="get" action="TestServlet">
<input type="text" name="username">
<input type="password" name="password">
<input type="submit" value="送信">
</form>
POST 通信
<form method="post" action="TestServlet">
<input type="text" name="username">
<input type="password" name="password">
<input type="submit" value="送信">
</form>
</body>
</html>