<?php
/**
 * Header
 * 
 * @package Portfolio
 * 
 */
?>

<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <title><?php echo esc_html_e(get_the_title()); ?></title>
</head>
<body class="mx-auto max-w-[800px] relative bg-white md:w-[80%] lg:md-[70%] min-w-[400px]">