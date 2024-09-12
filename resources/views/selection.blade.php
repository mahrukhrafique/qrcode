<!DOCTYPE html>
<html>
<head>
    <title>Select a Page</title>
</head>
<body>
    <h1>Select a Page</h1>
    <form action="{{ url('/redirect-to-selected-url') }}" method="POST">
        @csrf
        <select name="url" required>
            @foreach($urls as $label => $url)
                <option value="{{ $url }}">{{ $label }}</option>
            @endforeach
        </select>
        <button type="submit">Go</button>
    </form>
</body>
</html>
