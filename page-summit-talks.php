<?php
/**
 * Template Name: Summit Talks LP
 *
 * Página customizada sem header/footer do tema.
 * Coloque este arquivo na raiz do tema ativo (ex: /wp-content/themes/seu-tema/).
 * No WordPress admin: Páginas → Summit Talks → Atributos → Template: "Summit Talks LP"
 */

// Bloca acesso direto
defined('ABSPATH') || exit;

// Desativa o Elementor nesta página (evita JS/CSS desnecessário)
add_filter('elementor/page/wp_page_content', '__return_false');

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>

  <!--
    ┌─────────────────────────────────────────────────────────────┐
    │  INSTRUÇÃO PARA O DEV                                       │
    │  Copie todo o conteúdo do <head> do index.html aqui        │
    │  (meta SEO, schema JSON-LD, Google Fonts, <style>...)       │
    │  wp_head() precisa ficar ANTES do fechamento de </head>     │
    └─────────────────────────────────────────────────────────────┘
  -->

</head>
<body class="summit-talks-page">

  <!--
    ┌─────────────────────────────────────────────────────────────┐
    │  INSTRUÇÃO PARA O DEV                                       │
    │  Cole aqui todo o conteúdo do <body> do index.html          │
    │  (do botão WA flutuante até o </footer>)                    │
    └─────────────────────────────────────────────────────────────┘
  -->

  <?php wp_footer(); ?>

  <!--
    ┌─────────────────────────────────────────────────────────────┐
    │  INSTRUÇÃO PARA O DEV                                       │
    │  Cole o bloco <script> do index.html ANTES de wp_footer()  │
    │  wp_footer() precisa ser a última coisa antes de </body>    │
    └─────────────────────────────────────────────────────────────┘
  -->

</body>
</html>
<?php // Não usar get_footer() — esta página é standalone ?>
