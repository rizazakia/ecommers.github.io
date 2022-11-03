<caption><h1>UBAH DATA JENIS</h1></caption>
<?php foreach ($data['jenis'] as $edit ) { ?>
<form action="<?= $base_url.'jenis/ubah/'.$edit['idjenis'] ?>" method="post">
    <label for="">Jenis Barang</label>
    <input type="text" name="jenisbarang" id="" value="<?= $edit['jenisbarang']?>">
    <label for="">Keterangan</label>
    <input type="text" name="ket" id=""value="<?= $edit['ket']?>">
    <input type="submit" value="Simpan">
    <input type="reset" value="Batal">
</form>
<?php } ?>

