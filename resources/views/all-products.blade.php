<!DOCTYPE html>
<html lang="en">
<head>
  <title>All Products</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  {{-- <link rel="styleeheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}

  <!-- icheck checkboxes -->
  <link rel="stylesheet" href="{{ asset('icheck/square/yellow.css') }}">
  {{-- <link rel="stylesheet" href="https://raw.githubusercontent.com/fronteed/icheck/1.x/skins/square/yellow.css"> --}}

  <!-- toastr notifications -->
  {{-- <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css') }}"> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


  <!-- Font Awesome -->
  {{-- <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}"> --}}
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script>
  // When the browser is ready...
  $(function() {

    $(".edit_form").validate({
    });
    $(".add_form").validate({
    });
  });
  
  function deleteapplies(id) {
    if (confirm('Are you sure you want to delete?')) {
      $.ajax({
        type: "GET",
        url: "{{ URL::to('products/delete') }}" + "/" + id,
        success: function(message) {
          window.location.href = "{{ URL::to('products') }}";
        }
      });
    }
  }
</script>
</head>
<body>

<div class="container">
  <h2>All Products</h2>           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($showProduct as $showProducts)
      <tr>
        <td><a href="{{ url ('product',$showProducts->id)}}">{{$showProducts->name}}</td>
        <td>{{$showProducts->price}}</td>
        <td>{{$showProducts->description}}</td>
        <td>       
              <a data-toggle="modal"  href="{{ url('products/edit',$showProducts->id)}}">  <i class="fa fa-fw fa-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i> </a> 
              <a id="delete_mgp" href="javascript:deleteapplies({{ $showProducts->id }});" > <i class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete"></i></a>

            </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.1/js/bootstrap.min.js"></script>

  {{-- <script type="text/javascript" src="{{ asset('toastr/toastr.min.js') }}"></script> --}}
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  
  <script type="text/javascript" src="{{ asset('icheck/icheck.min.js') }}"></script>
</body>
</html>
