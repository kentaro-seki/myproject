<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
<!-- publicまでに見にいく scssを変換して読み込む-->
</head>
<body>
    <!-- まず形をHTMLで描いておく -->
    <div class="containar">
    <p>ログインの説明</p>

    <li>ログインIDを設定する</li>
    <form action="#" method="POST">
    <p>
    ログインID：
    <input type="text">
    </p>
    </form>
    <li>パスワードを設定する</li>
    <form action="#" method="POST">
    <p>
    パスワード：
    <input type="text">
    <div>
    <input type="submit" name="button" value="ログイン">
    </div>
    </p>
    </form>
    </div>
    <!-- bootstrapを覚える -->
</body>
</html>