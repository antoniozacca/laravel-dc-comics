<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC Comics</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">Tutti i Fumetti</h1>
        <div class="row">
            @foreach ($fumetti as $i)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img src="{{ $i->thumb }}" class="card-img-top" alt="{{ $i->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $i->title }}</h5>
                        <p class="card-text">{{ $i->description }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Prezzo:</strong> {{ $i->price }}</li>
                        <li class="list-group-item"><strong>Serie:</strong> {{ $i->series }}</li>
                        <li class="list-group-item"><strong>Data di Vendita:</strong> {{ $i->sale_date }}</li>
                        <li class="list-group-item"><strong>Artisti:</strong> {{ $i->artists }}</li>
                        <li class="list-group-item"><strong>Scrittori:</strong> {{ $i->writers }}</li>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    
</body>
</html>
<style scoped>
    body {
        background-color: #141414;
        color: #fff;
        font-family: Arial, sans-serif;
        padding-top: 20px;
    }
    .container {
        max-width: 800px;
        margin: auto;
    }
    .card {
        background-color: #1c1c1c;
        border: none;
        color: #fff;
        transition: transform 0.2s ease;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .card:hover {
        transform: scale(1.02);
        box-shadow: 0 8px 16px rgba(0,0,0,0.2);
    }
    .card img {
        max-height: 400px;
        object-fit: cover;
    }
    .card-title {
        color: #fff;
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .card-text {
        color: #ccc;
        font-size: 14px;
        line-height: 1.4;
    }
    .list-group-item {
        background-color: transparent;
        border-color: rgba(255, 255, 255, 0.1);
        color: #ccc;
        font-size: 14px;
        padding: 0.75rem 1rem;
    }
</style>