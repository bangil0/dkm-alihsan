<div class="section container" style="margin-top: 75px;">
    <h3 class="d-flex justify-content-between">Dashboard
      <a href="#" class="btn btn-success shadow" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i>
        Tambah</a>
    </h3>
    <hr>
    <!-- Modal -->
    <div class="modal fade" id="add" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/infaq/add" method="post">
              <label for="">Jumlah Nominal</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Rp</span>
                </div>
                <input type="number" class="form-control" required autofocus min="1">
              </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Simpan</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Edit Modal -->
    <div class="modal fade" id="edit" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="/infaq/add" method="post">
              <label for="">Jumlah Nominal</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Rp</span>
                </div>
                <input type="number" class="form-control" id="edit-field" required autofocus>
              </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal delete -->
    <div class="modal fade" id="delete" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p id="data-warning">Hapus data 2 Juli 2020 Rp70000?</p>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn btn-primary" id="hapus-btn">Ya</a>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
          </div>
        </div>
      </div>
    </div>
    <div class="alert alert-success">
      Data berhasil ditambahkan
    </div>
    <div class="alert alert-warning">
      Data berhasil diperbaharui
    </div>
    <div class="alert alert-danger">
      Data berhasil dihapus
    </div>
    <table class="table table-bordered">
      <thead class="thead-light">
        <tr>
          <th class="small"><i class="fa fa-calendar fa-fw"></i> Tanggal</th>
          <th class="small"><i class="fa fa-money fa-fw"></i> Nominal</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1 Juli 2020</td>
          <td>Rp645.000</td>
          <td class="text-center">
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit"  data-id="5" data-date="5 Juli 2020" data-money="90000"><i class="fa fa-pencil fa-fw"></i></button>
              <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete" data-id="5" data-date="5 Juli 2020" data-money="90000"><i class="fa fa-trash  fa-fw"></i></button>
            </div>
          </td>
        </tr>
        
      </tbody>
    </table>
    <nav class="justify-content-center d-flex">
      <ul class="pagination">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active" aria-current="page">
          <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
  </div>