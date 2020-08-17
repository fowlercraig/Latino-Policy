@if(get_field('video_embed'))
hello
<div class="embed-responsive aspect-ratio-4/3 bg-black">
  
  <?php the_field('video_embed'); ?>
</div>
@endif