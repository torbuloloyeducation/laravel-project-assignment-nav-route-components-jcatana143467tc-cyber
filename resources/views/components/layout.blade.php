<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Activity 1</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8fafc;
            color: #1e293b;
        }

        nav {
            background-color: #1e40af;
            padding: 0 2rem;
            display: flex;
            gap: 0;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 1rem 1.25rem;
            font-size: 0.95rem;
            font-weight: 500;
            display: inline-block;
            transition: background-color 0.2s;
        }

        nav a:hover {
            background-color: #1d4ed8;
        }

        nav a.active {
            background-color: #1d4ed8;
            border-bottom: 3px solid #60a5fa;
        }

        .container {
            max-width: 900px;
            margin: 4rem auto;
            padding: 0 2rem;
        }

        .container h1 {
            font-size: 2rem;
            color: #1e40af;
            margin-bottom: 0.5rem;
        }

        .container p {
            color: #64748b;
            font-size: 1rem;
        }
    </style>
</head>
<body>

    <x-navbar />

    <div class="container">
        {{ $slot }}
    </div>

</body>
</html>
