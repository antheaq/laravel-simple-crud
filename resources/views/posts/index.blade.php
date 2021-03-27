<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mx-auto pt-4">
        
        <h1 class="fw-bold">My Blog</h1>

        <a href="/posts/create" class="btn btn-primary my-4">Add Post</a>

        @foreach($posts as $post)

        <div class="row mb-2">
            <h2><a href="/posts/{{$post->id}}/edit" class="fw-bold text-primary">{{ $post->title }}</a></h2>
            <p class="">{{ $post->content }}</p>
            <hr class="mt-2">
        </div>

        @endforeach

    </div>
</body>
</html>