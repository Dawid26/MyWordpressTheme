<!DOCTYPE html>
<html lang=<?php language_attributes();?> >

<head>
    <meta charset="<php blogInfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ostatnie kilka miesięcy poświeciłem na nauke tworzenia stron internetowych, jest to dla mnie coś więcej niż tylko możliwość rozoju, ponieważ stało się także moim hobby, obecnie jestem na stażu w firmie strategiczni.pl.">
    <title>
        <?php bloginfo('name')?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" />
    <?php wp_head();?>
</head>

<body <?php body_class(); ?>>

    <header>


        <nav>
            <ul>
                <h2>

                    <a href="<?php echo home_url('/');?>">Dawid Mariankowski</a>
                </h2>


                <?php 
$args = array(
    'theme_location' => 'primary'

);
?>
                <?php wp_nav_menu($args); ?>
            </ul>
        </nav>

    </header>
