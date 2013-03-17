$(document).ready(function(){
	var contentSwitch = function (openLink,articleToOpen) {
			$(openLink).on("click", function(e){
				e.preventDefault();
				$("article.open-page").hide().removeClass("open-page");
				$(articleToOpen).fadeIn(400).addClass("open-page");
			}
		);
	};
	var openSkills = new contentSwitch("#open-skills","#skills");
	var openExperience = new contentSwitch("#open-experience","#experience");
	var openWork = new contentSwitch("#open-work","#work");
	var openContact = new contentSwitch("#open-contact","#contact");
	var home = new contentSwitch('a[href="#home"]',"#home");
});
