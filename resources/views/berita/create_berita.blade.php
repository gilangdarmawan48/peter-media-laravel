@extends('template.form')

@section('content-form')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Data Penulis</h4>

  <!-- Basic Layout & Basic with Icons -->
  <div class="row">
    <!-- Basic with Icons -->
    <div class="col-xxl">
      <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          <h5 class="mb-0">Tambah Data Berita</h5>
        </div>
        <div class="card-body">
          <form action="/news" method="POST">
            @CSRF
            {{-- <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">ID Penulis</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <input
                    type="text"
                    class="form-control"
                    id="basic-icon-default-fullname"
                    placeholder="Judul"
                    aria-label="John Doe"
                    aria-describedby="basic-icon-default-fullname2"
                    name="writers_id"
                  />
                </div>
              </div>
            </div> --}}
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">ID Kategori</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <input
                    type="text"
                    class="form-control"
                    id="basic-icon-default-fullname"
                    placeholder="Judul"
                    aria-label="John Doe"
                    aria-describedby="basic-icon-default-fullname2"
                    name="categories_id"
                  />
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Judul</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <input
                    type="text"
                    class="form-control"
                    id="basic-icon-default-fullname"
                    placeholder="Judul"
                    aria-label="John Doe"
                    aria-describedby="basic-icon-default-fullname2"
                    name="judul"
                  />
                </div>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Isi</label>
              <div class="col-sm-10">
                <div class="input-group input-group-merge">
                  <textarea rows="10" class="form-control" aria-label="With textarea" placeholder="Isi berita" name="isi"></textarea>
                </div>
              </div>
            </div>
            <div class="row justify-content-end">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Send</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection