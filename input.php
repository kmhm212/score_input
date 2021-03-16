<?php
$err_messages = [];
$topics = [
    'topic'   => ['name', 'japanese',  'mathematics', 'science',  'social_studies', 'english'  ],
    'subject' => ['名前',  '国語の点数',  '数学の点数',   '理科の点数', '社会の点数',       '英語の点数'],
    'point'   => ['','','','','',''],
];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    for ($i = 0; $i <= 5; $i++) { 
        $topics['point'][$i] = $_POST[$topics['topic'][$i]];
        if ($topics['point'][$i] == '') {
            $err_messages[] = $topics['subject'][$i] . 'を入力して下さい';
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
        <?php if($err_messages): ?>
            <ul>
                <?php foreach($err_messages as $err_message): ?>
                    <li>
                        <?= htmlspecialchars ($err_message, ENT_QUOTES, 'UTF-8') ?>
                    </li>
                <?php endforeach ?>
            </ul>
        <?php endif ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="name">氏名 <span class="required">(必須)<span></label>
                <input type="text" name="name" id="name" value="<?= $topics['point'][0] ?>" >
            </div>
            <div class="form-group">
                <label for="japanese">国語 <span class="required">(必須)<span></label>
                <input type="number" name="japanese" id="japanese" min="0" max="100" value="<?= $topics['point'][1] ?>">点
            </div>
            <div class="form-group">
                <label for="mathematics">数学 <span class="required">(必須)<span></label>
                <input type="number" name="mathematics" id="mathematics" min="0" max="100" value="<?= $topics['point'][2] ?>">点
            </div>
            <div class="form-group">
                <label for="science">理科 <span class="required">(必須)<span></label>
                <input type="number" name="science" id="science" min="0" max="100" value="<?= $topics['point'][3] ?>">点
            </div>
            <div class="form-group">
                <label for="social_studies">社会 <span class="required">(必須)<span></label>
                <input type="number" name="social_studies" id="social_studies" min="0" max="100" value="<?= $topics['point'][4] ?>">点
            </div>
            <div class="form-group">
                <label for="english">英語 <span class="required">(必須)<span></label>
                <input type="number" name="english" id="english" min="0" max="100" value="<?= $topics['point'][5] ?>">点
            </div>
            <input type="submit" value="送信" class="btn">
        </form>
    </div>
</body>

</html>