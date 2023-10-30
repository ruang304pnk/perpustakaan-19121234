 
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

<div class="col-md-12">
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Data Anggota</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form enctype="multipart/form-data" method="post" action="<?=base_url('anggota')?>">
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" name="email" value="<?=$data['email'] ?? ''?>" id="exampleInputEmail1" placeholder="Enter email">
        <span><?=$validation?->getError('email') ?? ''?></span>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Kata Sandi</label>
        <input type="password" class="form-control" name="katasandi" value="<?=$data['katasandi'] ?? ''?>" id="exampleInputPassword1" placeholder="Password">
        <span><?=$validation?->getError('katasandi') ?? ''?></span>
      </div>
      <div class="form-group">
        <label for="exampleInputNamaLengkap">Nama Lengkap</label>
        <input type="text" class="form-control" name="nama_lengkap" value="<?=$data['nama_lengkap'] ?? ''?>" id="exampleInputNamaLengkap" placeholder="Nama Lengkap">
        <span><?=$validation?->getError('nama_lengkap') ?? ''?></span>
      </div>
      <div class="form-group">
        <label for="exampleInputAlamat">Alamat</label>
        <input type="text" class="form-control" name="alamat" value="<?=$data['alamat'] ?? ''?>" id="exampleInputAlamat" placeholder="Alamat">
      </div>
      <div class="form-group">
        <label for="exampleInputFile">Foto</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="foto" id="exampleInputFile">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>
          <div class="input-group-append">
            <span class="input-group-text">Upload</span>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <input type="hidden" name="id" value="<?=$data['id'] ?? ''?>" />
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </form>
</div>

</div>

<?=$this->endSection()?>