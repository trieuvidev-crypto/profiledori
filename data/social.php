<?php
/**
 * data/social.php
 * - quick_links: 3 nút pill hiển thị ngay trong Hero (giống ảnh tham khảo).
 * - platforms: card thống kê mạng xã hội đầy đủ (mục "Mạng xã hội").
 */

return [
    'quick_links' => [
        [
            'id'    => 'facebook',
            'name'  => 'Facebook',
            'icon'  => 'assets/images/social/facebook.svg',
            'url'   => '#',
        ],
        [
            'id'    => 'telegram',
            'name'  => 'Telegram',
            'icon'  => 'assets/images/social/telegram.svg',
            'url'   => '#',
        ],
        [
            'id'    => 'mail',
            'name'  => 'Mail',
            'icon'  => 'assets/images/social/mail.svg',
            'url'   => 'mailto:#',
        ],
    ],

    'platforms' => [
        [
            'id'      => 'tiktok',
            'name'    => 'Tiktok',
            'icon'    => 'assets/images/social/tiktok.svg',
            'color'   => '#0d0d12',
            'likes'   => 0,
            'follows' => 0,
            'url'     => '#',
        ],
        [
            'id'      => 'facebook',
            'name'    => 'Facebook',
            'icon'    => 'assets/images/social/facebook.svg',
            'color'   => '#1877F2',
            'likes'   => 0,
            'follows' => 0,
            'url'     => '#',
        ],
        [
            'id'      => 'discord',
            'name'    => 'Discord Server',
            'icon'    => 'assets/images/social/discord.svg',
            'color'   => '#5865F2',
            'likes'   => 0,
            'follows' => 0,
            'url'     => '#',
        ],
        [
            'id'      => 'telegram',
            'name'    => 'Telegram',
            'icon'    => 'assets/images/social/telegram.svg',
            'color'   => '#26A5E4',
            'likes'   => 0,
            'follows' => 0,
            'url'     => '#',
        ],
    ],
];
