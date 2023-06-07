<!DOCTYPE html>
<html>
<head>
    <title>ItsolutionStuff.com</title>
</head>
<body>
<h1>{{ $mailData['title'] }}</h1>
<a href="{{ route('success-veirification-mobile', ['token' => $mailData['body']]) }}">
    The Link
</a>

<p>Thank you</p>
</body>
</html>
