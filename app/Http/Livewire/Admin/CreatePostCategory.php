<?php

namespace App\Http\Livewire\Admin;

use App\Models\BlogPost;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class CreatePostCategory extends Component
{
    use WithFileUploads;

    public  $rand, $posts, $post;

    protected $listeners = ['delete'];

    public $createForm = [
       
        'name' => null,
        'slug' => null,
        'extract' => null,
        'body' => null,
        'image' => null
    ];

    public $editForm = [
        'name' => null,
        'slug' => null,
        'extract' => null,
        'body' => null,
        'image' => null
    ];

    public $editImage;

    protected $rules = [
        'createForm.name' => 'required',
        'createForm.slug' => 'required|unique:posts,slug',
        'createForm.extract' => 'required',
        'createForm.body' => 'required',
        'createForm.image' => 'required|image|max:1024',

    ];

    protected $validationAttributes = [
        'createForm.name' => 'nombre',
        'createForm.slug' => 'slug',
        'createForm.extract' => 'extracto',
        'createForm.body' => 'cuerpo',
        'createForm.image' => 'imagen',

        'editForm.name' => 'nombre',
        'editForm.slug' => 'slug',
        'editForm.extract' => 'extracto',
        'editForm.body' => 'cuerpo',
        'editImage' => 'imagen',


    ];

    public function mount()
    {
        $this->getPostsCategories();
        $this->rand = rand();
    }

    public function updatedCreateFormName($value)
    {
        $this->createForm['slug'] = Str::slug($value);
    }
    public function updatedEditFormName($value)
    {
        $this->editForm['slug'] = Str::slug($value);
    }

    public function getPostsCategories(){
        $this->posts = BlogPost::all();
    }

    public function save()
    {
        $this->validate();

        $image =  $this->createForm['image']->store('posts');

       $post = BlogPost::create([
            'name' => $this->createForm['name'],
            'slug' => $this->createForm['slug'],
            'extract' => $this->createForm['extract'],
            'body' => $this->createForm['body'],
            'image' => $image

        ]);

        $this->rand= rand();
        $this->reset('createForm');
        $this->getPostsCategories();
        $this->emit('saved');
    }

    public function edit(BlogPost $post){

     
        $this->reset(['editImage']);
        $this->resetValidation();


        $this->post = $post;
        $this->editForm['open'] = true;
        $this->editForm['name'] = $post->name;
        $this->editForm['slug'] = $post->slug;
        $this->editForm['extract'] = $post->extract;
        $this->editForm['body'] = $post->body;
        $this->editForm['image'] = $post->image;


    }

    public function update(){
        $rules=[
                'editForm.name' => 'required',
                'editForm.slug' => 'required|unique:posts,slug,'.$this->post->id,
                'editForm.extract' => 'required',
                'editForm.body' => 'required',
        ];

        if($this->editImage){
            $rules['editImage'] = 'image|max:1024';
        }

        $this->validate($rules);

        if ($this->editImage) {
            Storage::delete( $this->editForm['image']);
            $this->editForm['image'] = $this->editImage->store('public/posts');
        }
        $this->post->update($this->editForm);

        $this->reset(['editForm', 'editImage']);
        $this->getPostsCategories();

    }

    public function delete(BlogPost $post ){
        $post->delete();
        $this->getPostsCategories();

    }

    public function render()
    {
        return view('livewire.admin.create-post-category')->layout('layouts.admin');
    }
}
