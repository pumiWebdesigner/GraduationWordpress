<?php get_header(); ?>

    <section class="section staff-blog wow fadeInUp">
      <div class="section__inner">
        <div class="staff-blog__wrapper">
          <div class="staff-blog__post-container">

            <?php if (have_posts()) : // 記事があれば表示 ?>
                <?php while(have_posts()): ?>
                    <?php the_post(); ?>

                    <article class="blog-post">
                        <div class="blog-post__h1">
                            <h1 class="blog-post__h1--title">
                                <?php the_title(); ?>
                            </h1>
                            <div class="blog-post__h1--param">
                                <time class="blog-post__h1--data" datetime="<?php the_time('c'); ?>">
                                <?php the_time('Y.m.d'); ?>
                                </time>
                            </div>
                        </div>
                        <div class="blog-post--texts">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
          </div>
          <div class="staff-blog__archive-container">
            <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
    </section>

  <?php get_footer(); ?>

