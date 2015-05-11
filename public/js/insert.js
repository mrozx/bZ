
jQuery(document).ready(function(){
	//alert("shalom");
//end of document random
})

function listProvinces(reg){
	var urlform = "<?php echo $this->url('..\src\Places', array('controller'=>'Add', 'action'=>'ajax')); ?>";
	$.ajax({
			
			type: "POST",
			url:  "/Add/listProvinces",
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