<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #B30000;
            margin-bottom: 10px;
        }

        p {
            color:black;
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #B30000;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #880404;
        }
    </style>
</head>
<body>

    <h1>Hai! Perkenalkan nama saya {{ $name }}</h1>
    <p>Tempat tinggal saya beralamat di {{ $address }}</p>
    <a href="{{ route('home') }}">Kembali ke Halaman Utama</a>

</body>
</html>
