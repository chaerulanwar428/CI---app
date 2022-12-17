<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
        <div class="card-header">
            Form Tambah data mahasiswa
        </div>
        <div class="card-body">
            <?php if(validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors();?>  <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
            <?php endif ; ?>
            <form action="" method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="nim">Nim</label>
                <input type="text" class="form-control" id="nim" name="nim">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
            <option value="ilmu komputer">Ilmu Komputer</option>
            <option value="ilmu kedokteran">Ilmu Kedokteran</option>
            <option value="tehnik sipil">Tehnik Sipil</option>
            <option value="tehnik mesin">Tehnik Mesin</option>
            <option value="sastra rusia">Sastra Rusia</option>
            </select>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
            </form>
            </div>
        </div>
        </div>

    </div>
</div>