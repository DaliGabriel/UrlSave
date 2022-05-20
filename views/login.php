<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>
<body>
  
  <?php include('./components/navbar.php'); ?>

  <section class="h-screen">
    <div class="px-6 h-full text-gray-800">
      <div
        class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6"
      >
        <div
          class="grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0"
        >
          <picture>
            <source
            media="(min-width: 465px)"
            srcset="/crud_php_sql/views/assets/undraw_secure_login_pdn4.svg"
            >
            <img
              src="/crud_php_sql/views/assets/undraw_access_account_re_8spm.svg"
              class="w-full"
              alt=""
            />
          </picture>
        </div>
        <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
          <!-- Formulario -->
          <form action="/crud_php_sql/controller/login_user.php" method="POST">
         
            <!-- Email input -->
            <div class="mb-6">
              <input
                name="mail_login"
                type="email"
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                id="exampleFormControlInput2"
                placeholder="Email address"
                required
              />
            </div>
  
            <!-- Password input -->
            <div class="mb-6">
              <input
                name="password_login"
                type="password"
                class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                id="exampleFormControlInput2"
                placeholder="Password"
                required 
                minlength="8"
              />
            </div>
  
            <div class="mb-5 grid place-items-center">
              <a href="#!" class="text-center text-blue-600 hover:text-blue-700">Forgot password?</a>
            </div>
  
            <div class="sm  text-center lg:text-left">
              <button
                type="submit"
                class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
              >
                Login
              </button>
              <p class="text-md font-semibold mt-2 pt-1 mb-4">
                Don't have an account?
                <a
                  href="register.php"
                  class=" text-lg text-blue-600 hover:text-emerald-700 focus:text-emerald-500 transition duration-200 ease-in-out"
                  >Register</a
                >
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>
</html>