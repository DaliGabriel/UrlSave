<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>


<nav class="bg-opacity-25 backdrop-filter backdrop-blur-lg sticky top-0 z-50 flex justify-around py-4 mx-auto bg-white shadow-2xl">
  <div class="flex items-center">
    <h3 class="text-2xl font-medium text-blue-500">Url Save</h3>
  </div>
  <!-- left header section -->

  <!-- right header section -->
  <div class="flex items-center space-x-2">

  <?php if(basename($_SERVER['PHP_SELF']) == 'index.php'){ ?>
    <form method="POST" action="../controller/logout.php">
        <button class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded"
        type="submit"
        name="loggout"
        >
        Loggout
        </button>
    </form>
   <?php }
   elseif(basename($_SERVER['PHP_SELF']) == 'login.php'){
   ?>
   <form action="/crud_php_sql/views/register.php">
    <button 
      class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
      >
        Sign up
      </button>
    </form>

   <?php }
   elseif(basename($_SERVER['PHP_SELF']) == 'register.php'){
   ?>
    <form action="/crud_php_sql/views/login.php">
      <button class="bg-transparent hover:bg-sky-500 text-black-700 font-semibold hover:text-white py-2 px-4 border border-sky-500 hover:border-transparent rounded">
        Sign in
      </button>
    </form>

    <?php } 
   elseif(basename($_SERVER['PHP_SELF']) == 'show_post.php'){
   ?>
   <form action="/crud_php_sql/views/index.php">
      <button class="bg-transparent hover:bg-sky-500 text-black-700 font-semibold hover:text-white py-2 px-4 border border-sky-500 hover:border-transparent rounded">
        Home
      </button>
    </form>
    <?php } 
    elseif(basename($_SERVER['PHP_SELF']) == 'edit_post.php'){
    ?>
    
    <form action="/crud_php_sql/views/index.php">
      <button class="bg-transparent hover:bg-sky-500  text-black-700 font-semibold hover:text-white py-2 px-4 border border-sky-500 hover:border-transparent rounded ">
        Home
      </button>
    </form>
    
    <?php }
    elseif(basename($_SERVER['PHP_SELF']) == 'create_post.php'){
    ?>

    <form action="/crud_php_sql/views/index.php">
      <button class="bg-transparent hover:bg-sky-500 text-black-700 font-semibold hover:text-white py-2 px-4 border border-sky-500 hover:border-transparent rounded">
        Home
      </button>
    </form>
    
    <?php }?>

  </div>
</nav>
    
</body>
</html>