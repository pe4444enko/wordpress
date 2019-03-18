<?php
    get_header();   
    the_post();
    echo"Author Archives: " . get_the_author();
    rewind_posts();
?>
<?php get_header();?>

<main>
    <?php if (have_posts()):?>
    <h1>Archive</h1>
        <?php while(have_posts()) : the_post();?>
            
            <section style="margin: 100px;!important" class="row" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="post-header col-sm-4 text-warning">
                    <div class="card" style="padding: 20px; background-color:#24272b; text-align: center;">
                        <div class="date card-title card-text" ><?php the_time('M j y'); ?></div>
                        <h2 class="card-title card-text"><a style="color: #cacfd1" title="Open post -><?php the_title_attribute();?>" href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                        <div class="author card-title card-text"><a href="<?= get_author_posts_url(get_the_author_meta("ID"), get_the_author_meta('user_nicename'));?>"><?php the_author(); ?></a></div>
                    </div>
                </div>
                <div class="post-entry col-sm-8" style="color: #24272b">
                    <?php the_content();?>
                </div>  
                <div class="post-footer">

                </div>
            </section>


        <?php endwhile; ?>
    <?php endif;?>
</main>
    
<?php get_footer()?>
