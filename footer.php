            </div>
            <footer>
                <div id="contact-wrapper">
                    <ul id="contact">
                        <li><a href="<?php echo 'mailto:'.get_option('mf2013_mail') ?>"><i class="icon-envelope-alt"></i></a></li>
                        <li><a href="<?php bloginfo('rss2_url'); ?>"><i class="icon-rss"></i></a></li>                        
                        <li><a href="<?php echo 'https://github.com/'.get_option('mf2013_github') ?>"><i class="icon-github-alt"></i></a></li>
                        <li><a href="<?php echo 'https://www.facebook.com/'.get_option('mf2013_fb') ?>"><i class="icon-facebook"></i></a></li>
                        <li><a href="<?php echo 'https://twitter.com/'.get_option('mf2013_twitter') ?>"><i class="icon-twitter"></i></a></li>
                        <li id="adn"><a href="<?php echo 'https://alpha.app.net/'.get_option('mf2013_adn') ?>">&alpha;</a></li>
                    </ul>
                </div>
                <div id="search-wrapper">
                    <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/"> 
                        <input type="text" name="s" id="s"  placeholder="Search" /> 
                        <input type="hidden" id="searchsubmit" /> 
                    </form>
                </div>
            </footer>
        </div>
        <?php wp_footer(); ?>
    </body>
    </html>