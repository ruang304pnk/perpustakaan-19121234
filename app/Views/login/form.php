
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | Log in (v2)</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="<?=base_url()?>/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="<?=base_url()?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">


<link rel="stylesheet" href="<?=base_url()?>/plugins/toastr/toastr.min.css">
<link rel="stylesheet" href="<?=base_url()?>/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

<link rel="stylesheet" href="<?=base_url()?>/dist/css/adminlte.min.css?v=3.2.0">
<script nonce="99f55a13-9016-4fc1-8639-16a1153622de">(function(w,d){!function(bb,bc,bd,be){bb[bd]=bb[bd]||{};bb[bd].executed=[];bb.zaraz={deferred:[],listeners:[]};bb.zaraz.q=[];bb.zaraz._f=function(bf){return async function(){var bg=Array.prototype.slice.call(arguments);bb.zaraz.q.push({m:bf,a:bg})}};for(const bh of["track","set","debug"])bb.zaraz[bh]=bb.zaraz._f(bh);bb.zaraz.init=()=>{var bi=bc.getElementsByTagName(be)[0],bj=bc.createElement(be),bk=bc.getElementsByTagName("title")[0];bk&&(bb[bd].t=bc.getElementsByTagName("title")[0].text);bb[bd].x=Math.random();bb[bd].w=bb.screen.width;bb[bd].h=bb.screen.height;bb[bd].j=bb.innerHeight;bb[bd].e=bb.innerWidth;bb[bd].l=bb.location.href;bb[bd].r=bc.referrer;bb[bd].k=bb.screen.colorDepth;bb[bd].n=bc.characterSet;bb[bd].o=(new Date).getTimezoneOffset();if(bb.dataLayer)for(const bo of Object.entries(Object.entries(dataLayer).reduce(((bp,bq)=>({...bp[1],...bq[1]})),{})))zaraz.set(bo[0],bo[1],{scope:"page"});bb[bd].q=[];for(;bb.zaraz.q.length;){const br=bb.zaraz.q.shift();bb[bd].q.push(br)}bj.defer=!0;for(const bs of[localStorage,sessionStorage])Object.keys(bs||{}).filter((bu=>bu.startsWith("_zaraz_"))).forEach((bt=>{try{bb[bd]["z_"+bt.slice(7)]=JSON.parse(bs.getItem(bt))}catch{bb[bd]["z_"+bt.slice(7)]=bs.getItem(bt)}}));bj.referrerPolicy="origin";bj.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(bb[bd])));bi.parentNode.insertBefore(bj,bi)};["complete","interactive"].includes(bc.readyState)?zaraz.init():bb.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>
<body class="hold-transition login-page">
<div class="login-box">

<div class="card card-outline card-primary">
<div class="card-header text-center">
<a href="<?=base_url()?>/" class="h1"><b>e-</b>Perpustakaan</a>
</div>
<div class="card-body">
<p class="login-box-msg">Masuk ke sistem informasi perpustakaan</p>

<form action="<?=base_url()?>/login" method="post">
<div class="input-group mb-3">
<input type="email" name="email" class="form-control" placeholder="Surel">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-envelope"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input type="password" name="katasandi" class="form-control" placeholder="Kata Sandi">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>
<div class="row">
 

<div class="col-4">
<button type="submit" class="btn btn-primary btn-block">Masuk</button>
</div>

</div>
</form>
 

<p class="mb-1">
<a href="#">Lupa Password</a>
</p>
<p class="mb-0">
<a href="#" class="text-center">Daftar Anggota</a>
</p>
</div>

</div>

</div>


<script src="<?=base_url()?>/plugins/sweetalert2/sweetalert2.min.js"></script>

<script src="<?=base_url()?>/plugins/jquery/jquery.min.js"></script>

<script src="<?=base_url()?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?=base_url()?>/dist/js/adminlte.min.js?v=3.2.0"></script>

<script src="<?=base_url()?>/plugins/toastr/toastr.min.js"></script>
<script>
    $(function(){
        
    <?php
        if(session()->getFlashdata('pesan') != null){
        ?>
            swal.fire({
                icon: 'warning',
                title: '<?=session("pesan")?>'
            }) 
    <?php 
        }
    ?>

    });
</script>

</body>
</html>

 