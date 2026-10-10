<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Laravel P9</title>

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
        }

        nav {
            background: #ef4444;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: white;
            font-size: 22px;
            font-weight: bold;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 900px;
            margin: 70px auto;
            padding: 45px;
            background: white;
            border-radius: 18px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        }

        .label {
            color: #ef4444;
            font-weight: bold;
            margin-bottom: 10px;
        }

        h1 {
            font-size: 38px;
            margin-bottom: 20px;
        }

        p {
            line-height: 1.8;
            color: #6b7280;
            font-size: 17px;
        }

        .badge {
            display: inline-block;
            margin-top: 25px;
            padding: 9px 18px;
            background: #fee2e2;
            color: #b91c1c;
            border-radius: 20px;
            font-size: 14px;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <nav>
        <div class="logo">Laravel P9</div>

        <div>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
            <a href="/products">Products</a>
        </div>
    </nav>

    <div class="container">
        <div class="label">TENTANG PROJECT</div>

        <h1>About</h1>

        <p>
            Ini adalah halaman About pada website Laravel saya.
            Website ini dibuat untuk memenuhi Tugas Rutin 9
            pada mata kuliah Pemrograman Web.
        </p>

        <span class="badge">Laravel 13.34.0</span>
    </div>

</body>
</html>