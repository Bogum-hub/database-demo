<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style >
      form{
        padding-bottom:300px;
      }
    </style>
  </head>
  <body>
    <form id="form" method="post" action="register_finish.php">
      <fieldset>
      <legend>登入資訊</legend>
        帳號： <input type="text" name="id" placeholder="請填帳號"><br>
        密碼： <input type="password" name="pw" placeholder="請填密碼">
        確認密碼： <input type="password" name="pw2" placeholder="請再填一次密碼">
        性別：<label><input type="radio" name="gender" value="女" checked>女</label> <label><input type="radio" name="gender" value="男">男</label><br>
        生日：<input type="date" name="birthday" placeholder="生日"><br>
        信箱：<input type="email" name="myEmail" placeholder="請填信箱"><br>
        地址：<input type="text" name="address" placeholder="單行文字方塊"><br>
      </fieldset>
      <input type="submit" name="button" value="確定" />
  </body>
</html>
