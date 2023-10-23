<a href="<?=base_url('anggota/form')?>">Tambah data</a>
<table border="1">
 <thead>
    <tr>
        <th>Email</th>
        <th>Nama Lengkap</th>
        <th>Alamat</th>
        <th>Foto</th>
        
        <th>Ubah</th>
        <th>Hapus</th>
        
    </tr>
 </thead>
 <tbody>
    <?php foreach($data_anggota as $baris):?>
        <tr>
            <td><?=$baris['email']?></td>
            <td><?=$baris['nama_lengkap']?></td>
            <td><?=$baris['alamat']?></td>
            <td>
                <img src="<?=base_url('anggota/foto/'.$baris['id'].'.png')?>" style="width:100px" />
            </td>
            <td> <a href="<?=base_url('anggota/edit/') . $baris['id']  ?>">Edit</a> </td>
            <td> 
                <form onsubmit="return confirm('Yakin ke nak di hapus datanye??')" method="post" action="<?=base_url('anggota/hapus')?>">
                    <input type="hidden" name="id" value="<?=$baris['id']?>" />
                    <button>Hapus</button>
                </form>    
            </td>
            
        </tr>
    <?php endforeach;?>    
 </tbody>
</table>