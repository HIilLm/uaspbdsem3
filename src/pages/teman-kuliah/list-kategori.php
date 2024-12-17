<?php
$title = 'TEMAN KULIAH';
$page = 'teman-kuliah';
$subpage = 'listkuliah';
ob_start();
?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">LEFT JOIN</h5>
        <p class="card-text">Menampilkan kategori teman kuliah menggunkan teknik LEFT JOIN* </p>

        <table id="zero-conf" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Nomor Telepon</th>
                    <th>Email</th>
                    <th>Domisili</th>
                    <th>Kategori</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $query = mysqli_query($conn, "
                    SELECT 
                        kuliah.nama, 
                        kuliah.no_telp, 
                        kuliah.email, 
                        dm.kota, 
                        GROUP_CONCAT(k.nama_kategori SEPARATOR ', ') AS nama_kategori 
                    FROM teman_kuliah AS kuliah 
                    JOIN domisili AS dm ON kuliah.id_domisili = dm.id 
                    JOIN kategori_kuliah AS kkuliah ON kkuliah.teman_id = kuliah.id 
                    LEFT JOIN kategori AS k ON kkuliah.kategori_id = k.id 
                    GROUP BY kuliah.id;
                ");
                foreach ($query as $key => $value):
                ?>
                <tr>
                    <td><?= $key+1 ;?></td>
                    <td><?= $value['nama'];?></td>
                    <td><?= $value['no_telp'];?></td>
                    <td><?= $value['email'];?></td>
                    <td><?= $value['kota'];?></td>
                    <td><?= $value['nama_kategori'];?></td>
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
                    <th>Kategori</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">INNER JOIN</h5>
        <p class="card-text">Menampilkan kategori teman kuliah menggunkan teknik INNER JOIN* </p>

        <table id="one-conf" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Nomor Telepon</th>
                    <th>Email</th>
                    <th>Domisili</th>
                    <th>Kategori</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = mysqli_query($conn, "
                    SELECT 
                        kuliah.nama, 
                        kuliah.no_telp, 
                        kuliah.email, 
                        dm.kota, 
                        GROUP_CONCAT(k.nama_kategori SEPARATOR ', ') AS nama_kategori 
                    FROM teman_kuliah AS kuliah 
                    JOIN domisili AS dm ON kuliah.id_domisili = dm.id 
                    JOIN kategori_kuliah AS kkuliah ON kkuliah.teman_id = kuliah.id 
                    INNER JOIN kategori AS k ON kkuliah.kategori_id = k.id 
                    GROUP BY kuliah.id;
                ");
                foreach ($query as $key => $value):
                ?>
                <tr>
                    <td><?= $key+1 ;?></td>
                    <td><?= $value['nama'];?></td>
                    <td><?= $value['no_telp'];?></td>
                    <td><?= $value['email'];?></td>
                    <td><?= $value['kota'];?></td>
                    <td><?= $value['nama_kategori'];?></td>
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
                    <th>Kategori</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">RIGHT JOIN</h5>
        <p class="card-text">Menampilkan kategori teman kuliah menggunkan teknik RIGHT JOIN* </p>
        <table id="two-conf" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Nomor Telepon</th>
                    <th>Email</th>
                    <th>Domisili</th>
                    <th>Kategori</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                $query = mysqli_query($conn, "
                    SELECT 
                        kuliah.nama, 
                        kuliah.no_telp, 
                        kuliah.email, 
                        dm.kota, 
                        GROUP_CONCAT(k.nama_kategori SEPARATOR ', ') AS nama_kategori 
                    FROM teman_kuliah AS kuliah 
                    JOIN domisili AS dm ON kuliah.id_domisili = dm.id 
                    JOIN kategori_kuliah AS kkuliah ON kkuliah.teman_id = kuliah.id 
                    RIGHT JOIN kategori AS k ON kkuliah.kategori_id = k.id 
                    GROUP BY kuliah.id;
                ");
                foreach ($query as $key => $value):
                ?>
                <tr>
                    <td><?= $key+1 ;?></td>
                    <td><?= isset($value['nama']) ? $value['nama'] : 'null';?></td>
                    <td><?= isset($value['no_telp']) ? $value['no_telp'] : 'null';?></td>
                    <td><?= isset($value['email']) ? $value['email'] : 'null';?></td>
                    <td><?= isset($value['kota']) ? $value['kota'] : 'null';?></td>
                    <td><?= $value['nama_kategori'];?></td>
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
                    <th>Kategori</th>
                </tr>
            </tfoot>
        </table>
        <p class="card-text mt-3 border-top pt-2">Saat menggunakan RIGHT JOIN ada data yang berisi null, karena di dalam tabel teman_kuliah tidak ada teman yang memiliki kategori "teman belajar"* </p>
    </div>
</div>
<?php
$content = ob_get_clean();