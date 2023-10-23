<h4>Selamat datang Pustakawan <?=$pengguna['nama_lengkap'] ?? ''?> - 
<?php if( ($pengguna['tingkat'] ?? '') == 'PUS'){
        echo "Pustakawan";
    }else{
        echo "Administrator";
    } ?></h4>
<ul>
    <li><a href="<?=base_url('anggota')?>">Anggota</a></li>
    <li><a href="<?=base_url('kategori')?>">Kategori</a></li>
    <li><a href="<?=base_url('penerbit')?>">Penerbit</a></li>
    <li><a href="<?=base_url('')?>">Buku</a></li>
    <li><a href="<?=base_url('')?>">Koleksi Buku</a></li>
    <li><a href="<?=base_url('')?>">Peminjaman</a></li>
    
    <li><a href="<?=base_url('logout')?>">Keluar</a></li>
    
</ul>