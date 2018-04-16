<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'tokyomuseum');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6M&8c=pKu]fFhq`J4mqsk[x!A{72KR%@+`i4:8MI7Xyp6ON1JOqsiRG{kpU.JFHK');
define('SECURE_AUTH_KEY',  '3]S!0vL^B9{om-(nM|{sWY,jA}X^D2kamZD*~;;z&5IFdNPJq]<LT{i5&e1K}8po');
define('LOGGED_IN_KEY',    '=aYJz@c&V41|@Wz8kp#[O}5|u0xluLK||nTk]6K%jksUPNc0R{]8UT%gSAl}4#^_');
define('NONCE_KEY',        '1&g<Ob%D#7-JzT<xa$yjUgEVJG,YO(8|<)QuXAXJz|q;Y:2APSILZ@~pB;GU}u/,');
define('AUTH_SALT',        'zAmQ`Kx_;L[:_w%wmn~KlkQ<y*~nRl5B|&PD,#&5~dQF.}#dlx%eBL7kd(.}LIdl');
define('SECURE_AUTH_SALT', '}fOCjS~r0:1Jn&:l>nooG:-$L$d<L=njpEr]B7=hme+{|+9h7sp.q>S}u?/}$p0j');
define('LOGGED_IN_SALT',   '8{U~$y9z&T#2y6t^63;#,dE>77IXa?%f=d/>;M|4xOZe8bG/?bO<C&{bDTd#%RBJ');
define('NONCE_SALT',       'Wny9pTcJwVp8,Nr0%t+-{FDA0#bh2:Vo}P]-Oc4?gChsLeQ|LxJwOvlxaWx/p)$(');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'tm_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
