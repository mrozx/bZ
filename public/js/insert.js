
jQuery(document).ready(function(){
	//alert("shalom");
//end of document random
})

function listProvinces(reg){
	var CMSObj = {
            "APP_PATH":"<?php echo $this->serverUrl() . $this->basePath() ?>/Add/listProvinces"
        };
	var urlform = 'listProvinces';
	$.ajax({
			
			type: "POST",
			url:  urlform,
			data: reg,
			success: function(html)
			{
				$('.container').html(html);
			}
		});
	};
	
function comuneSel(pro){
	$.ajax({
			
			type: "POST",
			url:  "insertProPhp.php",
			data: pro,
			success: function(html)
			{
				$('#comune').html(html);
			}
		});
	};