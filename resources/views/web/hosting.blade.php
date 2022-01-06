<x-app-layout>
    <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
        style="background-image: url('{{ asset('plantilla/slide4.jpg') }}')">
        <div class="absolute bg-black bg-opacity-30 w-full h-full">

        </div>
        <div class="mt-8 absolute text-center max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-40 text-white  lr">
            <p class="m-0 shdot-text text-2xl">Tenemos un servidor de alta disponibilidad.</p>
            <p class="m-0 shdot-text font-black text-2xl lg:text-6xl xl:text-8xl">Nuestros planes</p>
            <p class="m-0 shdot-text font-black text-2xl lg:text-6xl xl:text-8xl">de Hosting</p>
        </div>
    </div>
    <div class="container mt-4 md:10 lg:mt-14">
        <div class="flex items-center justify-center text-3xl text-orange-700 font-bold">
            <img src="{{asset('iconos/peru.png')}}" alt="">
            <p class="ml-2">Hosting Perú</p>
        </div>
        <div class="mt-4 md:10 lg:mt-14">
            <p class="text-gray-700 px-0 md:px-6 font-medium">
                Proveemos el mejor hosting en Perú, con increíbles características y tecnología de última generación sin dejar de ser el más económico y competitivo del mercado. Nuestro personal y soporte técnico siempre estará atento y dispuesto a ofrecer un excelente acompañamiento para garantizar su satisfacción. ¡Seleccione el plan ideal según sus necesidades y presupuesto!
            </p>
        </div>
    </div>

    <div class="container mt-4 md:10 lg:mt-14">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-8 j">
            <div class="border-2 border-orange-700 rounded-md ">
                <div class="px-6 flex justify-center items-center h-16 text-2xl text-black font-bold">
                    PLAN DE HOSTING
                </div>
                <div class="bg-orange-700 text-white font-bold flex justify-center items-center h-20 text-2xl ">
                    <p>EMPRESARIAL <br>S/ <span>180</span> <span class="text-base">anual</span> </p> 
                </div>
                <div class="px-6">
                </div>
                <div>
                    <ul class="px-6">
                        <li class="pb-2 pt-2"><i class="fab fa-cpanel"></i> Panel de control administrativo</li>
                        <li class="pb-2"><i class="far fa-hdd"></i> 10 GB Espacio <span 
                            class="lg:bg-black lg:text-white lg:px-4 lg:py-2 rounded-md">SSD <span class="hidden xl:inline"> NVMe</span></span></li>
                        <li class="pb-2"><i class="fas fa-chart-area"></i> 200 GB de Tráfico / mes</li>
                        <li class="pb-2"><i class="far fa-envelope"></i> 10 Cuentas E-mail(enlace con Gmail)</li>
                        <li class="pb-2"><i class="fas fa-database"></i> 1 Base de datos</li>
                        <li class="pb-2"><i class="fas fa-globe-americas"></i> 1 Dominio permitido</li>
                        <li class="pb-2"><i class="fab fa-wordpress"></i> WordPress / Joomla / Otros</li>
                        <li class="pb-2"><i class="fas fa-rocket"></i> LiteSpeed + LSCache</li>
                        <li class="pb-2"><i class="fas fa-shield-alt"></i> Seguridad Imunify360</li>
                        <li class="pb-2"><i class="fab fa-expeditedssl"></i> SSL gratis (https://)</li>
                        <li class="pb-4"><i class="fas fa-shield-alt"></i> Soporte instantáneo</li>
                    </ul>
                </div>
            </div>
            <div class="border-2 border-orange-700 rounded-md ">
                <div class="px-6 flex justify-center items-center h-16 text-2xl text-black font-bold">
                    PLAN DE HOSTING
                </div>
                <div class="bg-orange-700 text-white font-bold flex justify-center items-center h-20 text-2xl">
                    <p>CORPORATIVO <br>S/ <span>330</span> <span class="text-base">anual</span> </p> 
                </div>
                <div class="px-6">
                </div>
                <div>
                    <ul class="px-6">
                        <li class="pb-2 pt-2"><i class="fab fa-cpanel"></i> Panel de control administrativo</li>
                        <li class="pb-2"><i class="far fa-hdd"></i> 30 GB Espacio <span class="lg:bg-black lg:text-white lg:px-4 lg:py-2 rounded-md">SSD <span class="hidden xl:inline"> NVMe</span></span></li>
                        <li class="pb-2"><i class="fas fa-chart-area"></i> 300 GB de Tráfico / mes</li>
                        <li class="pb-2"><i class="far fa-envelope"></i> 20 Cuentas E-mail(enlace con Gmail)</li>
                        <li class="pb-2"><i class="fas fa-database"></i> 5 Base de datos</li>
                        <li class="pb-2"><i class="fas fa-globe-americas"></i> 2 Dominio permitido</li>
                        <li class="pb-2"><i class="fab fa-wordpress"></i> WordPress / Joomla / Otros</li>
                        <li class="pb-2"><i class="fas fa-rocket"></i> LiteSpeed + LSCache</li>
                        <li class="pb-2"><i class="fas fa-shield-alt"></i> Seguridad Imunify360</li>
                        <li class="pb-2"><i class="fab fa-expeditedssl"></i> SSL gratis (https://)</li>
                        <li class="pb-4"><i class="fas fa-shield-alt"></i> Soporte instantáneo</li>
                    </ul>
                </div>
            </div>
            <div class="border-2 border-orange-700 rounded-md ">
                <div class="px-6 flex justify-center items-center h-16 text-2xl text-black font-bold">
                    PLAN DE HOSTING
                </div>
                <div class="bg-orange-700 text-white font-bold flex justify-center items-center h-20 text-2xl">
                    <p>PREMIUM <br>S/ <span>600</span> <span class="text-base">anual</span> </p> 
                </div>
                <div class="px-6">
                </div>
                <div>
                    <ul class="px-6">
                        <li class="pb-2 pt-2"><i class="fab fa-cpanel"></i> Panel de control administrativo</li>
                        <li class="pb-2"><i class="far fa-hdd"></i> 50 GB Espacio <span class="lg:bg-black lg:text-white lg:px-4 lg:py-2 rounded-md">SSD <span class="hidden xl:inline"> NVMe</span></span></li>
                        <li class="pb-2"><i class="fas fa-chart-area"></i> 500 GB de Tráfico / mes</li>
                        <li class="pb-2"><i class="far fa-envelope"></i> 50 Cuentas E-mail(enlace con Gmail)</li>
                        <li class="pb-2"><i class="fas fa-database"></i> 10 Base de datos</li>
                        <li class="pb-2"><i class="fas fa-globe-americas"></i> 3 Dominio permitido</li>
                        <li class="pb-2"><i class="fab fa-wordpress"></i> WordPress / Joomla / Otros</li>
                        <li class="pb-2"><i class="fas fa-rocket"></i> LiteSpeed + LSCache</li>
                        <li class="pb-2"><i class="fas fa-shield-alt"></i> Seguridad Imunify360</li>
                        <li class="pb-2"><i class="fab fa-expeditedssl"></i> SSL gratis (https://)</li>
                        <li class="pb-4"><i class="fas fa-shield-alt"></i> Soporte instantáneo</li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>

    <div class="container mt-4 md:10 lg:mt-14 px-2 py-2 bg-blue-100 rounded-md  justify-center items-center">
      
        <div class="content-center items-center justify-center text-blue-600"> 
            <p>* La renovacion de hosting se realiza anual</p>
            <p>* Todos los planes cuentan con acceso al Cpanel, Soporte PHP y Soporte Técnico.</p>
            <p>* Nuestros planes de hosting no incluye IGV</p>
        </div>

    </div>

    <div class="container mt-4 md:10 lg:mt-14">
        <div class="text-center text-3xl text-orange-700 font-bold">
            <p>¿Por qué elegirnos?</p>
        </div>
        <div class="pb-6 pt-6">
            <h1 class="text-black font-semibold text-lg">Disponibilidad web hosting</h1>
            <p class="text-gray-700">Cada uno de nuestros usuarios cuenta con plena tranquilidad debido a que nuestros servidores se encuentran el 99.99% del tiempo en línea. Este es uno de los factores más importantes al momento de contratar un servicio de hospedaje web y aquí lo tiene.</p>
        </div>
        <div class="pb-6">
            <h1 class="text-black font-semibold text-lg">Panel de control cPanel (Hosting)</h1>
            <p class="text-gray-700">Todos nuestros planes hosting cuentan con panel de control cPanel, conocido como el mejor panel de administración de servicios de alojamiento web, su interfaz es muy amigable y de fácil uso por lo cual, hace que la experiencia sea práctica y ágil para todo tipo de clientes sin importar si cuenta con conocimientos previos o algún tipo de experiencia.</p>
        </div>
        <div class="pb-6">
            <h1 class="text-black font-semibold text-lg">Su hosting y dominio en 60 minutos</h1>
            <p class="text-gray-700">Una vez sea realizado el pago, sus servicios estarán activos en cuestión de minutos.</p>
        </div>
        <div class="pb-6">
            <h1 class="text-black font-semibold text-lg">Seguridad en nuestros planes hosting</h1>
            <p class="text-gray-700">Nuestra empresa certificada por Digicert (certificados SSL de alta calidad), compañía comprometida a crear confianza en Internet, ofreciendo los niveles más altos de encriptación, autenticación, protección y, sobre todo, seguridad en línea. Por suerte, usted puede asegurarse de esta certificación a través del ícono de candado que se antepone a nuestra URL, lo cual, nos hace ser una de las pocas empresas peruanas certificadas, así que, puede estar tranquilo y seguro al momento de realizar sus compras en línea con nosotros.</p>
        </div>
        <div class="pb-6">
            <h1 class="text-black font-semibold text-lg">Soporte técnico</h1>
            <p class="text-gray-700">Nuestros clientes pueden localizarnos de manera inmediata con el fin de recibir atención en caso de algún inconveniente o inquietud acerca de los servicios que proveemos. ¡Para nuestro equipo técnico será un gusto ayudarlo!</p>
        </div>

    </div>

</x-app-layout>