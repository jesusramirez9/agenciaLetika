<x-app-layout>

    {{-- <div class="container py-8">
        @foreach ($categories as $category)
        
            <section class="mb-6">
                <div class="flex items-center mb-2">
                    <h1 class="text-lg uppercase font-semibold text-gray-700">
                        {{$category->name}}
                    </h1>

                    <a href="{{route('categories.show', $category)}}" class="text-orange-500 hover:text-orange-400 hover:underline ml-2 font-semibold">Ver más</a>

                </div>

                @livewire('category-products', ['category' => $category])
            </section>

        @endforeach
    </div> --}}
    @push('link')
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    @endpush
    <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
        style="background-image: url('{{ asset('img/home/slid.jpg') }}')">
        <div
            class="absolute text-left max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-36 xl:px-32 text-white font-bold  md:lr">
            <p class="m-0 shdot-text colorred text-xl md:text-4xl">CONTAMOS CON LOS</p>
            <p class="m-0 shdot-text colorosa text-xl md:text-4xl">MEJORES ANTOJITOS</p> <br>
            <p class="m-0 shdot-text text-xl md:text-xl xl:text-3xl">Un antojito que coquetea con tu paladar</p>
            <p class="m-0 shdot-text text-xl md:text-xl xl:text-3xl">Todo lo hacemos con el amor de casa</p>
            <p class="m-0 shdot-text text-xl md:text-xl xl:text-3xl">Nada mejor que un postre para compartir en familia.
            </p>
            <div class="flex text-base font-normal mt-6">
                <a href=""
                    class="bg-yellow-50 text-gray-700 p-3 rounded-md font-bold hover:bg-red-400 hover:text-white transition-transform">Pedidos
                    aquí</a>
                <a href=""
                    class="bg-red-400 p-3 rounded-md font-bold ml-8 hover:bg-yellow-50 hover:text-black ">Escríbenos</a>
            </div>
        </div>
    </div>
    <div class="hidden md:block relative h-contacto bg-center bg-cover w-full object-cover object-center"
        style="background-image: url('{{ asset('plantilla/welcome2.jpg') }}')">
        <div class="absolute bg-white bg-opacity-80 w-full h-full">
            <div class="container">
                <div class="text-center  py-12 lg:pt-10">
                    <p class="m-0  font-black text-2xl lg:text-3xl ">¿Qué tipo de sitio web necesitas?</p>
                    <p class="text-base font-medium pt-2">¡Selecciona el tipo de web perfecto para tu negocio y
                        trabajemos!</p>
                </div>
                <div class=" grid grid-cols-1 md:grid-cols-2  gap-4 md:gap-6 lg:gap-8 xl:gap-12 z-20 ">
                    <div class="  text-center   py-12 lg:py-10 text-gray-600  ">
                        <div class="flex justify-center items-center mb-4">
                            <div class="bg-gray-600 w-20 h-20 flex justify-center items-center rounded-lg">
                                <i class="fas fa-dumpster-fire text-white fa-3x"></i>
                            </div>
                        </div>
                        <p class="m-0  font-black text-2xl lg:text-3xl ">Web Ecommerce Online</p>
                        <p class="text-base font-medium pt-4">Nuestros paquetes incluyen todo lo necesario para que
                            puedas enfocarte en lo que haces mejor: impulsar tu negocio. Tenemos preparadas páginas
                            pensadas para
                            que no sobre ni falte nada. Tiendas online con plataformas de cobro y envíos. Automatizá y
                            ordená las ventas 24×7!</p>
                        <div class="flex justify-center mt-4">
                            <a href="/categories/moda"
                                class="bg-gray-600 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-800 hover:font-bold">Ver
                                plantillas</a>
                        </div>
                    </div>
                    <div class="  text-center   py-12 lg:py-10 text-gray-600   ">
                        <div class="flex justify-center items-center mb-4">
                            <div class="bg-gray-600 w-20 h-20 flex justify-center items-center rounded-lg">
                                <i class="fas fa-file-alt text-white fa-3x"></i>
                            </div>
                        </div>
                        <p class="m-0  font-black text-2xl lg:text-3xl ">Web informativa Online</p>
                        <p class="text-base font-medium pt-4">Armamos tu web para que puedas contar quién eres, qué
                            hacés y toda tu experiencia profesional. Además te damos la posibilidad vender tus servicios
                            directamente y olvidarte de estar armando presupuestos y explicando siempre lo mismo. Podrás
                            poneer un precio a cada taller que realices</p>
                        <div class="flex justify-center mt-4">
                            <a href="/categories/moda"
                                class="bg-gray-600 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-800 hover:font-bold">Ver
                                plantillas</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="md:hidden">
        <div class="container">
            <div class="text-center  py-12 lg:pt-10">
                <p class="m-0  font-black text-2xl lg:text-3xl ">¿Qué tipo de sitio web necesitas?</p>
                <p class="text-base font-medium pt-2">¡Selecciona el tipo de web perfecto para tu negocio y
                    trabajemos!</p>
            </div>
            <div class=" grid grid-cols-1 md:grid-cols-2  gap-4 md:gap-6 lg:gap-8 xl:gap-12 z-20 ">
                <div class="  text-center   py-12 lg:py-10 text-gray-600  ">
                    <div class="flex justify-center items-center mb-4">
                        <div class="bg-gray-600 w-20 h-20 flex justify-center items-center rounded-lg">
                            <i class="fas fa-dumpster-fire text-white fa-3x"></i>
                        </div>
                    </div>
                    <p class="m-0  font-black text-2xl lg:text-3xl ">Web Ecommerce Online</p>
                    <p class="text-base font-medium pt-4">Nuestros paquetes incluyen todo lo necesario para que
                        puedas enfocarte en lo que haces mejor: impulsar tu negocio. Tenemos preparadas páginas
                        pensadas para
                        que no sobre ni falte nada. Tiendas online con plataformas de cobro y envíos. Automatizá y
                        ordená las ventas 24×7!</p>
                    <div class="flex justify-center mt-4">
                        <a href="/categories/moda"
                            class="bg-gray-600 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-800 hover:font-bold">Ver
                            plantillas</a>
                    </div>
                </div>
                <div class="  text-center   py-12 lg:py-10 text-gray-600   ">
                    <div class="flex justify-center items-center mb-4">
                        <div class="bg-gray-600 w-20 h-20 flex justify-center items-center rounded-lg">
                            <i class="fas fa-file-alt text-white fa-3x"></i>
                        </div>
                    </div>
                    <p class="m-0  font-black text-2xl lg:text-3xl ">Web informativa Online</p>
                    <p class="text-base font-medium pt-4">Armamos tu web para que puedas contar quién eres, qué
                        hacés y toda tu experiencia profesional. Además te damos la posibilidad vender tus servicios
                        directamente y olvidarte de estar armando presupuestos y explicando siempre lo mismo. Podrás
                        poneer un precio a cada taller que realices</p>
                    <div class="flex justify-center mt-4">
                        <a href="/categories/moda"
                            class="bg-gray-600 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-800 hover:font-bold">Ver
                            plantillas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="relative container bg-gray-100 py-12 my-8">
        <div class="catalogslide">
            <div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-8 items-center ">
                    <div>
                        <div>
                            <img src="{{ asset('img/home/sli2.jpg') }}" class="w-full rounded-md" alt="">
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="mb-2 md:mb-6 text-gray-600 font-bold text-lg">Hosting (Plan empresarial)</h3>
                        <p class="mb-8 px-6 md:px-0 text-gray-700 text-base font-medium">Empieza este año con un paquete especial que tenemos para ti, e inicies una nueva tienda virtual adquiriendo nuestro hosting de alta disponibilidad.</p>
                        <a
                            class="bg-gray-600 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-800 hover:font-bold">Ver Planes</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-8 items-center ">
                    <div>
                        <div>
                            <img src="{{ asset('img/home/sli3.jpg') }}" class="w-full rounded-md" alt="">
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="mb-2 md:mb-6 text-gray-600 font-bold text-lg">Dominio Personalizado</h3>
                        <p class="mb-8 px-6 md:px-0 text-gray-700 text-base font-medium">
                            Promueve la imagen de tu marca o empresa en Internet y aporta un valor extra. Permite un mayor crecimiento de su negocio o proyecto, gracias al incremento de tráfico desde los buscadores y tambien facilita la fidelización de sus clientes y la diferenciación con sus competidores del sector.
                        </p>
                        <a
                            class="bg-gray-600 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-800 hover:font-bold">Ver Dominios</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-8 items-center ">
                    <div>
                        <div>
                            <img src="{{ asset('img/home/sli1.jpg') }}" class="w-full rounded-md" alt="">
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="mb-2 md:mb-6 text-gray-600 font-bold text-lg">Escoge tu plantilla</h3>
                        <p class="mb-8 px-6 md:px-0 text-gray-700 text-base font-medium">Un suave bizcochuelo de vainilla o
                            chocolate, embebido en nuestra deliciosa preparación de tres leches, rellena y cubierta de
                            chantilly y envuelta en una deliciosa corona de chocolate bitter. Pídela desde su versión
                            mini (10 porciones)
                        </p>
                        <a
                            class="bg-gray-600 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-800 hover:font-bold">Ver Plantillas</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-8 items-center ">
                    <div>
                        <div>
                            <img src="{{ asset('img/home/sli1.jpg') }}" class="w-full rounded-md" alt="">
                        </div>
                    </div>
                    <div class="text-center">
                        <h3 class="mb-2 md:mb-6 text-gray-600 font-bold text-lg">Contáctanos o Escríbenos</h3>
                        <p class="mb-8 px-6 md:px-0 text-gray-700 text-base font-medium">Si tienes alguna duda en como adquirir algunos de nuestros servicios, ¡Llámanos! será un gusto atenderte y resolver todas tus dudas
                        </p>
                        <a
                            class="bg-gray-600 text-white font-medium px-4 py-2 rounded-md hover:bg-gray-800 hover:font-bold">Escríbenos</a>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="btn arrow_prev1 absolute prev11 p-4 rounded-lg bg-white opacity-50 hover:bg-purple-500 hover:opacity-75 transition-all ease-in">
            <i class="fas fa-chevron-left text-xl hover:text-white font-bold"></i>
        </div>
        <div
            class="btn arrow_next1 absolute prev21 p-4 rounded-lg bg-white opacity-50 hover:bg-purple-500 hover:opacity-75 transition-all ease-in">
            <i class="fas fa-chevron-right text-xl hover:text-white font-bold"></i>
        </div>
    </div>

    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8 items-center">
            <div>
                <img src="{{asset('iconos/icon6.png')}}" alt="">
            </div>
            <div>
                <div>
                    <div class="flex  items-start my-2">
                        <div class="w-full  my-1">
                            <ul class="flex flex-col">
                                <li class="bg-white my-2 shadow-lg" x-data="accordion(1)">
                                    <h2 @click="handleClick()"
                                        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                        <span>¿Cómo comienzo?</span>
                                        <svg :class="handleRotate()"
                                            class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                            </path>
                                        </svg>
                                    </h2>
                                    <div x-ref="tab" :style="handleToggle()"
                                        class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all">
                                        <p class="p-3 text-gray-400">
                                            Al iniciar un proyecto solicitamos 3 datos:<br>
                                        </p>
                                        <ul class="p-3 text-gray-400">
                                            <li>* Logotipo de la empresa</li>
                                            <li>* Fotos de la empresa con sus trabajadores entre otros</li>
                                            <li>* Sus indicaciones de como necesita la web o un link de referencia, esto nos ayuda a conocer sus gusto de diseño que quiere para su web.</li>
                                            <li>* Información principal de la empresa</li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="bg-white my-2 shadow-lg" x-data="accordion(2)">
                                    <h2 @click="handleClick()"
                                        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                        <span>¿Cuál es la forma de pago?</span>
                                        <svg :class="handleRotate()"
                                            class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                            </path>
                                        </svg>
                                    </h2>
                                    <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                                        x-ref="tab" :style="handleToggle()">
                                        <p class="p-3 text-gray-900">
                                            El tiempo de entrega de la web es en 7, 15 o 30 días dependiendo la complejidad del sitio web.
                                          <br><br>  Para iniciar su proyecto se realiza el pago del 50% del monto ó tambien puede cancelar el total de este, nosotros cumpliremos con nuestro compromiso para darte una Página web Ecommerce de calidad.
                                        </p>
                                    </div>
                                </li>
                                <li class="bg-white my-2 shadow-lg" x-data="accordion(3)">
                                    <h2 @click="handleClick()"
                                        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                        <span>¿Podré administrar mi sitio web?</span>
                                        <svg :class="handleRotate()"
                                            class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                            </path>
                                        </svg>
                                    </h2>
                                    <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                                        x-ref="tab" :style="handleToggle()">
                                        <p class="p-3 text-gray-900">
                                            ¡Sí!,  <br><br>
                                           - Tendras acceso al panel de control del sitio web para que puedas gestionar fotos, textos y mucho más.
                                          <br><br> - También puedes contar con nosotros para actualizaciones y soporte técnico. <br><br> - Para solicitar modificaciones en tu sitio o para consultas escribenos a atencion@letika.com.pe .
                                        </p>
                                    </div>
                                </li>
                                <li class="bg-white my-2 shadow-lg" x-data="accordion(4)">
                                    <h2 @click="handleClick()"
                                        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                        <span>¿Cuál es el costo mensual?</span>
                                        <svg :class="handleRotate()"
                                            class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                            </path>
                                        </svg>
                                    </h2>
                                    <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                                        x-ref="tab" :style="handleToggle()">
                                        <p class="p-3 text-gray-900">
                                            - No hay costo mensual!! No existen tampoco las comisiones por ventas ni los costos de mantenimiento. <br><br>
                                            - El costo de la web es un pago único y tu web pasa a tu pertenencia en caso desees migrar a otro proveedor.
                                            <br><br>
                                            - Nosotros cobramos solamente la renovación de dominio y hosting anual para mantener tu web, dominio y hosting activo.
                                            <br><br>
                                            - Te notificaremos con un mes de anticipacion del vencimiento del mismo.
                                        </p>
                                    </div>
                                </li>
                               
                                <li class="bg-white my-2 shadow-lg" x-data="accordion(6)">
                                    <h2 @click="handleClick()"
                                        class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                                        <span>¿Cuáles son las diferencias entre un dominio .com y .com.pe?</span>
                                        <svg :class="handleRotate()"
                                            class="fill-current text-purple-700 h-6 w-6 transform transition-transform duration-500"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10">
                                            </path>
                                        </svg>
                                    </h2>
                                    <div class="border-l-2 border-purple-600 overflow-hidden max-h-0 duration-500 transition-all"
                                        x-ref="tab" :style="handleToggle()">
                                        <p class="p-3 text-gray-900">
                                            - Hosting y dominio son términos complementarios a la hora de alojar un sitio en
                                            Internet, es decir, para subir un sitio a la web necesariamente debemos tener un
                                            hosting y un dominio. <br><br>
    
                                            - Ahora, el significado de dominio es el nombre con el que se identificará el
                                            sitio, es decir, será el nombre de la dirección de nuestro sitio en Internet,
                                            por ejemplo el dominio de este sitio es diferencia-entre.com. Este dominio debe
                                            comprarse y eso te da derecho a hacer uso exclusivo del dominio, el cual puede
                                            ser .com, .pe, .org, .net, etc. <br><br>
    
                                            - Por otra parte, el hosting es imprescindible a la hora de publicar un sitio web
                                            en Internet. Esto es porque el hosting es el lugar donde se aloja nuestro sitio
                                            web, es decir, donde se guardan y se actualizan los archivos y el diseño del
                                            sitio.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="my-6 lg:my-10 xl:my-16">
            <p class="m-0  font-black text-2xl lg:text-3xl text-center">NUESTRO SERVICIO ONLINE INCLUYE:</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6 lg:gap-8">
            <div class="text-center">
                <div>
                    <img src="{{ asset('iconos/onli1.png') }}" alt="" class="w-20 inline-block">
                </div>
                <p class="font-bold pt-4 text-gray-800">SEGURIDAD</p>
                <P class="text-sm pt-4 text-gray-400">Incluye un Certificado SSL y se muestre como sitio seguro.</P>
            </div>
            <div class="text-center">
                <div>
                    <img src="{{ asset('iconos/onli2.png') }}" alt="" class="w-20 inline-block">
                </div>
                <p class="font-bold pt-4 text-gray-800">CORREO CORPORATIVO</p>
                <P class="text-sm pt-4 text-gray-400">Personaliza tus correos</P>
            </div>
            <div class="text-center">
                <div>
                    <img src="{{ asset('iconos/onli3.png') }}" alt="" class="w-20 inline-block">
                </div>
                <p class="font-bold pt-4 text-gray-800">CONTROL DE STOCK</p>
                <P class="text-sm pt-4 text-gray-400">Administra la cantidad de productos que necesites sin limite</P>
            </div>
            <div class="text-center">
                <div>
                    <img src="{{ asset('iconos/onli4.png') }}" alt="" class="w-20 inline-block">
                </div>
                <p class="font-bold pt-4 text-gray-800">SOPORTE TÉCNICO</p>
                <P class="text-sm pt-4 text-gray-400">Servicio de asistencia todo el año</P>
            </div>
            <div class="text-center">
                <div>
                    <img src="{{ asset('iconos/onli5.png') }}" alt="" class="w-20 inline-block">
                </div>
                <p class="font-bold pt-4 text-gray-800">MÉTODOS DE ENVÍO</p>
                <P class="text-sm pt-4 text-gray-400">Personalizamos el metodo de envío y costo</P>
            </div>
            <div class="text-center">
                <div>
                    <img src="{{ asset('iconos/onli6.png') }}" alt="" class="w-20 inline-block">
                </div>
                <p class="font-bold pt-4 text-gray-800">CAPACITACIÓN</p>
                <P class="text-sm pt-4 text-gray-400">Te ayudaremos a gestionar tu tienda</P>
            </div>
        </div>
    </div>



    @push('script')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('accordion', {
                tab: 0
            });

            Alpine.data('accordion', (idx) => ({
                init() {
                    this.idx = idx;
                },
                idx: -1,
                handleClick() {
                    this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
                },
                handleRotate() {
                    return this.$store.accordion.tab === this.idx ? 'rotate-180' : '';
                },
                handleToggle() {
                    return this.$store.accordion.tab === this.idx ?
                        `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                }
            }));
        })
    </script>
        <script>
            Livewire.on('glider', function(id) {

                new Glider(document.querySelector('.glider-' + id), {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    draggable: true,
                    dots: '.glider-' + id + '~ .dots',
                    arrows: {
                        prev: '.glider-' + id + '~ .glider-prev',
                        next: '.glider-' + id + '~ .glider-next'
                    },
                    responsive: [{
                            breakpoint: 640,
                            settings: {
                                slidesToShow: 2.5,
                                slidesToScroll: 2,
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 3.5,
                                slidesToScroll: 3,
                            }
                        },

                        {
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 4.5,
                                slidesToScroll: 4,
                            }
                        },

                        {
                            breakpoint: 1280,
                            settings: {
                                slidesToShow: 5.5,
                                slidesToScroll: 5,
                            }
                        },
                    ]
                });

            });
        </script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script>
            $('.cardss').slick({
                prevArrow: '.arrow_prev',
                nextArrow: '.arrow_next',
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                Margin: '50px',
                autoplaySpeed: 5000,
                dotsClass: 'slick-dots',
                infinite: true,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,

                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        </script>
        <script>
            $('.catalogslide').slick({
                prevArrow: '.arrow_prev1',
                nextArrow: '.arrow_next1',
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                Margin: '50px',
                autoplaySpeed: 5000,
                dotsClass: 'slick-dots',
                infinite: true,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,

                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        </script>
    @endpush

</x-app-layout>
