<?php
$title = 'DOMISILI'; // Judul halaman
$page = 'domisili';
ob_start();
?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">TABLE Domisili</h5>
        <p class="card-text">Menampilkan seluruh data dalam tabel domisili* </p>

        <table id="zero-conf" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Kota</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $query = mysqli_query($conn,"SELECT * FROM domisili");
                foreach ($query as $key => $value):
                ?>
                <tr>
                    <td><?= $key+1 ;?></td>
                    <td><?= $value['kota'];?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
            <tfoot>
                <tr>
                    <th>NO</th>
                    <th>Kategori</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<?php
$content = ob_get_clean();