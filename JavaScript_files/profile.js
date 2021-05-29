 
function del(element_id){
	id = element_id;

	$.post(
		'../database/delete.php',
		{'id': id},
		function(data){
			console.log(data);
	        arrayPic = data.split(',');
	        $('#pics').empty();
	        for (var i = 0; i < arrayPic.length; i++) {
	        	arrayPic[i]
	        	console.log(arrayPic[i]);
	        	link = '../php_files/profile.php?ID='+ $("#edit_file").attr('name');
	        	window.location.href = link;
	        }
		}
	)
}

 $(document).ready(function(){
   
$("#update_profile").click(function(){
    $("#edit_form").hide(500, "linear");
    $("#detailed_profile").show(500, "linear");
})

$("#detailed_profile").click(function(){
    $("#detailed_profile").hide(500, "linear");
    $("#edit_form").show(500, "linear");
})

$("#edit_file").change(function(evt) {
    var f=$(this).get(0).files[0];

    var myformData = new FormData();        
	myformData.append("file",f);


	$.ajax({
	    url: "../database/profileImage.php", 
	    type: 'POST',
	    data: myformData,
	    processData: false,
	    contentType: false,
	    success: function(data) {
	        $("#profile_img").attr("src",data)
	    }
	});
})





$(".add_img").change(function(evt) {
	console.log("clicked");
	
    var f=$(this).get(0).files[0];

    var myformData = new FormData();        
	myformData.append("file",f);
	$("#pics").empty();

	$.ajax({
	    url: "../database/saveImage.php", 
	    type: 'POST',
	    data: myformData,
	    processData: false,
	    contentType: false,
	    success: function(data) {
	    	console.log(data);
	        arrayPic = data.split(',');

	        for (var i = 0; i < arrayPic.length; i++) {
	        	arrayPic[i]
	        	console.log(arrayPic[i]);
	        	link = '../php_files/profile.php?ID='+ $("#edit_file").attr('name');
	        	window.location.href = link;
	        }
	    }
	})
})

$('#delete').click(()=>{
	console.log("profdcvsn xzbm0");
	sure = confirm("Your account will be permanatly deleted!\n Do you want to continue?");
	if (true) {
		session = $('#session_id').html();
		console.log(session);
		$.post(
			'../database/update_profile.php',
			{'delete':session},
			function(data){
				window.location.href = "../index.php";
		})
	}
})





/* end of document ready*/
})