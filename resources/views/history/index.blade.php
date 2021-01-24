<x-app-layout>
    <div class="section-header">
        <h1>History</h1>
        <div class="section-header-breadcrumb">
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4>History Table</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-md">
                  <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Usia</th>
                    <th>Berat</th>
                    <th>Indeks/BMR</th>
                    <th>Hasil/Jml Kalori</th>
                    <th>Keterangan</th>
                  </tr>
                  @foreach ($histories as $history)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$history->name}}</td>
                    <td>{{$history->usia}}</td>
                    <td>{{$history->berat}}</td>
                    <td>{{$history->indeks}}</td>
                    <td>{{$history->hasil}}</td>
                    <td>{{$history->keterangan}}</td>
                  </tr>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
</x-app-layout>
