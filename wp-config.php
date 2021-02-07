<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'sabriyasarcomtr_iyzico' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'sabriyasarcomtr_iyzico' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '5VqfDoAkA' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>;Pnj%-UOxe&n;O.p?{UEIO<`F]m{7r~6)$U]/%ps(>07ImZMx=_X(1Z;_CCCH=E' );
define( 'SECURE_AUTH_KEY',  'pEr)ZrRyzW5<7fB7xz0Ty_Sc5; h[O^v`.PW?,.-XHU`qVht+1`6|/`]T-ze+mBV' );
define( 'LOGGED_IN_KEY',    '6y4wNway^qk^&s`;KUS[sN?DU~./xLTnmv)SyHCn{|qZv2d3s^y,!2I1Ymj:X2|@' );
define( 'NONCE_KEY',        'kU=;MZ@yNKgJA/5!id<*l(TrLa%2k@IY?t/6pFb%eeQTaHDqhS-Y0C*DN!w>0CA&' );
define( 'AUTH_SALT',        ';Oc:HMs~si`Gag#EW!+H4l=I1STLi4 ?5D?FBu@Sf!63sj*,OqS@YCEqm@o!mt-h' );
define( 'SECURE_AUTH_SALT', 'T:ie%Vmn7uMpWmL7;TO<N%c<!uowP28R2]CIf>k+;dUirN8Wpl50VZ2sKO.^PgdT' );
define( 'LOGGED_IN_SALT',   '[6tS@A1ejmN(7RQ_wU)&Q.B0?udvZyYp*k#sdKjPe6~Ds}%,jc+hu9QlCek?v$ 9' );
define( 'NONCE_SALT',       '~,1p27Q!n.&iQ|d[jm`<^tEylUm<)LD|8 ;o,2o>cM39#TLu80lLqa&4N?wUQ2PX' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
