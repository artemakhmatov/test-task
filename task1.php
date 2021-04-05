<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$a = 'Новостная статья может быть краткой или подробной, мягкой или жесткой. Иногда новость объединяет несколько
логически связанных фактов. Главное отличие новости — она должна быть проще, информативнее и короче обычной статьи.
Продающие новости являются эффективным инструментом контент-маркетинга. Но для этого нужно перевести внимание читателя
на продающий текст. Двухфазная схема продаж заключается в следующем: сначала читатель интересуется продуктом,
заходит на сайт для прочтения новости. Затем потенциальный покупатель уже переходит на продающий текст
и приобретает рекламируемый товар.';
//$b = mb_substr($a, 0, 180, 'UTF-8');
$link = 'http://webdrawing.ru/example.php';

if (!empty($a)) {
    $b = mb_strimwidth($a, 0, 180, '...' );
}
if(!empty($a) && !empty($link)) {
    $c = explode(' ', $b);
    $len = count($c);
    $text_link = $c[$len-2].' '.$c[$len-1];
    $link2 = '<a href="'.$link.'">'.$text_link.'</a>';
    $result = str_replace($text_link, $link2, $b);
    if (!empty($result)) {
        echo '<p style="font-size: 18px">'.$result.' </p>';
    }
}
?>

</body>
</html>
