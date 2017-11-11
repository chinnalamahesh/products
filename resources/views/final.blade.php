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
  <h2>Combinations</h2>           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sizes</th>
        <th>Combinatons</th>
        <th>Price</th>
        <th>Default Combination</th>
      </tr>
    </thead>
    <tbody>

      @foreach($valueOfAttribute as $attributeValue)
       
       @foreach($attributeId as $attributeIds)

       @foreach($combination as $combinations)
        <tr> 
        <td>{{$attributeIds->attr_name}}</td>
        <td>{{$attributeValue->product_att_quantity}}:::{{$attributeValue->pro_att_value}}</td>
        <td>{{$combinations->price}}</td>
        <td><input type="radio" name="test-name" checked ></td>
        </tr>
     @endforeach
     @endforeach
     @endforeach
    </tbody>

    <tbody>
      
      
      
    </tbody>
  </table>
</div>
</body>
</html>
