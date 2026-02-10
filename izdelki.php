<?php
include 'includes/helpers.php';
include 'includes/data.php';
include 'includes/header.php';
?>

<div class="container">
  <div class="products-grid">
    <?php foreach ($products as $product): ?>
      <div class="product-card">

          <div class="product-image">
              <img
                class="product-image-img"
                src="assets/img/img@2x.png"
                width="360"
                height="203"
                alt=""
                loading="lazy"
                decoding="async"
              />
          </div>

        <div class="product-content">
          <h2 class="product-title"><?php echo e($product['title']); ?></h2>
          <h3 class="product-subtitle"><?php echo e($product['subtitle']); ?></h3>

          <div class="product-excerpt js-excerpt">
            <?php
              $paras = $product['excerpt_paragraphs'] ?? [];
              foreach ($paras as $idx => $text):
            ?>
              <p>
                <span class="odstavek-label"><?php echo $idx === 0 ? 'Odstavek 1:' : 'Odstavek 2:'; ?></span>
                <?php echo e($text); ?>
              </p>
            <?php endforeach; ?>
          </div>

          <button class="excerpt-toggle js-excerpt-toggle" type="button" hidden>Prikaži več</button>

          <a class="btn btn-outline" href="izdelek.php?id=<?php echo (int)$product['id']; ?>">
            <span class="btn-icon" aria-hidden="true">
              <svg width="11" height="13" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="btn-plus-icon">
                <path d="M6 2v8M2 6h8" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
              </svg>
            </span>
            VEČ O <?php echo e($product['btn']); ?>
          </a>
        </div>

      </div>
    <?php endforeach; ?>
  </div>
</div>

<script src="assets/js/excerpt-toggle.js"></script>

<?php include 'includes/footer.php'; ?>
