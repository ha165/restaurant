   <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Restaurant</h6>
                        <h2>Our selection of Quality Restaurants</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    @foreach ($rest as $rests)
                        <div class="item">
                         <div style="background-image:url(/storage/{{$rests->image_url}})" class='card'>
                            <div class="price"><h6>{{$rests->price_range}}</h6></div>
                            <div class='info'>
                              <h1 class='title'>{{$rests->name}}</h1>
                              <h1 class='description'>Location:{{$rests->location}}</h1>
                              <p class='description'>{{$rests->description}}</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Recomendation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->