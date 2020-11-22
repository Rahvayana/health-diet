<x-app-layout>
    <div class="section-header">
        <h1>Dashboard</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active">Dashboard</div>
        </div>
    </div>

    <div class="section-body">
        <form action="{{ route('update-diet',$diet->id) }}" method="POST">@csrf
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                    <div class="card-header">
                        <h4>Update Tips</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                        <label>Golongan</label>
                        <input type="text" name="golongan" class="form-control" value="{{$diet->golongan}}">
                        </div>
                        <div class="form-group">
                        <label>Tips Panduan Diet</label>
                        <textarea name="panduan" id="panduan" class="form-control"  rows="30">{{$diet->text}}</textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
                </div>
        </form>
    </div>
</x-app-layout>
<script>
    CKEDITOR.replace( 'panduan' );
  </script>