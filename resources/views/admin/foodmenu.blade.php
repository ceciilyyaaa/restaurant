<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    
  @include("admin.admincss")

  </head>
  <body>
    
  <div class="container-scroller">
  @include("admin.navbar")

<div style="position: relative; top: 60px; right: -150px">

    <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

    @csrf

        <div>
            <label>Title</label>
            <input style="color:black;" type="text" name="title" placeholder="
            Name of the food" required>
        </div>

        <div>
            <label>Price</label>
            <input style="color:black;" type="text" name="price" placeholder="
            Food's price" required>
        </div>

        <div>
            <label>Image</label>
            <input type="file" name="image" required>
        </div>

        <div>
            <label>Description</label>
            <input style="color:black" type="text" name="description" placeholder="
            Description" required>
        </div>

        <div>
            <input style="color:orange" type="submit" value="Save">
        </div>

    </form>

    <div>

        <table border="1px">
            <tr bgcolor="navy">
                <th style="padding: 30px">Food Name</th>
                <th style="padding: 30px">Price</th>
                <th style="padding: 30px">Description </th>
                <th style="padding: 30px">Image</th>
                <th style="padding: 30px">Action</th>
                <th style="padding: 30px">Action</th>
                </tr> 

                @foreach ($data as $data)
                <tr align="center" bgcolor="brown">
                    <td>{{$data->title}}</td>
                    <td>{{$data->price}}</td>
                    <td>{{$data->description}}</td>
                    <td><img height="100" width="100" src="/foodimage/{{$data->image}}"></td>
                    <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                    <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>
                </tr>

             @endforeach
        </table>
    </div>

</div>



</div>
  @include("admin.adminscript")
  
  </body>
</html>