<form class="space-y-3" action="//ucla.us16.list-manage.com/subscribe/post-json?u=d021c35e6a05ad46f78ac6f1d&amp;id=1d321a06c6&c=callback" method="post" target="_blank" novalidate>  
  <div id="js-form-inputs" class="space-y-3">
    <div>
      <label for="mce-EMAIL" class="block text-sm font-medium text-gray-700 sr-only">Email Address</label>
      <div class="mt-1">
        <input 
          name="EMAIL" 
          id="mce-EMAIL"
          type="text" name="email" id="email" class="shadow-sm focus:ring-brand focus:border-brand block w-full sm:text-sm border-gray-200 rounded-md" placeholder="you@example.com">
      </div>
    </div>
    <div>
      <label for="mce-FNAME" class="block text-sm font-medium text-gray-700 sr-only">First Name</label>
      <div class="mt-1">
        <input 
          name="FNAME" 
          id="mce-FNAME"
          type="text" name="email" id="email" class="shadow-sm focus:ring-brand focus:border-brand block w-full sm:text-sm border-gray-200 rounded-md" placeholder="First Name">
      </div>
    </div>
    <div>
      <label for="mce-LNAME" class="block text-sm font-medium text-gray-700 sr-only">Last Name</label>
      <div class="mt-1">
        <input 
          name="LNAME" 
          id="mce-LNAME"
          type="text" name="email" id="email" class="shadow-sm focus:ring-brand focus:border-brand block w-full sm:text-sm border-gray-200 rounded-md" placeholder="Last Name">
      </div>
    </div>
    <div>
      <label for="mce-MMERGE3" class="block text-sm font-medium text-gray-700 sr-only">Organization</label>
      <div class="mt-1">
        <input 
          name="MMERGE3" 
          id="mce-MMERGE3"
          type="text" name="email" id="email" class="shadow-sm focus:ring-brand focus:border-brand block w-full sm:text-sm border-gray-200 rounded-md" placeholder="Organization">
      </div>
    </div>
  </div>
  <div class="clear">
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" id="js-validate-robot" name="b_a4752870f583bb49a02427b3c_143fa46c21" tabindex="-1" value=""></div>
    <button class="cursor-pointer w-full px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-brand shadow-sm hover:bg-brand-darker focus:outline-none focus:shadow-outline active:bg-gray-900 transition duration-150 ease-in-out sm:mt-0 sm:flex-shrink-0 sm:inline-flex sm:items-center sm:w-auto" type="submit" name="subscribe" id="mc-embedded-subscribe">Subscribe</button>
    <p id="js-subscribe-response" class="pt-4 prose prose-sm"></p>
  </div>
</form>

@script
  (function () {
    document.getElementsByTagName('form')[0].addEventListener('submit', function (e) {
      e.preventDefault();

      // Check for spam
      if(document.getElementById('js-validate-robot').value !== '') { return false }

      // Get url for mailchimp
      var url = this.action.replace('/post?', '/post-json?');

      // Add form data to object
      var data = '';
      var inputs = this.querySelectorAll('#js-form-inputs input');
      for (var i = 0; i < inputs.length; i++) {
          data += '&' + inputs[i].name + '=' + encodeURIComponent(inputs[i].value);
      }

      // Create & add post script to the DOM
      var script = document.createElement('script');
      script.src = url + data;
      document.body.appendChild(script);

      // Callback function
      var callback = 'callback';
      window[callback] = function(data) {

          // Remove post script from the DOM
          delete window[callback];
          document.body.removeChild(script);

          // Display response message
          document.getElementById('js-subscribe-response').innerHTML = data.msg
      };
    });
  })();
@endscript