<!DOCTYPE html>
<html lang="en">
<head>
  <title>All Products</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
<meta charset=utf-8 />
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
      </tr>
    </thead>
    <tbody>
      @foreach($generators as $generator)
      <tr>
        <td>{{$generator->name}}</td>
        <td>{{$generator->price}}</td>
        <td>{{$generator->description}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<div class="container">
  <h2>Select Sizes</h2> 
          
  <div align="center" id="checkboxes">
     @foreach($attributes as $attribute) 
<lable><input type="checkbox" name="small" class="check" value="1">{{$attribute->attr_name}}</lable>
<lable><input type="checkbox" name="medium" class="check" value="2,">Medium</lable>
<lable><input type="checkbox" name="large" class="check" value="3,">Large</lable>
<lable><input type="checkbox" name="extralarge" class="check" value="4">Extra Large</lable>
@endforeach
</div>
 
</div>
 <div class="container">
   <h2>Select Color</h2>           
  <div align="center" id="color">
<lable><input type="checkbox" name="" class="check" value="1">Orange</lable>
<lable><input type="checkbox" name="" class="check" value="2">red</lable>
<lable><input type="checkbox" name="" class="check" value="3">green</lable>
<lable><input type="checkbox" name="" class="check" value="4">yellow</lable>
</div>

</div> 

<form role="form" method="post" action="">
  {{ csrf_field() }}
<input type="text" class="form-control" name="text" id="text">
<button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Generate</button>
</form>
<script type="text/javascript">
var $textInput = $('#text');
var $checkBox = $('#checkboxes');
var $color = $('#color');
var $textcolor = $('#text1');
$('input').click(function(){
    populateTextInput();
});
                       
function populateTextInput () {

    // empty text input
    $textInput.val('');
     //$textcolor.val('');
    // print out all checked inputs
    $checkBox.find('input:checked').each(function() {
        $textInput.val( $textInput.val() + $(this).val() );
    });
     $color.find('input:checked').each(function() {
        $textInput.val( $textInput.val() + $(this).val() );
    });
}
</script>

</body>
</html>
