    <style>
      <?php include 'header.css'; ?>
    </style>

    <header class="header">
      <div class="header-menu">
        <h1 class="title"><?php the_field('title'); ?></h1>
        <nav class="header-nav-bar">
          <a class="header-nav-link">
            <img src=<?php
                      $link_img = get_field('header_nav_image');
                      echo $link_img['sizes']['thumbnail'];
                      ?> class="globe-img"/>
            <?php
            $link1 = get_field('header_menu_1');
            echo $link1['title'];
            ?>
          </a>
          <a class="header-nav-link">
            <?php
            $link2 = get_field('header_menu_2');
            echo $link2['title'];
            ?>
          </a>
          <a class="header-nav-link">
            <?php
            $link3 = get_field('header_menu_3');
            echo $link3['title'];
            ?>
          </a>
          <a class="header-nav-link bordered-link">
            <?php
            $link4 = get_field('header_menu_4');
            echo $link4['title'];
            ?>
          </a>
          <a class="header-nav-link bordered-link">
            <?php
            $link5 = get_field('header_menu_5');
            echo $link5['title'];
            ?>
          </a>
          <a class="header-nav-link bordered-link">
            <?php
            $link6 = get_field('header_menu_6');
            echo $link6['title'];
            ?>
          </a>
        </nav>
      </div>
      <div class="subtitles">
        <p><?php the_field('subtitle_1'); ?></p>
        <p><?php the_field('subtitle_2'); ?></p>
      </div>
    </header>