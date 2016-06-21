<?php
//JS file


?>
<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<!--jquery-->
<script  src="js/jquery.min.js"></script>
<!--jquery ui-->
<script src="jquery/jquery-ui.js"></script>
<script src="jquery1/jquery-1.10.2.js"></script>


<script src="js/tinymce/tinymce.min.js"></script>
<script src="js/dropzone.js"></script>
<script>

  $(document).ready(function(){
	  
	  $("#console-debug").hide();
	  $("#btn-debug").click(function(){
		
       	 $("#console-debug").toggle();	
	  });
	

    $(".btn-delete").on("click", function(){
		
		 var selected = $(this).attr("id");
		 var pageid = selected.split("del_").join("");
		 
		 var confirmed = confirm("Are you sure you want to delete this page?");
		 
		 if(confirmed == true){
			 
			  $.get("ajax/pages.php?id="+pageid);
		      $("#page_"+pageid).remove();
		 }
		 
		
		 //alert(selected);
		
	})

	
  });
		  tinymce.init({
			selector: ".editor",
			theme: "modern",
			plugins: [
				 "code advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
				 "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
				 "save table contextmenu directionality emoticons template paste textcolor"
		   ],
		   content_css: "css/content.css",
		   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
		   style_formats: [
				{title: 'Bold text', inline: 'b'},
				{title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
				{title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
				{title: 'Example 1', inline: 'span', classes: 'example1'},
				{title: 'Example 2', inline: 'span', classes: 'example2'},
				{title: 'Table styles'},
				{title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
			]
		 }); 

</script>