<html>
<head>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript">
$(document).ready(function (e) {
	$("#uploadForm").on('submit',(function(e) {
		$.ajax({
        	url: this.baseURI+"upload.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
			console.log(data);
		    },
		  	error: function() 
	    	{
	    		console.log("Error");
	    	} 	        
	   });
	}));
});
</script>
</head>
<body><form id="uploadForm"  method="post" enctype="multipart/form-data">
<input name="userImage" type="file" class="inputFile" /><br/>
<input type="submit" value="Submit"  class="btnSubmit" />
</form>
</body>
</html>