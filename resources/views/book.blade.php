@extends('layout.master')

@section('title' , 'Booking')

<br><br>

@section('page')
    
<section class="ftco-section ftco-no-pb ftco-no-pt" style="margin-top: 5.5rem;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-5">
                <div class="search-wrap-1 search-wrap-notop ftco-animate p-4">
                    <form action="/search" method="post" class="search-property-1">
                        @csrf
                        <div class="row">
                            <div class="col-lg align-items-end">
                                <div class="form-group">
                                    <label for="#">Destination</label>
                                    <div class="form-field">
                                        <div class="icon"><span class="ion-ios-search"></span></div>
                                        <input type="text" class="form-control" placeholder="Search place" name="search">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg align-items-end">

                            </div>

                            <div class="col-lg align-self-end">
                                <div class="form-group">
                                    <div class="form-field">
                                        <input type="submit" value="Search" class="form-control btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('./myimg/tourist-visiting-ancient-city-turkey.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
          <h1 class="mb-3 bread">OUR TOURS</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Book now <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <br> <br>    


  <section class="ftco-section ftco-no-pt">
      <div class="container">
          <div class="row justify-content-center pb-4">
        <div class="col-md-12 heading-section text-center ftco-animate">
          <h2 class="mb-4"> OUR TOURS </h2>
        </div>
      </div>
      <div class="row">
          <div class="col-md-4 ftco-animate">
              <div class="project-wrap">
                  <a href="petradetails" class="img" style="background-image: url(myimg/petra.jpg);"></a>
                  <div class="text p-4">
                      <span class="price">10JOD/person</span>
                      <span class="days">1 Day Tour</span>
                      <h3><a href="#">Petra, Ma'an</a></h3>
                      
                      <ul>
                          <li><span class="flaticon-shower"></span>0</li>
                          <li><span class="flaticon-king-size"></span>0</li>
                          <li><span class="flaticon-mountains"></span>Near Mountain</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-md-4 ftco-animate">
              <div class="project-wrap">
                  <a href="wadidetails" class="img" style="background-image: url(myimg/w-rum.jpg);"></a>
                  <div class="text p-4">
                      <span class="price">10JOD/person</span>
                      <span class="days">1 Day Tour</span>
                      <h3><a href="#">Wadi Rum, Aqaba</a></h3>
                          <ul>
                          <li><span class="flaticon-shower"></span>0</li>
                          <li><span class="flaticon-king-size"></span>0</li>
                          <li><span class="flaticon-mountains"></span>Near Mountain</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-md-4 ftco-animate">
              <div class="project-wrap">
                  <a href="aqabadetails" class="img" style="background-image: url(myimg/aqC.jpg);"></a>
                  <div class="text p-4">
                      <span class="price">3JOD/person</span>
                      <span class="days">7hour Tour</span>
                      <h3><a href="#">Red sea, Aqaba</a></h3>
                      <ul>
                          <li><span class="flaticon-shower"></span>1</li>
                          <li><span class="flaticon-king-size"></span>0</li>
                          <li><span class="flaticon-sun-umbrella"></span>Beach</li>
                      </ul>
                  </div>
              </div>
          </div>

          <div class="col-md-4 ftco-animate">
              <div class="project-wrap">
                  <a href="ammandetails" class="img" style="background-image: url(myimg/amman-jordan.jpg);"></a>
                  <div class="text p-4">
                      <span class="price">50JOD/person</span>
                      <span class="days">5 Days Tour</span>
                      <h3><a href="#">Amman, Jordan</a></h3>
                      <ul>
                          <li><span class="flaticon-shower"></span>2</li>
                          <li><span class="flaticon-king-size"></span>3</li>
                          <li><span class="flaticon-mountains"></span>Near Mountain</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-md-4 ftco-animate">
              <div class="project-wrap">
                  <a href="ummdetails" class="img" style="background-image: url(myimg/thumbs_b2_311f22c55a8405b4512844093d34b4f9.jpg);"></a>
                  <div class="text p-4">
                      <span class="price">15JOD/person</span>
                      <span class="days">1 Day Tour</span>
                      <h3><a href="#">Umm Qais, Irbid</a></h3>
                      
                      <ul>
                          <li><span class="flaticon-shower"></span>2</li>
                          <li><span class="flaticon-king-size"></span>3</li>
                          <li><span class="flaticon-mountains"></span>Near Mountain</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-md-4 ftco-animate">
              <div class="project-wrap">
                  <a href="deaddetails" class="img" style="background-image: url(myimg/deadS.jpg);"></a>
                  <div class="text p-4">
                      <span class="price">30JOD/person</span>
                      <span class="days">2 Days Tour</span>
                      <h3><a href="#">Dead sea</a></h3>
                  
                      <ul>
                          <li><span class="flaticon-shower"></span>2</li>
                          <li><span class="flaticon-king-size"></span>2</li>
                          <li><span class="flaticon-sun-umbrella"></span> Beach</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      </div>
      
  </section> --}}


    @foreach ($trips as $trip)
    <div style="display: flex;flex-wrap:wrap;">
    <div class="row">
        <div class="col-md-4 ftco-animate">
            <div class="project-wrap">
                <a href="petradetails" class="img" style="background-image: url({{$trip->photo}});"></a>
                <div class="text p-4">
                    <span class="price">{{$trip->price}}</span>
                    <span class="days">{{$trip->days}}</span>
                    <h3><a href="#">{{$trip->trip_name}}</a></h3>
                    
                    <ul>
                        <li><span class="flaticon-shower"></span>0</li>
                        <li><span class="flaticon-king-size"></span>0</li>
                        <li><span class="flaticon-mountains"><a href="{{$trip->href}}">{{$trip->href}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    @endforeach
</div>
    




@endsection
    
