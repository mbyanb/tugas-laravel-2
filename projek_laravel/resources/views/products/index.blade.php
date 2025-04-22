<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - Konter HP Jaya</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            margin: 0;
            padding: 40px 20px;
            color: #333;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2rem;
            color: #2c3e50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 12px;
        }

        th, td {
            padding: 16px 20px;
            text-align: left;
        }

        th {
            background: #2c3e50;
            color: white;
            font-weight: 600;
        }

        tr:nth-child(even) {
            background-color: #f9fafc;
        }

        tr:hover {
            background-color: #f1f5f9;
            transition: 0.2s;
        }

        td {
            border-bottom: 1px solid #e0e0e0;
        }

        .price {
            font-weight: bold;
            color: #27ae60;
        }

        @media (max-width: 600px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }

            th {
                display: none;
            }

            td {
                position: relative;
                padding-left: 50%;
                text-align: right;
            }

            td::before {
                content: attr(data-label);
                position: absolute;
                left: 20px;
                top: 16px;
                font-weight: bold;
                text-align: left;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📱 Konter HP Jaya - Daftar Produk</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td data-label="ID">{{ $product->id }}</td>
                    <td data-label="Nama Produk">{{ $product->name }}</td>
                    <td data-label="Harga" class="price">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                    <td data-label="Deskripsi">{{ $product->description }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div style="text-align: center; margin-top: 30px;">
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" style="
            padding: 10px 20px;
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        ">
            Logout
        </button>
    </form>
</div>

</div>
</body>
</html>
    </div>
</body>
</html>
