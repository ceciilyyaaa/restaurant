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

  <table>
    <tr>
        <td style="padding: 30px;">Name</td>
        <td style="padding: 30px;">Phone</td>
        <td style="padding: 30px;">Address</td>
        <td style="padding: 30px;">Foodname</td>
        <td style="padding: 30px;">Price</td>
        <td style="padding: 30px;">Quantity</td>
        <td style="padding: 30px;">Total Price</td>

    </tr>
@foreach($data as  $data)
    <tr>
        <td>{{$data->name}}</td>
        <td>{{$data->phone}}</td>
        <td>{{$data->address}}</td>
        <td>{{$data->foodname}}</td>
        <td>{{$data->price}}</td>
        <td>{{$data->price}}</td>
        <td>{{$data->quantity}}</td>
        <td></td>

        
    </tr>
    @endforeach
  </table>

</div>
  @include("admin.adminscript")
  
  </body>
</html>