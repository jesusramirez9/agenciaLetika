<x-app-layout>
    <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
        style="background-image: url('{{ asset('dental/contacto/slide.jpg') }}')">
        <div class="absolute bg-black bg-opacity-30 w-full h-full">

        </div>
        <div class="mt-8 absolute text-center max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-40 text-white  lr">
            <p class="m-0 shdot-text text-2xl">Contáctenos si tiene alguna pregunta sobre los servicios.</p>
            <p class="m-0 shdot-text font-black text-2xl lg:text-6xl xl:text-8xl">Reserve una cita</p>

        </div>
    </div>

  
    <div class="mt-14 my-10 max-w-xs px-6 md:max-w-3xl xl:max-w-7xl md:px-20 xl:px-52  mx-auto">
        <div class="grid grid-cols-1">
            <p class="  text-2xl font-semibold">Déjanos tus datos:</p>
            <hr class=" my-6 bg-gray-400 bg-opacity-40">
            <p>Tu dirección de correo electrónico no será publicada. Los campos necesarios están marcados *</p>

            <form action="{{ route('contacto.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 gap-6 mt-5">
                    <div>
                        <label for="" class="font-medium">Nombres*</label>
                        <input name="name"
                            class="w-full bg-gray-50 text-gray-900 border-gray-400 border-opacity-40 focus:outline-none focus:shadow-outline"
                            type="text" placeholder="Nombre del contacto" />
                        @error('name')
                            <p><strong>{{ $message }}</strong></p>
                        @enderror
                    </div>

                    <div>
                        <label for="" class="font-medium">Apellidos*</label>
                        <input name="Apellidos"
                            class="w-full bg-gray-50 text-gray-900 border-gray-400 border-opacity-40 focus:outline-none focus:shadow-outline"
                            type="text" placeholder="Apellidos del contacto" />
                        @error('Apellidos')
                            <p><strong>{{ $message }}</strong></p>
                        @enderror

                    </div>
                    <div>
                        <label for="" class="font-medium">Email*</label>
                        <input name="correo"
                            class="w-full bg-gray-50 text-gray-900 border-gray-400 border-opacity-40 focus:outline-none focus:shadow-outline"
                            type="email" placeholder="Correo Electrónico" />
                        @error('correo')
                            <p><strong>{{ $message }}</strong></p>
                        @enderror
                    </div>

                    <div>
                        <label for="" class="font-medium">Teléfono*</label>
                        <input name="telefono"
                            class="w-full bg-gray-50 text-gray-900 border-gray-400 border-opacity-40 focus:outline-none focus:shadow-outline"
                            type="text" placeholder="Ingrese N° Telefónico" />
                        @error('telefono')
                            <p><strong>{{ $message }}</strong></p>
                        @enderror
                    </div>
                    <div>
                        <label for="" class="font-medium">Empresa*</label>
                        <input name="empresa"
                            class="w-full bg-gray-50 text-gray-900 border-gray-400 border-opacity-40 focus:outline-none focus:shadow-outline"
                            type="text" placeholder="Nombre de la empresa" />
                        @error('empresa')
                            <p><strong>{{ $message }}</strong></p>
                        @enderror
                    </div>

                    <div>
                        <label for="" class="font-medium">Asunto*</label>
                        <input name="asunto"
                            class="w-full bg-gray-50 text-gray-900 border-gray-400 border-opacity-40 focus:outline-none focus:shadow-outline"
                            type="text" placeholder="Ingrese asunto" />
                        @error('asunto')
                            <p><strong>{{ $message }}</strong></p>
                        @enderror
                    </div>
                    <div>
                        <textarea name="mensaje" placeholder="Mensaje*"
                            class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 brdinput focus:outline-none focus:shadow-outline"></textarea>
                        @error('mensaje')
                            <p><strong>{{ $message }}</strong></p>
                        @enderror
                    </div>
                    <div class="my-2  text-center">
                        <button type="submit"
                            class="  font-bold tracking-wide rounded-3xl bg-purple-500 text-white px-8 py-3   
                          focus:outline-none focus:shadow-outline">
                            Enviar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="mapa_contacto px-2 md:px-8 ">
        <iframe class=""
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.7389826192025!2d-77.10558468483653!3d-12.0614716914575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cbe1f1e721e7%3A0x9347134c0c78dd7c!2sCalle%2053B%2C%20Bellavista%2007011!5e0!3m2!1ses!2spe!4v1627609613218!5m2!1ses!2spe"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>


    @if (session('info'))
        <script>
            alert("{{ session('info') }}")
        </script>
    @endif


</x-app-layout>
