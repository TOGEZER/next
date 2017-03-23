var GLOBALS = {'map_init' : false};

jQuery(".timeline-content a").click(function(){
          var id = $(this).attr("href").substring(1);
          jQuery("html, body").animate({ scrollTop: $("#"+id).offset().top }, 100, function(){
            $("#map-slider").slideReveal("hide");
          });
});
jQuery("#map-slider").slideReveal({
  trigger: jQuery("#trigger"),
  push: false,
  overlay: true,
  width: '100%',
  speed:'1000',
  show: function(slider, trigger){
    jQuery('#map').css('display','block');
    if(!GLOBALS.map_init){
    L.mapbox.accessToken = 'pk.eyJ1IjoidGVycmFncm91cCIsImEiOiJjajA4cDllNDkwN3JwMzJvY3lkcjZpd2Z6In0.hqrG00cKxJX08rIgAmsMHg';

var geojson = {
  type: 'FeatureCollection',
  features: [
    {
      "type": "Feature",
      "geometry": {
        "type": "Point",
        "coordinates": [-68.12896728515625, -16.34649680535433]
      },
      "properties": {
        "title": "Chacaltaya",
        "description": "1714 14th St NW, Washington DC",
        "marker-color": "#fc4353",
        "marker-size": "large",
        "marker-symbol": "monument"
      }
    },
    {
      "type": "Feature",
      "geometry": {
        "type": "Point",
        "coordinates": [-66.82571411132812, -20.46715996263888]
      },
      "properties": {
        "title": "UYUNI",
        "description": "155 9th St, San Francisco",
        "marker-color": "#fc4353",
        "marker-size": "large",
        "marker-symbol": "harbor"
      }
    }
  ]
};

L.mapbox.map('map', 'mapbox.streets')
  .setView([-16.804541076383455, -65.61035156250001], 7)
  .featureLayer.setGeoJSON(geojson);

   .featureLayer.on('mouseover', function(e) {
    e.layer.openPopup();
});





        GLOBALS.map_init=true;       
    }
},
});




// myLayer.setGeoJSON(geojson);
// var info = document.getElementById('info');

// Iterate through each feature layer item, build a
// marker menu item and enable a click event that pans to + opens
// a marker that's associated to the marker item.
// myLayer.eachLayer(function(marker) {
//   var link = info.appendChild(document.createElement('a'));
//   link.className = 'item';
//   link.href = '#';

//   // Populate content from each markers object.
//   link.innerHTML = marker.feature.properties.title +
//     '<br /><small>' + marker.feature.properties.description + '</small>';
//   link.onclick = function() {
//     if (/active/.test(this.className)) {
//       this.className = this.className.replace(/active/, '').replace(/\s\s*$/, '');
//     } else {
//       var siblings = info.getElementsByTagName('a');
//       for (var i = 0; i < siblings.length; i++) {
//         siblings[i].className = siblings[i].className
//           .replace(/active/, '').replace(/\s\s*$/, '');
//       };
//       this.className += ' active';

//       // When a menu item is clicked, animate the map to center
//       // its associated marker and open its popup.
//       map.panTo(marker.getLatLng());
//       marker.openPopup();
//     }
//     return false;
//   };
// });