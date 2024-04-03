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
    </div> 
    

    <!-- plugins:js -->
  @include('admin.adminscripts') 
  </body>
</html>