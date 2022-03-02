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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', '_cosmeticos' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'hmoraes' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', ';MJiT[_,M?.D' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'bancos.hospedar.net' );

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
define( 'AUTH_KEY',         '%yeiCv`j,xl`bmL0Wj.ShZYqPM[ZM0|b0t_+LOlcuHYCr@#@R]N{Hyoo.@E~_@~z' );
define( 'SECURE_AUTH_KEY',  '/3rn9jO8i*je%Z9sHEMkbBit|.{97$U}H9Ms5[ywn)tZ(ewC T ,|L3P.{ubW+Gv' );
define( 'LOGGED_IN_KEY',    'C{ sIZ>JEd}}*/O^ebl;[@mEECr)_IQaJK,IPaR }(5.fQe[W^XpZq84 1?7tLa9' );
define( 'NONCE_KEY',        'Du9sB3|oT8J0^{bR3|uM`e?w+Hf):f+~=XMxf9$bDSr(=_rq[}ZlDyVA|n=7]aL0' );
define( 'AUTH_SALT',        'NNzzmbc2GI!AMv]9mOw2U,jQs0SMnxdapFLSq`i%2BT1|+;9Oc>8bCiaL%To_Up#' );
define( 'SECURE_AUTH_SALT', 'lOLa4Wsv]|b:fakHpW`)Tj{pR1Bp5G6f6SE3r<[0>zP7}J.;vV}**1n#I|MyXyO{' );
define( 'LOGGED_IN_SALT',   'YyfP:C^M%~OwsJ?4>a5W{RV7k1RKg!3Yqr?LK&QNYet@07zE9mVi;?pei!^XqW]q' );
define( 'NONCE_SALT',       'FbYn@+QR~_C] {JJ_oyfXW|dY!|C/7k7$I~|c l]%/GN%.~ n>q&%ML25;KphDvu' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'cosmeticos_';

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
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
