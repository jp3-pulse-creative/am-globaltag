function GPlus(t) {
	this.is = "Google Plus", this.title = t.title, this.url = t.url, this.content = t.object.content;
	try {
		if (t.object.attachments) {
			this.img_url = t.object.attachments[0].image.url;
		} else {
			this.img_url = "./wp-content/themes/bones/images/sm_bg.jpg";
		};
	} catch (e) {
		//e
	};
}

$(document).ready(function() {
	var num = 15;
	if (/Android|BlackBerry|iPhone|iPod|webOS/i.test(navigator.userAgent) === true) {
		num = 12;
	}
	//if (/Android|BlackBerry|iPhone|iPad|iPod|webOS/i.test(navigator.userAgent) === false) {
    content = {}, content.gplusPAver = [], content.gplusNAlve = [], content.gplusEPerez = [], $.ajax({
        type: "POST",
        url: "https://www.googleapis.com/plus/v1/people/113081656953753960151/activities/public?maxResults="+num+"&key=AIzaSyDkwZv2JPSY-YvU5hJ53svY9nppSKO_dZw",
        async: true,
        beforeSend: function(t) {
            t == t.overrideMimeType && t.overrideMimeType("application/j-son;charset=UTF-8")
        },
        dataType: "jsonp",
        success: function(t) {
            $.each(t.items, function(t, e) {
                content.gplusPAver[t] = new GPlus(e); /* Paul Aversano */
            })
        },
        error: function() {}
    }).done(function() {}), $.ajax({
        type: "POST",
        url: "https://www.googleapis.com/plus/v1/people/116493373722569971130/activities/public?maxResults="+num+"&key=AIzaSyDa0mVgMytdekWTpq9aPD0tSDnJ8EDM23I",
        async: true,
        beforeSend: function(t) {
            t == t.overrideMimeType && t.overrideMimeType("application/j-son;charset=UTF-8")
        },
        dataType: "jsonp",
        success: function(t) {
            $.each(t.items, function(t, e) {
                content.gplusNAlve[t] = new GPlus(e); /* Nick Alvarez */
            })
        },
        error: function() {}
	}).done(function() {}), $.ajax({
        type: "POST",
        url: "https://www.googleapis.com/plus/v1/people/100377607608585824436/activities/public?maxResults="+num+"&key=AIzaSyC2ZVp4LZkrPQ7B2i4J4blUtD9zNjnq5TY",
        async: true,
        beforeSend: function(t) {
            t == t.overrideMimeType && t.overrideMimeType("application/j-son;charset=UTF-8")
        },
        dataType: "jsonp",
        success: function(t) {
            $.each(t.items, function(t, e) {
                content.gplusEPerez[t] = new GPlus(e); /* Ernie Perez */
            })
        },
        error: function() {}
	}).done(function() {});

	function shuffle(array) {
	  var currentIndex = array.length, temporaryValue, randomIndex;

	  // While there remain elements to shuffle...
	  while (0 !== currentIndex) {

		// Pick a remaining element...
		randomIndex = Math.floor(Math.random() * currentIndex);
		currentIndex -= 1;

		// And swap it with the current element.
		temporaryValue = array[currentIndex];
		array[currentIndex] = array[randomIndex];
		array[randomIndex] = temporaryValue;
	  }

	  return array;
	}	
	function getRandomInt(min, max) {
	  min = Math.ceil(min);
	  max = Math.floor(max);
	  return Math.floor(Math.random() * (max - min)) + min;
	}
	
	var order = [0,1,2,3];
	var orderM = [0,1,2];
	var et=0, pt=0, nt=0;
    var soc_e = function(t, e) {
		var currRow = "row-"+t+"";
		
		for(var sc = 0;sc <4;sc++){
			
			if(order[sc]==0){
				$("#all").append('<div class="sb-ctn"><div class="social-box" style="background-image:url(' + e.gplusEPerez[et].img_url + ')"><div class="soc-logo"><span class="fa fa-google-plus" aria-hidden="true"></span></div><div class="s-text"><p>' + e.gplusEPerez[et].content + '</p></div><a class="s-link" target="_blank" href="' + e.gplusEPerez[et].url + '"></a></div></div>');				
				et++;
			}else if (order[sc]==1){
				$("#all").append('<div class="sb-ctn"><div class="social-box" style="background-image:url(' + e.gplusPAver[pt].img_url + ')"><div class="soc-logo"><span class="fa fa-google-plus" aria-hidden="true"></span></div><div class="s-text"><p>' + e.gplusPAver[pt].content + '</p></div><a class="s-link" target="_blank" href="' + e.gplusPAver[pt].url + '"></a></div></div>');				
				pt++;
			}else if (order[sc]==2){
				$("#all").append('<div class="sb-ctn"><div class="social-box" style="background-image:url(' + e.gplusNAlve[nt].img_url + ')"><div class="soc-logo"><span class="fa fa-google-plus" aria-hidden="true"></span></div><div class="s-text"><p>' + e.gplusNAlve[nt].content + '</p></div><a class="s-link" target="_blank" href="' + e.gplusNAlve[nt].url + '"></a></div></div>');				
				nt++;
			}else{
				rInt = getRandomInt(0,3);
				if(rInt==0){
					$("#all").append('<div class="sb-ctn"><div class="social-box" style="background-image:url(' + e.gplusEPerez[et].img_url + ')"><div class="soc-logo"><span class="fa fa-google-plus" aria-hidden="true"></span></div><div class="s-text"><p>' + e.gplusEPerez[et].content + '</p></div><a class="s-link" target="_blank" href="' + e.gplusEPerez[et].url + '"></a></div></div>');				
					et++;
				}else if(rInt==1){
					$("#all").append('<div class="sb-ctn"><div class="social-box" style="background-image:url(' + e.gplusNAlve[nt].img_url + ')"><div class="soc-logo"><span class="fa fa-google-plus" aria-hidden="true"></span></div><div class="s-text"><p>' + e.gplusNAlve[nt].content + '</p></div><a class="s-link" target="_blank" href="' + e.gplusNAlve[nt].url + '"></a></div></div>');				
					nt++;
				}else{
					$("#all").append('<div class="sb-ctn"><div class="social-box" style="background-image:url(' + e.gplusPAver[pt].img_url + ')"><div class="soc-logo"><span class="fa fa-google-plus" aria-hidden="true"></span></div><div class="s-text"><p>' + e.gplusPAver[pt].content + '</p></div><a class="s-link" target="_blank" href="' + e.gplusPAver[pt].url + '"></a></div></div>');				
					pt++;
				}
			}
		}
    };
    var soc_m = function(t, e) {
		var currRow = "row-"+t+"";
		
		for(var sc = 0;sc <3;sc++){
			
			if(order[sc]==0){
				$("#all").append('<div class="sb-ctn"><div class="social-box" style="background-image:url(' + e.gplusEPerez[et].img_url + ')"><div class="soc-logo"><span class="fa fa-google-plus" aria-hidden="true"></span></div><div class="s-text"><p>' + e.gplusEPerez[et].content + '</p></div><a class="s-link" target="_blank" href="' + e.gplusEPerez[et].url + '"></a></div></div>');				
				et++;
			}else if (order[sc]==1){
				$("#all").append('<div class="sb-ctn"><div class="social-box" style="background-image:url(' + e.gplusPAver[pt].img_url + ')"><div class="soc-logo"><span class="fa fa-google-plus" aria-hidden="true"></span></div><div class="s-text"><p>' + e.gplusPAver[pt].content + '</p></div><a class="s-link" target="_blank" href="' + e.gplusPAver[pt].url + '"></a></div></div>');				
				pt++;
			}else{
				$("#all").append('<div class="sb-ctn"><div class="social-box" style="background-image:url(' + e.gplusNAlve[nt].img_url + ')"><div class="soc-logo"><span class="fa fa-google-plus" aria-hidden="true"></span></div><div class="s-text"><p>' + e.gplusNAlve[nt].content + '</p></div><a class="s-link" target="_blank" href="' + e.gplusNAlve[nt].url + '"></a></div></div>');				
				nt++;
			}
		}
    };
	var soc_EPerez = function(t, e) {
		
		$("#ernie-perez").append('<div class="sb-ctn"><div class="social-box" style="background-image:url(' + e.gplusEPerez[t].img_url + ')"><div class="soc-logo"><span class="fa fa-google-plus" aria-hidden="true"></span></div><div class="s-text"><p>' + e.gplusEPerez[t].content + '</p></div><a class="s-link" target="_blank" href="' + e.gplusEPerez[t].url + '"></a></div></div>');				
	};
	var soc_PAver = function(t, e) {
		
		$("#paul-aversano").append('<div class="sb-ctn"><div class="social-box" style="background-image:url(' + e.gplusPAver[t].img_url + ')"><div class="soc-logo"><span class="fa fa-google-plus" aria-hidden="true"></span></div><div class="s-text"><p>' + e.gplusPAver[t].content + '</p></div><a class="s-link" target="_blank" href="' + e.gplusPAver[t].url + '"></a></div></div>');				
	};
	var soc_NAlve = function(t, e) {
		
		$("#nick-alvarez").append('<div class="sb-ctn"><div class="social-box" style="background-image:url(' + e.gplusNAlve[t].img_url + ')"><div class="soc-logo"><span class="fa fa-google-plus" aria-hidden="true"></span></div><div class="s-text"><p>' + e.gplusNAlve[t].content + '</p></div><a class="s-link" target="_blank" href="' + e.gplusNAlve[t].url + '"></a></div></div>');				
	};
	
	var soc_c = 0;

    setTimeout(function() {
		console.log(content);
		if (/Android|BlackBerry|iPhone|iPod|webOS/i.test(navigator.userAgent) === true) {
			for(soc_c=soc_c;soc_c<3;soc_c++){			
				order = shuffle(order);
				soc_i();
				soc_m(soc_c, content); 
				soc_i();
			}
			for(var ic=0;ic<9;ic++){
				soc_i();
				soc_EPerez(ic,content);
				soc_i();
				soc_PAver(ic,content);
				soc_i();
				soc_NAlve(ic,content);
				soc_i();
			}
		}else{
			for(soc_c=soc_c;soc_c<3;soc_c++){			
				order = shuffle(order);
				soc_i();
				soc_e(soc_c, content); 
				soc_i();
			}
			for(var ic=0;ic<12;ic++){
				soc_i();
				soc_EPerez(ic,content);
				soc_i();
				soc_PAver(ic,content);
				soc_i();
				soc_NAlve(ic,content);
				soc_i();
			}
		}
    }, 2e3);
    var soc_i = function() { };
});
