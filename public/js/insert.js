
jQuery(document).ready(function(){
	//alert("shalom");
//end of document random
})

function provinceSel(reg){
	$.ajax({
			
			type: "POST",
			url:  "insertRegPhp.php",
			data: reg,
			success: function(html)
			{
				$('#provincia').html(html);
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