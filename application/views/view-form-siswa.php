<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Siswa</title>
</head>
<body>
<body bgcolor="skyblue">
    <center>
        <form action="<?= ('Formsiswa/cetak'); ?>"method="post">
        <legend>Input Data Siswa</legend>
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Siswa
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
                        <input type="text" name="siswa" id="siswa" placeholder="Nama Siswa....">
                        <?= form_error('siswa', '<small style="color:red">', '</small>'); ?> 
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nis" id="nis" placeholder="NIS Siswa....">
                        <?= form_error('nis', '<small style="color:red">', '</small>'); ?> 
                    </td>
                </tr>

                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="kelas" id="kelas" placeholder="Kelas Siswa....">
                        <?= form_error('kelas', '<small style="color:red">', '</small>'); ?> 
                    </td>
                </tr>

                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="date" name="tgl">
                        <?= form_error('tanggal_lahir', '<small style="color:red">', '</small>'); ?> 
                    </td>
                </tr>

                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="lahir" id="lahir" placeholder="Tempat Lahir Siswa....">
                        <?= form_error('tempat_lahir', '<small style="color:red">', '</small>'); ?> 
                    </td>
                </tr>

                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <textarea name="alamat" id="alamat" placeholder="Alamat Siswa...." cols="30" rows="10"></textarea>
                        <?= form_error('alamat', '<small style="color:red">', '</small>'); ?> 
                    </td>
                </tr>

                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                    <td>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki</label>

                    <label><input type="radio" name="jenis_kelamin" value="Perempuan" /> Perempuan</label>
                        <?= form_error('jenis_kelamin', '<small style="color:red">', '</small>'); ?> 
                    </td>
                </tr>

                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                        <option value="Pilih Agama">Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Konghucu">Konghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>