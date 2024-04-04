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
        <h1>New Restaurants</h1>
    <form action="{{url('uploadrest')}}" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Name</label>
              <input type="text" class="form-control" id="inputEmail4" name="name" placeholder="Enter Name">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Description</label>
              <input type="text" class="form-control" id="inputPassword4" name="description" placeholder="Description">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Price Range</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="range" name="price_range">
          </div>
          <div class="form-group">
            <label for="inputAddress2">Location</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Location" name="location">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">Rating</label>
              <input type="text" class="form-control" id="inputCity"  name="rating">
            </div>
            <div class="form-group col-md-4">
              <label for="">Category</label>
              <select class="form-control " id="category_id" name="category_id" required>
                <option value="">Select Category</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Image</label>
              <input type="file" class="form-control" id="inputZip" name="image_url">
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