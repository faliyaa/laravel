<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Peminjaman Buku</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Detail Peminjaman Buku</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Status</th>
        </tr>
        <?php
            // Mock data, gantilah dengan data sesuai kebutuhan Anda
            $peminjaman = array(
                array("No" => 1, "Judul Buku" => "Harry Potter and the Philosopher's Stone", "Pengarang" => "J.K. Rowling", "Tanggal Pinjam" => "2024-03-14", "Tanggal Kembali" => "2024-03-21", "Status" => "Dikembalikan"),
                array("No" => 2, "Judul Buku" => "To Kill a Mockingbird", "Pengarang" => "Harper Lee", "Tanggal Pinjam" => "2024-03-10", "Tanggal Kembali" => "2024-03-17", "Status" => "Dipinjam"),
                array("No" => 3, "Judul Buku" => "The Great Gatsby", "Pengarang" => "F. Scott Fitzgerald", "Tanggal Pinjam" => "2024-03-05", "Tanggal Kembali" => "2024-03-12", "Status" => "Dikembalikan")
            );

            foreach ($peminjaman as $data) {
                echo "<tr>";
                foreach ($data as $key => $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
