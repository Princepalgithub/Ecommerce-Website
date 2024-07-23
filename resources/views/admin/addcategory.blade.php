@extends('Admin.inc.app')
@section('content')
<div class="container">
<div class="row">
              <div class="col-md-6 grid-margin stretch-card" style="margin-left:370px;">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Default form</h4>
                    <form class="forms-sample" method="POST">
                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Category</label>
                        <input type="text" class="form-control" id="category_name" placeholder="category">
                      </div>
                      <button type="button" class="btn btn-gradient-primary me-2 btn btn-info" id="category_btn">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
</div>

@endsection