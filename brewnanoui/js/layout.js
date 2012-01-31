$(function() {
	$("#content").tabs();

	$(".valve").button();
	$(".pump").button();
	$(".element")
		.button()
		.click(function() {
			switch($(this).prop("id")) {
				case "element-1":
					if($(this).prop("checked")) {
						$("#element-2").prop("checked", false);
					}
					break;
				
				case "element-2":
					if($(this).prop("checked")) {
						$("#element-1").prop("checked", false);
					}
					break;	
			}
			
			$(".element").button("destroy").button();
		});
});
