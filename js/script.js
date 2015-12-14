jQuery(function($){


		//console.log( object_name.year );

		//var launch = new Date(2016,02,14,12,00,00);

		

		var days = $('.day');
		var hours = $('.hours');
		var minutes = $('.minutes');
		var seconds = $('.seconds');

		var year = object_name.year;
		var month = object_name.month;
		var day = object_name.day;
		var hour = object_name.hour;
		var min = object_name.min;
		var sec = object_name.sec;
		
		var launch = new Date(year,month,day,hour,min,sec);	

		console.log(launch);

		setDate();
		function setDate(){

			var now = new Date();
			var s = (launch.getTime() - now.getTime())/1000;
			var d = Math.floor(s/86400);
			days.html('<strong>'+d+'</strong>Jour'+(d>1?'s':''));
			s -= d*86400;

			var h = Math.floor(s/3600);
			hours.html('<strong>'+h+'</strong>Heure'+(h>1?'s':''));
			s -= h*3600;

			var m = Math.floor(s/60);
			minutes.html('<strong>'+m+'</strong>Minute'+(m>1?'s':''));
			s -= m*60;

			s = Math.floor(s);
			seconds.html('<strong>'+s+'</strong>Seconde'+(s>1?'s':''));

			var timeout = setTimeout(setDate,1000);

			var timeValue = d + h + m + s;

			if (timeValue <= 0) {

				clearTimeout(timeout);
				document.location.href="http://www.google.fr/";
			};
		};

});