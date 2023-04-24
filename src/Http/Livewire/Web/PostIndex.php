<?php

namespace FireAZ\News\Http\Livewire\Web;

use FireAZ\News\Models\Post;
use FireAZ\Reojs\ArrayWireable;
use FireAZ\Reojs\Component;

class PostIndex extends Component
{
    public ArrayWireable $post;

    public function mount($slug)
    {
        $this->post = ArrayWireable::fromLivewire(Post::where('slug', $slug)->first());
    }
    public function render()
    {
        return view('news::web.post');
    }
}
