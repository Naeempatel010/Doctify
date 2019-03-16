var body = document.querySelector('body');

var female=document.getElementById('female');
female.addEventListener('click',show);

var male=document.getElementById('male');
male.addEventListener('click',hide);

var hide_flag=0;
var show_flag=1;

function hide()
{
	console.log("m");
	if(hide_flag)
	{	hide_flag=0;
		show_flag=1;
		preg_div=document.getElementById('Pregnancy');
		body.removeChild(preg_div);
	}
}

function show()
{
	console.log("a");
	if(show_flag)
	{
		show_flag=0;
		hide_flag=1;
		
		var div = document.createElement('div');
		div.id="Pregnancy";
		
			var label=document.createElement('label');
			label.textContent="Pregnancy";
			div.appendChild(label);
			
			var input_yes=document.createElement('input');
			input_yes.setAttribute('type', "radio");
			input_yes.textContent="Yes";
			div.appendChild(input_yes);	

			var input_no=document.createElement('input');
			input_no.setAttribute('type', "radio");
			input_no.textContent="No";
			div.appendChild(input_no);
		body.insertBefore(div, body.childNodes[2]);
	}
}
//document.getElementById("myCheck").checked = true;