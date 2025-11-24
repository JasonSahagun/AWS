{{-- @extends('/admin/plantilla/layout')
@section('titulo','mostrar categoria')

@section('contenido')

<h1>MOSTRAR </h1>
<form class="row g-3 needs-validation" method="POST" action="/categorias/{{$categoria->id}}" >
  @csrf
  @method('delete')
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="validationCustom01" value="{{$categoria->name}}" name="name" readonly>
    
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Descripcion</label>
    <input type="text" class="form-control" id="validationCustom02"  value="{{$categoria->description}}" name="description" readonly>
    
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">usuario</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <label for="validationCustom03" name="picture" class="form-label">Img</label>
    <img src="{{$categoria->picture}}" alt="{{$categoria->picture}}" width="150"></td>
  </div>
  
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Borrar</button>
  </div>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>

@endsection --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar proveedores') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                  
                    <!-- Formulario con validación de Tailwind -->
                    <form method="POST" action="{{ route('providers.delete', $proveedores->id) }}" enctype="multipart/form-data" novalidate>
                        @csrf
                        @method('delete')

                        <!-- Nombre -->
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                            <input type="text" id="name" name="name" value="{{ $proveedores->name }}" 
                            class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" readonly>
                            {{-- @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror --}}
                        </div>

                        <!-- Descripción -->
                        <div class="mb-4">
                            <label for="contact_name" class="block text-sm font-medium text-gray-700">Nombre de contacto </label>
                            <input type="text" id="contact_name" name="contact_name" value="{{ $proveedores->contact_name }}"
                            class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" readonly>
                            {{-- @error('description') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror --}}
                        </div>

                        <!-- Direccion -->
                        <div class="mb-4">
                            <label for="address" class="block text-sm font-medium text-gray-700">Direccion</label>
                            <input type="text" id="address" name="address" value="{{ $proveedores->address }}"
                            class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" readonly>
                            {{-- @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror --}}
                        </div>

                        <!-- telefono -->
                        <div class="mb-4">
                            <label for="phone" class="block text-sm font-medium text-gray-700">Telefono</label>
                            <input type="number" id="phone" name="phone" value="{{ $proveedores->phone }}"
                            class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" readonly>
                            {{-- @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror --}}
                        </div>

                        <!-- e-mail -->
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
                            <input type="email" id="email" name="email" value="{{ $proveedores->email }}"
                            class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" readonly>
                            {{-- @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror --}}
                        </div>
                        
                        <!-- Imagen -->
                        <div class="mb-4">
                            <label for="picture" class="block text-sm font-medium text-gray-700">Imagen</label>
                            <div class="flex items-center">
                                <img src="http://127.0.0.1:8001{{ $proveedores->picture }}" alt="http://127.0.0.1:8001{{$proveedores->picture}}" class="card-img-top" width="100">
                              
                                
                            </div>
                            {{-- @error('picture') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror --}}
                        </div>
                        
                        <!-- Botón de actualización -->
                        <div class="flex justify-end mt-4">
                            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                Actualizar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>