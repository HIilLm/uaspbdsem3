<?php
$title = 'TEMAN KULIAH';
$page = 'teman-kuliah';
$subpage = 'tablekuliah';
ob_start();
?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">TABLE TEMAN KULIAH</h5>
        <p class="card-text">Menampilkan seluruh data dalam tabel TEMAN KULIAH*</p>

        <table id="zero-conf" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Nomor Telepon</th>
                    <th>Email</th>
                    <th>Domisili</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $query = mysqli_query($conn,"SELECT t.nama, t.no_telp, t.email, k.kota FROM teman_kuliah as t JOIN domisili as k ON t.id_domisili = k.id");
                foreach ($query as $key => $value):
                ?>
                <tr>
                    <td><?= $key+1 ;?></td>
                    <td><?= $value['nama'];?></td>
                    <td><?= $value['no_telp'];?></td>
                    <td><?= $value['email'];?></td>
                    <td><?= $value['kota'];?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
            <tfoot>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Nomor Telepon</th>
                    <th>Email</th>
                    <th>Domisili</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<?php
$content = ob_get_clean();