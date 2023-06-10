<!DOCTYPE html>
<html>

<head>
    <title>Chunking Results</title>
    @vite('resources/css/app.css')
</head>

<body>


    <div class="container">
        <h1>Chunking Results</h1>

        <div class="row">
            <div class="col-md-6">
                <ul class="list-group">
                    @foreach ($data as $value)
                        <li class="list-group-item">{{ $value }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

</body>

</html>
