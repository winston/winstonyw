<?php

if ( function_exists('register_sidebar') )

    register_sidebar(array( 'before_widget' => '<div id="%1$s" class="module widget %2$s">',
                            'after_widget'  => '</div>',
                            'before_title'  => '<div class="module_header"><h4>',
                            'after_title'   => '</h4></div>' ));

?>