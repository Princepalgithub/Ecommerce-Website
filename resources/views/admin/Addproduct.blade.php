<style>
    .container{
  max-width: 440px;
  padding: 0 20px;
  margin-left: 121px;
  /* margin: 170px auto; */
}
    </style>
@extends('Admin.inc.app')
@section('content')
<div class="container demo">
    <div class="modal left fade" id="exampleModal" tabindex="" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="nav flex-sm-column flex-row">
                       <h3>Add Category</h3>
                       <div class="input-box">
                        <span class="details">Product Title </span>
                        <form id="Addproduct">
                        <input type="text"name="name" id="name">
                        <span  class="erorr" id="first_namerror"></span>
                    </div>
                    <div class="input-box">
                        <span class="details">Slug</span>
                        <input type="text"name="slug" id="slug">
                        <span  class="erorr" id="first_namerror"></span>
                    </div>
                    <div class="input-box">
                        <span class="details">Price</span>
                        <input type="text"name="price" id="price">
                        <span  class="erorr" id="first_namerror"></span>
                    </div>
                    <div class="input-box">
                        <span class="details">Size</span>
                        <input type="text"name="size" id="size">
                        <span  class="erorr" id="first_namerror"></span>
                    </div>
                    <div class="input-box">
                        <span class="details">Product Image</span>
                        <input type="file"name="profile" id="profile">
                        <span  class="erorr" id="first_namerror"></span>
                    </div>
                    <div class="input-box">
                        <span class="details">Description</span>
                        <textarea id="description" name="description"></textarea>
                        <span  class="erorr" id="first_namerror"></span>
                    </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="submit" id="Addproduct_btn" class="btn btn-success">Save</button>
                </form>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection