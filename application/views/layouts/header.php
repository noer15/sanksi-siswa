<style>
  .dropdown-menu.show {
    margin-left: 50px;
}
</style>
<div class="sidebar-wrapper">
  <ul class="nav">
    <li class="active ">
      <a href="<?=site_url('dashboard')?>">
        <i class="nc-icon nc-bank"></i>
        <p>Dashboard</p>
      </a>
    </li>
    <li>
      <a href="<?=site_url('kriteria')?>">
        <i class="nc-icon nc-single-02"></i>
        <p>Kriteria</p>
      </a>
    </li>
    <li>
      <a href="<?=site_url('alternatif')?>">
        <i class="nc-icon nc-single-02"></i>
        <p>Alternatif</p>
      </a>
    </li>
    <li>
      <a href="<?=site_url('siswa')?>">
        <i class="nc-icon nc-single-02"></i>
        <p>Siswa</p>
      </a>
    </li>
    <li>
      <a href="<?=site_url('user')?>">
        <i class="nc-icon nc-single-02"></i>
        <p>User</p>
      </a>
    </li>
    <li>
      <a href="<?=site_url('sanksi')?>">
        <i class="nc-icon nc-single-02"></i>
        <p>Sanksi</p>
      </a>
    </li>
    <li class="nav-item dropdown d-flex">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="nc-icon nc-single-02"></i>
          Laporan
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?=site_url('laporan/sanksi')?>">Sanksi</a>
          <a class="dropdown-item" href="<?=site_url('laporan/kriteria')?>">Kriteria</a>
          <a class="dropdown-item" href="<?=site_url('laporan/alternatif')?>">Alternatif</a>  
          <a class="dropdown-item" href="<?=site_url('laporan/siswa')?>">Siswa</a>

        </div>
      </li>
    
  </ul>
</div>