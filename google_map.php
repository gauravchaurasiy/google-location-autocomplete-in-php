<!-- <head>
  <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpwg-fvcOnXsAsHV5uG8hfJ6bUuIZ3-fo&libraries=places" async defer></script>
  <script>
    var autocomplete;
    function initialize() {
      autocomplete = new google.maps.places.Autocomplete(
        /** @type {HTMLInputElement} */
        (document.getElementById('autocomplete')),
        { types: ['geocode'] }
      );
      google.maps.event.addListener(autocomplete, 'place_changed', function() {});
    }
  </script>
</head>

<div id="locationField">
  <input id="autocomplete" style="width: 500px;" name="location" placeholder="Enter your address" onFocus="initialize()" type="text"></input>
</div> -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpwg-fvcOnXsAsHV5uG8hfJ6bUuIZ3-fo&libraries=places" async defer></script>

<script src="http://maps.googleapis.com/maps/api/js?libraries=places" type="text/javascript"></script>

<script type="text/javascript">
    function initialize() {
        var input = document.getElementById('searchTextField');
        var autocomplete = new google.maps.places.Autocomplete(input);
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var place = autocomplete.getPlace();
            document.getElementById('city2').value = place.name;
            document.getElementById('cityLat').value = place.geometry.location.lat();
            document.getElementById('cityLng').value = place.geometry.location.lng();
            //alert("This function is working!");
            //alert(place.name);
           // alert(place.address_components[0].long_name);

        });
    }
    google.maps.event.addDomListener(window, 'load', initialize); 
</script>

<input id="searchTextField" type="text" size="50" placeholder="Enter a location" onFocus="initialize()" autocomplete="on" runat="server" />  
<input type="text" id="city2" name="city2" />
<input type="text" id="cityLat" name="cityLat" />
<input type="text" id="cityLng" name="cityLng" />  