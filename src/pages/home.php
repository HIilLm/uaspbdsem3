<?php
$page = 'home';
ob_start();
?>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Biodata</h5>
        <img class="mb-3" style="object-fit: cover;" width="100%" height="350px" src="https://png.pngtree.com/thumb_back/fw800/background/20240107/pngtree-night-sky-with-clouds-and-stars-image_15575974.jpg"
            alt="literally me">
        <p class="card-text">Nama : Hilzam Saiga Hamas</p>
        <p class="card-text">NIM : 23081494390</p>
        <p class="card-text">Kelas : 2023H</p>
        <hr>
        <p class="text-center">
            Proyek ini dibuat sebagai bagian dari <b>Ujian Akhir Semester</b> untuk mata kuliah <i>Perancangan Basis
                Data</i>. Website
            ini dirancang untuk menampilkan daftar teman dari berbagai jenjang kehidupan, termasuk <b>SD, SMP, SMA,
                Kuliah,
                dan Kantor</b>. Selain itu, setiap teman akan dikelompokkan berdasarkan kategori tertentu yang
            memudahkan
            identifikasi dan pengelompokan.
            <br><br>
            Tujuan dari proyek ini adalah untuk memberikan gambaran struktur data yang baik, serta mempraktikkan
            implementasi perancangan basis data dalam konteks nyata.
        </p>
        <a href="/src/view/kategori.php" class="btn btn-primary">Lets go!</a>
    </div>
</div>
<?php
$content = ob_get_clean();