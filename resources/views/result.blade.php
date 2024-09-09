<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classification Results</title>
</head>
<body>
    <h2>Possible Diseases Based on Your Symptoms:</h2>

    @if (count($diseases) > 0)
        <ul>
            @foreach ($diseases as $disease)
                <li>{{ $disease }}</li>  <!-- Blade syntax for echoing data -->
            @endforeach
        </ul>
    @else
        <p>No matching diseases found for the given symptoms.</p>
    @endif
</body>
</html>
