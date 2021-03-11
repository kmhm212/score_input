<?php

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/ress@3.0.0/dist/ress.min.css">
    <link rel="stylesheet" href="style.css">
    <title>五教科テスト点数入力</title>
</head>

<body>
    <div class="wrapper">
        <h1 class="title">五教科テスト点数入力</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="name">氏名 <span class="required">(必須)<span></label>
                <input type="text" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="japanese">国語 <span class="required">(必須)<span></label>
                <input type="number" name="japanese" id="japanese">点
            </div>
            <div class="form-group">
                <label for="mathematics">数学 <span class="required">(必須)<span></label>
                <input type="number" name="mathematics" id="mathematics">点
            </div>
            <div class="form-group">
                <label for="science">理科 <span class="required">(必須)<span></label>
                <input type="number" name="science" id="science">点
            </div>
            <div class="form-group">
                <label for="social_studies">社会 <span class="required">(必須)<span></label>
                <input type="number" name="social_studies" id="social_studies">点
            </div>
            <div class="form-group">
                <label for="english">英語 <span class="required">(必須)<span></label>
                <input type="number" name="english" id="english">点
            </div>
            <input type="submit" value="送信" class="submit_btn">
        </form>
    </div>
</body>

</html>