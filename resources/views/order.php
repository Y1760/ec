<!doctype html>
<html lang="ja">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>ふるうつ</title>
</head>
<style>
    .aaa
    {
      list-style:none
    }
    .fruit
    {
        float: left;
        padding:40px;
    }

    .size{
        font-size: 50px;
    }

    .sizee{
        font-size: 30px;
    }
</style>
<body>
<header>
    <div class="container">
        <div class="size text-center bg-danger text-white m-5 py-5">
            ふるうつ
        </div>
    </div>
</header>
<div class="container">
    <nav class="nav bg-danger justify-content-center sizee text-white">
        <a class="text-white py-4 px-4" href="/">Home</a>
        <a class="text-white py-4 px-5" href="/cart/list">Cart</a>
    </nav>
</div>
</nav>
<!-- end #menu -->
<div class="my-5 text-center">
<form action="/order" method="POST">
    <?= csrf_field()?>
    <ul class="aaa">


            <?=csrf_field()?>
            名前<br><input type="text" name="name" value="<?=$inputs["name"]??''?>"required><br>
            住所<br><input type="text" name="address" value="<?=$inputs["address"]??''?>"required><br>
            電話番号<br><input type="text" name="tel" value="<?=$inputs["tel"]??''?>"required><br>
            Email<br><input type="text" name="email" value="<?=$inputs["email"]??''?>"required><br>
            <input type="submit" value="注文" class="btn btn-danger my-3">



    </ul>
</form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
















