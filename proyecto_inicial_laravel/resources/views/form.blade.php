<x-app-layout>
   

    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
  <div class="w-full max-w-md space-y-8">
    <div>
      <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">REGISTRAR UN LIBRO</h2>
      <p class="mt-2 text-center text-sm text-gray-600">
        
        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Añade aqui tus libros</a>
      </p>
    </div>
                    <!-- FORMULARIO -->
                    <form action="{{ $action }}" method="POST" class="mt-8 space-y-6">
                    <div class="-space-y-px rounded-md shadow-sm">
                        @csrf
                        @isset ($method)
                            @method($method)
                        @endif
                        <div class="mb-4">
                            <label for="title" class="sr-only">TITULO</label>
                            <input type="text" name="title" id="title" class="relative block w-full rounded-t-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Titulo"value="{{ old('title', $book->title) }}">
                            @error('title')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <br>
                        <div class="mb-4">
                            <label for="description"class="sr-only">DESCRIPCION</label>
                            <textarea name="description" id="description" class="relative block w-full rounded-b-md border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:z-10 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Descripcion">{{ old('description', $book->description) }}</textarea>
                            @error('description')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        </div>
                        <div class="flex justify-end">
                            <a href="{{ route('books.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">{{ __('Cancelar') }}</a>
                            <button type="submit" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded ml-2">{{ $buttonText }}</button>
                        </div>
                    </form>
                    <!-- FIN FORMULARIO -->
                </div>
            </div>
            </div>
</div>
</x-app-layout>