$(document).ready(function(){


/* login button click funtionality */
$("#login").click(function(){
	$("#signIn").show(600, 'swing');
})

function make(value, clas, element){
	ele = document.createElement(element);
	ele.className = clas;
	ele.innerHTML = value;
	return ele;
}

function Reses(){
	empty = "yes";
	resName = $("#searchRes").val();
	campus = $(".campus:checked").val();
	min_price = $('#minPrice').val();
	max_price = $('#maxPrice').val();
	nsfas = $('.nsfas:checked').val();
	console.log(nsfas);
	rooms = $(".rooms:checked").val();
	ratings = $("input[name='ratings']").val();
	$("#searchResults").empty();

	
	$.post("./database/Filters.php",
		{'campus':campus, 'minPrice':min_price, 'maxPrice': max_price, 'rooms':rooms, 'ratings':ratings, 'resName':resName, 'nsfas':nsfas},
		function(data){
			results = JSON.parse(data);
			
			for (var i = 0; i < results[0][0].length; i++) {
				empty = "no";
        
				$("article").delay("slow").fadeIn(50000);
				/* create and place photo for the specific res*/
				photo = document.createElement('img');
				photo.className = 'displayPic';
				photo.setAttribute('src', results[0][5][0]);

				/* create information divs*/
				Dname = make(results[0][1][i], 'res_title', 'div')


				Drooms = make(results[0][2][i], 'res_info', 'div')
				Dcampus = make(results[0][3][i], 'res_info', 'div');
				Dprice = make(results[0][4][i], 'res_info', 'div');

				/* create link for viewing and res and pass on res ID*/
				link = "php_files/resPage.php?ID="+results[0][0][i];
				view = make("View Accomodation", "view_acc", 'a')
				view.setAttribute('href', link);
				view_div = make("", 'view_acc', 'div');
				view_div.append(view);
				
				accomodation = document.createElement("article");
				accomodation.className = 'res_container col-lg-4 col-md-4 col-sm-6 col-xs-12'
				accomodation.append(photo);
				accomodation.append(Dname);
				accomodation.append(Drooms);
				accomodation.append(Dcampus);
				accomodation.append(Dprice);
				accomodation.append(view_div);

				
				$("#searchResults").append(accomodation); 
			}
		})
		/*if (empty == "yes"){
			no_results = document.createElement("h2");
			no_results.innerHTML = "No accomodations found";
			$("#searchResults").append(no_results);
		}
	*/
}

$("#searchRes").on('propertychange input', function(){Reses()});

Reses();


/* enable each filter change to refersh the reses container*/
inputs = document.querySelectorAll(".load");



console.log(inputs);
inputs.forEach((element) =>{
	console.log(element)
	element.addEventListener('click',function(){Reses()})
})

$('#nsfas').click(() {
	if ($('#nasfas').val() == 3500){

	}
})

})

