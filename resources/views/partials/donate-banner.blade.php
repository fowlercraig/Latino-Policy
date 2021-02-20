<div class="py-5 md:py-12 xl:py-20 bg-brand-lightest container">
  <div class="mb-4">
    <div class="h-0.5 w-32 bg-red-600"></div>
  </div>
  <div class="grid xl:grid-cols-2 gap-10">
    <div class="space-y-4">
      <h1 class="tracking-tight text-brand-dark font-bold text-4xl md:text-5xl 2xl:text-6xl leading-8 md:leading-none font-primary-a uppercase">{!!$title!!}</h1>
      <div class="prose">
        {!!$desc!!}
      </div>
    </div>
    <div>
      <ul class="grid grid-cols-2 md:grid-cols-4 gap-2">
        @set($numbers, array(10, 25, 50, 100, 250, 500, 750, 1000))
        @foreach($numbers as $number)
        @set($url,'https://giving.ucla.edu/campaign/?amount='.$number.'&OrgType=S&OrgNum=800&fund=63922O')
          <li class="tracking-tight text-brand-dark font-bold text-2xl md:text-3xl xl:text-3xl leading-7 xl:leading-none font-primary-a uppercase">
            <a target="blank" href="{!!$url!!}" class="p-3 md:p-6 shadow-sm hover:shadow-xl transition ease duration-300 bg-white block rounded">
              <span class="block text-center">${{$number}}</span>
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>