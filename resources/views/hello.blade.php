<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello - Laravel P9</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            color: #1f2937;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            width: 90%;
            max-width: 600px;
            background: white;
            padding: 50px 40px;
            text-align: center;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        .icon {
            font-size: 50px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 36px;
            color: #ef4444;
            margin-bottom: 15px;
        }

        p {
            color: #6b7280;
            font-size: 17px;
            line-height: 1.7;
        }

        .version {
            display: inline-block;
            margin-top: 25px;
            padding: 8px 16px;
            background: #fee2e2;
            color: #b91c1c;
            border-radius: 20px;
            font-size: 14px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="card">
        <div class="icon">👋</div>

        <h1>Halo, {{ $nama }}!</h1>

        <p>
            Selamat datang di project Laravel P9.
            Nama pada halaman ini berasal dari
            <strong>route parameter</strong>.
        </p>

        <span class="version">Laravel 13.34.0</span>
    </div>

</body>
</html>