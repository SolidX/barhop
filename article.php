<?php theme_include('header'); ?>
<div name="post">
        <div class="post-container">
            <?php if(article_custom_field('featured_image')) : ?>
            <div class="featured" style="background-image:url('<?php echo article_custom_field('featured_image')?>')" >
            
                <div id="featured-credit">
                        <a id="credits"></a>
                </div>
            <?php elseif(article_custom_field('featured-color')) : ?>
            <div class="featured" style="background-color:<?php echo article_custom_field('featured-color')?>">
            <?php else : ?>
            <div class="featured" id="<?php echo article_id(); ?>">
            <?php endif; ?>
                <div class="title">
                        <h1><?php echo article_title(); ?></h1>
                </div>
            </div> <!-- featured image -->
            <article class="the-post">
                <div class="content-container">
                        <p>Posted on <?php echo article_date(); ?> in <a href="<?php echo article_category_url(); ?>"><?php echo article_category(); ?></a></p>
                
                        <p><?php echo article_markdown(); ?></p>
                    <div class="share">
                        <a onclick="window.open(this.href, 'sharetwt','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" href="https://www.twitter.com/share?url=<?php echo article_full_url(); ?>&text=<?php echo article_title(); ?><?php if(site_meta('twitter_account')) : ?>&via=<?php echo site_meta('twitter_account') ?><?php endif; ?>" title="Post to Twitter"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg></a>
                        <a onclick="window.open(this.href, 'sharebsky','left=20,top=20,width=650,height=600,toolbar=1,resizable=0'); return false;" href="https://bsky.app/intent/compose?text=<?php echo article_title(); ?> <?php echo article_full_url(); ?> <?php if(site_meta('bluesky_account')) : ?>via @<?php echo site_meta('bluesky_account') ?><?php endif; ?>" title="Share on Bluesky"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="27" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M123.6 34.5c66.4 50.1 137.9 151.5 164.2 206C314 186 385.5 84.5 452 34.5c48-36.1 125.6-64.1 125.6 24.9c0 17.8-10.1 149.2-16.1 170.5c-20.7 74.2-96.1 93.1-163.1 81.6c117.2 20 147 86.3 82.6 152.6C358.7 590 305.2 432.5 291.5 392.1c-2.5-7.5-3.7-10.9-3.7-7.9c0-3.1-1.2 .4-3.7 7.9C270.4 432.5 216.9 590 94.6 464.1C30.2 397.8 60 331.5 177.2 311.5C110.2 322.9 34.8 304 14.1 229.8C8.1 208.5-2 77.1-2 59.3c0-88.9 77.7-61 125.6-24.9z"/></svg></a>
                        <a href="<?php echo article_full_url(); ?>" title="Permalink"><svg xmlns="http://www.w3.org/2000/svg" height="24" width="30" viewBox="0 0 640 512"><!--!Font Awesome Free 6.7.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z"/></svg></a>
                    </div>
                </div>
                <?php if(article_js() | article_css()): ?>
                        <script><?php echo article_js(); ?></script>
                        <style><?php echo article_css(); ?></style>
                <?php endif; ?>
            </article>
        </div>
        <!-- <?php if(comments_open()) : ?>-->
        
        <div class="comments">
                <h2>Discussion</h2>
                <form id="comment" class="comment-form" method="post" action="<?php echo comment_form_url(); ?>#comment">
                        
                        <p class="name"><?php echo comment_form_input_name('placeholder="Your name"'); ?></p>
                        
                        <p class="email"><?php echo comment_form_input_email('placeholder="Your email (not published)"'); ?></p>

                        <p class="textarea"><?php echo comment_form_input_text('placeholder="Leave your thoughts:"'); ?></p>
                        
                        <p class="submit"><button class="btn" type="submit">Post Comment</button></p>

                </form>
                
                <?php if(has_comments()) : ?>
                <ul class="commentlist">
                        <?php $i = 0; while(comments()) : $i++ ?>
                        <li class="comment" id="comment-<?php echo comment_id(); ?>">
                                <div class="wrap">
                                        <p id="comment-name"><?php echo comment_name(); ?></p>
                                        
                                        <div class="comment-content">
                                                <p><?php echo comment_text(); ?></p>
                                                
                                        </div>
                                        
                                        <div class="counter">
                                                <time><a href="#comment-<?php echo comment_id(); ?>"><?php echo relative_time(comment_time()); ?></a></time>
                                                <p><?php echo $i; ?> of <?php echo total_comments(); ?></p>
                                        </div>
                                </div>
                        </li>
                        <?php endwhile; ?>
                </ul>
                <?php else : ?>
                        <p>No comments yet.</p>
                <?php endif; ?>
                
        </div>
        <?php endif; ?>
        </div>
</div>    
<?php theme_include('footer'); ?>