
jQuery(document).ready(function(){
	//alert("shalom");
//end of document random
})

function listProvinces(reg){
	var urlform = "..\src\Places\Controller\Add\listProvinces";
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