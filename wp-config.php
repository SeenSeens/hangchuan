<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
 define('FS_METHOD' , 'direct');
// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'hangchuan' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#l+ w6{rEc4wr]YAEuts|7u&Jaml,y5i6+dWPaz^Z:3P3U?jig,[:c1m[)AE80s$' );
define( 'SECURE_AUTH_KEY',  '+q)n3upeg!pdm}Ax(VlGN&AOdP ElDkz+/$^%_.=EXNTk4<)]d^$bf~ook1%n^46' );
define( 'LOGGED_IN_KEY',    'y=o(4Dbd{,45&Cx|~}r<}|K$-$#y}~8ghME1.+|^ua-Mr:R?gHBhj7},yLP0t|U+' );
define( 'NONCE_KEY',        '#o}~.2WwPpS:G)F/o}2Dqo_vL|0(8<H69gy<W`Rb1&U^eiS&7ns0!yu4Cl$[]nIL' );
define( 'AUTH_SALT',        '>y!rG`A?T2%}+zXN5y3zk-#IVO?y))? @2ji cR.ke $QGUBT##?aq8.BVaI`bi]' );
define( 'SECURE_AUTH_SALT', 'KLbVV:3kd? q)/F2G^/)vkgya=}Ox=Zr:G]<9U{qDA:O,zOc$f/A0o R_x//:3KO' );
define( 'LOGGED_IN_SALT',   '=f_:5#_c[mi!L^EYeD4{.y!:Q3_mKT<;Tu[_OH^W (kgY rt~5NSVW 79vXpYoKk' );
define( 'NONCE_SALT',       '?qI$:4J XeCGal-WPo&lT.~)v9?{;C~X1lG[Txoz(;`Whmp$Su1[#E}WnA? 99=D' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
