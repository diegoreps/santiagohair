<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'santiago' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'v=g5TZ5d9Kl:-e33lULx(8>ZYBDr}]uc*Sn c0E5d1M] |2{.d2{&6^tc@])[u(P' );
define( 'SECURE_AUTH_KEY',  'KB{j@/<Z:6)1qLN,CcCS<56cXM5#Ui:`:{k=$V?-{ZtQG<*>g9c#xz#i{5bjW]B&' );
define( 'LOGGED_IN_KEY',    'D%Mq(rgD:ADJR#s~q:HbO}S@P85aQ |WdM6$1pXLnT]elzp4Y-Qf:#Z{i.;/OG}n' );
define( 'NONCE_KEY',        'eVO_bKyG5:g@~+0P@8J4i8+Mz6pqWmWnx[,PTG%?r/q,<:/3%_P>&(C|q2F /$X^' );
define( 'AUTH_SALT',        ';iF6U1lEBM!y*`=>HR GGT8a%^J%9!`lluE sV/oBat9=7_/VA>5BS~[CuiW}!Z8' );
define( 'SECURE_AUTH_SALT', 'txle;r/{6@%^Sc.La+TD04pH#NDp#DM}sltCzF,gEI]RQ58@oi9e/.r%NgEhht?c' );
define( 'LOGGED_IN_SALT',   '$Gz?4L!7/EOL&}N_w] qBV(<f;/AY,MPgMZYEVKKomy<fAYYyRRGGz=buar)0iXa' );
define( 'NONCE_SALT',       'o3$^5QD:/1aKDI0I*CSWHS5f(S:9G;Th)Z`^HJ/hnOr9UDVV$_&@+E-R4^;CSYY%' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'cshnhtfotr_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
