<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FixIt</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">
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
                    <input type="email" placeholder="name@email.com" class="w-full px-4 py-3 border rounded-[20px] focus:outline-none focus:ring-2 focus:ring-gray-900">
                </div>
                
                <!-- password box  -->
                <div>
                    <input type="password" placeholder="Password" class="w-full px-4 py-3 border rounded-[20px] focus:outline-none focus:ring-2 focus:ring-gray-900">
                    <!-- for eye icon  -->
                    <span class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer" onclick="togglePasswordVisibility('Password')">
                        <div id="password-eye">
                            <i class="ri-eye-line"></i>
                        </div>
                    </span>
                </div>

                <!-- confirm password box  -->
                <div>
                    <input type="password" placeholder="Confirm Password" class="w-full px-4 py-3 border rounded-[20px] focus:outline-none focus:ring-2 focus:ring-gray-900">
                    <!-- for eye icon  -->
                    <span class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer" onclick="togglePasswordVisibility('confirmPassword')">
                        <div id="confirmPassword-eye" >
                            <i class="ri-eye-line"></i>
                        </div>
                    </span>
                </div>

                <div class="flex items-center text-sm justify-between">
                    <label for-="">
                        <input type="checkbox" class="">Remember me
                    </label>
                    <a href="#" class="text-gray-600 hover:underline">Reset password</a>
                </div>


                <!-- button here  -->
                 <button type="submit" class="w-full font-bold bg-gradient-to-r from-[#1089d3] to-[#12b1d1] text-white py-3 rounded-[20px] mt-5 shadow-[0_20px_10px_-15px_rgba(133,189,215,0.88)] hover:scale-105 hover:shadow-[0_23px_10px_-20px_rgba(133,189,215,0.88)] transition-all duration-200 ease-in-out">Sign Up</button>

              </form>

              <p class="text-center text-sm">Already have an account? <a href="signin.php" class="text-black font-medium hover:underline">Sign In</a></p>
            
              <div class="flex items-center justify-center space-x-2">
                  <div class="w-1/3 border-t"></div>
                  <span class="text-gray-500">or</span>
                  <div class="w-1/3 border-t"></div>
              </div>

              <!-- continue with others  -->
              <div class="flex justify-center gap-3 mt-1">
                <button class="bg-gradient-to-r from-black to-[#707070] border-4 border-white rounded-full w-10 h-10 flex items-center justify-center shadow-[0_12px_10px_-8px_rgba(133,189,215,0.88)] hover:scale-110 active:scale-90 transition-all duration-200 ease-in-out">
                    <svg class="w-5 h-5 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                        <path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path>
                    </svg>
                </button>
                <button class="bg-gradient-to-r from-black to-[#707070] border-4 border-white rounded-full w-10 h-10 flex items-center justify-center shadow-[0_12px_10px_-8px_rgba(133,189,215,0.88)] hover:scale-110 active:scale-90 transition-all duration-200 ease-in-out">
                    <svg class="w-5 h-5 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"></path>
                    </svg>
                </button>
                <button class="bg-gradient-to-r from-black to-[#707070] border-4 border-white rounded-full w-10 h-10 flex items-center justify-center shadow-[0_12px_10px_-8px_rgba(133,189,215,0.88)] hover:scale-110 active:scale-90 transition-all duration-200 ease-in-out">
                    <svg class="w-5 h-5 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path>
                    </svg>
                </button>
              </div>


        </div>
     </div>


     <!-- javascript  -->
      <script>
        function togglePasswordVisibility(fieldId) {
            const passwordField = document.getElementById(fieldId);
            const eyeIcon = document.getElementById(`${fieldId}-eye`);

            if (passwordField.type === "password") {
                passwordField.type = "text";
                eyeIcon.innerHTML = '<i class="ri-eye-line"></i>'
            } else {
                passwordField.type = "password";
                eyeIcon.innerHTML = '<i class="ri-eye-off-line"></i>'
        }
      </script>
</body>
</html>