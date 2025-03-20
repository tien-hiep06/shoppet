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

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'webkhuyen' );

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
define( 'AUTH_KEY',         ',2]X .4iWj>C=Hz5fLJ F&;vi=Zd9a.3|Gpzrd/.4K#0=V:*VBb(zev=Gl0W=-Uf' );
define( 'SECURE_AUTH_KEY',  'Qam8RWT60R@Rx,G$*)Zk3CS*lZ[+xIk7>3aZHsau9$/>3-,_MVu ZLHjBg}M.8Zy' );
define( 'LOGGED_IN_KEY',    'i?|Py=YC*yNFdLuk`O3lU{@E|W36]CA-M }4&f|)_L?-L]e!*Ws!HP|J3LWLWW[3' );
define( 'NONCE_KEY',        ']vp8n$TpLKhH7}cd?%l=E(M%12n0@e$oPr0L49%DlQ1gBj`0=(yAbu;@zq?|(y}$' );
define( 'AUTH_SALT',        'Hg`<l,%3^6)oC|J<l%h$2klt#u7 L:]Ps|VV$V%0Vi#H^w,AvP}-NfS~H7IZ0yKi' );
define( 'SECURE_AUTH_SALT', 'QABS+5+$5LZC=M}4Tm[|a)N+JYEppw{PWN`;w$<a]h[SLI-R#f&D74aF:ih3ze67' );
define( 'LOGGED_IN_SALT',   '=PfN3cnr;]qzIXr}&]^e01T_=l-B)8!Obm:6!aTK~4CFId@|b<DX&1Nz9VnFIssu' );
define( 'NONCE_SALT',       '><-aG&Xoe1V&cSMP+jbt^yuPHVM7Y3P&h}aSePv<#MGsAjA~<QR&9tX!LGAQGvB<' );

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
