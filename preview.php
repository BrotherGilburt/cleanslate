<article class="content-preview-post">
  <?php if(has_post_thumbnail()): ?>
  <figure class="preview-post-image">
    <a href="<?php the_permalink(); ?>">
      <?php if (in_category('products')): the_post_thumbnail('product-image');
      else: the_post_thumbnail('preview-image');
      endif; ?>
    </a>
  </figure>
  <?php endif; ?>
  <section class="preview-post-text">
    <h2>
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    <p>
      <?php echo get_the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>">Read&nbsp;more&nbsp;&raquo;</a>
    </p>
  </section>
</article>