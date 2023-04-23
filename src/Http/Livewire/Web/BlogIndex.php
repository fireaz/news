<?php

namespace FireAZ\News\Http\Livewire\Web;

use FireAZ\News\Models\Post;
use FireAZ\Platform\Facades\Theme;
use FireAZ\Reojs\Component;
use Illuminate\Database\Eloquent\Collection;
use Livewire\WithPagination;

class BlogIndex extends Component
{
    use WithPagination;
    public $posts;

    public $pageNumber = 1;

    public $hasMorePages;

    public function mount()
    {
        $this->posts = new Collection();

        $this->loadPosts();
        Theme::setLayout('left');
        theme_position_add('THEME_RIGHT', function () {
            echo '<div>Test</div>';
        });
    }

    public function loadPosts()
    {
        $posts = Post::paginate(12, ['*'], 'page', $this->pageNumber);

        $this->pageNumber += 1;

        $this->hasMorePages = $posts->hasMorePages();

        $this->posts->push(...$posts->items());
    }


    public function render()
    {
        return view('news::web.blogs');
    }
}
