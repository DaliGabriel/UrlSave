

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com/?plugins=forms"></script>
</head>
<body>
    
    <div class="container max-w-7xl mx-auto mt-8">
    <div class="mb-4">
        <h1 class="font-serif text-3xl text-gray-00 underline decoration-blue-600">Your Urls</h1>
        <div class="flex justify-end mr-1">
            <form action="/crud_php_sql/views/components/create_post.php">
            <button class="px-4 py-2 rounded-md bg-blue-500 text-white hover:bg-blue-600 m">
                Create New Register
            </button>
            </form>
        
        </div>
    </div>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
            <table class="min-w-full">
            <thead>
                <tr>

                    <th
                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                        Title
                    </th>

                    <th
                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                        Url
                    </th>

                    <th
                        class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                        Description
                    </th>

                    <th
                        class="pr-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                        Date
                    </th>

                    <th class="px-6 py-3 text-sm text-left text-gray-500 border-b border-gray-200 bg-gray-50" colspan="3">
                        Action
                    </th>

                </tr>
            </thead>

            <tbody class="bg-white">
                
                <!-- Fetch Database and show all posts -->
                <?php 
                    foreach($results as $result){
                ?>

                <tr>
                    
                    <!--Show the title post-->
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="text-sm leading-5 text-gray-900">
                             <?php echo $result -> title?> 
                        </div>
                    </td>
                    
                    <!--Show Url links-->
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="text-sm leading-5 text-blue-900">
                             <a href="<?php echo $result -> url?>" target="_blank"><?php echo $result -> url?></a>
                        </div>
                    </td>
                    
                    <!--Show Description-->
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <p><?php echo $result -> description?></p>
                    </td>

                    <!--Show Date-->
                    <td class="pr-8 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                        <span><?php echo $result -> date?></span>
                    </td>

                    <!-- Edit icon -->
                        <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                            <a href="/crud_php_sql/views/components/edit_post.php" class="text-indigo-600 hover:text-indigo-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                            </a>
                        </td>

                    <!-- see icon -->
                        <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                            <a href="/crud_php_sql/views/components/show_post.php" class="text-gray-600 hover:text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            </a>
                        </td>

                    <!-- delete icon -->
                        
                        <td class="text-sm font-medium leading-5 whitespace-no-wrap border-b border-gray-200 ">
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600 hover:text-red-800"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg></a>
                        </td>
                </tr>

                <?php 
                    }
                ?>
                <!-- Close for each -->

                <!--end table-->
            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>

</body>
</html>