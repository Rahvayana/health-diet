<x-app-layout>
    <div class="section-header">
        <h1>Admin</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('add-admin') }}"><button class="btn btn-primary">Tambah Admin</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4>Admin Table</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-md">
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Usia</th>
                    <th>Action</th>
                  </tr>
                  @foreach ($users as $user)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->usia}}</td>
                    <td><a href="#" class="btn btn-secondary">Detail</a></td>
                  </tr>
                  @endforeach
                </table>
              </div>
            </div>
            {{-- <div class="card-footer text-right">
              <nav class="d-inline-block">
                <ul class="pagination mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                  </li>
                </ul>
              </nav>
            </div> --}}
          </div>
        </div>
    </div>
</x-app-layout>
