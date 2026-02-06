<?php
include 'includes/data.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$product = null;

foreach ($products as $p) {
  if ((int)($p['id'] ?? 0) === $id) { $product = $p; break; }
}

function e($v): string {
  return htmlspecialchars((string)($v ?? ''), ENT_QUOTES, 'UTF-8');
}

include 'includes/header.php';
?>

<div class="container">
  <?php if ($product): ?>
    <?php
      $title = $product['title'] ?? '';
      $subtitle = $product['subtitle'] ?? '';
      $paras = $product['excerpt_paragraphs'] ?? [];
    ?>

    <div class="product-detail">
      <div class="product-detail-image">
        <img
          class="product-image-large"
          src="assets/img/img.png"
          srcset="assets/img/img.png 1x, assets/img/img@2x.png 2x"
          alt="<?php echo e($title); ?>"
          loading="lazy"
          decoding="async"
        >
      </div>

      <div class="product-detail-content">
        <h1 class="product-detail-title"><?php echo e($title); ?></h1>
        <h2 class="product-detail-subtitle"><?php echo e($subtitle); ?></h2>

        <div class="product-detail-body">
          <?php foreach ($paras as $idx => $text): ?>
            <p>
              <span class="odstavek-label"><?php echo $idx === 0 ? 'Odstavek 1.' : 'Odstavek 2.'; ?></span>
              <?php echo e($text); ?>
            </p>
          <?php endforeach; ?>
        </div>

        <a href="izdelki.php" class="btn btn-outline btn-back">&lt; NAZAJ NA SEZNAM</a>
      </div>
    </div>

  <?php else: ?>
    <div class="product-not-found">
      <h1>Izdelek ne obstaja</h1>
      <a href="izdelki.php" class="btn btn-outline">&lt; NAZAJ NA SEZNAM</a>
    </div>
  <?php endif; ?>
</div>

