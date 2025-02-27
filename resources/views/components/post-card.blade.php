@props(['post'])

<article
{{ $attributes->merge([
    'class' => 'transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl'
    ])}}>
    <div class="py-6 px-5">
        <div>
            {{-- TO DO --}}
            <img src="{{ $post->thumbnail }}" alt="laracasts blog illustration-1" class="rounded-xl" >
        </div>
        <div class="mt-8 flex flex-col justify-between">
            <header>
                <div class="space-x-2">
                    <x-category-button :category="$post->category" />
                </div>

                <div class="mt-4">
                    <h1 class="text-3xl">
                    <a href="/posts/{{$post->slug}}">
                        {{$post->title}}
                    </a>
                    </h1>
                    <span class="mt-2 block text-xs text-gray-400">Published <time>{{$post->created_at->diffForHumans()}}</time></span>
                </div>
            </header>

            <div class="text-sm mt-4 space-y-4">
                {!! $post->excerpt !!}</p>
            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center">

                    {{-- author avtar --}}
                    <img class="w-12"
                    src="https://ui-avatars.com/api/?name={{ $post->author->name }}&amp;size=64&amp;rounded=true&amp;color=fff&amp;background=fc6369"
                    title="{{ $post->author->name }}">

                    <div class="ml-3">
                        <h5 class="font-bold">
                            <a href="/?author={{$post->author->username}}">{{$post->author->name}}</a>
                        </h5>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <a href="/posts/{{$post->slug}}" class="text-xs font-semibold bg-gray-200 px-8 py-2 rounded-full">Read More</a>
                </div>
            </footer>
        </div>
    </div>
</article>
