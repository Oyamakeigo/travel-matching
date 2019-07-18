<?php
require_once("common/head.php");
require_once "../classes/Country.php";
?>
    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-8 text-center">

            <div class="mb-5 element-animate">
              <h1>What Country do You Wanna Visit? </h1>
              <p>Discover great places around the world.</p>
            </div>

            <form class="form-inline element-animate" id="search-form">
              <label for="" class="sr-only">Location</label>
              <input type="text" class="form-control form-control-block search-input" id="autocomplete" placeholder="Search Location with Google Search API" onFocus="geolocate()">
              <button type="submit" class="btn btn-primary">Search</button>
            </form>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="feature-destination">
      <div class="container">
        <div class="row">
          <div class="col-md-4 element-animate ">
            <a href="#" class="img-bg" style="background-image: url('images/IMG_2487.jpg')">
              <div class="text">
                <span class="icon ion-ios-location"></span>
                <h2>Taj Mahal, India</h2>
                <p>Visit This Place</p>
              </div>
            </a>
          </div>
          <div class="col-md-4 element-animate ">
            <a href="#" class="img-bg" style="background-image: url('images/IMG_6500.jpg')">
              <div class="text">
                <span class="icon ion-ios-location"></span>
                <h2>Hoi An, Vietnam</h2>
                <p>Visit This Place</p>
              </div>
            </a>
          </div>
          <div class="col-md-4 element-animate ">
            <a href="#" class="img-bg last" style="background-image: url('images/IMG_9008.jpg')">
              <div class="text">
                <span class="icon ion-ios-location"></span>
                <h2>Inayawan, Philippines</h2>
                <p>Visit This Place</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2>Top Destinations</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum magnam illum maiores adipisci pariatur, eveniet.</p>
          </div>
        </div>
        <div class="row top-destination">
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="#" class="place">
              <img src="images/img_1.jpg" alt="Image placeholder">
              <h2>Trogir, Croatia</h2>
              <p>Visit This Place</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="#" class="place">
              <img src="images/img_2.jpg" alt="Image placeholder">
              <h2>Stockton Beach, Australia</h2>
              <p>Visit This Place</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="#" class="place">
              <img src="images/img_3.jpg" alt="Image placeholder">
              <h2>Desert, Morocco</h2>
              <p>Visit This Place</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="#" class="place">
              <img src="images/img_4.jpg" alt="Image placeholder">
              <h2>Taj Mahal, India</h2>
              <p>Visit This Place</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="#" class="place">
              <img src="images/img_5.jpg" alt="Image placeholder">
              <h2>Eiffel Tower, France</h2>
              <p>Visit This Place</p>
            </a>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6 col-12">
            <a href="#" class="place">
              <img src="images/img_6.jpg" alt="Image placeholder">
              <h2>Opera House, Australia</h2>
              <p>Visit This Place</p>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    
    <!-- END section -->
    
    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 pr-5">
            
            <h2 class="mb-3">More Featured <br> Destinations</h2>
            <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
            
            <div class="mb-3">
              <a href="#" class="btn btn-primary custom-prev mr-2 mb-2"><span class="ion-android-arrow-back"></span></a> 
              <a href="#" class="btn btn-primary custom-next mr-2 mb-2"><span class="ion-android-arrow-forward"></span></a>
            </div>
          </div>
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-12 slider-wrap">
                <div class="owl-carousel owl-theme no-nav js-carousel-1">
                  
                  <a href="#" class="img-bg" style="background-image: url('images/img_2.jpg')">
                    <div class="text">
                      <span class="icon ion-ios-location"></span>
                      <h2>Stockton Beach, Austrlia</h2>
                      <p>Visit This Place</p>
                    </div>
                  </a>

                  <a href="#" class="img-bg" style="background-image: url('images/img_1.jpg')">
                    <div class="text">
                      <span class="icon ion-ios-location"></span>
                      <h2>Trogir, Croatia</h2>
                      <p>Visit This Place</p>
                    </div>
                  </a>

                  <a href="#" class="img-bg last" style="background-image: url('images/img_3.jpg')">
                    <div class="text">
                      <span class="icon ion-ios-location"></span>
                      <h2>Desert, Morocco</h2>
                      <p>Visit This Place</p>
                    </div>
                  </a>

                  <a href="#" class="img-bg" style="background-image: url('images/img_2.jpg')">
                    <div class="text">
                      <span class="icon ion-ios-location"></span>
                      <h2>Stockton Beach, Austrlia</h2>
                      <p>Visit This Place</p>
                    </div>
                  </a>

                  <a href="#" class="img-bg" style="background-image: url('images/img_1.jpg')">
                    <div class="text">
                      <span class="icon ion-ios-location"></span>
                      <h2>Trogir, Croatia</h2>
                      <p>Visit This Place</p>
                    </div>
                  </a>

                  <a href="#" class="img-bg last" style="background-image: url('images/img_3.jpg')">
                    <div class="text">
                      <span class="icon ion-ios-location"></span>
                      <h2>Desert, Morocco</h2>
                      <p>Visit This Place</p>
                    </div>
                  </a>

                  <a href="#" class="img-bg" style="background-image: url('images/img_2.jpg')">
                    <div class="text">
                      <span class="icon ion-ios-location"></span>
                      <h2>Stockton Beach, Austrlia</h2>
                      <p>Visit This Place</p>
                    </div>
                  </a>

                  <a href="#" class="img-bg" style="background-image: url('images/img_1.jpg')">
                    <div class="text">
                      <span class="icon ion-ios-location"></span>
                      <h2>Trogir, Croatia</h2>
                      <p>Visit This Place</p>
                    </div>
                  </a>

                  <a href="#" class="img-bg last" style="background-image: url('images/img_3.jpg')">
                    <div class="text">
                      <span class="icon ion-ios-location"></span>
                      <h2>Desert, Morocco</h2>
                      <p>Visit This Place</p>
                    </div>
                  </a>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
   
    <footer class="site-footer">
      <div class="container">
       
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 &copy;<script>document.write(new Date().getFullYear());</script> travel matching by KG 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>


    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.0.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.stellar.min.js"></script>

    <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
        async defer></script>

    <script src="assets/js/main.js"></script>
  </body>
</html>