<?= $this-> include('template/header'); ?>
<h1 class="aplikasi"><?= $title; ?></h1>
<br>
<h2 class="pageTitle"> <?= $title; ?></h2>
<form class="add" action="" method="post">
    <p>
        <label for="nik">NIK KTP (16 digit)</label> <br>
        <input type="text" id="nik" name="nik" cols="50" value="<?= $data['nik'];?>">
    </p>
    <p>
        <label for="nama">Nama</label> <br>
        <input type="text" id="nama" name="nama" cols="100" value="<?= $data['nama'];?>">
    </p>
    <p>
        <input type="radio" id="lakilaki" name="kelamin" value="L" cols="50" <?php echo ($data['kelamin'] =='L'?' checked=checked':''); ?> >Laki-laki</label>
        <input type="radio" id="perempuan" name="kelamin" value="P" cols="50" <?php echo ($data['kelamin'] =='P'?' checked=checked':''); ?> >Perempuan</label>
    </p>
    <p>
        <label for="alamat">Alamat</label> <br>
        <select name="alamat" id="">
            <option value="<?= $data['alamat'];?>"><?= $data['alamat'];?></option>
            <option value="" disabled >- Pilih Blok -</option>
            <option value="Blok-A">Blok-A</option>
            <option value="Blok-B">Blok-B</option>
            <option value="Blok-C">Blok-C</option>
        </select>
    </p>
    <p>
        <label for="no_rumah">No.Rumah</label> <br>
        <input type="text" id="no_rumah" name="no_rumah" cols="100" value="<?= $data['no_rumah'];?>">
    </p>
    <p>
        <label for="status">Status</label> <br>
        <select name="status" id="">
            <option value="<?= $data['status'];?>" >
            <?php
                $status = $data['status'];
                switch ($status) {
                    case '1':
                        echo "Warga Tetap";
                        break;
                    case '0':
                        echo "Warga Kontrak";
                        break;
                };
                ?>
            </option>
            <option value="" disabled >- Pilih Status Tinggal -</option>
            <option value="1">Warga Tetap</option>
            <option value="0">Warga Kontrak</option>
        </select>
    </p>

    <br>

    <p>
        <input type="submit" value="Kirim" class="btn btn-large">
    </p>

</form>

<?= $this->include('template/admin_footer'); ?>