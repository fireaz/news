<div class="container-xl">
    <div class="card">
        <div class="card-header">
            <h1>
                <a href="{{ route('news.post', ['slug' => $post->slug]) }}" title="{{ $post->title }}">
                    {{ $post->title }}
                </a>
            </h1>
        </div>
        <div class="card-body">
            {!! $post->content !!}
        </div>
    </div>
</div>
