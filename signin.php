<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FixIt</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex bg-[url('')] bg-cover bg-center">
    <!-- left sid eof the form  -->
     <div class="md:w-1/2 flex items-center justify-center p-6">
        <div class="max-w-md w-full space-y-3">
            <!-- logo here  -->
             <div class="flex justify-center">
                <img src="logo/logo2.png" alt="" class="w-60 h-30">
             </div>

             <p class="text-gray-900">Welcome Back!</p>

             <!-- form starts here  -->
              <form action="home.php" class="space-y-4">

                <!-- email file  -->
                <div>
                    <input type="email" placeholder="name@email.com" class="w-full px-4 py-3 border rounded-[20px] focus:ring-2 focus:ring-gray-900">
                </div>
                
                <!-- password box  -->
                <div>
                    <input type="password" placeholder="Password" class="w-full px-4 py-3 border rounded-[20px] focus:ring-2 focus:ring-gray-900">
                    <!-- for eye icon  -->
                    <span class="absolute insert-y-0 right-0 flex items-center cursor-pointer" >
                    </span>
                </div>

                <div class="flex items-center text-sm justify-between">
                    <label for-="">
                        <input type="checkbox" class="">Remember me
                    </label>
                    <a href="#" class="text-gray-600 hover:underline">Reset password</a>
                </div>


                <!-- button here  -->
                 <button type="submit" class="w-full font-bold bg-gradient-to-r from-[#1089d3] to-[#12b1d1] text-white py-3 rounded-[20px] mt-5 shadow-[0_20px_10px_-15px_rgba(133,189,215,0.88)] hover:scale-105 hover:shadow-[0_23px_10px_-20px_rgba(133,189,215,0.88)] transition-all duration-200 ease-in-out">Sign In</button>

              </form>

              <p class="text-center text-sm">Don't have an account? <a href="signup.php" class="text-black font-medium hover:underline">Sign up</a></p>
            
              <div class="flex items-center justify-center space-x-2">
                  <div class="w-1/3 border-t"></div>
                  <span class="text-gray-500">or</span>
                  <div class="w-1/3 border-t"></div>
              </div>


        </div>
     </div>
</body>
</html>