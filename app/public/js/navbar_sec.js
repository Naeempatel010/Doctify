var card=document.getElementById('card');

var head=document.createElement('div');
head.setAttribute('class',"card-header bg-light");

	var head_ul=document.createElement('ul');
	head_ul.setAttribute('class',"nav nav-tabs card-header-tabs row text-center");
	head_ul.style.fontSize='larger';

		var ul_div=document.createElement('div');
		ul_div.setAttribute('class',"col-2");
		ul_div.id="checkup";

			var ul_div_li=document.createElement('li');
			ul_div_li.setAttribute('class',"nav-item"); 
				var span=document.createElement('span');
				span.setAttribute('class',"nav-link");
				span.id="checkup_span";
				span.textContent="Basic Information";
				ul_div_li.appendChild(span);
			ul_div.appendChild(ul_div_li);
		head_ul.appendChild(ul_div);

		var ul_div=document.createElement('div');
		ul_div.setAttribute('class',"col-2");
		ul_div.id="general";

			var ul_div_li=document.createElement('li');
			ul_div_li.setAttribute('class',"nav-item"); 
				var span=document.createElement('span');
				span.setAttribute('class',"nav-link");
				span.id="general_span";
				span.textContent="General Diagnosis";
				ul_div_li.appendChild(span);
			ul_div.appendChild(ul_div_li);
		head_ul.appendChild(ul_div);

		// dropdowns

		var ul_div=document.createElement('div');
		ul_div.setAttribute('class',"col-2");
		ul_div.id="treatment";

			var ul_div_li=document.createElement('li');
			ul_div_li.setAttribute('class',"nav-item dropdown");
				var span=document.createElement('span');
				span.id="teat_span";
				span.setAttribute('class',"nav-link dropdown-toggle");
				span.setAttribute('data-toggle','dropdown');
				span.setAttribute('role','button');
				span.setAttribute('aria-haspopup','true');
				span.setAttribute('aria-expanded','false');
				span.textContent="Disease Info";
				ul_div_li.appendChild(span);

				var drop_menu=document.createElement('div');
				drop_menu.setAttribute('class', 'dropdown-menu col-12');
					var menu_span=document.createElement('span');
					menu_span.id="treat_diab";
					menu_span.setAttribute('class','dropdown-item');
					menu_span.textContent="Diabetes";
					drop_menu.appendChild(menu_span);

					var menu_span=document.createElement('span');
					menu_span.id="treat_ham";
					menu_span.setAttribute('class','dropdown-item');
					menu_span.textContent="Hemorrhage";
					drop_menu.appendChild(menu_span);

					var menu_span=document.createElement('span');
					menu_span.id="treat_pneu";
					menu_span.setAttribute('class','dropdown-item');
					menu_span.textContent="Pneumonia";
					drop_menu.appendChild(menu_span);

					var menu_span=document.createElement('span');
					menu_span.id="treat_cancer";
					menu_span.setAttribute('class','dropdown-item');
					menu_span.textContent="Breast Cancer";
					drop_menu.appendChild(menu_span);
				ul_div_li.appendChild(drop_menu);
			ul_div.appendChild(ul_div_li);
		head_ul.appendChild(ul_div);

		//dropdown
		var ul_div=document.createElement('div');
		ul_div.setAttribute('class',"col-2");
		ul_div.id="diagnosis";

			var ul_div_li=document.createElement('li');
			ul_div_li.setAttribute('class',"nav-item dropdown");
				var span=document.createElement('span');
				span.id="dia_span";
				span.setAttribute('class',"nav-link dropdown-toggle");
				span.setAttribute('data-toggle','dropdown');
				span.setAttribute('role','button');
				span.setAttribute('aria-haspopup','true');
				span.setAttribute('aria-expanded','false');
				span.textContent="Diagnosis";
				ul_div_li.appendChild(span);

				var drop_menu=document.createElement('div');
				drop_menu.setAttribute('class', 'dropdown-menu col-12');
					var menu_span=document.createElement('span');
					menu_span.id="diag_diabeties";
					menu_span.setAttribute('class','dropdown-item');
					menu_span.textContent="Diabetes";
					drop_menu.appendChild(menu_span);

					var menu_span=document.createElement('span');
					menu_span.id="diag_hem";
					menu_span.setAttribute('class','dropdown-item');
					menu_span.textContent="Hemorrhage";
					drop_menu.appendChild(menu_span);
				ul_div_li.appendChild(drop_menu);
			ul_div.appendChild(ul_div_li);
		head_ul.appendChild(ul_div);

	head.appendChild(head_ul);
card.insertBefore(head, card.childNodes[0]);

var diag_diabeties=document.getElementById('diag_diabeties');
var diag_hem=document.getElementById('diag_hem');
var info=document.getElementById('checkup');

diag_diabeties.addEventListener('click',function(){
	location.replace("/diabeties");
});

diag_hem.addEventListener('click',function(){
	location.replace("/hem");
});

info.addEventListener('click', function(){
	location.replace("/Start_Checkup");
});

// new stuff

var link_diab= document.getElementById('treat_diab');
var link_ham= document.getElementById('treat_ham');
var link_cancer= document.getElementById('treat_cancer');
var link_pneu= document.getElementById('treat_pneu');

link_diab.addEventListener('click', function(){
	location.replace("/diab");
});
link_ham.addEventListener('click', function(){
	location.replace("/ham");
});
link_cancer.addEventListener('click', function(){
	location.replace("/cancer");
});
link_pneu.addEventListener('click', function(){
	location.replace("/pneu");
});