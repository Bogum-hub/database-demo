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
    <div class="printPost">
      <?php
        // 如果 $_POST 陣列內容數量有的話，代表有值，就 print_r 出來
        if(count($_POST)) print_r($_POST);
      ?>
    </div>

    <form action="register.php" method="post">
    <h4>input your account</h4>
    <input type="text" name="uid" placeholder="單行文字方塊" autofocus>

    <h4>input your password</h4>
    <input type="password" name="pw" placeholder="請填密碼">

    <h4>select your gender</h4>
    <label><input type="radio" name="gender" value="1"> 男生</label>
    <label><input type="radio" name="gender" value="0"> 女生</label>

    <h4>input date</h4>
    <input type="date" name="birthday" placeholder="生日">

    <h4>input email</h4>
    <input type="email" name="myEmail" placeholder="請填信箱">

    <h4>input your address</h4>
    <input type="text" name="address" placeholder="單行文字方塊" autofocus>
    </form>
      

    
  </body>
</html>
