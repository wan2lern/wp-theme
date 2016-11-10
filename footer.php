        </div>
        <footer>
            <div class="credits">
            <?php tc__f( 'tip' , __FUNCTION__ , __CLASS__, __FILE__ ); ?>
                <?php
                    $credits =  sprintf( '<p> &middot; &copy; %1$s <a href="%2$s" title="%3$s" rel="bookmark">%3$s</a> &middot; Designed by %4$s &middot;</p>',
                            esc_attr( date( 'Y' ) ),
                            esc_url( home_url() ),
                            esc_attr(get_bloginfo()),
                            '<a href="http://cr8gr8designs.com">cr8gr8designs.com</a>'
                    );
                    echo $credits;
                ?>
            </div>
        </footer>
    <?php wp_footer() ?>
    </body>
</html>
