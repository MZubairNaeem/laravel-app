<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hey! Welcome back...</title>
    @vite('resources/css/app.css')
</head>
<body >
    <section class="bg-gray-300 min-h-screen flex items-center justify-center">
        <div class="bg-black flex rounded-2xl shadow-lg max-w-3xl p-5">
            <div class="sm:w-1/2 px-8 self-center">
                <h1 class="font-bold text-2xl text-gray-100">Login</h1>
                <p class="text-sm mt-2 text-gray-300">If you have an account, login to continue</p>
                <form action="" class="flex flex-col gap-4">
                    <input type="email" class="p-2 mt-8 rounded-lg border bg-gray-200" name="email" placeholder="Email">
                    <input type="password" class="p-2 rounded-lg border bg-gray-200" name="password" placeholder="Password">
                    <p class=" text-gray-100 text-right">Forget Password</p>
                    <button class="bg-[#ACA8A7] text-[#100F12] font-bold rounded-lg p-2">Login</button>
                </form>
                <div class="mt-10 grid grid-cols-3 items-center text-gray-400">
                    <hr class="border-gray-400">
                    <p class="text-center">OR</p>
                    <hr class="border-gray-400">
                </div>
                <div class=" mt-4 flex items-center justify-center">
                    <p class="text-gray-100">Don't have an account? </p>
                    <a href="{{ route('register') }}"  class="text-gray-100 font-bold" >Sign up</a>
                </div>
            </div>
            <div class="sm:block hidden w-1/2">
                <img class="rounded-2xl" src="https://images.unsplash.com/photo-1679652904627-062da04b03b1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=386&q=80" alt="">
            </div>
        </div>
    </section>
</body>
</html>