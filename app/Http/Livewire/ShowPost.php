<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPost extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public function render()
    {
        return view('livewire.show-post', [
            'posts' => Post::paginate(8)
        ]);
    }
}
