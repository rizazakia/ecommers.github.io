<div data-role="panel" data-title-caption="List Jenis" data-collapsible="true" data-title-icon="<span class='mif-chart-line'></span>" class="mt-4">
<table class="table row-hover">
    <thead>
        <th>Nomor</th>
        <th>Jenis Barang</th>
        <th>Ket</th>
        <th colspan=2>Tools</th>
    </thead>
    <?php
        $no=1;
    foreach ($data['jenis'] as $jenis){
    ?>
    <tbody>
        <td><?= $no ?></td>
        <td><?= $jenis['jenisbarang'] ?></td>
        <td><?= $jenis['ket'] ?></td>
        <td><a  class="button info" href="<?= $base_url.'jenis/edit/'.$jenis['idjenis']?>"><span class="mif-pencil"></span></a>
           <a class="button alert" href="<?= $base_url.'jenis/hapus/'.$jenis['idjenis']?>" 
           onclick="return confirm('Yakin dihapus?')"><span class="mif-bin"></span></a></td>
</tbody>
    <?php
        $no++;
        }
    ?>
</table>
</div>