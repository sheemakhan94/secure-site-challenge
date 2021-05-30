    <style>
      <?php include 'posts.css'; ?>
    </style>

    <main class="main">
      <?php include_once('side-menu.php') ?>

      <section class="posts-container">
        <div class="featured-container">
          <?php
          foreach (get_field('featured_posts') as $post) {
            setup_postdata($post);
            echo "<div class=featured-post><p class=featured-title>", the_title(), "</p></div>";
          }
          ?>
        </div>
        <?php
        wp_reset_postdata();
        ?>
        <div class="featured-copy-container">
          <a class="featured-copy">
            <?php
            $feat_img1 = get_field('featured_copy_1');
            echo $feat_img1['title'];
            ?>
          </a>
          <a class="featured-copy">
            <?php
            $feat_img2 = get_field('featured_copy_2');
            echo $feat_img2['title'];
            ?>
          </a>

        </div>
        <h4 class="popular-title"><?php
                                  the_field('most_popular');
                                  ?></h4>
        <div class="popular-container">
        </div>
      </section>
    </main>