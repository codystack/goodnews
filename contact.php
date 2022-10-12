<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" href="assets/images/gefavicon.png" type="image/x-icon" />
  
  <link rel="stylesheet" href="assets/css/libs.css" />
  <link rel="stylesheet" href="assets/css/styles.css" />

  <title>Contact :: Goodnews Community Estate</title></head>

<body>


  <nav id="mainNav" class="navbar navbar-expand-lg navbar-sticky navbar-light">
    <div class="container">
      <a href="./" class="navbar-brand"><img src="assets/images/gelogodark.png" alt="Logo"></a>
  
      <ul class="navbar-nav navbar-nav-secondary order-lg-3">
        <li class="nav-item d-lg-none">
          <a class="nav-link nav-icon" href="" role="button" data-bs-toggle="collapse" data-bs-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="bi bi-list"></span>
          </a>
        </li>
        <li class="nav-item d-none d-lg-block">
          <a href="dashboard" class="btn btn-outline-dark ms-2">Sign In</a>
        </li>
        <li class="nav-item d-none d-lg-block">
          <a href="dashboard/register" class="btn btn-dark ms-2">Create Account</a>
        </li>
      </ul>
  
      <div class="collapse navbar-collapse" id="navbar" data-bs-parent="#mainNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="about">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="https://blog.goodnews.estate" target="_blank">News</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="contact">Contact</a>
          </li>
          <li class="nav-item d-lg-none mb-2">
            <a href="dashboard" class="btn btn-outline-dark">Sign In</a>
          </li>
          <li class="nav-item d-lg-none">
            <a href="dashboard/register" class="btn btn-dark">Create Account</a>
          </li>
        </ul>
      </div>
  
    </div>
  </nav>
  
  


    <section class="py-15 py-xl-20">
        <div class="container mt-5 mt-lg-10">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h1>Contact us! <br>Leave Us a Message</h1>
                    <p>Need support? <br>Have a question?
                        Running into a problem? <br>We’re here to help.<br>
                        Our support team is on hand to take your queries and offer prompt resolutions.
                    </p>
                    <hr class="my-4 fw-25 ml-0">
                        <ul class="list-group list-group-minimal">
                        <li class="list-group-item d-flex align-items-center">
                        <span class="w-25 text-muted">Email</span>
                        info@goodnews.estate
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                        <span class="w-25 text-muted">Phone</span>
                        +234 705 653 7279
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="media equal-1-1">
                        <div id="map1" class="map"></div>
                    </div>
                    <div class="card bg-black text-white">
                        <div class="card-body">
                            <h5>Goodnews Estate Sangotedo<span class="font-weight-bold d-block">Lekki-Epe, Lagos</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


  <!-- footer -->
  <footer class="py-10 bg-black inverted">
    <div class="container">
      <div class="row g-0 g-lg-6 text-secondary">
        <div class="col-lg-6 text-lg-end order-lg-2">
          <ul class="list-inline">
            <li class="list-inline-item"><a href="terms" class="text-reset">Terms of use</a></li>
            <li class="list-inline-item ms-1"><a href="policy" class="text-reset">Privacy policy</a></li>
          </ul>
        </div>
        <div class="col-lg-6 order-lg-1">
          <p>© <script>document.write(new Date().getFullYear());</script> All Rights Reserved.</p>
        </div>
      </div>
    </div>
  </footer>

  <script>
    function initMap() {
      var latlng = new google.maps.LatLng(6.462692, 3.623895);

      var myOptions = {
        zoom: 16,
        center: latlng,
        disableDefaultUI: true,
        styles: [
          {
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#f5f5f5"
              }
            ]
          },
          {
            "elementType": "labels.icon",
            "stylers": [
              {
                "visibility": "off"
              }
            ]
          },
          {
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#616161"
              }
            ]
          },
          {
            "elementType": "labels.text.stroke",
            "stylers": [
              {
                "color": "#f5f5f5"
              }
            ]
          },
          {
            "featureType": "administrative.land_parcel",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#bdbdbd"
              }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#eeeeee"
              }
            ]
          },
          {
            "featureType": "poi",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#757575"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#e5e5e5"
              }
            ]
          },
          {
            "featureType": "poi.park",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#9e9e9e"
              }
            ]
          },
          {
            "featureType": "road",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#ffffff"
              }
            ]
          },
          {
            "featureType": "road.arterial",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#757575"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#dadada"
              }
            ]
          },
          {
            "featureType": "road.highway",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#616161"
              }
            ]
          },
          {
            "featureType": "road.local",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#9e9e9e"
              }
            ]
          },
          {
            "featureType": "transit.line",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#e5e5e5"
              }
            ]
          },
          {
            "featureType": "transit.station",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#eeeeee"
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
              {
                "color": "#c9c9c9"
              }
            ]
          },
          {
            "featureType": "water",
            "elementType": "labels.text.fill",
            "stylers": [
              {
                "color": "#9e9e9e"
              }
            ]
          }
        ]
      };

      var map = new google.maps.Map(document.getElementById("map1"), myOptions);

      map.panBy(-100, -40);

      var myMarker = new google.maps.Marker(
        {
          position: latlng,
          map: map,
          icon: 'assets/images/svg/pin.svg'
        });
    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDODKndJ8udk9xrwV_9KZwzziQOgsAR3Ew&amp;callback=initMap"
    async defer></script>

  <script src="assets/js/vendor.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>