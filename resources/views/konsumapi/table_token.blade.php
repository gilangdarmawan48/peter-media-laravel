@extends('template.table')

@section('content-table')

<div class="card">
    <h5 class="card-header">Table Data Api</h5>
    <div class="card-body">
      <a href="/projects/apiwithkey/create" class="btn btn-primary">Tambah Data Api</a>
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>Judul</th>
            <th>Isi</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          
          <tr>
            <td>{{ $responseBody->title }}</td>
            <td>{{ $responseBody->body }}</td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href=""
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                  >
                  <form action="{{ route('apiWithKeyDelete', $responseBody->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="dropdown-item" type="submit"><i class="bx bx-trash me-1"></i> Delete</button>
                  </form>
                </div>
              </div>
            </td>
          </tr>
          
        </tbody>
      </table>
    </div>
</div>

@endsection