<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.admincss')
  </head>
  <body>
     <div class="container-scroller">
      @include("admin.navbar")  
       <div class="container-fluid py-4">
        <h1>New Food</h1>
    <form action="{{url('/uploadfood')}}" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Name</label>
              <input type="text" class="form-control" id="inputEmail4" name="name" placeholder="Enter Name">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
       </div>
    </div> 
    

    <!-- plugins:js -->
  @include('admin.adminscripts') 
  </body>
</html>