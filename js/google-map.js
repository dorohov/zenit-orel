function initMap(){var e={lat:52.974166,lng:36.055625},l=14,o={zoom:l,center:new google.maps.LatLng(e.lat,e.lng),scrollwheel:!1,styles:[{elementType:"geometry",stylers:[{color:"#eaeaea"}]},{elementType:"labels.icon",stylers:[{visibility:"off"}]},{elementType:"labels.text.fill",stylers:[{color:"#616161"}]},{elementType:"labels.text.stroke",stylers:[{color:"#f5f5f5"}]},{featureType:"administrative.land_parcel",elementType:"labels.text.fill",stylers:[{color:"#424242"}]},{featureType:"poi",elementType:"geometry",stylers:[{color:"#eeeeee"}]},{featureType:"poi",elementType:"labels.text.fill",stylers:[{color:"#424242"}]},{featureType:"poi.park",elementType:"geometry",stylers:[{color:"#c4c4c4"}]},{featureType:"poi.park",elementType:"labels.text.fill",stylers:[{color:"#424242"}]},{featureType:"road",elementType:"geometry",stylers:[{color:"#ffffff"}]},{featureType:"road.arterial",elementType:"labels.text.fill",stylers:[{color:"#424242"}]},{featureType:"road.highway",elementType:"geometry",stylers:[{color:"#dadada"}]},{featureType:"road.highway",elementType:"labels.text.fill",stylers:[{color:"#424242"}]},{featureType:"road.local",elementType:"labels.text.fill",stylers:[{color:"#424242"}]},{featureType:"transit.line",elementType:"geometry",stylers:[{color:"#e5e5e5"}]},{featureType:"transit.station",elementType:"geometry",stylers:[{color:"#eeeeee"}]},{featureType:"water",elementType:"geometry",stylers:[{color:"#b8d8e7"}]},{featureType:"water",elementType:"labels.text.fill",stylers:[{color:"#424242"}]}]},t=document.getElementById("map-google"),a=new google.maps.Map(t,o),r="img/default/icon-map-build.jpg",n="img/default/icon-map-ready.jpg",p={lat:52.975165,lng:36.098506},s={lat:52.97176,lng:36.091903},i={lat:52.974491,lng:36.04791},g={lat:53.000897,lng:36.135133},m={lat:53.001633,lng:36.136984},y={lat:52.958282,lng:36.070836},c={lat:52.973983,lng:36.047295},f={lat:52.987665,lng:36.109139},T={lat:52.988925,lng:36.104763},w={lat:52.989305,lng:36.104779},u={lat:52.96276,lng:36.077114},d={lat:52.97347,lng:36.048261},k={lat:52.978343,lng:36.08241},M={lat:52.988224,lng:36.119465};new google.maps.Marker({position:p,map:a,icon:r}),new google.maps.Marker({position:M,map:a,icon:r}),new google.maps.Marker({position:g,map:a,icon:r}),new google.maps.Marker({position:y,map:a,icon:r}),new google.maps.Marker({position:i,map:a,icon:n}),new google.maps.Marker({position:c,map:a,icon:n}),new google.maps.Marker({position:T,map:a,icon:n}),new google.maps.Marker({position:f,map:a,icon:n}),new google.maps.Marker({position:w,map:a,icon:n}),new google.maps.Marker({position:m,map:a,icon:n}),new google.maps.Marker({position:u,map:a,icon:n}),new google.maps.Marker({position:d,map:a,icon:n}),new google.maps.Marker({position:k,map:a,icon:n}),new google.maps.Marker({position:s,map:a,icon:n});$(window).resize(function(){google.maps.event.trigger(a,"resize"),a.setCenter(e)})}$(function(){$(document.body).on("shown.bs.modal",".modal",{},function(e){e.preventDefault(),$(window).trigger("resize")})});