<?php
/**
 * Template Name: Panel Page Template
 *
 * @package TFC_Nathan_Small
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); shoreditch_background_image(); ?>>
                    <div class="hentry-wrapper">

                        <div class="entry-content">
                            <?php
                            the_content();

                            wp_link_pages( array(
                                'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'shoreditch' ) . '</span>',
                                'after'       => '</div>',
                                'link_before' => '<span>',
                                'link_after'  => '</span>',
                                'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'shoreditch' ) . ' </span>%',
                                'separator'   => '<span class="screen-reader-text">, </span>',
                            ) );
                            ?>
                        </div><!-- .entry-content -->

                        <?php
                        edit_post_link(
                            sprintf(
                            /* translators: %s: Name of current post */
                                esc_html__( 'Edit %s', 'shoreditch' ),
                                the_title( '<span class="screen-reader-text">"', '"</span>', false )
                            ),
                            '<footer class="entry-footer"><span class="edit-link">',
                            '</span></footer><!-- .entry-footer -->'
                        );
                        ?>
                    </div><!-- .hentry-wrapper -->
                </article><!-- #post-## -->

            <?php endwhile; // End of the loop. ?>

            <div id="join-conversation" class="has-cerulean-background-color text-center">
                <h4>
                    <?php _e( 'Join the conversation', 'tfc-nathan-small' ); ?>
                    <a class="social facebook" href="https://www.facebook.com/Nathan-Small-for-State-House-482296511902466/">
                        <span class="screen-reader-text"><?php _e( 'Facebook', 'tfc-nathan-small' ); ?></span>
                        <svg height="50" width="50" xmlns="http://www.w3.org/2000/svg"><path d="M25 50c13.8071194 0 25-11.1928806 25-25S38.8071194 0 25 0 0 11.1928806 0 25s11.1928806 25 25 25zm0-3c12.1502651 0 22-9.8497349 22-22S37.1502651 3 25 3 3 12.8497349 3 25s9.8497349 22 22 22zm1.8145197-11V24.998712h3.2542252L30.5 21.2076072h-3.6854803l.0055289-1.8974845c0-.9887785.1006723-1.5185886 1.6225052-1.5185886h2.0344091V14h-3.254686c-3.9094012 0-5.2854091 1.8390937-5.2854091 4.9318709v2.2761657H19.5v3.7911047h2.4368678V36h4.8776519zm0 0" fill="#fff" fill-rule="evenodd"/></svg>
                    </a>
                    <a class="social twitter" href="https://twitter.com/NathanLCNM">
                        <span class="screen-reader-text"><?php _e( 'Twitter', 'tfc-nathan-small' ); ?></span>
                        <svg height="50" width="50" xmlns="http://www.w3.org/2000/svg"><path d="M25 50c13.8071194 0 25-11.1928806 25-25S38.8071194 0 25 0 0 11.1928806 0 25s11.1928806 25 25 25zm0-3c12.1502651 0 22-9.8497349 22-22S37.1502651 3 25 3 3 12.8497349 3 25s9.8497349 22 22 22zm-.3177446-26.4457025l.0476886.8218036-.7948107-.100629c-2.8931108-.3857446-5.4206087-1.6939217-7.5665975-3.8909884l-1.0491501-1.0901476-.2702356.805032c-.5722637 1.7945507-.2066508 3.6897304.9855652 4.9643645.6358485.7044031.4927826.8050321-.6040561.3857446-.3815091-.1341721-.7153296-.2348011-.7471221-.1844865-.1112734.1174005.2702357 1.6436071.5722637 2.2473812.4133016.8385751 1.2558009 1.6603786 2.1777812 2.1467522l.7789145.3857445-.9219804.0167715c-.8901879 0-.9219803.0167715-.826603.368973.3179243 1.0901477 1.5737251 2.2473813 2.9725919 2.7505263l.9855651.3522016-.8583955.536688c-1.271697.7714891-2.7659411 1.2075482-4.2601851 1.2410912C14.5881599 32.3278916 14 32.3949776 14 32.4452922c0 .1677149 1.939338 1.1069191 3.0679692 1.4758921 3.3858934 1.0901476 7.4076354.6205455 10.4279159-1.2410911 2.1459888-1.3249487 4.2919777-3.9580744 5.2934391-6.5073427.5404712-1.3584916 1.0809425-3.8406738 1.0809425-5.0314505 0-.771489.0476886-.872118.9378765-1.7945506.5245751-.5366881 1.0173577-1.1236906 1.112735-1.2914057.1589621-.3186585.143066-.3186585-.6676409-.033543-1.3511782.5031451-1.5419328.4360591-.8742918-.3186585.4927826-.5366881 1.0809425-1.5094351 1.0809425-1.7945507 0-.0503145-.2384432.0335431-.5086788.1844865-.2861319.1677151-.9219804.4192876-1.3988668.5702311l-.8583955.2851155-.7789145-.5534596c-.4291978-.301887-1.0332538-.637317-1.3511781-.737946-.8107069-.234801-2.0506115-.201258-2.7818374.067086-1.9870266.7547176-3.2428275 2.7002118-3.0997615 4.8301925 0 0-.143066-2.1299807 0 0zm0 0" fill="#fff" fill-rule="evenodd"/></svg>
                    </a>
                </h4>
            </div>

            <div id="donate-button-wrapper">
                <a class="button has-cerise-background-color" href="<?php echo esc_url( home_url() . '/donate' ); ?>">
                    <?php _e( 'Donate', 'tfc-nathan-small' ); ?>
                </a>
            </div>

            <?php
            $child_pages = new WP_Query( array(
                'post_type'      => 'page',
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
                'post_parent'    => $post->ID,
                'posts_per_page' => 999,
                'no_found_rows'  => true,
            ) );
            ?>

            <?php
            if ( $child_pages->have_posts() ) :

                while ( $child_pages->have_posts() ) : $child_pages->the_post();

                    get_template_part( 'template-parts/content', 'panel-page' );

                endwhile; // End of the loop.

            endif;
            wp_reset_postdata();
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar( 'footer' );
get_footer();
