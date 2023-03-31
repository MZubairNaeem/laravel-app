<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your task here...</title>
  @vite('resources/css/app.css')
</head>
<body>
  <nav class="bg-gray-900">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class=" flex items-center justify-end h-16">
        <div class=" justify-center sm:items-stretch sm:justify-start">
          
          <div class="hidden sm:block sm:ml-6">
            <div class="flex space-x-4">
              <a  class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
               </div>
          </div>
        </div>
        <div class="hidden sm:block sm:ml-6">
          <div class="flex space-x-4">
            <form method="POST" action="{{ route('logout') }}" role="button">
              @csrf
              <a :href="route('logout')" class="nav-link text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm " text-gray-300 onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
          </form>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <div class="flex justify-center items-center h-screen  bg-gray-300">
    <div class="w-96 p-6 shadow-lg bg-white rounded-md">
      <h1 class="text-3xl block text-center front-semibold">
            TODO APP
      </h1>
      <hr class="mt-3">
      <form action="{{ route('store')}}" method="POST" autocomplete="off">
        @csrf
        <div class="mt-3">
          <input type="text" name="content" class="border w-full text-base px-2 py-1 focus:outline-none  focus:ring-0 focus:border-gray-600 " placeholder="Add a task here" >
        </div>
        <div class=" flex-1 mt-5">
          <button type="submit" class="border-2  bg-gray-900 text-white py-1 px-5 w-full rounded-md">Add Task</button>
        </div class="px-3">  
      </form>
      
      <ul>
        {{-- @foreach($todolists as $todolist)
            <li>
              {{ $todolist->content}}
            </li>
        @endforeach --}}
        @if(count($todolists))
        @foreach ($todolists as $todolist)
            <li>
              <form action="{{route('destory',$todolist->id)}}" method="POST">
                
                <div class="flex justify-between mt-4">
                  <div>
                    {{ $todolist->content }}
                  </div>
                  <div>
                    @csrf
                    @method('delete') 
                    <button type="submit" class="bg-gray-800 text-white rounded-lg px-2 py-1">Delete</button>
                  </div>
                </div>
               
              </form>
            </li>
        @endforeach
        @endif
      </ul>
      
   </div>       
  </div>
  
</body>
</html>