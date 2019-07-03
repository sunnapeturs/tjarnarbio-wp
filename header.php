<!DOCTYPE html>
<html lang="is">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset');?>">
    <?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>
    <header class="header-container">
        <nav class="header-content">
            <div class="tjarnarbio-logo"><a href="<?php echo site_url()?>">Tjarnarbíó</a></div>
            <i class="fas fa-bars"></i>
            <ul class="menu-links">
                <!--Verk//Sýningar-->                
                <li <?php if (is_page('syningar') or wp_get_post_parent_id(0) == 10) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/syningar')?>">Verk</a></li>
                <!--Dagatal-->
                <li>Dagatal</li>
                <!--Tjarnarkortin-->
                <li>Tjarnarkortin</li>
                <!--Um okkur-->
                <li>Um okkur</li>
            </ul>
        </nav>
    </header>