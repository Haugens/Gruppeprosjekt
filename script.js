
(function(window, google){
 
    // Map options
    var options = {
    center: {
        lat: 59.9239° N, 
        lng: 10.7578° E,
 },
    zoom: 10
    disableDefaultUI: true,
    scrollwheel: true,
    draggable: true,
 },
 Element = document.getElementById('map-vulkan')
    // map
    map = new google.maps.MAP(Element, options);
 }(window, google)