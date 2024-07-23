<div class="container">
<table class="table table-striped" style="margin-left: 124px;" border="0" cellspacing="2">
<button id="addproduct_btn"class="dt-button add-new btn btn-primary ms-n1" tabindex="0" aria-controls="DataTables_Table_0" type="button"  data-toggle="modal" data-target="#exampleModal"><span><i class="mdi mdi-plus me-0 me-sm-1"></i><span class="d-none d-sm-inline-block">Add Category</span></span></button>
        <tr>
            <th>S.no</th>
            <th>Product</th>
            <th>Product Name</th>
            <th>prices</th>
            <th>Size</th>
            <th>Description</th>
            <th>Action</th>  
        </tr>
        <tbody>
             <?php
             $i=1;
             ?>
           @foreach($data as $val)
            <tr>
                <td><?php echo $i?></td>
                <td><img src="{{ asset('Addproduct/' . $val->profile) }}" width=50rem height="50rem"></td>
                <td>{{$val->name}}</td>
                <p><td>{{$val->price}}</td>
                <td>{{$val->size}}</td>
                <td>{{$val->description}}</td>
                <?php 
              $i++;
              ?>  
                @endforeach
            </tbody>
</table>
</div>
