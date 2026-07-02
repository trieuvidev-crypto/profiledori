<?php
/**
 * data/payment.php
 * Toàn bộ thông tin ngân hàng / ví hiển thị ở trang Thanh toán.
 * Muốn đổi số tài khoản, chủ tài khoản, QR... chỉ cần sửa mảng bên dưới
 * hoặc thay ảnh trong uploads/qrcode/ và assets/images/banks/.
 */

return [
    // Nội dung chuyển khoản mặc định, có nút "Sao chép" riêng
    'transfer_content' => 'Donate Dori',

    'banks' => [
        [
            'id'            => 'techcombank',
            'name'          => 'Techcombank',
            'logo'          => 'assets/images/banks/techcombank.png',
            'holder'        => 'LUONG MINH TRIEU VI',
            'account_label' => 'Số tài khoản',
            'account'       => '65999956789',
            'qr'            => 'uploads/qrcode/techcombank.png',
            // Để trống nếu không có link chuyển khoản trực tiếp (deep link app ngân hàng)
            'transfer_url'  => '',
        ],
        [
            'id'            => 'vietcombank',
            'name'          => 'Vietcombank',
            'logo'          => 'assets/images/banks/vietcombank.png',
            'holder'        => 'LUONG MINH TRIEU VI',
            'account_label' => 'Số tài khoản',
            'account'       => '9984771687',
            'qr'            => 'uploads/qrcode/vietcombank.png',
            'transfer_url'  => '',
        ],
        [
            'id'            => 'zalopay',
            'name'          => 'ZaloPay',
            'logo'          => 'assets/images/banks/zalopay.png',
            'holder'        => 'LUONG MINH TRIEU VI',
            'account_label' => 'Số điện thoại',
            'account'       => '0984771687',
            'qr'            => 'uploads/qrcode/zalopay.png',
            'transfer_url'  => '',
        ],
    ],
];
