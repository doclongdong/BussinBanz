<!DOCTYPE html>
<html lang="en">

<head>
<title>BussinBanz</title>
<meta charset="UTF-8">
<!-- <link rel="stylesheet" href="basic.css"> -->

<!-- <script src="https://cdn.tailwindcss.com"></script> -->
<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Syne+Mono"> -->
<link href="/tailwind-generated.css" rel="stylesheet">
<!-- <link href="https://fonts.cdnfonts.com/css/ocr-a-std" rel="stylesheet"> -->
<link href="/hackerfont/stylesheet.css" rel="stylesheet">


</head>


<body>
<section class="bg-stone-800 font-sans">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-lime-500">
          <img class="w-8 h-8 mr-2" src="/img/money-flat-money-png-15.png" alt="logo">
          Bussin'Banz
      </a>
      <div class="w-full bg-stone-900 rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8 text-lime-500">
              <h1 class="text-xl font-bold leading-tight tracking-tight  md:text-2xl">
                  Sign in to your account
              </h1>
              <form class="space-y-4 md:space-y-6" method="post" action="#">
                  <div>
                      <label for="username" class="block mb-2 text-sm font-medium ">Username</label>
                      <input type="text" name="uname" id="uname" class="bg-stone-900 border border-lime-500 sm:text-sm rounded-lg block w-full p-2.5 placeholder-gray-400" placeholder="username" required>
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium">Password</label>
                      <input type="password" name="psw" id="psw" placeholder="••••••••" class="bg-stone-900 border border-lime-500 sm:text-sm rounded-lg block w-full p-2.5 placeholder-gray-400" required>
                  </div>
                  <div class="flex items-center justify-between">
                      <div class="flex items-start">
                          <div class="flex items-center h-5">
                            <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border accent-stone-900 rounded focus:ring-3 focus:ring-red-300">
                          </div>
                          <div class="ml-3 text-sm">
                            <label for="remember" class="text-red-500">Remember me</label>
                          </div>
                      </div>
                      <a href="#" class="text-sm font-medium text-red-600 hover:underline">Forgot password?</a>
                  </div>
                  <button type="submit" class="w-full border hover:bg-stone-600  border-lime-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign in</button>
              <?php
              if (array_key_exists("uname", $_POST) and array_key_exists("psw", $_POST)){
                echo "You entered " . $_POST["uname"] . " and " . $_POST["psw"];
              }
              ?>
              </form>
          </div>
      </div>
  </div>
</section>

</body>


</html>