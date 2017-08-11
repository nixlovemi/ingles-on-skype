<!--http://pt.wix.com/website-template/view/html/1676?originUrl=http%3A%2F%2Fpt.wix.com%2Fwebsite%2Ftemplates%2Fhtml%2Fportfolio-cv%2Fresumes-cvs%2F2&bookName=&galleryDocIndex=0&category=portfolio-cv -->
<!-- simple_fields_value( string $field_slug [, int $post_id, mixed $options] ) -->
<!-- simple_fields_values( string $field_slug [, int $post_id, mixed $options] ) -->

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html id = "master" lang = "pt-br">
    <head>
        <meta http-equiv = "Content-Type" content = "text/html; charset=utf-8">
        <meta name = "viewport" content = "width=device-width,initial-scale=1">
        <link rel = "shortcut icon" href = "<?php bloginfo('template_url'); ?>/images/favicon.ico" type = "image/x-icon">
        <title><?php bloginfo('blogname'); ?><?php wp_title(' | '); ?></title>
        <link rel = "stylesheet" href = "<?php bloginfo('template_url'); ?>/style.css" type = "text/css" media = "all" />
        

        <?php if (is_singular()): ?>
            <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php endif; ?>

        <script src = "<?php bloginfo('template_url'); ?>/jquery.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/master.js"></script>

        <?php wp_head(); ?>
    </head>
    <body>
        <div id="first-session" class="main-content">
            <div id="header" class="display section mt-30 mb-60">
                <div class="col span_2_of_5" id="section-header-title">
                    <?php
                    $vSiteTitle   = get_bloginfo("name");
                    $vSiteTagline = get_bloginfo("description");
                    ?>

                    <h1 class="title mb-15"><?php echo $vSiteTitle; ?></h1>
                    <h2 class="subTitle"><?php echo $vSiteTagline; ?></h2>
                </div>
                <div class="col span_3_of_5" id="section-header-menu">
                    <ul id="menu-princ" class="mt-30">
                        <li><a href="javascript:;" class="scrollTo" data-idelem="home">Home</a></li>
                        <li><a href="javascript:;" class="scrollTo" data-idelem="second-session">Currículo</a></li>
                        <li><a href="javascript:;" class="scrollTo" data-idelem="third-session">Aulas</a></li>
                        <li><a href="javascript:;" class="scrollTo" data-idelem="fourth-session">Contato</a></li>
                    </ul>
                </div>
            </div>