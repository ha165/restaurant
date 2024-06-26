 <!-- ***** Recomendation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Here You Can Make A Recomendation Or Just walkin to our cafe</h2>
                        </div>
                        <p>Donec pretium est orci, non vulputate arcu hendrerit a. Fusce a eleifend riqsie, namei sollicitudin urna diam, sed commodo purus porta ut.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone Numbers</h4>
                                    <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Emails</h4>
                                    <span><a href="#">hello@company.com</a><br><a href="#">info@company.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="{{url('/findMatching')}}" method="post">
                          @csrf
                          <div class="row">
                            <div class="col-lg-12">
                                <h4>Table Recomendation</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <select class="form-control " id="food_id" name="food_id" required>
                                   <option value="">Select Food</option>
                                      @foreach($foods as $food)
                                        <option value="{{ $food->id }}">{{ $food->name }}</option>
                                      @endforeach
                                   </select>
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                              <select class="form-control " id="category_id" name="category_id" required>
                                <option value="">Select Category</option>
                                  @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                  @endforeach
                              </select>
                            </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="price_range" type="text" id="price" placeholder="Enter Amount you wish to spend*" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="rating" type="text" id="rating" placeholder="Enter Prefered rating" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="location" type="text" id="location" placeholder="Preferred Location*" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Make A Recomendation</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Recomendation Area Ends ***** -->