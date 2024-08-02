<!DOCTYPE html>
<html>
<head>
    <title>Server Error</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8d7da;
            color: #721c24;
            text-align: center;
            padding: 50px;
        }
        .container {
            display: inline-block;
        }
        h1 {
            font-size: 50px;
        }
        p {
            font-size: 20px;
        }
        a {
            text-decoration: none;
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>500</h1>
        <p>Oops! Something went wrong on our server.</p>
        <a href="{{ url('/') }}">Go to Homepage</a>
    </div>
</body>
</html>
