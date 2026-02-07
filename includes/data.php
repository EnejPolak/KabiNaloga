<?php
$baseTitle    = 'IZDELEK';
$btnName    = 'IZDELEKU';
$baseSubtitle = 'Podnaslov izdelka';

$paragraph1 = 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam quis risus eget urna mollis ornare vel eu leo.';
$paragraph2 = 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.';

$count = 5;

$products = [];
for ($i = 1; $i <= $count; $i++) {

  $paras = [];
  $paras[] = $paragraph1;

  for ($k = 1; $k <= $i; $k++) {
    $paras[] = $paragraph2;
  }

  $products[] = [
    'id' => $i,
    'title' => $baseTitle . ' ' . $i,
    'btn' => $btnName . ' ' . $i,
    'subtitle' => $baseSubtitle . ' ' . $i,
    'excerpt_paragraphs' => $paras,
  ];
}


?>
