<div class="modal fade" id="productassign{{$row->ibm}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Product Assign</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form id="product_assign_form{{$row->ibm}}">
          {{ csrf_field() }}

          <div hidden id="product_assign_msg{{$row->ibm}}" class="alert alert-success">
            <p></p>
          </div>
          <div hidden id="product_assign_msg_err{{$row->ibm}}" class="alert alert-danger">
            <p></p>
          </div>

          <input type="text" name="hiddenibm" value="{{$row->ibm}}" hidden>
          <div class="form-group">
            <label for="product" class="col-form-label">Product Name:</label>
            <select name="product" class="form-control" required>
              @if($row->product_id == NULL)
               <option value="" disabled selected >Select Product</option>
              @else
               <option value="{{$row->product_id}}">{{$row->product_name}}</option>
              @endif
              @foreach($products as $product )
                @if($row->product_id != $product->product_id)
                 <option value="{{$product->product_id}}">{{$product->product_name}}</option>
                @endif
              @endforeach
            </select>
          </div>
          
        </form>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="#" id="product_assign_btn{{$row->ibm}}" onclick="product_ajax('product_assign_form{{$row->ibm}}','{{$row->ibm}}');" class="btn btn-primary">Update</a>
        {{-- <button type="button" class="btn btn-primary">Send message</button> --}}
      </div>
    </div>
  </div>
</div>