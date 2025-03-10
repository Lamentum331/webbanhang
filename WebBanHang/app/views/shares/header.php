<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <style>
        .navbar-custom {
            background-color: #20c997 !important; /* Xanh ngọc */
        }
        .navbar-custom .navbar-brand, 
        .navbar-custom .nav-link {
            color: white !important;
        }
        .navbar-custom .nav-link:hover {
            color: #e3f2fd !important;
        }
    </style>
</head>

<body>
    <!-- Navbar với màu xanh ngọc -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <a class="navbar-brand" href="#">
            <i class="bi bi-shop"></i> Quản lý sản phẩm
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/webbanhang/Product/">
                        <i class="bi bi-list"></i> Danh sách sản phẩm
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/webbanhang/Product/add">
                        <i class="bi bi-plus-circle"></i> Thêm sản phẩm
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h1>Chào mừng đến với hệ thống quản lý sản phẩm</h1>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
