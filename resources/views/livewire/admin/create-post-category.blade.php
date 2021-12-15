<div>
    <x-jet-form-section submit="save" class="mb-6">
        <x-slot name="title">
            Crear nuevo Post
        </x-slot>
        <x-slot name="description">
            Complete la información necesaria para poder crear un nuevo Post
        </x-slot>

        <x-slot name="form">
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label>
                    Nombre
                </x-jet-label>
                <x-jet-input wire:model="createForm.name" type="text" class="w-full mt-1">

                </x-jet-input>
                <x-jet-input-error for="createForm.name" />
            </div>
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label>
                    Slug
                </x-jet-label>
                <x-jet-input disabled wire:model="createForm.slug" type="text" class="w-full mt-1 bg-gray-100">

                </x-jet-input>
                <x-jet-input-error for="createForm.slug" />
            </div>
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label>
                    Extract
                </x-jet-label>
                <x-jet-input wire:model="createForm.extract" type="text" class="w-full mt-1">

                </x-jet-input>
                <x-jet-input-error for="createForm.extract" />
            </div>
            <div class="col-span-6 sm:col-span-4" >
                <div wire:ignore>
                    <x-jet-label value="Descripción" />
                    <textarea wire:model="createForm.body"
                        class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        cols="30" rows="5" x-data x-init="
                ClassicEditor.create( $refs.miEditor )
                .then(function(editor){
                    editor.model.document.on('change:data',() => {
                        @this.set('createForm.body', editor.getData())
                    })
                })
                .catch( error => {
                    console.error( error );
                } );" x-ref="miEditor"></textarea>
                </div>
                <x-jet-input-error for="createForm.body" />
        
            </div>
            



            <div class="col-span-6 sm:col-span-4">
                <x-jet-label>
                    Imagen
                </x-jet-label>
                <input wire:model="createForm.image" accept="image/*" class="mt-1" type="file" name="file"
                    id="{{ $rand }}">
                <x-jet-input-error for="createForm.image" />
            </div>

        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                Post creado
            </x-jet-action-message>
            <x-jet-button>
                Agregar
            </x-jet-button>
        </x-slot>

    </x-jet-form-section>

    <x-jet-action-section>
        <x-slot name="title">
            Lista de Posts
        </x-slot>
        <x-slot name="description">
            Aquí encontraras todos los Posts
        </x-slot>
        <x-slot name="content">
            <table class="text-gray-600">
                <thead class="border-b border-gray-300">
                    <tr class="text-left">
                        <th class="py-2 w-full">Nombre</th>
                        <th class="py-2">Acción</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-300">
                    @foreach ($posts as $post)
                        <tr>
                            <td class="py-2">
                              
                                <a class="uppercase underline hover:text-blue-600">
                                    {{ $post->name }}
                                </a>
                            </td>
                            <td class="py-2">
                                <div class="flex divide-x divide-gray-300 font-semibold">
                                    <a class="pr-2 hover:text-blue-600 cursor-pointer"
                                        wire:click="edit('{{ $post->slug }}')">Editar</a>
                                    <a class="pl-2 hover:text-red-600 cursor-pointer"
                                        wire:click="delete('{{ $post->slug }}')">Eliminar</a>

                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </x-slot>

    </x-jet-action-section>

    <x-jet-dialog-modal wire:model="editForm.open">
        <x-slot name="title">
            Editar Post
        </x-slot>
        <x-slot name="content">
            <div class="space-y-3">

                <div>
                    @if ($editImage)
                        <img class="w-full h-64 object-cover object-center" src="{{ $editImage->temporaryUrl() }}"
                            alt="">

                    @else
                        <img class="w-full h-64 object-cover object-center" src="{{Storage::url($editForm['image'])}}" alt="">
                    @endif
                </div>

                <div>
                    <x-jet-label>
                        Nombre
                    </x-jet-label>
                    <x-jet-input wire:model="editForm.name" type="text" class="w-full mt-1">

                    </x-jet-input>
                    <x-jet-input-error for="editForm.name" />
                </div>
                <div>
                    <x-jet-label>
                        Slug
                    </x-jet-label>
                    <x-jet-input disabled wire:model="editForm.slug" type="text" class="w-full mt-1 bg-gray-100">

                    </x-jet-input>
                    <x-jet-input-error for="editForm.slug" />
                </div>
              
                
                <div>
                    <x-jet-label>
                        Imagen
                    </x-jet-label>
                    <input wire:model="editImage" accept="image/*" class="mt-1" type="file" name="file"
                        id="{{ $rand }}">
                    <x-jet-input-error for="editImage" />
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-jet-danger-button wire:click="update" wire:loading.attr="disabled" wire:target="editImage, update">
                Actualizar
            </x-jet-danger-button>
        </x-slot>


    </x-jet-dialog-modal>
</div>
