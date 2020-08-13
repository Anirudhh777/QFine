$( document ).ready(function() {

	var phrase = "qfjsp";
	$('.owl-carousel').owlCarousel({
		loop:true,
		dots:false,
		items:1,
		singleItem:true,
		stagePadding: 0,
	})

	function getCookie(cname) {
		var name = cname + "=";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');
		for(var i = 0; i <ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
		return false;
	}


	function setCookie(cname, cvalue, exdays) {
		var d = new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
		var expires = "expires="+ d.toUTCString();
		document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}

	function capitalizeFirstLetter(string) {
		return string.charAt(0).toUpperCase() + string.slice(1);
	}



	if(getCookie("qfjucs") == false){
		$.get("/ip_check", function(data){
			setCookie('qfjucs', CryptoJS.AES.encrypt(data.toLowerCase(), phrase), 30);
			$(".countryflag").attr("src", "assets/images/flags/"+data.toLowerCase()+".svg");
			$(".country span").text(capitalizeFirstLetter(data));
			$('#countryUpdateModal').modal('show');
		}).fail(function(status){ 
			$('#countryModal').modal({
			    backdrop: 'static',
			    keyboard: false, 
			    show: true
			})
		});
	}else{
		country = CryptoJS.AES.decrypt(getCookie("qfjucs").toString(), phrase);
		$(".countryflag").attr("src", "assets/images/flags/"+country.toString(CryptoJS.enc.Utf8)+".svg");
	}

	$.validator.addMethod("notEqual", function(value, element, param) {
	  return this.optional(element) || value != param;
	}, "Please specify a different (non-default) value");

	$("#countryselection").validate({
    ignore: [],
    rules: {
      countryname: {
        required: true,
        notEqual: "disable"
      }
    },
    submitHandler: function(form, event) {
    	event.preventDefault();
   		country = $("#countrylist1").val();
   		setCookie('qfjucs', CryptoJS.AES.encrypt(country.toLowerCase(), phrase), 30);  
   		$(".countryflag").attr("src", "assets/images/flags/"+country.toLowerCase().toString(CryptoJS.enc.Utf8)+".svg");
   		$('#countryModal').modal('hide');
   		return false;
      }
  });

	$("#countryupdate").validate({
    ignore: [],
    rules: {
      countryname: {
        required: true,
        notEqual: "disable"
      }
    },
    submitHandler: function(form, event) {
    	event.preventDefault();
   		country = $("#countrylist2").val();
   		setCookie('qfjucs', CryptoJS.AES.encrypt(country.toLowerCase(), phrase), 30);  
   		$(".countryflag").attr("src", "assets/images/flags/"+country.toLowerCase().toString(CryptoJS.enc.Utf8)+".svg");
   		$('#countryUpdateModal').modal('hide');
   		return false;
      }
  });

	$(".ship a").click(function(event){
		event.preventDefault();
		country = CryptoJS.AES.decrypt(getCookie("qfjucs").toString(), phrase);
		console.log(country);
		$(".country span").text(capitalizeFirstLetter(country.toString(CryptoJS.enc.Utf8)));
		$('#countryUpdateModal').modal('show');
	})

	$(".panel-heading").click(function(event){
		if($(this).find("i").hasClass("fa-plus")){
			$(".panel-heading").find(".fa-minus").addClass("fa-plus").removeClass("fa-minus");
			$(this).find("i").removeClass("fa-plus").addClass("fa-minus");
		}else{
			$(this).find("i").removeClass("fa-minus").addClass("fa-plus");
		}
	})
	// basic paging logic to demo the buttons
	var pr = document.querySelector( '.paginate.left' );
	var pl = document.querySelector( '.paginate.right' );

	pr.onclick = slide.bind( this, -1 );
	pl.onclick = slide.bind( this, 1 );

	var index = 0, total = 5;

	function slide(offset) {
	  index = Math.min( Math.max( index + offset, 0 ), total - 1 );

	  document.querySelector( '.counter' ).innerHTML = ( index + 1 ) + ' / ' + total;

	  pr.setAttribute( 'data-state', index === 0 ? 'disabled' : '' );
	  pl.setAttribute( 'data-state', index === total - 1 ? 'disabled' : '' );
	}

	slide(0);
	});