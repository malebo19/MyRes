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

	//nsfas get value
	empty = "yes";
	resName = $("#searchRes").val();
	campus = $(".campus:checked").val();
	min_price = $('#minPrice').val();
	max_price = $('#maxPrice').val();
	nsfas = $('#nsfas').prop('checked');
	if (nsfas){
		nsfas = 3500;
	}else{
		nsfas = "";
	}
	rooms = $(".rooms:checked").val();
	ratings = $(".ratings:checked").val();
	
	$("#searchResults").hide(500, "swing")
	
	$("#searchResults").empty();
	$("#searchResults").show(500, "swing")



	
	$.post("./database/Filters.php",
		{'campus':campus, 'minPrice':min_price, 'maxPrice': max_price, 'rooms':rooms, 'ratings':ratings, 'resName':resName, 'nsfas':nsfas},
		function(data){
			results = JSON.parse(data);
			
			/* alart for no accomodations found */
			if (results[0][0].length < 1){
				$("#searchResults").html("<h2> No Accomodations found</h2>");
			}
			for (var i = 0; i < results[0][0].length; i++) {
				empty = "no";
        
				$("article").delay("slow").fadeIn(50000);
				/* create and place photo for the specific res*/
				photo = document.createElement('img');
				photo.className = 'displayPic';
				img_src = "";
				try{
					arrlink = results[0][5][i].split('/');
					img_src = "images/"+arrlink[2];
				}catch(err){
					img_src = "pictures/profile_dummy.png";
				}
				
				photo.setAttribute('src', img_src);

				/* create information divs*/
				Dname = make(results[0][1][i], 'res_title', 'div')

				/* dictionary for the rooms */
				dict = {"Yes":"Sharing", "No":"Single", "3500":"NSFAS Accreditated"}

				Drooms = make(dict[results[0][2][i]], 'res_info', 'div')
				Dcampus = make(results[0][3][i], 'res_info', 'div');
				price = dict[results[0][4][i]]? dict[results[0][4][i]]:results[0][4][i]
				Dprice = make(price, 'res_info', 'div');

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


inputs.forEach((element) =>{
	element.addEventListener('click',function(){Reses()})
})

})

