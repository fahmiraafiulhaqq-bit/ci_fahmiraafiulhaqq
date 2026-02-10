// Tombol logout 
<a href="<?= site_url('/logout') ?>"> Log Out </a>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/users') ?>">
            <i class="bi bi-people"></i> <span>Users</span>
        </a>
    </li>

        <?php $idu = session('id_user'); ?>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('users/edit/' . $idu) ?>">
            <i class="bi bi-person-gear"></i> <span>Setting</span>
        </a>

<li class="nav-item mt-3">
    <span class="nav-link disabled">Masuk sebagai: <b><?= session('nama'); ?> (<?= session('role'); ?>)</b></span>
</li>

<center>
    <img src="<?= base_url('uploads/users/' . session()->get('foto')) ?>" height="80" class="mt-3 rounded-circle" />
</center>


    </li>