<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>


     <base href="/public">
    @include("admin.admincss")
       
    
  </head>
  <body>
    <div class="container-scroller">


       @include("admin.navbar")

       <div style="position: relative; top: 60px; right: -150px">
        <form action="{{url('/update', $data->id)}}" method="post" enctype="multipart/form-data">

          @csrf

          <div>
            <lable>Title</lable>
            <input style="color: blue;"type="text" name="title" value="{{$data->title}}" required>
          </div>

          <div>
            <lable>Price</lable>
            <input style="color: blue;"type="num" name="price" value="{{$data->price}}" required>
          </div>
          
          <div>
            <lable>Description</lable>
            <input style="color: blue;" type="text" name="description" value="{{$data->description}}" required>
          </div>
          <div>
            <lable>old Image</lable>
            <img height="200" width="200" src="/foodimage/{{$data->image}}">
          </div>
          <div>
            <lable>New Image</lable>
            <input type="file" name="image" required>
          </div>
          <div>
            <input style="color: rgb(189, 189, 199)" type ="submit" value="Save">
          </div>
        </form>

        <div>

    </div>
       @include("admin.adminscript")


    
  </body>
</html>