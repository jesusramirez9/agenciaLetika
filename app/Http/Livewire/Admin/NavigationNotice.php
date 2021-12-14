<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class NavigationNotice extends Component
{
    public function render()
    {
        return view('livewire.admin.navigation-notice')->layout('layouts.admin');
    }
}
