<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello! Create account now..</title>
    @vite('resources/css/app.css')
</head>
<body >
    <section class="bg-gray-300 min-h-screen flex items-center justify-center">
        <div class="bg-black flex rounded-2xl shadow-lg max-w-3xl p-5">
            <div class="sm:w-1/2 px-8 self-center">
                <h1 class="font-bold text-2xl text-gray-100">Sign up</h1>
                <p class="text-sm mt-2 text-gray-300">If you don't have an account, just create a new one</p>
                <form method="POST" action="{{route("register")}}" class="flex flex-col gap-2">
                    @csrf
                    
                    <div class="mt-3">
                       
                        <input type="name" id="name" class="p-2 w-full rounded-lg border bg-gray-200" placeholder="Enter name..." name="name" >
                    </div>
                    @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                    <div class="mt-3">
                        
                        <input type="email" id="email" class="p-2 w-full rounded-lg border bg-gray-200"  placeholder="Enter email..." name="email" >
                    </div>
                    @error('email')
                    <span class="text-red-500">{{ $message }}</span>
        @enderror
                    
                    <div class="mt-3">
                       
                        <input type="password" id="password" class="p-2 w-full rounded-lg border bg-gray-200"  placeholder="Password..." name="password">
                    </div>
                    @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror 
                    <div class="mt-3">
                        
                        <input type="password" id="password" class="p-2 w-full rounded-lg border bg-gray-200"  placeholder="Confirm Password..." name="password_confirmation" >
                    </div> 
                    
                    <div class="mt-5">
                        <button button type="submit" class="bg-[#ACA8A7] text-[#100F12] mt-3 w-full font-bold rounded-lg p-2">Sign up</button>
                    </div>
                    
                </form>
                <div class="mt-10 grid grid-cols-3 items-center text-gray-400">
                    <hr class="border-gray-400">
                    <p class="text-center">OR</p>
                    <hr class="border-gray-400">
                </div>
                <div class=" mt-4 flex items-center justify-center">
                    <p class="text-gray-100">Already have an account? </p>
                    <a href="{{ route('login') }}"  class="text-gray-100 font-bold" >Login</a>
                    {{-- <button   class="text-gray-100 font-bold"> Login</button> --}}
                </div>
            </div>
            <div class="sm:block hidden w-1/2">
                <img class="rounded-2xl" src="https://images.unsplash.com/photo-1679652904627-062da04b03b1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=386&q=80" alt="">
            </div>
        </div>
    </section>
</body>
</html>