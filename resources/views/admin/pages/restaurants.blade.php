<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>
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
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class=" me-3 my-3 text-end">
                            <a class="btn bg-gradient-dark mb-0" href=""> New
                                Restaurant</a>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table id="userstable" class="datatable table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ID
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Name</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Category</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Price Range</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Location</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Rating</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                description</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Image</th>
                                            <th class="text-secondary opacity-7">Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($restaurants as $restaurant )
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="mb-0 text-sm">{{$restaurant->id}}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0 text-wrap">{{$restaurant->name}}</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0 text-wrap">{{$restaurant->Category->name}}</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0 text-wrap">{{$restaurant->price_range}}</p>
                                            </td>
                                              <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0 text-wrap">{{$restaurant->location}}</p>
                                            </td>
                                              <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0 text-wrap">{{$restaurant->rating}}</p>
                                            </td>
                                              <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0 text-wrap">{{$restaurant->description}}</p>
                                            </td>
                                              <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0 text-wrap">{{$restaurant->image_url}}</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">
                                                    <a rel="tooltip" class="btn btn-success btn-link" href="" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>                                              
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <form action="" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"  class="btn btn-danger btn-link"
                                                        data-original-title="Delete" title="Delete">
                                                        <i class="material-icons">close</i>
                                                        <div class="ripple-container"></div>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    <!-- plugins:js -->
  @include('admin.adminscripts') 
  </body>
</html>
</body>
</html>

