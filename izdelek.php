<?php
include 'includes/data.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$product = null;

foreach ($products as $p) {
    if ($p['id'] === $id) {
        $product = $p;
        break;
    }
}
?>
<?php include 'includes/header.php'; ?>

<div class="container">
    <?php if ($product): ?>
    <div class="product-detail">
        <div class="product-detail-image">
            <div class="image-placeholder-large">
                <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="24" height="24" rx="2" fill="#48C6EF"/>
                    <circle cx="9" cy="9" r="2" fill="white"/>
                    <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>
        <div class="product-detail-content">
            <h1 class="product-detail-title"><?php echo htmlspecialchars($product['title']); ?></h1>
            <h2 class="product-detail-subtitle"><?php echo htmlspecialchars($product['subtitle']); ?></h2>
            <div class="product-detail-body">
                <p><?php echo htmlspecialchars($product['body']); ?></p>
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