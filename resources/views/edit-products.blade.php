<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Products</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="flex-center position-ref full-height">
    <div class="content">
      <div class="title m-b-md">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="col-md-5">
      <div class="form-area">  
        @foreach($editProduct as $editProducts)
        <form role="form" method="post" action="{{ url('products/update')}}">
          {{ csrf_field() }}
          <input type="hidden" name="id" id="id" class="form-control" value="{{ $editProducts->id }}">
          <br style="clear:both">
          <h3 style="margin-bottom: 25px; text-align: center;">Edit Product</h3>
          
          <div class="form-group">
            <input type="text" class="form-control" value="{{$editProducts->name}}" name="name" placeholder="Product Name" >
          </div>
          <div class="form-group">
            <input type="text" class="form-control" value="{{$editProducts->price}}"  name="price" placeholder="Price" >
          </div>
          <div class="form-group">
            <textarea class="form-control" name="description" type="textarea"  placeholder="Product Description" maxlength="140" rows="7">{{$editProducts->description}}</textarea>

          </div>

          <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Update Product</button>
        </form>
         @endforeach
      </div>
    </div>
  </div>

</body>
</html>

