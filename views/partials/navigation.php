


  <nav class="bg-purple-200">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/" class="<?= urlIs('/') ? 'bg-gray-700 hover:text-white' : 'text gray-300' ?> hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Home</a>
              <a href="/notes" class="<?= urlIs('/notes') ? 'bg-gray-700 hover:text-white' : 'text gray-300' ?> hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Notes</a>
              <a href="/market" class="<?= urlIs('/market') ? 'bg-gray-700 hover:text-white' : 'text gray-300' ?> hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Market</a>
              <a href="/about" class="<?= urlIs('/about') ? 'bg-gray-700 hover:text-white' : 'text gray-300' ?> hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">About</a>
              <a href="/contact" class="<?= urlIs('/contact') ? 'bg-gray-700 hover:text-white' : 'text gray-300' ?> hover:bg-gray-700 px-3 py-2 rounded-md text-sm font-medium">Contact</a>

            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
              <a href="/login" class="bg-blue-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Log-in</a>
            

            <!-- Profile dropdown -->
            <div class="relative ml-3">
              <div>
                <button type="button" class="flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <a href="/profile"> <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""></a>
                </button>
              </div>

          
              
            </div>
          </div>
        </div>
      
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Mobile Dashboard</a>
        <a href="#" class="text-black-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Notes</a>
        <a href="#" class="text-black-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
        <a href="#" class="text-black-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Market</a>
        <a href="#" class="text-black-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">About</a>
        <a href="#" class="text-black-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Contact</a>


      </div>
     
      </div>
    </div>
  </nav>