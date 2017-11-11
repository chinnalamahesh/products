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
<div align="center" id="checkboxes">
<lable><input type="checkbox" name="" class="check" value="36">Small</lable>
<lable><input type="checkbox" name="" class="check" value="38">Medium</lable>
<lable><input type="checkbox" name="" class="check" value="40">Large</lable>
<lable><input type="checkbox" name="" class="check" value="44">Extra Large</lable>
</div>
<table align="center">
<tr>
<td>Text:</td>
<td><input type="text" name="text" id="text"></td>
</tr>
</table>
<script type="text/javascript">
var $textInput = $('#text');
var $checkBox = $('#checkboxes');

$('input').click(function(){
    populateTextInput();
});
                       
function populateTextInput () {
    // empty text input
    $textInput.val('');
    
    // print out all checked inputs
    $checkBox.find('input:checked').each(function() {
        $textInput.val( $textInput.val() + $(this).val() );
    });
}
</script>
