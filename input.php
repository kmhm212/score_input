<?php
    $subjects = [
        'name' => '名前',
        'ja'   => '国語の点数',
        'ma'   => '数学の点数',
        'sc'   => '理科の点数',
        'so'   => '社会の点数',
        'en'   => '英語の点数',
    ];
    $points = [
        'name' => '',
        'ja'   => '',
        'ma'   => '',
        'sc'   => '',
        'so'   => '',
        'en'   => '',
    ];
    $err_messages = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $points = [
        'name' => $_POST['name'],
        'ja'   => $_POST['japanese'],
        'ma'   => $_POST['mathematics'],
        'sc'   => $_POST['science'],
        'so'   => $_POST['social_studies'],
        'en'   => $_POST['english'],
    ];
    foreach ($subjects as $su => $subject) {
        if (empty ($points[$su]) && $points[$su] != "0") {
            $err_messages[] = $subject . 'を入力して下さい' . '<br>';
        }
    }
    if (empty ($err_messages)) {
        header("Location: result.php");
    }
}
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
        <ul>
            <?php foreach($err_messages as $err_message): ?>
                <li>
                    <?= $err_message ?>
                </li>
            <?php endforeach ?>
        </ul>
        <form action="" method="post">
            <div class="form-group">
                <label for="name">氏名 <span class="required">(必須)<span></label>
                <input type="text" name="name" id="name" value="<?= $points['name'] ?>" >
            </div>
            <div class="form-group">
                <label for="japanese">国語 <span class="required">(必須)<span></label>
                <input type="number" name="japanese" id="japanese" min="0" max="100" value="<?= $points['ja'] ?>">点
            </div>
            <div class="form-group">
                <label for="mathematics">数学 <span class="required">(必須)<span></label>
                <input type="number" name="mathematics" id="mathematics" min="0" max="100" value="<?= $points['ma'] ?>">点
            </div>
            <div class="form-group">
                <label for="science">理科 <span class="required">(必須)<span></label>
                <input type="number" name="science" id="science" min="0" max="100" value="<?= $points['sc'] ?>">点
            </div>
            <div class="form-group">
                <label for="social_studies">社会 <span class="required">(必須)<span></label>
                <input type="number" name="social_studies" id="social_studies" min="0" max="100" value="<?= $points['so'] ?>">点
            </div>
            <div class="form-group">
                <label for="english">英語 <span class="required">(必須)<span></label>
                <input type="number" name="english" id="english" min="0" max="100" value="<?= $points['en'] ?>">点
            </div>
            <input type="submit" value="送信" class="btn">
        </form>
    </div>
</body>

</html>