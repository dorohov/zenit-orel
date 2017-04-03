$(function(){
	//$('.btn-back-link').popover({trigger : 'hover'});
	
	$(document.body).on({
		click : function(event) {
			event.preventDefault();
			
			$(document.body).Azbn7_AjaxUploader('upload', {
				name : 'azbn_editor_upload',
				action : '/editor/',
				on_percent : function(file, total, loaded, percent) {
					//Azbn7.User.msg('info', 'Загрузка ' + file.name + ': ' + percent + '%');
				},
				callback : function(file, response, uploaded, is_last) {
					
					//console.log(file);
					//console.log(response);
					
					$('.azbn-editor-upload-url').val(response);
					
				},
			});
			
		},
	}, '.azbn-editor-upload-btn');
	
	
	$(document.body).on({
		click : function(event) {
			event.preventDefault();
			
			$(document.body).Azbn7_AjaxUploader('upload', {
				name : 'azbn_editor_upload_photo',
				action : '/editor/',
				on_percent : function(file, total, loaded, percent) {
					//Azbn7.User.msg('info', 'Загрузка ' + file.name + ': ' + percent + '%');
				},
				callback : function(file, response, uploaded, is_last) {
					
					console.log(file);
					//console.log(response);
					
					var item = $('<div/>', {
						html : 'Файл ' + file.name + ' загружен',
					})
					
					$('.azbn-editor-photo-list').append(item);
					
					if(is_last) {
						window.location.reload();
					}
					
				},
			});
			
		},
	}, '.azbn-editor-photo-upload-btn');
	
	
	$(document.body).on({
		submit : function(event) {
			event.preventDefault();
			
			var form = $(this);
			var url = form.attr('data-target-url') || '/wp-admin/admin-ajax.php';
			var sform = form.serialize();
			
			$.post(url, sform, function(data){
				
				form.trigger('reset');
				//$('#modal-uploading').modal();
				window.location.reload();
				
			})
			
		},
	}, '.azbn-editor-create-form');
	
	$(document.body).on({
		click : function(event) {
			event.preventDefault();
			
			var btn = $(this);
			
			$('.azbn-editor-parent-select').val(btn.attr('data-post-id') || 0);
			$('.azbn-editor-post_id-hidden').val(0);
			$('#modal-uploading').modal();
			
		},
	}, '.azbn-editor-add-child-btn');
	
	
	$(document.body).on({
		click : function(event) {
			event.preventDefault();
			
			var btn = $(this);
			var sform = {
				action : 'azbnajax_call',
				method : 'readDoc',
				type : 'json',
				post_id : btn.attr('data-post-id') || 0,
			};
			
			$.post('/wp-admin/admin-ajax.php', sform, function(data){
				
				data = JSON.parse(data);
				//console.log(data);
				
				//data.response.data.item
				$('.azbn-editor-create-form').trigger('reset');
				
				$('.azbn-editor-post_id-hidden').val(data.response.data.item.post_id);
				$('.azbn-editor-title-input').val(data.response.data.item.title);
				$('.azbn-editor-parent-select').val(data.response.data.item.parent);
				$('.azbn-editor-uploadurl-input').val(data.response.data.item.uploadurl);
				
				//$('.azbn-editor-post_id-hidden').val(btn.attr('data-post-id') || 0);
				$('#modal-uploading').modal();
				
			});
			
		},
	}, '.azbn-editor-edit-post-btn');
	
	$(document.body).on({
		click : function(event) {
			event.preventDefault();
			
			var btn = $(this);
			var sform = {
				action : 'azbnajax_call',
				method : 'deleteDoc',
				type : 'json',
				post_id : btn.attr('data-post-id') || 0,
			};
			
			if(confirm('Удалить запись?')) {
				$.post('/wp-admin/admin-ajax.php', sform, function(data){
					
					btn.closest('.azbn-editor-doc-item').empty().remove();
					
				});
			}
			
		},
	}, '.azbn-editor-delete-post-btn');
	
});