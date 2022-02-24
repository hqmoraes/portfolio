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
define( 'DB_NAME', 'atelie' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'banco.hospedar.net' );

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
define( 'AUTH_KEY',         'J)>a<+/-mv*0<TIr/$.,pf[4p?kVa:dIL$WC:S|Re9r.y|7AKOOlY!QO4q($YM@2' );
define( 'SECURE_AUTH_KEY',  '# (9zy4 LcxCocf&kak+ZNSF.(Ev?g?dp.e*2,VMlbGPm p@3oD#|0Gg ylWLHsY' );
define( 'LOGGED_IN_KEY',    'Pbb[<h,Ud =)X` fHeC5w8X@L&NVrR8#qZ!a@;t&zidM37+@z`(%<.cUpl$lDVpv' );
define( 'NONCE_KEY',        '>iicX<Qjn$Dpf&$}#ES5s9kBwYsNoUnDs0ApB=ucM3qw-KS~ZIh7Y6^c*(@@>K~F' );
define( 'AUTH_SALT',        'Y[(?+LGmb/K2z6kN*xjh>v1h`>`jK)uy32l&s_~ac4M)]Y*4|50TvEI^d{oT[,#h' );
define( 'SECURE_AUTH_SALT', 'rm76bj,My3]h1$S!py2t^0b!LG**1+39^QS0y1$0#}QM?7?h^(Z{I4-G39^F+yij' );
define( 'LOGGED_IN_SALT',   'uyh/X+hXRQorJ>A#<j:1g]}J,yY@3dm$#Ss_w;mlNS+WmN.$2rHz}):m9ZYGD {:' );
define( 'NONCE_SALT',       'GWyBm2+Gv?FWUZ;/cL|YJRo`|p!0BK}Ufa;um]nPq<!FCfg-*0Xp+#>FJbU;1dJT' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'atelie_';

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
