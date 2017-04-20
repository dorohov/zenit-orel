function initMap() {       
	var coordOffice = {lat: 52.9720623, lng: 36.089389},
		zoom_map_office = 16,
		mapOptionsOffice = {
			zoom: zoom_map_office,
			center: new google.maps.LatLng(coordOffice.lat, coordOffice.lng),
			scrollwheel: false,	
			styles: [{"elementType":"geometry","stylers":[{"color":"#eaeaea"}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"elementType":"labels.text.fill","stylers":[{"color":"#616161"}]},{"elementType":"labels.text.stroke","stylers":[{"color":"#f5f5f5"}]},{"featureType":"administrative.land_parcel","elementType":"labels.text.fill","stylers":[{"color":"#424242"}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#eeeeee"}]},{"featureType":"landscape.man_made","elementType":"geometry.stroke","stylers":[{"color":"#c1c1c1"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#424242"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#c4c4c4"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#424242"}]},{"featureType":"road","elementType":"geometry","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"labels.text.fill","stylers":[{"color":"#424242"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#dadada"}]},{"featureType":"road.highway","elementType":"labels.text.fill","stylers":[{"color":"#424242"}]},{"featureType":"road.local","elementType":"labels.text.fill","stylers":[{"color":"#424242"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"color":"#e5e5e5"}]},{"featureType":"transit.station","elementType":"geometry","stylers":[{"color":"#eeeeee"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#b8d8e7"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#424242"}]}]		 
		};
	var mapElementOffice = document.getElementById('map-google-office');

	var mapOffice = new google.maps.Map(mapElementOffice, mapOptionsOffice);

	var iconOffice = '/wp-content/themes/azbnbasetheme/img/default/icon-map-office.png';

	var	zenitOfficeCoord = {lat: 52.971972, lng: 36.090498};

	var 
		zenitOffice = new google.maps.Marker({
			position: zenitOfficeCoord,
			map: mapOffice,
			icon: iconOffice
		});

        $(window).resize(function() {
			google.maps.event.trigger(map, "resize");
			map.setCenter(coord);
        });
};
$(function () {
	$(document.body).on('shown.bs.modal', '.modal', {}, function(event){
		event.preventDefault();
		$(window).trigger('resize');      
	});  
});