<?php include 'app/views/shares/header.php'; ?>
<h1 class="text-center my-4 text-primary">Danh sách sản phẩm</h1>

<!-- Banner trung tâm -->
<div class="container text-center mb-4">
    <img src="/webbanhang/uploads/<?php echo file_exists('uploads/banner.jpg') ? 'banner.jpg' : 'default-banner.jpg'; ?>" 
         class="img-fluid rounded shadow-lg" 
         alt="Banner" 
         style="max-height: 300px; object-fit: cover; width: 100%;">
</div>

<!-- Nút thêm sản phẩm -->
<div class="text-center mb-4">
    <a href="/webbanhang/Product/add" class="btn btn-success btn-lg shadow">
        <i class="bi bi-plus-circle"></i> Thêm sản phẩm mới
    </a>
</div>

<!-- Danh sách sản phẩm -->
<div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php foreach ($products as $product): ?>
            <div class="col">
                <div class="card h-100 shadow-lg border-0 rounded-3">
                    <!-- Ảnh sản phẩm -->
                    <?php if (!empty($product->image)): ?>
                        <img src="/webbanhang/<?php echo htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>" 
                            class="card-img-top img-fluid p-3 rounded-3" 
                            alt="Product Image" 
                            style="height: 200px; object-fit: cover;">
                    <?php endif; ?>

                    <div class="card-body">
                        <!-- Tên sản phẩm -->
                        <h5 class="card-title fw-bold">
                            <a href="/webbanhang/Product/show/<?php echo htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?>" 
                                class="text-decoration-none text-dark">
                                <?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>
                            </a>
                        </h5>

                        <!-- Mô tả ngắn -->
                        <p class="card-text text-muted text-truncate">
                            <?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?>
                        </p>

                        <!-- Giá & danh mục -->
                        <p class="card-text"><strong>Giá:</strong> <span class="text-danger"><?php echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?> VND</span></p>
                        <p class="card-text"><strong>Danh mục:</strong> <span class="badge bg-info text-dark"><?php echo htmlspecialchars($product->category_name, ENT_QUOTES, 'UTF-8'); ?></span></p>
                    </div>

                    <!-- Nút thao tác -->
                    <div class="card-footer bg-white border-0 d-flex justify-content-between p-3">
                        <a href="/webbanhang/Product/edit/<?php echo htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?>" 
                            class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-square"></i> Sửa
                        </a>

                        <a href="/webbanhang/Product/delete/<?php echo htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?>" 
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này?');">
                            <i class="bi bi-trash"></i> Xoá
                        </a>

                        <a href="/webbanhang/Product/addToCart/<?php echo htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?>" 
                            class="btn btn-primary btn-sm">
                            <i class="bi bi-cart-plus"></i> Giỏ hàng
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'app/views/shares/footer.php'; ?>
