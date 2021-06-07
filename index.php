<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>FOODSTAGRAM</title>
    <style type="text/css">
      .jumbotron{
        background: url(food.jpg) no-repeat center center / cover;
        padding: 20px;
        height: 400px;
        margin-bottom: 50px;
      }

      
      
      .footer{
        background: #000;
        color: #fff;
        padding: 10px;
        text-align: center;
      }

      .display-4{
        font-family: "Noto Sans TC";
        color: #fff;
        vertical-align: middle;
        background: #000;
        display: inline;
        padding: 5px;
      }

      


    </style>
  </head>
  <body>
    
    

    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">FOODSTAGRAM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="user.html">個人</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index1.php">登入</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                贊助
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">合作</a></li>
                <li><a class="dropdown-item" href="#">小額投資</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">開發者</a></li>
                
              </ul>
            </li>
            
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>



    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">FOODSTAGRAM</h1>
      </div>
    </div>




    <div class="container">
      <div class="row">
        <div class="col-12 col-md-3">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
              分類
            </a>
            <a href="#" class="list-group-item list-group-item-action">早餐</a>
            <a href="#" class="list-group-item list-group-item-action">午餐</a>
            <a href="#" class="list-group-item list-group-item-action">晚餐</a>

            <form name="form" method="post" action="connect.php">
            帳號：<input type="text" name="id" /> <br>
            密碼：<input type="password" name="pw" /> <br>
            <input type="submit" name="button" value="登入" />&nbsp;&nbsp;
            <a href="register.php">申請帳號</a>
            </form>
            
          </div>

        </div>
        <div class="col-12 col-md-9">
          <h1>食物</h1>
          <p>用食物開啟美好旅程吧！</p>
          
          <div class="row">
            <div class="row">
              
              <div class="col-12 col-md-4">
                <img src="https://picsum.photos/300/200?1" class="img-fluid">
                <h3>title</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, cupiditate.</p>
              </div>
              <div class="col-12 col-md-4">
                <img src="https://picsum.photos/300/200?3" class="img-fluid">
                <h3>title</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, cupiditate.</p>
              </div>
              <div class="col-12 col-md-4">
                <img src="https://picsum.photos/300/200?4" class="img-fluid">
                <h3>title</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, cupiditate.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-4">
                <img src="https://picsum.photos/300/200?5" class="img-fluid">
                <h3>title</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, cupiditate.</p>
              </div>
              <div class="col-12 col-md-4">
                <img src="https://picsum.photos/300/200?2" class="img-fluid">
                <h3>title</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, cupiditate.</p>
              </div>
              <div class="col-12 col-md-4">
                <img src="https://picsum.photos/300/200?6" class="img-fluid">
                <h3>title</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, cupiditate.</p>
              </div>
              
            </div>
          </div>

          <div class="page">
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav> 
          </div>
        
        
        </div>

      </div>
    </div>

    

    <div class="container-fluid footer">
      &copy; by Frank Hung
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
  </body>
</html>