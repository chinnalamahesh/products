<!DOCTYPE html>
<html lang="en">
<head>
  <title>Generators</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <style type="text/css">
  
  @import "compass/css3";

.table-editable {
  position: relative;
  
  .glyphicon {
    font-size: 20px;
  }
}

.table-remove {
  color: #700;
  cursor: pointer;
  
  &:hover {
    color: #f00;
  }
}

.table-up, .table-down {
  color: #007;
  cursor: pointer;
  
  &:hover {
    color: #00f;
  }
}

.table-add {
  color: #070;
  cursor: pointer;
  position: absolute;
  top: 8px;
  right: 0;
  
  &:hover {
    color: #0b0;
  }
}
</style>
<meta charset=utf-8 />
</head>
<body>
<div class="container">
  <h2>Combinations</h2>           
  <table class="table">
    <thead>
      <tr>
        <th>Sizes</th>
         <th>Quantity</th>
        <th>Price</th>
        <th>Default Combination</th>
      </tr>
    </thead>
    <tbody>

      {{ $attributeId[0]->attr_name }}

      <!-- @foreach($valueOfAttribute as $attributeValue) -->
       
      <!--  @foreach($attributeId as $attributeIds) -->

       
        <tr> 
        @foreach($combination as $combinations)
        <td>{{$attributeIds->attr_name}}</td>
        <!-- <td>{{$attributeValue->pro_att_value}}</td> -->
        <td contenteditable="true">{{$attributeValue->product_att_quantity}}</td>
        <td contenteditable="true">{{$combinations->price}}</td>
        <td><input type="radio" name="test-name" checked ></td>
        </tr>
     @endforeach
     <!-- @endforeach -->
    <!--  @endforeach -->
    </tbody>

    <tbody>
      
      
      
    </tbody>
  </table>
</div>
</body>
</html>
