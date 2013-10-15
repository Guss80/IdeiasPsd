<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'db_wp');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_u-OJ*H<kI8`6J*-0NB(O*&(D7pOK#GDuP0loin,F/DR{oSc8c8.0[2eg5GdfCnR');
define('SECURE_AUTH_KEY',  '/j~M3eV@z3$;&7*U_X$VP <Qz|vd6&H]IKrshw6nq$^PYFJ!%W RO/pA9^io/Yg6');
define('LOGGED_IN_KEY',    'O_ *YV0QpHcJ^[RG[Qs_*99:$p*<U4X<t(hBP<})8JFX*V^;eZ/VXE<R}WxAc>lZ');
define('NONCE_KEY',        '5]>-oENNTtRb5LGc-+FG#BC.LWO5//UJ.>^Eae3|sgDYKR5EC1Q]YfUbe?sWTS]e');
define('AUTH_SALT',        '<x|CW!,*=hTM:>=&]%cv$;bev0fdtG|Yk35?FaRT%suEnhm@+_xLx-H!V#ER*0}C');
define('SECURE_AUTH_SALT', ';T:#;7hHC<Nbjy ~P|DjB*|3grN7:ihP/e;>(Kl[8LNE*ggk)nYAl8/EXp]G9K$P');
define('LOGGED_IN_SALT',   '?Md=JCYJ7(;h G~bDC[CAb#cS1tCc<|w-L8&x)@`L+uqRz~5whJDPo/NR)yC3WEe');
define('NONCE_SALT',       '&7Jvh2F~2!.N~*,@6B~dVX:zD= Sz/`w4Y+b^Jhat1svwe>%d0dz]GeJ>W1/Y+IH');

/**
 * Definições de PROXY do servidor.
*/

define('WP_PROXY_HOST',    '10.0.0.1');
define('WP_PROXY_PORT',    '3128');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
