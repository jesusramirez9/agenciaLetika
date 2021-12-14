<footer class="">
    {{-- <div class="container">
        <div class="hidden md:flex justify-between mx-28 lg:mx-48 xl:mx-72 py-8">
            <a class="text-white font-bold hover:text-yellow-400 {{ request()->is('/') ? 'active text-yellow-500 underline' : '' }}" href="/">Bienvenido</a>
            <a class="text-white font-bold hover:text-yellow-400 {{ request()->is('conocenos') ? 'active text-yellow-500 underline' : '' }}" href="{{route('conocenos')}}">Conócenos</a>
            <a class="text-white font-bold hover:text-yellow-400 {{ request()->is('categories/*') ? 'active text-yellow-500 underline' : '' }}" href="http://127.0.0.1:8000/categories/coqueteos-y-antojitos">Catálago</a>
            <a class="text-white font-bold hover:text-yellow-400 {{ request()->is('servicios') ? 'active text-yellow-500 underline' : '' }}" href="{{route('servicios')}}">Servicios</a>
            <a class="text-white font-bold hover:text-yellow-400 {{ request()->is('contactanos') ? 'active text-yellow-500 underline' : '' }}" href="{{route('contacto')}}">Escríbenos</a>
        </div>
        <div class="grid grid-cols-1 justify-items-center md:flex items-center text-white font-bold text-2xl justify-between">
            <div class="mt-10 md:mt-0">
                <p>Somos la mejor</p>
                <p class="colorosa">Pastelería</p>
            </div>
            <div class="py-5 md:py-0">
                <img src="{{asset('img/logo_foot1.jpg')}}" alt="">
            </div>
            <div>
                <p>Llámanos al:</p>
                <p class="text-yellow-400">948 147 369</p>
            </div>
        </div>
    </div> --}}
    <div class="bg-gray-100 py-10">
        <div class="container">
            <div>
                <div class="grid grid-cols-1 md:grid-cols-2 items-center">
                    <div class="text-center md:text-left">
                        <p class="text-gray-700 font-medium">¿Tienes alguna duda?</p>
                        <p class="pt-4 font-black text-2xl">Comunicate <span class="text-purple-700">con nosotros</span></p>
                    </div>
                    <div class="text-center md:text-right mt-12 md:mt-0">
                        <a href="" class="py-4 px-8 rounded-3xl  border-2  border-purple-600 focus:outline-none text-purple-700 font-medium hover:bg-purple-600 hover:text-white hover:transform hover:ease-in-out hover:transition-all">Haga una cita en linea</a>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 items-center lg:gap-12 xl:gap-20 py-12 md:py-16 text-gray-700 font-medium" >
                    <div>
                        <ul>
                            <li class="mt-4 lg:mt-0"><span class="p-0.5  bg-purple-600 rounded-full mr-2"></span> Lunes <span class="font-black text-black ml-4">08:00am - 18:00pm</span></li>
                            <li class="mt-4"><span class="p-0.5 bg-purple-600 rounded-full mr-2"></span> Martes <span class="font-black text-black ml-4">08:00am - 18:00pm</span></li>
                        </ul>
                    </div>
                    <div class="">
                        <ul >
                            <li class="mt-4 lg:mt-0"><span class="p-0.5  bg-purple-600 rounded-full mr-2"></span> Miercoles <span class="font-black text-black ml-4">08:00am - 18:00pm</span></li>
                            <li class="mt-4"><span class="p-0.5 bg-purple-600 rounded-full mr-2"></span> Jueves <span class="font-black text-black ml-4">08:00am - 18:00pm</span></li>

                        </ul>
                    </div>
                    <div class="lg:text-right">
                        <ul>
                            <li class="mt-4 lg:mt-0"><span class="p-0.5  bg-purple-600 rounded-full mr-2"></span> Viernes <span class="font-black text-black ml-4">08:00am - 18:00pm</span></li>
                            <li class="mt-4"><span class="p-0.5 bg-purple-600 rounded-full mr-2"></span> Sábado <span class="font-black text-black ml-4">02:00pm - 18:00pm</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 lg:gap-8  divide-x divide-opacity-40 divide-gray-400 ">
            <div class="py-0 pl-8 md:py-12 px-2">
                <div class="mt-4 md:mt-0 mb-4">
                <img src="{{asset('dental/home/logo.png')}}" alt="">

                </div>
                <p>
                    El Centro Odontológico ofrece una renovada infraestructura que nos permite brindar una atención de
                    <span class="text-black font-black">excelente calidad.</span>
                </p>
            </div>
            <div class="py-0 pl-8 md:py-12">
                <h5 class="text-gray-700 font-semibold pb-4 md:pb-6">Menú</h5>
                <ul class="text-gray-700 font-medium">
                    <li class="hover:border-l-2 hover:border-purple-700 hover:pl-2 hover:bg-purple-600 hover:bg-opacity-20 {{ request()->is('/') ? 'active border-l-2 border-purple-700 pl-2 bg-purple-600 bg-opacity-20' : '' }}">
                        <a href="/" class="">Inicio</a>
                    </li >
                    <li  class="mt-3 hover:border-l-2 hover:border-purple-700 hover:pl-2 hover:bg-purple-600 hover:bg-opacity-20 {{ request()->is('conocenos') ? 'active border-l-2 border-purple-700 pl-2 bg-purple-600 bg-opacity-20' : '' }}">
                        <a href="{{route('conocenos')}}">Nosotros</a>
                    </li>
                   
                    <li class="mt-3 hover:border-l-2 hover:border-purple-700 hover:pl-2 hover:bg-purple-600 hover:bg-opacity-20 {{ request()->is('categories*','products*','orders*','shopping-cart*') ? 'active border-l-2 border-purple-700 pl-2 bg-purple-600 bg-opacity-20' : '' }}">
                        <a href="/categories/moda">Productos</a>
                    </li>
                    <li class="mt-3 hover:border-l-2 hover:border-purple-700 hover:pl-2 hover:bg-purple-600 hover:bg-opacity-20 {{ request()->is('contactanos') ? 'active border-l-2 border-purple-700 pl-2 bg-purple-600 bg-opacity-20' : '' }}">
                        <a href="{{route('contacto')}}">Contáctanos</a>
                    </li>
                   
                </ul>
            </div>
            <div class="py-0 pl-8 md:py-12 hidden md:block">
                <h5 class="text-gray-700 font-semibold pb-4 md:pb-6">Nuestras Especialidades</h5>
                <ul class="text-gray-700 font-medium">
                    <li>
                        Ortodoncia
                    </li>
                    <li class="mt-3">
                        Cirugía de Tercera molar
                    </li>
                    <li class="mt-3">
                        Implantes Dentales
                    </li>
                    <li class="mt-3">
                        Odontopediatría
                    </li>
                    <li class="mt-3">
                        Diseño de sonrisa
                    </li>
                </ul>
            </div>
            <div class="py-0 pl-8 md:py-12">
                <h5 class="text-gray-700 font-semibold pb-4 md:pb-6">Datos informativos</h5>
                <ul class="text-gray-700 font-medium">
                    <li>
                        Av Elmer Faucett 3348 Callao, 07031 Perú
                    </li>
                    <li class="mt-3">
                        <span class="text-purple-700 font-medium">Llámanos: +01 5120512</span>
                    </li>
                    <li class="mt-3">
                        Lun - Vie <br> 8:00am - 20:00pm
                    </li>
                </ul>
            </div>
        </div>
        
    </div>
    <div class="text-center py-6 md:border-t md:border-gray-400 md:border-opacity-40">
        Todos los derechos reservados 2021
    </div>
</footer>
