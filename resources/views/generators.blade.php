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
  <style type="text/css">
  * { margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box;
  box-sizing: border-box; }

ul { list-style-type: none; }

a { color: #b63b4d; text-decoration: none; }

.accordion .link {
  cursor: pointer;
  display: block;
  padding: 5px 5px 5px 5px;
  color: #4D4D4D;
  font-size: 14px;
  font-weight: 700;
  border-bottom: 1px solid #CCC;
  position: relative;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.submenu { font-size: 14px; border-bottom: 1px solid #ccc;}

</style>
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
  <!--         
  <div align="center" id="checkboxes">
     @foreach($attributes as $attribute) 
<lable><input type="checkbox" name="small" class="check" value="{{$attribute->att_id}}">{{$attribute->attr_name}}</lable>
@endforeach
</div> -->

<!-- <div align="center" id="checkboxes">

  @foreach($gen as $key => $class)
            <input type="checkbox" name="selects[]" class="check" value="{{$key}}">{{$class}}
            @endforeach

</div> -->
 
</div>


 
<form role="form" method="post" action="">
  {{ csrf_field() }}
<input type="text" class="form-control" name="text" id="text">
<div class="col-md-2">
<div id="checkboxes" style="border: 1px solid #ccc;
    padding: 0px 5px 0px 5px;">
<ul id="accordion" class="accordion">
  <li>
    <div class="link"><i class="fa fa-database"></i>Sizes<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
   
<lable><input type="checkbox" name="selects[]" class="check" value="1">S</lable><br />
<lable><input type="checkbox" name="selects[]" class="check" value="2">M</lable><br />
<lable><input type="checkbox" name="selects[]" class="check" value="3">L</lable><br />

  </ul>
  </li>
  <li>
    <div class="link"><i class="fa fa-mobile"></i>Colors<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
<lable><input type="checkbox" name="selects[]" class="check" value="4">Blue</lable><br />
<lable><input type="checkbox" name="selects[]" class="check" value="5">Red</lable><br />
<lable><input type="checkbox" name="selects[]" class="check" value="6">Green</lable><br />
    </ul>
  </li>

</ul>
</div>
</div>
<button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Generate</button>
</form>

<script type="text/javascript">
  $(function() {
  var Accordion = function(el, multiple) {
    this.el = el || {};
    this.multiple = multiple || false;

    var links = this.el.find('.link');
 
    links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
  }

  Accordion.prototype.dropdown = function(e) {
    var $el = e.data.el;
      $this = $(this),
      $next = $this.next();

    $next.slideToggle();
    $this.parent().toggleClass('open');

    if (!e.data.multiple) {
      $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
    };
  } 

  var accordion = new Accordion($('#accordion'), false);
});


</script>

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
        $textInput.val( $textInput.val() + $(this).val() + "," );
    });

     $color.find('input:checked').each(function() {
        $textInput.val( $textInput.val() + $(this).val() );
    });
}
</script>

</body>
</html>
