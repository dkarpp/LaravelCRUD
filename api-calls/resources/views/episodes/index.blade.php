<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Characters</title>
</head>
<body>

    <div class="container-fluid">
    <h1 class="display-1">Episodes</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">

    <!-- Switched from foreach to forelse so I can just do the @empty check and print a message -->
        @forelse ($episodes as $episode)
   
        <div class="col">
            <div class="card h-100">
                <img src="{{ $episode->image }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $episode->name }}</h5>
                    <p class="card-text">{{ $episode->summary }}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Season {{ $episode->season }}, Episode {{ $episode->episode }}</small>
                </div>
            </div>
        </div>
        @empty
        <h5>There are no episodes to show</h5>

        
        @endforelse
    </div>
</div>
    
</body>
</html>