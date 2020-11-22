<x-app-layout>
<div class="section-header">
        <h1>Diet</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Diet</a></div>
            <div class="breadcrumb-item">Detail</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Detail Golongan Darah: {{$diet->golongan}}</h4>
                </div>
                <div class="card-body">
                  {!!$diet->text!!}
                </div>
              </div>
            </div>
          </div>
    </div>
</x-app-layout>