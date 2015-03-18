<?php
/**
 * WordPress基础配置文件。
 *
 * 本文件包含以下配置选项：MySQL设置、数据库表名前缀、密钥、
 * WordPress语言设定以及ABSPATH。如需更多信息，请访问
 * {@link http://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 * 编辑wp-config.php}Codex页面。MySQL设置具体信息请咨询您的空间提供商。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以手动复制这个文件，并重命名为“wp-config.php”，然后填入相关信息。
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'wordpress');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'alexander');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Jk/OdAP)k+?DhiWj}S| x?,VXWNwJ8{,zYnATn<xn_9Kr&p;fgo<7rPt5A,n^?/*');
define('SECURE_AUTH_KEY',  '%^MYe&+LP|#-Q%Rvvteoy-4qNt}J;+s LG39?[mZ$ZV#Heje<jO:paNLo8 I:,06');
define('LOGGED_IN_KEY',    '|r#qQR+tXt?49%sPO`|j:_ CL`rXJ96z7]mq~dA,ZaI3.a= wE8J/n`1IB:Zu}8E');
define('NONCE_KEY',        '_A;kDpo500N/~jih(IlV{ckjQZg@zff=nwaiF`U*V&<N}vYj+eEC-X_j!i[&.g(F');
define('AUTH_SALT',        'JeF(P:_bNpn-k*-tw{IjteNPgM8?iH7Q3ZNAk%wQR{|,3+gReq*:+Gh*|izZp)8u');
define('SECURE_AUTH_SALT', 'D];_Q4!V)+G[{0n<ZUL1+@+jD&;?6u 9 5wYCPT>-B.yQJ;DAH[eDKp0<|Y};<f*');
define('LOGGED_IN_SALT',   '}65{Bjz[|Z@ywethImR%]nJaQV{y%q!]N-8Ma2Bm*Ve0^k%+@J%>D`yK=i#ia%cV');
define('NONCE_SALT',       'XTHuN[ATXzbT*L`nx0#mu~nQdK Iu5C.#gTZ:<nrOyV7FAmz)91.r|;uq@(azR+o');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');

