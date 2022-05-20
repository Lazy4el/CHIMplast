// Тот кто читает код и если это не я, то я очень сожалею что ты это делаешь!
function terms_of_use(){
	$(".terms_of_use").removeClass("active_modal");
	$(".terms_of_use").addClass("active_modal");
};
function privacy_policy(){
	$(".terms_of_use").removeClass("active_modal");
	$(".terms_of_use").addClass("active_modal");
};

// Нажатие на кнопку отправить заявку
function poput(){
	$(".poput").removeClass("active-poput");
	$(".poput").addClass("active-poput");
};

$(".close").click(function() {
	$(".poput").removeClass("active-poput");
});
$(".close_form_main").click(function() {
	$(".terms_of_use").removeClass("active_modal");
	$(".privacy_policy").removeClass("active_modal");
});
$("body").keyup(function(e) {
	if (e.which == 27) {
		$(".poput").removeClass("active-poput");
		$(".terms_of_use").removeClass("active_modal");
		$(".privacy_policy").removeClass("active_modal");
	}
});



var slider_position = 0;

// Поведение слайдера
function slider(){
	
	if (slider_position <= 0) {
		$(".bg-s").css({"opacity":"0", "zIndex":"0"});
		$(".bg-s").eq(0).css({"opacity":"1", "zIndex":"10"});
		slider_position = 100;


		
	}else if (slider_position === 100) {
		$(".bg-s").css({"opacity":"0", "zIndex":"0"});
		$(".bg-s").eq(1).css({"opacity":"1", "zIndex":"10"});
		slider_position = 200;



		
	}else if(slider_position >= 200) {
		$(".bg-s").css({"opacity":"0", "zIndex":"0"});
		$(".bg-s").eq(2).css({"opacity":"1", "zIndex":"10"});
		slider_position = 0;
	
	};
	setTimeout( slider,7000);
};
slider();


// Скроллинг

$( window ).scroll(function() {
	var position = $(window).scrollTop();

	if (position >= 150){
		$("#navbar").css({"position":"fixed",
						   "top":"0",
						   "left":"0",
						   "zIndex":"20"});
		$("#phone").css({"visibility":"visible"});
	}else{
		$("#navbar").css({"position":"relative"});
		$("#phone").css({"visibility":"hidden"});
	};
});

