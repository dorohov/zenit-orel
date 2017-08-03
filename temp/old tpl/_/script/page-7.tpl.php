<script class="azbn-page-script" >
$(function(){
	
	var last_tab_viewed = SS.get('last_tab_viewed');
	
	//console.log(last_tab_viewed);
	
	if(last_tab_viewed) {
		$('.azbn-project-filter-btn[data-status-filter="' + last_tab_viewed + '"]').trigger('click');
	} else {
		$('.azbn-project-filter-btn[data-status-onsale-filter="1"]').trigger('click');
	}
	
});
</script>