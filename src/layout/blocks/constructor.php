<?php
            if ( 'top' == $core->get_option( 'structure_home_position' ) ) {
                get_template_part( 'template-parts/content', 'home' );
            }

            if ( $home_constructor->do_output_constructor() ) {
                do_action( 'bono_before_homepage_constructor' );
                $home_constructor->output();
                do_action( 'bono_after_homepage_constructor' );
            } else {
                do_action( 'bono_before_posts' );
                if ( have_posts() ) {

                    if ( is_home() && ! is_front_page() ) {
                        echo '<h1 class="page-title screen-reader-text">' . single_post_title( '', false ) . '</h1>';
                    }

                    get_template_part( 'template-parts/post-container/' . $core->get_option( 'structure_home_posts' ) );

                    the_posts_pagination();

                } else {
                    get_template_part( 'template-parts/content', 'none' );
                }
                do_action( 'bono_after_posts' );
            }

            if ( 'bottom' == $core->get_option( 'structure_home_position' ) ) {
                get_template_part( 'template-parts/content', 'home' );
            }

            ?>
