<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista todos los usuarios</title>
  @vite('resources/css/app.css')

</head>
<body>
<header class="bg-gray-800">
  <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:divide-y lg:divide-gray-700 lg:px-8">
    <div class="relative h-16 flex justify-between">
      <div class="relative z-10 px-2 flex lg:px-0">
        <div class="flex-shrink-0 flex items-center">
          <a href="{{ route('dashboard') }}"><img class="block h-8 w-auto" src="https://cdn-icons-png.flaticon.com/512/8367/8367640.png" alt="Workflow"></a>
        </div>
      </div>
     
      
      <div class="hidden lg:relative lg:z-10 lg:ml-4 lg:flex lg:items-center">
        
<!-- MENU NAVEGACION -->
      <a href="{{ route('books.create') }}" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded">AÑADIR LIBRO</a>

      <!--  -->
          
      </div>
   

  <!-- Mobile menu, show/hide based on menu state. -->
  
</header>

<!--  -->
<br>
  <div class="mx-auto max-w-2xl lg:text-center">
        <p class="mt-2 text-3xl font-bold tracking-tight text-blue-800 sm:text-4xl">LISTADO DE LIBROS</p>
  </div>
<br>
<br>

<!-- SECCION TABLA -->
<div class="max-w-8xl mx-auto px-6 sm:px-6 lg:px-8">
  <!-- Content goes here -->
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">

        <!-- NOMBRE DE LOS CAMPOS -->
          <thead class="bg-gray-50">
        
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">TITULO</th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">DESCRIPCION</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
          @forelse ($book as $one_book)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $one_book->title }}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $one_book->description }}</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              <a href="{{ route('books.edit', $one_book) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">{{ __('Editar') }}</a>
 
              <form action="{{ route('books.destroy', $one_book) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">{{ __('Eliminar') }}</button>
                 </form>
              </td>

            </tr>
            @empty
            <tr class="bg-red-400 text-white text-center">
                                        <td colspan="3" class="border px-4 py-2">{{ __('No hay libros para mostrar') }}</td>
                                    </tr>
                                @endforelse
            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>
</div>





</body>
</html>