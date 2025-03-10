<?php
class CartController
{
    public function updateQuantity()
    {
        // Kiểm tra phương thức và tham số
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action'], $_GET['id'])) {
            $id = intval($_GET['id']);
            $action = $_GET['action'];

            // Kiểm tra sản phẩm trong giỏ hàng
            if (isset($_SESSION['cart'][$id])) {
                if ($action === 'increase') {
                    $_SESSION['cart'][$id]['quantity']++;
                } elseif ($action === 'decrease' && $_SESSION['cart'][$id]['quantity'] > 1) {
                    $_SESSION['cart'][$id]['quantity']--;
                }
            }

            // Chuyển hướng về giỏ hàng
            header('Location: /webbanhang/Product/cart');
            exit();
        } else {
            echo "Invalid action or product ID.";
        }
    }

    public function removeItem()
    {
        // Kiểm tra phương thức và tham số
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
            $id = intval($_GET['id']);

            // Xóa sản phẩm khỏi giỏ hàng
            if (isset($_SESSION['cart'][$id])) {
                unset($_SESSION['cart'][$id]);
            }

            // Chuyển hướng về giỏ hàng
            header('Location: /webbanhang/Product/cart');
            exit();
        } else {
            echo "Invalid product ID.";
        }
    }
}
