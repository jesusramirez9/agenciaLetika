<?php

namespace App\Http\Livewire\Admin;

use App\Models\BlogCategory;
use Livewire\Component;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;
class CreateBlogCategory extends Component
{
    use LivewireAlert;

    public  $rand, $categories, $category;

    protected $listeners = ['delete'];

    public $createForm = [
       
        'name' => null,
        'slug' => null
    ];

    public $editForm = [
        'open' => false,
        'name' => null,
        'slug' => null,
    ];

    protected $rules = [
        'createForm.name' => 'required',
        'createForm.slug' => 'required|unique:categories,slug',
    ];

    protected $validationAttributes = [
        'createForm.name' => 'nombre',
        'createForm.slug' => 'slug',
        'editForm.name' => 'nombre',
        'editForm.slug' => 'slug',
    ];

    public function mount()
    {

        $this->getBlogCategories();
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
    


    public function getBlogCategories(){
        $this->categories = BlogCategory::all();
    }

    public function save()
    {
        $this->validate();

       $category = BlogCategory::create([
            'name' => $this->createForm['name'],
            'slug' => $this->createForm['slug']
        ]);

        $this->rand= rand();
        $this->reset('createForm');
        $this->getBlogCategories();
        $this->emit('saved');
    }

    public function edit(BlogCategory $category){

        $this->resetValidation();


        $this->category = $category;
        $this->editForm['open'] = true;
        $this->editForm['name'] = $category->name;
        $this->editForm['slug'] = $category->slug;
    }

    public function update(){
        $rules=[
                'editForm.name' => 'required',
                'editForm.slug' => 'required|unique:categories,slug,'.$this->category->id,
        ];


        $this->validate($rules);

      
        $this->category->update($this->editForm);
   
        $this->reset(['editForm']);
        $this->getBlogCategories();

    }

    public function delete(BlogCategory $category ){
        $category->delete();
        $this->alert('success', 'Producto agregado');
        $this->getBlogCategories();

    }
    public function render()
    {
        return view('livewire.admin.create-blog-category')->layout('layouts.admin');
    }
}
