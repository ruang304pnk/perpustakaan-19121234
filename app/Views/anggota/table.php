<?=$this->extend('template')?>

<?=$this->section('konten')?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Anggota</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Anggota</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Anggota Perpustakaan SMA Keren</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                    
                    <a class="btn btn-primary" href="<?=base_url('anggota/form')?>">Tambah data</a>
                    <table class="mydatatable table table-border table-hover">
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
                                <td> <a href="<?=base_url('anggota/edit/') . $baris['id']  ?>" class="btn btn-warning"><i class='fas fa fa-edit'></i> Edit</a> </td>
                                <td> 
                                    <form onsubmit="return confirm('Yakin ke nak di hapus datanye??')" method="post" action="<?=base_url('anggota/hapus')?>">
                                        <input type="hidden" name="id" value="<?=$baris['id']?>" />
                                        <button class="btn btn-danger"><i class="fa fas fa-trash"></i> Hapus</button>
                                    </form>    
                                </td>
                                
                            </tr>
                        <?php endforeach;?>    
                    </tbody>
                    </table>

              </div>
            </div>
          </div>
        </div>
      </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        $(".mydatatable").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
    });
      
</script>
<?=$this->endSection()?>