var styles = {
	origine:['--- Please Select ---','Oui','Non'],
	pack:['Oui (Origine)']

}

var styles2 = {
	origine:['--- Please Select ---','1','2','3','4','5'],
	pack:['--- Please Select ---','1','2','3','4','5']

}

var main = document.getElementById('select-style');
var sub = document.getElementById('repose-pouce');
var sub2 = document.getElementById('select-css');

main.addEventListener('change',function(){selectOptionDynamic(this,'repose-pouce',styles)});
main.addEventListener('change',function(){selectOptionDynamic(this,'select-css',styles2)});

	function selectOptionDynamic(selectedoption, submenu, submenuValueObject ) {

		var sub = document.getElementById(submenu);
	

	var selected_option = submenuValueObject[selectedoption.value];

	while(sub.options.length > 0) {

		sub.options.remove(0);
	}

	Array.from(selected_option).forEach(function(el){

		let option = new Option(el, el);

		sub.appendChild(option);
	});

	};


