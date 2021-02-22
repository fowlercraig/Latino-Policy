@set($parent, $post->post_parent)

@if($parent)
  <div class="font-medium prose">
    <a href="@permalink($parent)" class="group transition ease duration-300">
      <span class="text-brand-lighter group-hover:text-white transition ease duration-300 group-hover:-ml-1">&larr;</span>
      <span class="text-brand-lighter group-hover:text-white transition ease duration-300">Back to @title($parent)</span>
    </a>
  </div>
@endif