<ul class="list-unstyled accordion-menu">
  <li class="sidebar-title">
    Utama
  </li>
  <li class="<?php echo ($page == 'home') ? 'active-page' : '';?>">
    <a href="/src/view/"><i data-feather="home"></i>Beranda</a>
  </li>
  <li class="sidebar-title">
    Settings
  </li>
  <li class="<?php echo ($page == 'kategori') ? 'active-page' : '';?>">
    <a href="/src/view/kategori.php"><i data-feather="star"></i>Kategori</a>
  </li>
  <li class="<?php echo ($page == 'domisili') ? 'active-page' : '';?>">
    <a href="/src/view/domisili.php"><i data-feather="map-pin"></i>Domisili</a>
  </li>
  <li class="sidebar-title">
    Daftar Tabel
  </li>
  <li class="<?php echo ($page == 'teman-sd') ? 'active-page' : '';?>">
    <a href="#"><i data-feather="list"></i>Teman SD<i class="fas fa-chevron-right dropdown-icon"></i></a>
    <ul class="">
      <li><a href="/src/view/table-sd.php" class="<?php echo ($subpage == 'tablesd') ? 'active' : '';?>"><i class="far fa-circle"></i>List Teman SD</a></li>
      <li><a href="/src/view/list-sd.php" class="<?php echo ($subpage == 'listsd') ? 'active' : '';?>"><i class="far fa-circle"></i>List Kategori Teman</a></li>
    </ul>
  </li>
  <li class="<?php echo ($page == 'teman-smp') ? 'active-page' : '';?>">
    <a href="#"><i data-feather="list"></i>Teman SMP<i class="fas fa-chevron-right dropdown-icon"></i></a>
    <ul class="">
      <li><a href="/src/view/table-smp.php" class="<?php echo ($subpage == 'tablesmp') ? 'active' : '';?>"><i class="far fa-circle"></i>List Teman SMP</a></li>
      <li><a href="/src/view/list-smp.php" class="<?php echo ($subpage == 'listsmp') ? 'active' : '';?>"><i class="far fa-circle"></i>List Kategori Teman</a></li>
    </ul>
  </li>
  <li class="<?php echo ($page == 'teman-sma') ? 'active-page' : '';?>">
    <a href="#"><i data-feather="list"></i>Teman SMA<i class="fas fa-chevron-right dropdown-icon"></i></a>
    <ul class="">
      <li><a href="/src/view/table-sma.php" class="<?php echo ($subpage == 'tablesma') ? 'active' : '';?>"><i class="far fa-circle"></i>List Teman SMA</a></li>
      <li><a href="/src/view/list-sma.php" class="<?php echo ($subpage == 'listsma') ? 'active' : '';?>"><i class="far fa-circle"></i>List Kategori Teman</a></li>
    </ul>
  </li>
  <li class="<?php echo ($page == 'teman-kuliah') ? 'active-page' : '';?>">
    <a href="#"><i data-feather="list"></i>Teman KULIAH<i class="fas fa-chevron-right dropdown-icon"></i></a>
    <ul class="">
      <li><a href="/src/view/table-kuliah.php" class="<?php echo ($subpage == 'tablekuliah') ? 'active' : '';?>"><i class="far fa-circle"></i>List Teman KULIAH</a></li>
      <li><a href="/src/view/list-kuliah.php" class="<?php echo ($subpage == 'listkuliah') ? 'active' : '';?>"><i class="far fa-circle"></i>List Kategori Teman</a></li>
    </ul>
  </li>
  <li class="<?php echo ($page == 'teman-kantor') ? 'active-page' : '';?>">
    <a href="#"><i data-feather="list"></i>Teman KANTOR<i class="fas fa-chevron-right dropdown-icon"></i></a>
    <ul class="">
      <li><a href="/src/view/table-kantor.php" class="<?php echo ($subpage == 'tablekantor') ? 'active' : '';?>"><i class="far fa-circle"></i>List Teman KANTOR</a></li>
      <li><a href="/src/view/list-kantor.php" class="<?php echo ($subpage == 'listkantor') ? 'active' : '';?>"><i class="far fa-circle"></i>List Kategori Teman</a></li>
    </ul>
  </li>
</ul>