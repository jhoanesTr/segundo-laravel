<title>Mi blog</title>
<link rel="stylesheet" href="/css/post.css">
<body>
    <article>
        <h1>{{$post->title}}</h1>
        <div>
            {!! $post->body !!}
        </div>
    </article>
    <a href="/">Ir atras</a>
</body>