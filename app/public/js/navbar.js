var body = document.querySelector('body');
body.style.backgroundColor="#E5E7E9";
var nav_div = document.createElement('div');
nav_div.setAttribute("class", "navbar-expand navbar-light");
nav_div.style.backgroundColor='white';
	var nav_ul = document.createElement('ul');
	nav_ul.setAttribute("class", "navbar-nav mr-auto");
		var nav_link_div = document.createElement('div');
		nav_link_div.setAttribute("class", "container");
			var nav_link_row = document.createElement('div');
			nav_link_row.setAttribute("class", "row");
			
			var nav_link_col = document.createElement('div');
			nav_link_col.setAttribute("class", "col-2");
				var img = document.createElement('img');
				img.src="images/logo.png";
				nav_link_col.appendChild(img);
			nav_link_row.appendChild(nav_link_col);

			var nav_links = ["About", "Login", "Sign_Up", "Start_Checkup"];
			var class_link = ["col-2 text-right", "col-1", "col-2", "col-5 text-right"];
			var i;
			for(i=0; i<4; ++i)
			{
				var nav_link_col = document.createElement('div');
				nav_link_col.setAttribute("class", class_link[i]);
					var nav_link_list = document.createElement('li');
					nav_link_list.id=nav_links[i];
					nav_link_list.setAttribute("class", "nav-item");
					nav_link_list.style.fontSize="x-large";
						var nav_link_aTag = document.createElement('a');
						nav_link_aTag.setAttribute("class", "nav-link");
						nav_link_aTag.setAttribute("href", "/"+nav_links[i]);
						nav_link_aTag.textContent=nav_links[i];
						nav_link_list.appendChild(nav_link_aTag);
					nav_link_col.appendChild(nav_link_list);
				nav_link_row.appendChild(nav_link_col);
			}
			
			nav_link_div.appendChild(nav_link_row);
		nav_ul.appendChild(nav_link_div);
	nav_div.appendChild(nav_ul);
body.insertBefore(nav_div, body.childNodes[0]);