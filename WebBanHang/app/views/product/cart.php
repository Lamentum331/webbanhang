<?php include 'app/views/shares/header.php'; ?>

<h1 class="text-center my-4 text-primary">Giỏ hàng</h1>

<?php if (!empty($cart)): ?>
    <div class="container">
        <ul class="list-group">
            <?php $totalPrice = 0; ?>
            <?php foreach ($cart as $id => $item): ?>
                <?php $subtotal = $item['price'] * $item['quantity']; ?>
                <?php $totalPrice += $subtotal; ?>

                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <?php if (!empty($item['image'])): ?>
                            <img src="/webbanhang/<?php echo htmlspecialchars($item['image'], ENT_QUOTES, 'UTF-8'); ?>"
                                alt="Product Image" class="img-thumbnail me-3"
                                style="width: 80px; height: 80px; object-fit: cover;">
                        <?php endif; ?>
                        <div>
                            <h5 class="mb-1">
                                <?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?>
                            </h5>
                            <p class="mb-1 text-muted">Giá:
                                <?php echo number_format($item['price'], 0, ',', '.'); ?> VND
                            </p>
                            <p class="mb-1 text-danger fw-bold">Tổng: <span id="subtotal-<?php echo $id; ?>">
                                    <?php echo number_format($subtotal, 0, ',', '.'); ?>
                                </span> VND</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <!-- Giảm số lượng -->
                        <a href="/webbanhang/cart/update?action=decrease&id=<?php echo $id; ?>"
                            class="btn btn-outline-secondary btn-sm me-2">
                            <i class="bi bi-dash"></i>
                        </a>

                        <!-- Hiển thị số lượng -->
                        <span class="fw-bold mx-2">
                            <?php echo htmlspecialchars($item['quantity'], ENT_QUOTES, 'UTF-8'); ?>
                        </span>

                        <!-- Tăng số lượng -->
                        <a href="/webbanhang/cart/update?action=increase&id=<?php echo $id; ?>"
                            class="btn btn-outline-primary btn-sm me-2">
                            <i class="bi bi-plus"></i>
                        </a>

                        <!-- Xóa sản phẩm khỏi giỏ hàng -->
                        <a href="/webbanhang/cart/remove?id=<?php echo $id; ?>" class="btn btn-outline-danger btn-sm"
                            onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng?');">
                            <i class="bi bi-trash"></i>
                        </a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>

        <!-- Tổng tiền -->
        <div class="mt-4 text-end">
            <h4>Tổng thanh toán: <span class="text-success fw-bold" id="total-price">
                    <?php echo number_format($totalPrice, 0, ',', '.'); ?>
                </span> VND</h4>
        </div>

        <!-- Nút điều hướng -->
        <div class="d-flex justify-content-between mt-4">
            <a href="/webbanhang/Product" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Tiếp tục mua sắm
            </a>
            <a href="/webbanhang/Product/checkout" class="btn btn-success">
                <i class="bi bi-credit-card"></i> Thanh Toán
            </a>
        </div>
    </div>
<?php else: ?>
    <p class="text-center text-muted">Giỏ hàng của bạn đang trống.</p>
    <div class="text-center">
        <a href="/webbanhang/Product" class="btn btn-primary">
            <i class="bi bi-cart-plus"></i> Mua sắm ngay
        </a>
    </div>
<?php endif; ?>

<?php include 'app/views/shares/footer.php'; ?>