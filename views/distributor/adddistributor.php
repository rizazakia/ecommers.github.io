<caption><h1>Data Distributor</h1></caption>
<form action="<?php echo $base_url?>distributor/Save" method="post">
    <label for="">Nama Distributor</label>
    <input type="text" name="nmdist" id="" required>
    <label for="">Alamat</label>
    <textarea name="alamat" id="" required></textarea>
    <label for="">NO Telpon</label>
    <input type="text" name="notelp" id="" required>
    <input type="submit" value="Simpan">
    <input type="reset" value="Batal">
</form>