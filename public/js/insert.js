
jQuery(document).ready(function(){
	//alert("shalom");
//end of document random
})

function listProvinces(reg){
	var CMSObj = {
            "APP_PATH":"<?php echo $this->serverUrl() . $this->basePath() ?>/Add/listProvinces"
        };
	var urlform = '/add/listProvinces';
	$.ajax({
			async : true,
			method: "POST",
			url:  urlform,
			data: reg,
			success: function(html)
			{
				$('#provinceSel').html(html);
			}
		});
	};
	
function comuneSel(pro){
	$.ajax({
			
			type: "POST",
			method:  "insertProPhp.php",
			data: pro,
			success: function(html)
			{
				$('#comune').html(html);
			}
		});
	};