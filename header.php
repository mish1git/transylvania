 <!DOCTYPE HTML>

<html>

    <head>
        <title>Blog</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    
    <body>
    
        <div class="blog">
            <div class="flexheader">
                <div class="headertext">
                    <a class="header textnavbar" style="margin-bottom: 0;" href="index.php"><?php echo get_bloginfo( 'name' ); ?></a>
                    <p style="font-size: 14px; margin-top: 0;"><?php echo get_bloginfo( 'description' ); ?></p>
                </div>
                
                <nav class="navbar">
                    <?php
                        wp_nav_menu( array( 
                            'theme_location' => 'extra-menu', 
                            'container_class' => 'my_extra_menu_class' ) ); 
                    ?>
                </nav>
            </div>
