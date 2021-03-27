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

        <h1 class="fw-bold my-4">Create New Post</h1>

        <form method="POST" action="/posts">

            @csrf

            <div class="mb-4">
                <label class="fw-bold text-success" for="title">Title:</label>
                <input class="bg-white form-control" id="title" name="title" value="">
            </div>

            <div class="mb-4">
                <label class="fw-bold text-success" for="content">Content:</label>
                <textarea class="bg-white form-control" id="content" name="content"></textarea>
            </div>

            <button class="btn btn-success">Submit</button>
            <a href="/posts" class="btn btn-secondary">Cancel</a>
            

        </form>

    </div>
</body>
</html>