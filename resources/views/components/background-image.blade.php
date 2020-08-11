<!--
  @php $image = get_post_thumbnail_id(); $size = 'large'; @endphp
-->
<div class="absolute top-0 inset-0 overflow-hidden @php echo $opacity @endphp">
  @php echo wp_get_attachment_image( $image, $size, '', array( 'class' => 'w-full h-full object-cover object-center relative' ) ) @endphp
</div>
