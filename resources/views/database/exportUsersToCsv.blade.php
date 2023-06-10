<!DOCTYPE html>
<html>

<head>
    <title>Export Users to CSV</title>
    @vite('resources/css/app.css')
</head>

<body>

    <div class="container">
        <h1>Export Users to CSV</h1>
        <p>
            Streaming Results Lazily is a feature in Laravel that allows you to retrieve and process database results in
            a memory-efficient manner. Instead of loading the entire result set into memory at once, it streams the
            results one by one, which is particularly useful when dealing with large datasets.

            A real-life example of using Streaming Results Lazily in Laravel is when you need to export a large amount
            of data to a CSV file. Instead of retrieving all the data and storing it in an array or collection, which
            could consume a lot of memory, you can stream the results directly to the CSV file.
        </p>
        <a href="{{ route('database.exportUsersToCsv') }}" class="btn btn-primary">Export Users</a>
    </div>

</body>

</html>
