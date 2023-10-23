 
<form method="post" action="<?=base_url('anggota/simpan')?>">
    <input type="hidden" name="id" value="<?=$data['id'] ?? ''?>" />
    <label>Email</label>
    <input type="email" name="email" value="<?=$data['email'] ?? ''?>" />
    <br/>
    <label>Kata Sandi</label>
    <input type="password" name="katasandi" value="<?=$data['katasandi'] ?? ''?>" />
    <br/>
    <label>Nama Lengkap</label>
    <input type="text" name="nama_lengkap" value="<?=$data['nama_lengkap'] ?? ''?>" />
    <br/>
    <label>Alamat</label>
    <input type="text" name="alamat" value="<?=$data['alamat'] ?? ''?>" />
    <br/>
    <button>Simpan</button> 
</form>