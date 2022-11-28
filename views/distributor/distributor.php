<div data-role="panel" data-title-caption="List Jenis" data-collapsible="true" data-title-icon="<span class='mif-chart-line'></span>" class="mt-4">
<table  class="table row-hover">
    <thead>
        <th>Nomor</th>
        <th>Nama Distributor</th>
        <th>Alamat</th>  
        <th>No Telpon</th>
        <th colspan=2>Tools</th>
    </thead>
    <?php
        $no=1;
    foreach ($data['distributor'] as $distributor){
    ?>
    <tbody>
        <td><?= $no ?></td>
        <td><?= $distributor['nmdist'] ?></td>
        <td><?= $distributor['alamat'] ?></td>
        <td><?= $distributor['notelp'] ?></td>
        <td  class="button info"><span class="mif-pencil"></span></td>
        <td class="button alert"><span class="mif-bin"></span></td>
    </tbody>
    <?php
        $no++;
        }
    ?>
</table>