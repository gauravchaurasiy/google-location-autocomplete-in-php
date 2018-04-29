<head>
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
</div>
 
