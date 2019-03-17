


var active=document.getElementById('dia_span');
active.setAttribute('class',"nav-link dropdown-toggle active");

var submit = document.getElementById('submit');
submit.addEventListener("click", send_to_backend);

function enable()
{
	var gender=document.getElementById('gender').value;
	var preg=document.getElementById('preg_count');
	if(gender=="Female")
		preg.removeAttribute('disabled');	
	else
	{	
		preg_count.value=0;
		preg.setAttribute('disabled', true);
	}
}


function send_to_backend()
{
	postData = {
	 	glucose : document.getElementById('glucose').value,
		blood : document.getElementById('blood').value,
		insulin : document.getElementById('insulin').value,
 		age : document.getElementById('age').value,
		bmi : document.getElementById('bmi').value,
		//pedigree : document.getElementById('pedigree').value,
		pregCount: document.getElementById('preg_count').value
	}

var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  
   var j = JSON.stringify(postData);
  xhttp.open("POST", "http://192.168.43.116:9000/api/diabetes", true);
  xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhttp.send(j);
  xhttp.onreadystatechange = function () {
  if(xhttp.readyState === 4 && xhttp.status === 200) {
    console.log(xhttp.responseText);
    console.log("responseData = "+responseData+" status = "+status+" xhr = "+xhr);
	var container=document.getElementById('container');

		var result_div=document.createElement('div');
		result_div.setAttribute("class", 'col-6 card bg-success text-white');
			var result=document.createElement('div');
			result.setAttribute('class',"card-body");
			result.textContent=xhttp.responseText;
			result_div.appendChild(result);

		container.appendChild(result_div);
 
  }
};

