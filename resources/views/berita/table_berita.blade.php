@extends('template.table')


@section('content-table')
<!-- Basic Bootstrap Table -->
<div class="card">
  <h5 class="card-header">Table Berita</h5>
  <div class="card-body">
    <a href="/news/create" class="btn btn-primary">Tambah Data Berita</a>
  </div>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Tanggal Upload</th>
          <th>Judul</th>
          <th>Isi</th>
          <th>Nama Kategori</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach($news as $n)
        <tr>
          <td>{{ $n->created_at }}</td>
          <td>{{ $n->judul }}</td>
          <td>{{ $n->isi }}</td>
          <td>{{ $n->nama_kategori }}</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="/news/{{ $n->id }}/edit"
                  ><i class="bx bx-edit-alt me-1"></i> Edit</a
                >
                <form action="/news/{{ $n->id }}" method="POST">
                  @CSRF
                  @method('DELETE')
                  <button class="dropdown-item" type="submit"><i class="bx bx-trash me-1"></i> Delete</button>
                </form>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<!--/ Basic Bootstrap Table -->
@endsection
