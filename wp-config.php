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
define( 'DB_NAME', '3658301_wptests' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'Artdna#3' );

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
define( 'AUTH_KEY',         '<ma>:{/HcCR5nx^dfSd/N$)c]waQepEH[]}LVohZvu|y01jdF HmW=I+(zy$L1wq' );
define( 'SECURE_AUTH_KEY',  '- _3@g_Vh9BE&4J&6+2qe9Islt? (WW+?vD]d.8>/_F:`>xJ-^!<0D!G&:*,cghL' );
define( 'LOGGED_IN_KEY',    'P@iEd<l}*E7,$VNAzE^-;/&O`Zjd8>hBMRylTszttTFUs>sj_Y[RoEqdV21Fqyn}' );
define( 'NONCE_KEY',        'BSv4z[pq`VN6:D.MjcT%x$@cNTIixF+Ym_(aMSv2gIKE:/V8>b`+ya(y%[Y9Ec[y' );
define( 'AUTH_SALT',        '7n#;U>Du|El^Vbz9PQnG|mP{5AL0#aG4/XK3bb|n(2RJlSPfl^fq%Q(y;%F<L!np' );
define( 'SECURE_AUTH_SALT', '12/U;ebXJ<Xxx)G13+x5FdatvMdua)p6Mt!2C7)yAEWNIqZz91NicSHuoAc@*I*+' );
define( 'LOGGED_IN_SALT',   ',2`NzW#3y==XS6:/|$5`Y|d9)l<+_:j5WX>p]AJX$*,{jW^{7Mn2U#82}Nayr>#5' );
define( 'NONCE_SALT',       '5YKw5hzvO4U[VGDp,}q OX/|L^+7GEjr#lLvA9nG^9v-beP7^:P-07]q3`Wx2Ee%' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
