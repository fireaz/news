<div>
    <h1>
        News
    </h1>
    <div class="row row-cards">
        <div class="space-y">
            @foreach ($posts as $post)
                <div class="card px-3" wire:key='post-{{ $post->id }}'>
                    <div class="row">
                        {{-- <div class="col-12 col-md-auto">
                            <div class="card-body text-center ">
                                <div class="avatar avatar-md avatar-2xl"
                                    style="background-image: url(https://ctn.cdn.static123.com/images/thumbs/900x600/fit/2023/04/21/z4283044126828-8f99b1a7c1d6a736a1af626c4d366ccd_1682058689.jpg)">
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-12 col-md">
                            <div class="card-body ps-md-0">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="mb-0"><a href="{{ route('news.post', ['slug' => $post->slug]) }}"
                                                title="{{ $post->title }}">{{ $post->title }}</a></h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md">
                                        <div
                                            class="mt-3                                  list-inline list-inline-dots mb-0 text-muted d-sm-block d-none">
                                            <div class="list-inline-item">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/building-community -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline"
                                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M8 9l5 5v7h-5v-4m0 4h-5v-7l5 -5m1 1v-6a1 1 0 0 1 1 -1h10a1 1 0 0 1 1 1v17h-8">
                                                    </path>
                                                    <path d="M13 7l0 .01"></path>
                                                    <path d="M17 7l0 .01"></path>
                                                    <path d="M17 11l0 .01"></path>
                                                    <path d="M17 15l0 .01"></path>
                                                </svg>
                                                News
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-auto">
                                        <div class="mt-3 badges">
                                            @foreach (explode(',', $post->tags) as $tag)
                                                <a href="#"
                                                    class="badge badge-outline text-muted border fw-normal badge-pill">{{ trim($tag) }}</a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="fs-4">
                                    {!! $post->summary !!} <a href="{{ route('news.post', ['slug' => $post->slug]) }}"
                                        title="{{ $post->title }}">More</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @if ($hasMorePages)
            <div class="text-center p-4">
                <button class="btn btn-blue" wire:click="loadPosts">
                    Load More
                </button>
            </div>
        @endif
    </div>

</div>
