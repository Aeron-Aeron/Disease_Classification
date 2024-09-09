<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Symptom Form</title>
</head>
<body>
    <h1>Enter Your Symptoms</h1>

    <form action="{{ route('classify.disease') }}" method="POST">
        @csrf  <!-- Blade directive for CSRF protection -->
        
        <label for="symptoms">Enter your symptoms (comma-separated):</label>
        <input type="text" name="symptoms[]" placeholder="e.g., fever, cough" required>
        
        <button type="submit">Classify Disease</button>
    </form>

    <!-- Display validation errors, if any -->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>
