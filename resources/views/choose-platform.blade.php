<!DOCTYPE html>
<html>
<head>
    <title>Choose a Platform</title>
</head>
<body>
    <h1>Select Your Social Media Platform</h1>
    <ul>
        <li><a href="{{ route('qr-redirect', ['platform' => 'instagram']) }}">Instagram</a></li>
        <li><a href="{{ route('qr-redirect', ['platform' => 'facebook']) }}">Facebook</a></li>
        <li><a href="{{ route('qr-redirect', ['platform' => 'twitter']) }}">Twitter</a></li>
    </ul>
</body>
</html>