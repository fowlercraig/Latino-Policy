<div class="inline-flex py-1 px-2 font-medium 
  @php if($textColor) { echo $textColor; } else { echo 'text-white'; } @endphp
  @php if($bgColor) { echo $bgColor; } else { echo 'bg-brand'; } @endphp">
  @php echo $title @endphp
</div>