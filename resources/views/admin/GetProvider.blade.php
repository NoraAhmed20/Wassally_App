<<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>user</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1>Show Data</h1>
    





<table class="table table-success table-striped">
<thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">user_id</th>
      <th scope="col">ID_pic</th>
      <th scope="col">Profile_pic</th>
      <th scope="col">phone</th>
      <th scope="col">Delete</th>
      
      </tr>


  </thead>
  <tbody>
@foreach ($data as $item)
 <tr>
      <th scope="row">{{$item->user['name']}}</th>
      <td>{{$item['user_id']}}</td>
      <td><img src="\usersImgs\{{$item['ID_pic']}}" width="50px"/></td>
      <td><img src="\usersImgs\{{$item['Profile_pic']}}" width="50px" /></td>
      <td>{{$item['phone']}}</td>
      <th>
        <form method="POST" action="{{route('deleteProvider',['provider'=>$item])}}">
         @csrf 
         @method('DELETE') 
         <input type="submit" name="submit" value="DELETE" class="btn btn-success" >
       </form> 
       </th> 
</tr>
        @endforeach
    </tbody>
</table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  
</html>