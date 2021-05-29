

//Get write review button
var reviewBtn = document.getElementById('writeReview');

//Get form div
var form = document.getElementById('form');

//Get send button
var send = document.getElementById('send');

//Send event listener
function change(){
    console.log(form);
    form.className = "show";
}

var count = 0;

function result(){
	if (count != 0) {
		document.getElementById("review").innerHTML = "<h4>Rating: <label class='text-primary'>" + count +"</label></h4>" 
		+"<h4>Review</h4>" + "<p>" + document.getElementById("review").value +"</p>"
	} else {}
}

function startRating(item){
	count = item.id[0];
	sessionStorage.star = count;
	for (var i = 0; i <= 5; i++) {
		if (i<count) {
			document.getElementById((i+1)).style.color="yellow";
		} else {
			document.getElementById((i+1)).style.color="black";
		}
	}





    

