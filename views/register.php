<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/c6dcf34e7b.js" crossorigin="anonymous"></script>
    <title>Register</title>
</head>
<body>

    <?php include('./components/navbar.php'); ?>

<div class="min-w-screen min-h-screen bg-gray-900 flex items-center justify-center px-5 py-5">
    <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
        <div class="md:flex w-full">
            <div class="hidden md:block w-1/2 bg-indigo-500 py-10 px-10">
                <img src="/crud_php_sql/views/assets/undraw_sculpting_-1-c9p.svg" alt="svg-register">
            </div>
            <div class="w-full md:w-1/2 py-3 px-5 md:px-10">
                <div class="text-center mb-2">
                    <h1 class="font-bold text-3xl text-gray-900 mb-2">REGISTER</h1>
                    <p>Enter your information to register</p>
                </div>
                <div>
                    <!--Formulario -->
                    <form action="/crud_php_sql/controller/create_user.php" method="POST">
                        <div class="flex -mx-3">
                            
                            <!--First name-->
                            <div class="w-1/2 px-3 mb-5">
                                <label for="" class="text-xs font-semibold px-1">First name</label>
                                <div class="flex">
                                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="fa-regular fa-user  mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                                    <input  
                                    type="text" 
                                    name="first_name_register" 
                                    class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" 
                                    placeholder="John" 
                                    required  
                                    title="Letters And Minimum 3"
                                    id="firstNameCheck"
                                    required minlength="3"
                                    pattern="[a-zA-Z]+"
                                    >
                                </div>
                            </div>
                            
                            <!--Last name-->
                            <div class="w-1/2 px-3 mb-5">
                                <label for="" class="text-xs font-semibold px-1">Last name</label>
                                <div class="flex">
                                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="fa-solid fa-user mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                                    <input 
                                    name="last_name_register" 
                                    type="text" 
                                    class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" 
                                    placeholder="Smith" 
                                    required title="Letters And Minimum 4"
                                    id="lastNameCheck"
                                    required 
                                    minlength="3"
                                    pattern="[a-zA-Z]+"
                                    >
                                </div>
                            </div>
                        
                        </div>
                        
                        <!--Email-->
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-2">
                                <label for="" class="text-xs font-semibold px-1">Email</label>
                                <div class="flex">
                                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="fa-regular fa-envelope text-gray-400 text-lg"></i></div>
                                    <input 
                                    name="email_register" 
                                    type="email" 
                                    class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" 
                                    placeholder="johnsmith@example.com" 
                                    required>
                                </div>
                            </div>
                        </div>
                        
                        <!--Password-->
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-3">
                                <label for="" class="text-xs font-semibold px-1">Password</label>
                                <div class="flex">                                                                                  
                                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="fa-solid fa-lock text-gray-400 text-lg"></i></div>
                                    <input 
                                    id="password" 
                                    name="password_register" 
                                    type="password" 
                                    class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" 
                                    placeholder="************" 
                                    required minlength="8">
                                </div>
                            </div>
                        </div>
                        
                        

                        
                        <!--Confirm Password-->
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-6">
                                <label for="" class="text-xs font-semibold px-1">Confirm your password</label>
                                <div class="flex" >                                                                                  
                                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="fa-solid fa-lock text-gray-400 text-lg"></i></div>
                                    <input id="confirm_password" name="password_register_confirm" type="password" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="************" required minlength="8">
                                </div>
                            </div>
                        </div>

                        <!--Password Matching-->
                        <div class="border-gray-200 rounded-3xl shadow-xl w-full">
                            <span class="flex justify-center mb-5" id="message"></span>
                        </div>

                        <!--Button submit-->
                        <div class="flex -mx-1">
                            <div class="w-full px-3 mb-3">
                                <button  
                                    type="submit" 
                                    class="block w-full max-w-xs mx-auto bg-blue-500 hover:bg-blue-700 focus:bg-blue-700 text-white rounded-lg px-3 py-3 font-semibold"
                                    >
                                    REGISTER NOW
                                </button>
                            </div>
                        </div>
                        

                        <!--Redirect to login-->
                        <div class="grid place-items-center">
                            <a class="text-blue-700" 
                                href="login.php">
                                Do you Have an account?
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--ajax api-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    // check passwords match
    $('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('The Passwords Matching').css('color', 'rgb(34 197 94)');
  }else 
    $('#message').html('The Passwords Not Matching').css('color', 'rgb(159 18 57)');
});
</script>
<script>
    //Only letters on Name and lastname input check
    function testInput(event) {
        var value = String.fromCharCode(event.which);
        var pattern = new RegExp(/[a-zåäö ]/i);
        return pattern.test(value);
    }

    $('#firstNameCheck').bind('keypress', testInput);
    $('#lastNameCheck').bind('keypress', testInput);
</script>
</body>
</html>