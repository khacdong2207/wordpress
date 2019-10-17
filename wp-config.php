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
define( 'DB_NAME', 'sql12308831' );

/** Username của database */
define( 'DB_USER', 'sql12308831' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'h23l6qfDVS' );

/** Hostname của database */
define( 'DB_HOST', 'sql12.freesqldatabase.com' );

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
define( 'AUTH_KEY',         'EFU1i4y<@LE}(iH@>R0^sd.buC1U:c32bO;ZW3^@Tcwc(7:4l9s:=-/8bZ;u@7,B' );
define( 'SECURE_AUTH_KEY',  'v@~v?[*x9NGE<pjh%3&VyXYPZT~7^v#wlg?.%*X{t@#oR=r:j-L;(aj*zkHoK4!;' );
define( 'LOGGED_IN_KEY',    '#J`yE{ZZ:x!naq{6XqZ[@0iks.x&7u=&*XBi*$SCGd*@B2duHE y|V*m{:] ^oVK' );
define( 'NONCE_KEY',        '69C>7h*@E 00VBfbB1j)^2h(;zPIeNN[Drd_a`#x2/*0I/^hK-3n3hSWO,>+}uhj' );
define( 'AUTH_SALT',        '_X-knBjoF:=.96#;-8&C1M]Fg~< &YUkL(eNWizzRbQW=}zyz`Tj4B<kyXnwB#;y' );
define( 'SECURE_AUTH_SALT', 'G/nGa3O,cvU[7l&qC;wB6:,nn|k,fhHcvv@4/1esL{<z$.a@@_L&m3w0~p/He.wt' );
define( 'LOGGED_IN_SALT',   'E3 l8(bw2m7d,WY)@b0v1ZoK[XFG!oR@`Vc L*)M|AL:M1PE[nl<wBqrj7v&w~X*' );
define( 'NONCE_SALT',       'E-k[>ozlqp f~R3,:MIv-M5~e)!tQ1=3m2W*C0.u:MJi,$j=4pEO9 2;lJg)Of`e' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

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
