(function(){
	
	$(document.body).on('click', '.azbn-show-video-btn', {}, function(event){
		event.preventDefault();
		
		var btn = $(this);
		var url = btn.attr('data-iframe-url') || '';
		var _modal = $('#modal-objacts-video');
		var iframe = _modal.find('iframe'); 
		
		_modal.modal();
		
		iframe.attr('src', url);
		
		_modal.one('hide.bs.modal', function(){
			iframe.attr('src', ''); 
		});
		
	})
	
})();