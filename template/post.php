<article class="single">
    <div class="row">
        <div class="one-quarter meta">
            <div class="thumbnail">
                <img src="<?php echo $post_image; ?>" alt="<?php echo $post_title; ?>" />
            </div>
            
            <ul>
                <li>Written by <?php echo $author ?></li>
                <li><?php echo $published_date; ?></li>
                <li>About <?php echo $post_category; ?></li>
            </ul>
        </div>
        
        <div class="three-quarters article">
            <?php echo $post; ?>
                                
            <ul class="actions">
                <li><a class="button" href="https://twitter.com/intent/tweet?screen_name=<?php echo $twitter ?>&text=Re:%20<?php echo $post_link; ?>%20" data-dnt="true">Comment on Twitter</a></li>
                <li><a class="button" href="https://twitter.com/intent/tweet?text=&quot;<?php echo $post_title; ?>&quot;%20<?php echo $post_link; ?>%20via%20&#64;<?php echo $twitter ?>" data-dnt="true">Share on Twitter</a></li>
                <li><a class="button" href="<?php echo $site_url ?>">More Articles</a></li>
            </ul>
            
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
    </div>
</article>