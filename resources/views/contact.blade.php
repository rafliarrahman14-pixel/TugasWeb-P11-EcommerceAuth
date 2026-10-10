<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Laravel P9</title>

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
            max-width: 950px;
            margin: 60px auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 35px;
        }

        .label {
            color: #ef4444;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        h1 {
            font-size: 38px;
            margin-bottom: 15px;
        }

        .intro {
            max-width: 650px;
            margin: auto;
            color: #6b7280;
            line-height: 1.7;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 35px;
        }

        .contact-card {
            background: white;
            padding: 30px 20px;
            text-align: center;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.07);
        }

        .icon {
            width: 55px;
            height: 55px;
            margin: 0 auto 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fee2e2;
            color: #ef4444;
            border-radius: 50%;
            font-size: 22px;
        }

        .contact-card h2 {
            font-size: 19px;
            margin-bottom: 10px;
        }

        .contact-card p {
            color: #6b7280;
            line-height: 1.6;
            font-size: 14px;
        }

        .project-info {
            margin-top: 30px;
            padding: 25px;
            background: #fff1f2;
            border-left: 5px solid #ef4444;
            border-radius: 10px;
        }

        .project-info p {
            color: #7f1d1d;
            line-height: 1.7;
        }

        @media (max-width: 700px) {
            nav {
                flex-direction: column;
                gap: 15px;
            }

            nav a {
                margin: 0 7px;
            }

            .contact-grid {
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
            <div class="label">INFORMASI PROJECT</div>

            <h1>Contact</h1>

            <p class="intro">
                Halaman ini berisi informasi mengenai project
                Laravel yang dibuat untuk memenuhi Tugas Rutin 9
                pada mata kuliah Pemrograman Web.
            </p>
        </div>

        <div class="contact-grid">

            <div class="contact-card">
                <div class="icon">👤</div>
                <h2>Developer</h2>
                <p>Rafli Arrahman</p>
            </div>

            <div class="contact-card">
                <div class="icon">🎓</div>
                <h2>Universitas</h2>
                <p>Universitas Negeri Medan</p>
            </div>

            <div class="contact-card">
                <div class="icon">💻</div>
                <h2>Project</h2>
                <p>Tugas Rutin 9 Laravel Setup</p>
            </div>

        </div>

        <div class="project-info">
            <p>
                Project ini dikembangkan menggunakan Laravel
                sebagai framework PHP dengan database MySQL.
            </p>
        </div>

    </div>

</body>
</html>