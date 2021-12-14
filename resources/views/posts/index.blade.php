<x-app-layout>
    <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center"
        style="background-image: url('{{ asset('dental/contacto/slide.jpg') }}')">
        <div class="absolute bg-black bg-opacity-30 w-full h-full">

        </div>
        <div class="mt-8 absolute text-center max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-40 text-white  lr">
            <p class="m-0 shdot-text text-2xl">Revisa información importante para tu negocio y la transformación digital.</p>
            <p class="m-0 shdot-text font-black text-2xl lg:text-6xl xl:text-8xl">Noticias</p>

        </div>
    </div>

    <div class="container mt-4 md:mt-10 xl:mt-12">
        <div class="grid grid-cols-2 gap-8">
            @foreach ($posts as $post)
                <article class="grid grid-cols-2 gap-4 shadow-xl @if($loop->first) col-span-2 @endif ">
                    <img src="{{Storage::url($post->image->url)}}" class="w-full h-full object-cover object-center" alt="">
                    <div >
                        <h1 class="font-bold text-gray-600 px-2 py-2">@if($loop->first) {{Str::limit($post->name, 500)}} @else {{Str::limit($post->name, 30)}}  @endif  </h1>
                        <p class="px-2">@if($loop->first) {{Str::limit($post->extract, 500)}} @else {{Str::limit($post->extract, 180)}}  @endif </p>
                        <div class="text-center py-4">
                            <a href="{{route('posts.show', $post)}}" class="text-orange-500 font-semibold">Ver más</a>
                        </div>
                    </div>
                   
                </article>
            @endforeach
        </div>
        <div class="mt-4">
            {{$posts->links()}}
        </div>
    </div>

</x-app-layout>