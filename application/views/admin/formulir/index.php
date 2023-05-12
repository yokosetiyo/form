<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h3><?= $_title ?></h3>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <i data-feather="home"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><?= $_title ?></li>
                    <li class="breadcrumb-item active"><?= $_sub_title ?></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="judul_halaman">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Form Biodata</h5>
                </div>
                <div class="card-body">
                    <form class="theme-form" id="form_biodata">
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-6">
                                <label class="col-form-label pt-0" for="nama">Nama Lengkap</label>
                                <input type="hidden" id="id_biodata" name="id_biodata" value="">
                                <input class="form-control" id="nama" type="text" name="nama" placeholder="Isikan nama lengkap Anda" required>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="col-form-label pt-0" for="jenis_kelamin">Jenis Kelamin</label>
                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                    <option value=""></option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-6">
                                <label class="col-form-label pt-0" for="tempat_lahir">Tempat Lahir</label>
                                <input class="form-control" id="tempat_lahir" type="text" name="tempat_lahir" placeholder="Isikan tempat lahir Anda" required>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="col-form-label pt-0" for="tanggal_lahir">Tanggal Lahir</label>
                                <!-- <input class="form-control" id="tanggal_lahir" type="date" name="tanggal_lahir"> -->
                                <input class="datepicker-here form-control" id="tanggal_lahir" type="text" name="tanggal_lahir" placeholder="Isikan tanggal lahir" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-6">
                                <label class="col-form-label pt-0" for="no_hp">No HP/WA</label>
                                <input class="form-control" id="no_hp" type="text" name="no_hp" placeholder="Isikan tempat lahir Anda" required>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="col-form-label pt-0" for="email">Email</label>
                                <input class="form-control" id="email" type="email" name="email" placeholder="Isikan email Anda" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-6">
                                <label class="col-form-label pt-0" for="pendidikan">Pendidikan Terakhir</label>
                                <select class="form-control" id="pendidikan" name="pendidikan" required>
                                    <option value=""></option>
                                    <option value="SMA">SMA</option>
                                    <option value="SMK">SMK</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <label class="col-form-label pt-0" for="jurusan">Jurusan</label>
                                <input class="form-control" id="jurusan" type="text" name="Jurusan" placeholder="Isikan jurusan Anda" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label pt-0" for="alamat">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" placeholder="Isikan alamat lengkap Anda" required></textarea>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary" id="btn_submit" type="submit">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Daftar Biodata</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display datatables" id="example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat, tanggal lahir</th>
                                <th>Kontak</th>
                                <th>Pendidikan</th>
                                <!-- <th>Alamat</th> -->
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>