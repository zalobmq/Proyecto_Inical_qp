<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD NEW BOOK</title>
    @vite('resources/css/app.css')

</head>
<body>
<div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
  <div class="w-full max-w-md space-y-8">
    <div>
      <img class="mx-auto h-12 w-auto" src="https://cdn-icons-png.flaticon.com/512/1245/1245261.png" alt="Your Company">
      <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Añade un nuevo libro</h2>
      <p class="mt-2 text-center text-sm text-gray-600">
        
        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"></a>
      </p>
    </div>
    <form class="mt-8 space-y-6" action="#" method="POST">
      <input type="hidden" name="remember" value="true">
      <div class="-space-y-px rounded-md shadow-sm">
        <div>
          <label for="title" class="sr-only">Titulo del libro</label>
          <input id="title" name="title" type="title" autocomplete="title" required class="relative block w-full rounded-t-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="  Titulo del libro">
        </div>
        <div>
          <label for="email_owner" class="sr-only">Email del propietario</label>
          <input id="email_owner" name="email_owner" type="email_owner" autocomplete="current-email_owner" required class="relative block w-full rounded-b-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="  Email del propietario">
        </div>
      </div>

      

      <div>
        <button type="submit" class="group relative flex w-full justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
          <span class="absolute inset-y-0 left-0 flex items-center pl-3">
            
            </svg>
          </span>
          Añadir libro
        </button>
      </div>
    </form>
  </div>
</div>

</body>
</html>