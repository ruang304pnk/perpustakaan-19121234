 
<form enctype="multipart/form-data" method="post" action="<?=base_url('anggota')?>">
    <input type="hidden" name="id" value="<?=$data['id'] ?? ''?>" />
    <label>Email</label>
    <input type="email" name="email" value="<?=$data['email'] ?? ''?>" />
    <br/>
    <span> <?=$validation?->getError('email') ?? ''?>  </span><br/>

    <label>Kata Sandi</label>
    <input type="password" name="katasandi" value="<?=$data['katasandi'] ?? ''?>" />
    <br/>
    <span> <?=$validation?->getError('katasandi') ?? ''?>  </span><br/>
    

    <label>Nama Lengkap</label>
    <input type="text" name="nama_lengkap" value="<?=$data['nama_lengkap'] ?? ''?>" />
    <br/>
    <span> <?=$validation?->getError('nama_lengkap') ?? ''?>  </span><br/>
    
    <label>Alamat</label>
    <input type="text" name="alamat" value="<?=$data['alamat'] ?? ''?>" />
    <br/>
    <label>Foto</label>
    <input type="file" name="foto"  />
    <br/>
    <button>Simpan</button> 
</form>