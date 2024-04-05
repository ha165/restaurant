@include('admin.admincss')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2>Search Results</h2>
                 @if($restaurants->isEmpty())
                   <p>No records found.</p>
                @else
                <div class="row">
                    @foreach($restaurants as $restaurant)
                        <div class="col-lg-4 mb-4">
                            <div class="card">
                                <img src="{{ asset($restaurant->image_url) }}" class="card-img-top" alt="Restaurant Image">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $restaurant->name }}</h5>
                                    <p class="card-text">Price Range: {{ $restaurant->price_range }}</p>
                                    <p class="card-text">Location: {{ $restaurant->location }}</p>
                                    <p class="card-text">Rating: {{ $restaurant->rating }}</p>
                                    <a href="#" class="btn btn-primary">View Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
            </div>
            <div class="col-lg-4">
                <h2>You May Also Like</h2>
                @foreach($closestMatches as $match)
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $match->name }}</h5>
                            <p class="card-text">Price Range: {{ $match->price_range }}</p>
                            <p class="card-text">Location: {{ $match->location }}</p>
                            <p class="card-text">Rating: {{ $match->rating }}</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
