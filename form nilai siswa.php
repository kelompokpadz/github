<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["simpan"])) {
        $nama = htmlspecialchars($_POST["nama"]);
        $kelas = htmlspecialchars($_POST["kelas"]);
        $mapel = htmlspecialchars($_POST["mapel"]);
        $nilai = (int)$_POST["nilai"];

        if ($nilai >= 90) {
            $predikat = "A";
        } elseif ($nilai >= 80) {
            $predikat = "B";
        } elseif ($nilai >= 70) {
            $predikat = "C";
        } elseif ($nilai >= 60) {
            $predikat = "D";
        } else {
            $predikat = "E";
        }

        echo "<div style='text-align:center; margin-top:20px;'>";
        echo "<h3>Hasil Penilaian</h3>";
        echo "Nama Siswa : $nama<br>";
        echo "Kelas : $kelas<br>";
        echo "Mata Pelajaran : $mapel<br>";
        echo "Nilai : $nilai<br>";
        echo "Predikat : $predikat<br>";
        echo "</div><hr>";
    } elseif (isset($_POST["batal"])) {
        echo "<div style='text-align:center;color:red; margin-top:20px;'>Form dibatalkan.</div><hr>";
    }
}
?>

<style>
    body {
        background-color: #f0f4ff;
        font-family: Arial, sans-serif;
    }
    .form-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    table {
        background-color: white;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        width: 400px;
        border-collapse: collapse;
    }
    th {
        background-color: #007BFF;
        color: white;
        font-size: 18px;
        padding: 10px;
        border-radius: 12px 12px 0 0;
        text-align: center;
    }
    td {
        padding: 10px;
    }
    input[type="text"], input[type="number"], select {
        width: 100%;
        padding: 8px;
        border-radius: 6px;
        border: 1px solid #ccc;
        transition: 0.3s;
    }
    input[type="text"]:focus, input[type="number"]:focus, select:focus {
        border-color: #007BFF;
        outline: none;
        box-shadow: 0 0 5px rgba(0,123,255,0.5);
    }
    .btn-container {
        text-align: center;
        padding: 10px;
    }
    input[type="submit"] {
        padding: 8px 16px;
        margin: 5px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-weight: bold;
        transition: 0.3s;
    }
    input[name="simpan"] {
        background-color: #007BFF;
        color: white;
    }
    input[name="simpan"]:hover {
        background-color: #0056b3;
    }
    input[name="batal"] {
        background-color: #ccc;
    }
    input[name="batal"]:hover {
        background-color: #999;
    }
</style>

<div class="form-container">
    <form method="post" action="">
        <table>
            <tr>
                <th colspan="2">Form Penilaian Siswa</th>
            </tr>
            <tr>
                <td>Nama Siswa</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>
                    <select name="kelas" required>
                        <option value="">-- Pilih Kelas --</option>
                        <option>X PPLG 1</option>
                        <option>X PPLG 2</option>
                        <option>XI PPLG 1</option>
                        <option>XI PPLG 2</option>
                        <option>XII RPL 1</option>
                        <option>XII RPL 2</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Mata Pelajaran</td>
                <td>
                    <select name="mapel" required>
                        <option value="">-- Pilih Mapel --</option>
                        <option>Matematika</option>
                        <option>Bahasa Indonesia</option>
                        <option>Pai</option>
                        <option>Bahasa Jepang</option>
                        <option>Bahasa Inggris</option>
                        <option>Produktif</option>
                        <option>Informatikka</option>
                        <option>Sejarah</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nilai</td>
                <td><input type="number" name="nilai" min="0" max="100" required></td>
            </tr>
            <tr>
                <td colspan="2" class="btn-container">
                    <input type="submit" name="simpan" value="Simpan">
                    <input type="submit" name="batal" value="Batalkan">
                </td>
            </tr>
        </table>
    </form>
</div>
