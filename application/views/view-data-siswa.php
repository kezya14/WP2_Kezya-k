<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampil Data Siswa</title>
</head>
<body>
<body bgcolor="skyblue">
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Siswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Siswa</th>
                <th>:</th>
                <td>
                    <?= $siswa; ?>
                </td>
            </tr>
            <tr>
                <th>NIS</th>
                <th>:</th>
                <td>
                    <?= $nis; ?>
                </td>
            </tr>
            <tr>
                <th>Kelas</th>
                <th>:</th>
                <td>
                    <?= $kelas; ?>
                </td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <th>:</th>
                <td>
                    <?= $tgl; ?>
                </td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <th>:</th>
                <td>
                    <?= $lahir; ?>
                </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <th>:</th>
                <td>
                    <?= $alamat; ?>
                </td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <th>:</th>
                <td>
                    <?= $jenis_kelamin; ?>
                </td>
            </tr>
            <tr>
                <th>Agama</th>
                <th>:</th>
                <td>
                    <?= $agama; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('formsiswa'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>