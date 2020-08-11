<!--
  @php $image = get_post_thumbnail_id(); $size = 'large'; @endphp
-->
<div class="absolute inset-0 z-0 overflow-hidden">
  @php echo wp_get_attachment_image( $image, $size, '', array( 'class' => 'w-full h-full object-cover object-center relative z-0 opacity-75' ) ) @endphp
</div>
