      function initMap() {
        // Styles a map in night mode.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 59.9239, lng: 10.7578},
          zoom: 14,
          styles: [
            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#263c3f'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#6b9a76'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#38414e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#212a37'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9ca5b3'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#746855'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#1f2835'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#f3d19c'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#2f3948'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#17263c'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#515c6d'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#17263c'}]
            }
          ]
        });
          var image = 'https://cdn0.iconfinder.com/data/icons/sports-glyph-black/2048/356_-_Weight_Lifting_Person-512.png';
        var training = new google.maps.Marker({
          position: {lat: 59.92722418, lng: 10.74247777},
          map: map,
          icon: image
        });
          var image = 'https://cdn4.iconfinder.com/data/icons/sports-recreation/128/running-2-512.png';
        var training = new google.maps.Marker({
          position: {lat: 59.91852701, lng: 10.75600147},
          map: map,
          icon: image
        });
            var image = 'https://cdn3.iconfinder.com/data/icons/common-sports/4096/basketball-512.png';
        var training = new google.maps.Marker({
          position: {lat: 59.9229908, lng: 10.7548652},
          map: map,
          icon: image
        });
            var image = 'https://cdn3.iconfinder.com/data/icons/common-sports/4096/basketball-512.png';
        var training = new google.maps.Marker({
          position: {lat: 59.91788169, lng: 10.7706356},
          map: map,
          icon: image
        });
      }
    