<x-app-layout>
    <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
        style="background-image: url('{{ asset('dental/nosotros/slider.jpg') }}')">
        <div class="absolute bg-black bg-opacity-30 w-full h-full">

        </div>
        <div class="mt-8 absolute text-center max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-36 text-white lr">
            <p class="m-0 shdot-text text-2xl">Tu mejor experiencia con</p>
            <p class="m-0 shdot-text font-black text-2xl lg:text-6xl xl:text-8xl">Nosotros</p>
        </div>
    </div>

    <div class="container mt-4 md:mt-10 xl:mt-16">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="text-center md:text-left">
                <p class="text-gray-700 font-medium">Quienes Somos</p>
                <p class="text-xl lg:text-3xl xl:text-5xl font-black py-1 md:py-3">Somos</p>
                <p class="text-xl lg:text-3xl xl:text-5xl font-black text-purple-600">Dental Carry</p>
            </div>
            <div class="mt-4 md:mt-20 lg:mt-24 xl:mt-28 font-medium px-4 md:px-0">
                <p>Con más de 20 años de permanencia, el Centro Odontológico <span class="font-bold">Dental
                        Carry</span> ofrece una renovada infraestructura que nos permite brindar una atención de
                    excelente calidad, garantizando un tratamiento integral a niños y adultos, que son atendidos por un
                    grupo de prestigiosos profesionales con alta especialización odontológica.
                </p>
                <p class="mt-4 font-medium">
                    Pensando siempre en el bienestar y comodidad de nuestros pacientes, estamos afiliados a las
                    principales compañías de seguros, empresas prestadoras de salud y autoseguros. Y lo más importante,
                    es que somos parte del Grupo San Pablo, la red privada de salud más grande del país.
                </p>
            </div>
        </div>    
    </div>

    <div class="bg-purple-700 py-8 mt-8 md:mt-24">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-14 xl:gap-28 items-center">
                <div>
                    <img src="{{asset('dental/nosotros/noso.png')}}" alt="">
                </div>
                <div class="text-white px-4 md:px-0">
                    <h1 class="font-bold text-2xl xl:text-4xl">Misión</h1>
                    <p class="mt-4 xl:mt-8">Brindar a nuestros pacientes servicios odontológicos a través de la más avanzada tecnología,
                        profesionales competentes y atención personalizada. Trabajamos bajo el Sistema de Gestión de Calidad
                        ISO 9001, 14 años avalado por SGS.
                    </p>
                    <h1 class="mt-12 font-bold text-2xl xl:text-4xl">Visión</h1>
                    <p class="mt-4 xl:mt-8">
                        Mantener siempre los principios de honradez y ética profesionales al atender las necesidades de
                        nuestros PACIENTES y consolidarnos como la mejor clínica odontológica del país.
    
                    </p>
                    <h1 class="font-bold text-2xl xl:text-4xl mt-12">Objetivos de calidad</h1>
                    <ul class="list-disc">
                        <li class="mt-4">
                            Satisfacer y sobrepasar las expectativas del paciente realizando un trabajo de excelente
                            calidad.
                        </li>
                        <li class="mt-4">
                            Preservar la salud del paciente tomando todas las precauciones para eliminar una mala práctica
                            odontológica.
                        </li>
                        <li class="mt-4">
                            Prestar nuestros servicios a un costo competitivo que nos permita mantenernos en el mercado.
                        </li>
                    </ul>
    
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-8 md:mt-20 lg:mt-24 mb-8 md:mb-20">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center">
            <div class="text-center md:text-left">
                <p class="text-gray-700 font-medium">Equipo de especialistas</p>
                <p class="pt-4 font-black text-2xl">Nuestros <span class="text-purple-700">Odontólogos</span></p>
            </div>
            <div class="text-center md:text-right mt-12 md:mt-0">
                <div class="md:text-right">
                    <img src="{{ asset('dental/home/too.png') }}" class="inline-block" alt="">
                </div>
            </div>
        </div>

        <div class="mt-10 xl:mt-20 grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4 lg:gap-4">
            <div>
                <img src="{{ asset('dental/home/doc1.png') }}" class="w-full" alt="">
                <div
                    class="border-2 border-t-0 border-gray-400 border-opacity-20 py-6 px-4 ">
                    <p class="font-medium">Dr. Erick Sihuay</p>
                    <p class="font-medium text-xs text-purple-700 mt-3 ">Cirujano Dentista</p>
                    <p class="font-medium text-sm text-gray-400 mt-6">Odontología Estética</p>
                </div>
            </div>
            <div>
                <img src="{{ asset('dental/home/doc2.png') }}" class="w-full" alt="">
                <div
                    class="border-2 border-t-0 border-gray-400 border-opacity-20 py-6 px-4">
                    <p class="font-medium">Dr. Michael Carrión</p>
                    <p class="font-medium text-xs text-purple-700 mt-3 ">Cirujano Dentista</p>
                    <p class="font-medium text-sm text-gray-400 mt-6">Odontología Estética</p>
                </div>
            </div>
            <div>
                <img src="{{ asset('dental/home/doc3.png') }}" class="w-full" alt="">
                <div
                    class="border-2 border-t-0 border-gray-400 border-opacity-20 py-6 px-4">
                    <p class="font-medium">Dr. Carlos Vasquez</p>
                    <p class="font-medium text-xs text-purple-700 mt-3 ">Cirujano Dentista</p>
                    <p class="font-medium text-sm text-gray-400 mt-6">Odontología Estética</p>
                </div>
            </div>
            <div>
                <img src="{{ asset('dental/home/doc4.png') }}" class="w-full" alt="">
                <div
                    class="border-2 border-t-0 border-gray-400 border-opacity-20 py-6 px-4">
                    <p class="font-medium">Dr. Roberto Valverde</p>
                    <p class="font-medium text-xs text-purple-700 mt-3 ">Cirujano Dentista</p>
                    <p class="font-medium text-sm text-gray-400 mt-6">Odontología Estética</p>
                </div>
            </div>
        </div>
    </div>
    <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
        style="background-image: url('{{ asset('dental/home/slider.jpg') }}')">
        <div class="absolute bg-purple-700 bg-opacity-60 w-full h-full">

        </div>
        <div class="mt-8 absolute text-center max-w-7xl lg:max-w-full mx-auto px-4 sm:px-6 lg:px-8 pt-12 lg:pt-20 text-white lr">
            <p class="m-0 shdot-text text-2xl">10 años de experiencia</p>
            <p class="m-0 mt-6 md:mt-1 shdot-text font-black text-2xl lg:text-3xl xl:text-4xl">Estadisticas de la clínica</p>
            <div class="max-w-5xl md:max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-5 gap-2 mt-16">
                <div class="w-full h-52 bg-purple-300 bg-opacity-60 py-8 rounded-md">
                    <div>
                        <img src="{{asset('dental/home/calidad.svg')}}" alt="" class="inline-block">
                    </div>
                    <p class="py-4 text-xl font-semibold">100%</p>
                    <p>Calidad</p>
                </div>
                <div class="w-full h-52 bg-purple-300 bg-opacity-60 py-8 rounded-md hidden md:block">
                    <div>
                        <img src="{{asset('dental/home/pacientes.svg')}}" alt="" class="inline-block">
                    </div>
                    <p class="py-4 text-xl font-semibold">2480</p>
                    <p>Pacientes al año</p>
                </div>
                <div class="w-full h-52 bg-purple-300 bg-opacity-60 py-8 rounded-md hidden md:block">
                    <div>
                        <img src="{{asset('dental/home/colaboradores.svg')}}" alt="" class="inline-block">
                    </div>
                    <p class="py-4 text-xl font-semibold">26</p>
                    <p>Colaboradores</p>
                </div>
                <div class="w-full h-52 bg-purple-300 bg-opacity-60 py-8 rounded-md hidden md:block">
                    <div>
                        <img src="{{asset('dental/home/anios.svg')}}" alt="" class="inline-block">
                    </div>
                    <p class="py-4 text-xl font-semibold">16</p>
                    <p>Años de experiencia</p>
                </div>
                <div class="w-full h-52 bg-purple-300 bg-opacity-60 py-8 rounded-md hidden md:block">
                    <div>
                        <img src="{{asset('dental/home/happy.svg')}}" alt="" class="inline-block">
                    </div>
                    <p class="py-4 text-xl font-semibold">7856</p>
                    <p>Sonrisas de éxito</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-8 lg:mt-20">
        <p class="text-center text-gray-700 text-xl">Testimonios</p>
        <p class="mt-3 text-center font-black text-xl md:text-3xl">
            ¿Que dicen nuestros <span class="text-purple-700">clientes</span>?
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 text-center gap-10 lg:gap-20 mt-8 lg:mt-20 mb-10 md:mb-20 ">
            <div>
                <img src="{{asset('dental/nosotros/ma1.png')}}" class="inline-block" alt="">
                <p class="font-semibold text-gray-700 mt-6">Peter Jauregui</p>
                <p class="text-sm text-purple-700 mt-3 font-medium">Servicio de Ortodoncia</p>
                <p class="py-4 xl:py-8 px-6 md:px-0">
                    La atención fue insuperable, no hay mejores manos para atenderte que las de la Dra. Cris
                </p>
                <div class="flex justify-center">
                    <img src="{{asset('dental/nosotros/v1.png')}}"class="inline-block" alt="">
                    <img src="{{asset('dental/nosotros/v1.png')}}"class="inline-block" alt="">
                    <img src="{{asset('dental/nosotros/v1.png')}}"class="inline-block" alt="">
                    <img src="{{asset('dental/nosotros/v1.png')}}"class="inline-block" alt="">
                    <img src="{{asset('dental/nosotros/v1.png')}}"class="inline-block" alt="">
                </div>
            </div>
            <div>
                <img src="{{asset('dental/nosotros/ma2.png')}}" class="inline-block" alt="">
                <p class="font-semibold text-gray-700 mt-6">Jocelyn Barona</p>
                <p class="text-sm text-purple-700 mt-3 font-medium">Rehabilitación de coronas</p>
                <p class="py-4 xl:py-8 px-6 md:px-0">
                    La atención fue insuperable, no hay mejores manos para atenderte que las de la Dra. Cris
                </p>
                <div class="flex justify-center">
                    <img src="{{asset('dental/nosotros/v1.png')}}"class="inline-block" alt="">
                    <img src="{{asset('dental/nosotros/v1.png')}}"class="inline-block" alt="">
                    <img src="{{asset('dental/nosotros/v1.png')}}"class="inline-block" alt="">
                    <img src="{{asset('dental/nosotros/v1.png')}}"class="inline-block" alt="">
                    <img src="{{asset('dental/nosotros/v1.png')}}"class="inline-block" alt="">
                </div>
            </div>
            <div>
                <img src="{{asset('dental/nosotros/ma3.png')}}" class="inline-block" alt="">
                <p class="font-semibold text-gray-700 mt-6">Rossana Cueva</p>
                <p class="text-sm text-purple-700 mt-3 font-medium">Blanqueamiento dental</p>
                <p class="py-4 xl:py-8 px-6 md:px-0">
                    La atención fue insuperable, no hay mejores manos para atenderte que las de la Dra. Cris
                </p>
                <div class="flex justify-center">
                    <img src="{{asset('dental/nosotros/v1.png')}}"class="inline-block" alt="">
                    <img src="{{asset('dental/nosotros/v1.png')}}"class="inline-block" alt="">
                    <img src="{{asset('dental/nosotros/v1.png')}}"class="inline-block" alt="">
                    <img src="{{asset('dental/nosotros/v1.png')}}"class="inline-block" alt="">
                    <img src="{{asset('dental/nosotros/v1.png')}}"class="inline-block" alt="">
                </div>
            </div>
        </div>

    </div>



</x-app-layout>
