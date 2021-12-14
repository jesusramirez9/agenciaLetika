<x-app-layout>

    <div class="container mt-4 md:mt-10 md:mb-10 xl:mt-16">
        <h1 class="text-xl xl:text-2xl text-gray-600 font-bold mb-4  px-6 md:px-4">{{ $post->name }}</h1>
        <div class="text-base md:text-lg text-gray-500 mb-6 md:mb-4 text-justify px-6 md:px-4">
            {{ $post->extract }}
        </div>
        <div class="grid grid-cols-1  lg:grid-cols-3 gap-6">

            {{--Contenido principal--}}
            <div class="col-span-2">
                <figure>
                    <img src="{{ Storage::url($post->image->url) }}" class="w-full h-80 object-cover object-center"
                        alt="">
                </figure>

                <div class="text-base text-gray-500 mt-6 md:mt-4 text-justify px-6 md:px-4">
                    {{ $post->body }}
                </div>
                <div class=" mt-8  text-end justify-end flex">
           
                    <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" href="{{route('posts.index')}}">
                        Regresar a noticias
                    </a>
                </div>
            </div>

            {{--Contenido relacionado--}}
            <aside>
                <ul class="pl-6 md:pl-4">
                    @foreach ($similares as $similar)
                        <li class="mb-4 ">
                                <a class="flex" href="{{route('posts.show', $similar)}}">
                                    <img class="w-28 h-20 object-cover object-center" src="{{Storage::url($similar->image->url)}}" alt="">
                                    <span class="ml-2 text-gray-600 text-sm ">{{$similar->name}}</span>
                                </a>
                        </li>
                    @endforeach
                </ul>
            </aside>
        </div>
      
    </div>


</x-app-layout>