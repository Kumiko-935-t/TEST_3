<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規登録</title>
</head>
<body>
    <h1>PiGLy</h1>
    <h2>新規会員登録</h2>
    <h3>STEP1 アカウント情報の登録</h3></br>
<form method="post" action="/register/step2">
    @csrf
    お名前<input type="text" name="fullname" value=""></br>
    メールアドレス<input type="email" name="email" value=""></br>
    パスワード<input type="password" name="password" value=""></br>
    <button type="submit">次へ進む</button>
</form>
    <p>ログインはこちら</p>

</body>
</html>