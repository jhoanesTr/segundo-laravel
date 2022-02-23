<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<x-layout>
@foreach($posts as $post)
        <article class="container-fluid bg-black text-center d-flex-block h-20 p-3">
            <h1 class="m-1">
                <a href="posts/{{$post->slug }}" class="text-decoration-none text-danger p-1">
                    {!! $post->title !!}
                </a>
            </h1>
            <div class="text-white p-1 m-1">
                {!! $post->excerpt !!}
            </div>
        </article>
        @endforeach
</x-layout>