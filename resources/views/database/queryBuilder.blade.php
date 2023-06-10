<!-- Blade file: queryBuilder.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>User List</title>
    {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
    @vite('resources/css/app.css')
</head>

<body>

    <div class="container">
        <h1>Retrieving All Rows From A Table</h1>
        @if ($type === 'all-rows')
            <div class="row">
                @foreach ($data as $row)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">{{ $row->name }}</h5>
                                <p class="card-text">Email: {{ $row->email }}</p>
                                <!-- Display other row properties as needed -->
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <h1>Retrieving A Single Row / Column From A Table</h1>
        @if ($type === 'single-row')
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->name }}</h5>
                            <p class="card-text">Email: {{ $data->email }}</p>
                            <!-- Display other single row properties as needed -->
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <h1>Retrieving A List Of Column Values</h1>
        @if ($type === 'column-values')
            <div class="row">
                <div class="col-md-4">
                    <ul class="list-group">
                        @foreach ($data as $value)
                            <li class="list-group-item">{{ $value }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif



    </div>

</body>

</html>
