<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Laravel P9</title>

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
            max-width: 1000px;
            margin: 60px auto;
            padding: 40px;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
        }

        .label {
            color: #ef4444;
            font-weight: bold;
            margin-bottom: 10px;
        }

        h1 {
            font-size: 38px;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.07);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .number {
            color: #ef4444;
            font-size: 14px;
            font-weight: bold;
        }

        .card h2 {
            margin-top: 10px;
            font-size: 22px;
        }

        @media (max-width: 600px) {
            nav {
                flex-direction: column;
                gap: 15px;
            }

            nav a {
                margin: 0 7px;
            }

            .products {
                grid-template-columns: 1fr;
            }
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

        <div class="header">
            <div class="label">DATA DINAMIS</div>
            <h1>Daftar Produk</h1>
        </div>

        <div class="products">

            @foreach ($products as $index => $product)
                <div class="card">
                    <div class="number">PRODUK {{ $index + 1 }}</div>
                    <h2>{{ $product }}</h2>
                </div>
            @endforeach

        </div>

    </div>

</body>
</html>