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
		pedigree : document.getElementById('pedigree').value,
		pregCount: document.getElementById('preg_count').value
	}

	postDataJason=JSON.stringify(postData);
	console.log(postDataJason);

	$.post('/diabeties_backend', postDataJason, ajaxCallBack);
}

function ajaxCallBack(responseData, status, xhr)
{
	console.log("responseData = "+responseData+" status = "+status+" xhr = "+xhr);
	var container=document.getElementById('container');

		var result_div=document.createElement('div');
		result_div.setAttribute("class", 'col-6');
		result_div.textContent=responseData;

		container.appendChild(result_div);



}