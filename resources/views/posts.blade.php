<!DOCTYPE html>
<title>My blog</title>
    <link rel="stylesheet" href="/app.css">

<body>
    <h1>Post</h1>
@foreach($posts as $post)
    <article>
        <h1>
            <a href="/posts/{{$post->slug}}">
                {{$post->title}}
            </a>
        </h1>
        <div>
            {{$post->excerpt}}
        </div>
    </article>
@endforeach

</body>
</html>