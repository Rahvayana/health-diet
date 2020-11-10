<x-app-layout>
    <div class="section-header">
        <h1>Diet</h1>
        <div class="section-header-breadcrumb">
            <a href="{{ route('add-diet') }}"><div class="breadcrumb-item active btn btn-primary">Tambah Data</div></a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4>Tips Diet Table</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-md">
                  <tr>
                    <th>#</th>
                    <th>Gol Darah</th>
                    <th>Action</th>
                  </tr>
                  @foreach ($diets as $diet)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$diet->golongan}}</td>
                    <td><a href="#" class="btn btn-secondary">Detail</a></td>
                  </tr>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
</x-app-layout>
