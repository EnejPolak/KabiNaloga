<?php
include 'includes/data.php';
include 'includes/header.php';
?>

<div class="container">
  <div class="products-grid">
    <?php foreach ($products as $product): ?>
      <div class="product-card">

        <div class="product-image">
          <div class="image-placeholder" aria-hidden="true">
            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect width="24" height="24" rx="2" fill="#48C6EF"/>
              <circle cx="9" cy="9" r="2" fill="white"/>
              <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>

        <div class="product-content">
          <h2 class="product-title"><?php echo htmlspecialchars($product['title']); ?></h2>
          <h3 class="product-subtitle"><?php echo htmlspecialchars($product['subtitle']); ?></h3>

          <div class="product-excerpt js-excerpt">
            <?php
              $paras = $product['excerpt_paragraphs'] ?? [];
              foreach ($paras as $idx => $text):
            ?>
              <p>
                <span class="odstavek-label"><?php echo $idx === 0 ? 'Odstavek 1:' : 'Odstavek 2:'; ?></span>
                <?php echo htmlspecialchars($text); ?>
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
            VEČ O <?php echo htmlspecialchars($product['title']); ?>
          </a>
        </div>

      </div>
    <?php endforeach; ?>
  </div>
</div>

<script src="assets/js/excerpt-toggle.js"></script>
