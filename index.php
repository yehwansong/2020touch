
<!DOCTYPE html>

<html>
    <head>
        <meta name="viewport" content = "width=device-width, initial-scale = 1" />
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-title" content="onlyWebPro" />
        <meta charset="UTF-8">
        <title>2020touch</title>
        <style type="text/css">
        	html,body{
        		width: 100vw;
        		height: 100%;
        		overflow: hidden;
        		background-size: cover !important;
        		margin:0;
        	}
        	.finger{
        		position: fixed;
        		width: 90vw;
        		pointer-events: none;
        		opacity: 0;
        		margin-left: -34vw;
        		margin-top: -15vw;
        		transition:1s;
        	}
        	.work{
        		opacity: 1;
        		transform: scale(1);
        	}
        	.no_work {
    			left: 75vw !important;
    			top: 100% !important;
    			transform: translateX(-100%) translateY(-100%) scale(0);
    			margin-top: 0 !important;
    			position: fixed;
    			margin-left: 0;
        	}
        	.overlay{
        		position: fixed;
        		width: 100vw;
        		height: 100vh;
        		background-color: black;
        		z-index: 100000;
        		opacity: 0.5;
        		transition: 0.2s
        	}
        	.overlay_light{
        		opacity: 0
        	}
        </style>
    </head>
    <body>
    	<script type="text/javascript" src="jquery.js"></script>
    	<script type="text/javascript">
var isMobile = false; //initiate as false
// device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) { 
    isMobile = true;
}
if(!isMobile){
	alert('This page only works on mobile devices.')
}
			var id = Math.floor(Math.random()*100000)
    		var new_imagearray = []
    		var imagearray = []
    		var movecounter = 0
    		var w = window.innerWidth;
    		var h = window.innerHeight
    		// duplicate
    		// data64
    		$(document).ready(function(){
    		w = window.innerWidth;
    		h = window.innerHeight
	    		$('body').css({height:h})
    			var pos_x
				var pos_y
	    		$('body').on('touchstart', function(e){
	    			console.log('1')
	    			pos_x = (e.originalEvent.touches[0].pageX/w) * 100
	    			pos_y = (e.originalEvent.touches[0].pageY/h) * 100
		    		$.ajax({
					    url: "input.php",
					    type: "POST",
  						cache: false,
					    data: {id:id, pos_x:pos_x, pos_y:pos_y},
					    success: function(data) {  
					    }
					});
    			})
	    		$('body').on('touchmove', function(e){
	    			console.log('2')
	    			pos_x = (e.originalEvent.touches[0].pageX/w) * 100
	    			pos_y = (e.originalEvent.touches[0].pageY/h) * 100
	    			movecounter++
	    			console.log(movecounter)
	    			if(movecounter > 1){
	    				movecounter = 0
			    		$.ajax({
						    url: "update.php",
						    type: "POST",
  							cache: false,
						    data: {id:id, pos_x:pos_x, pos_y:pos_y},
						    success: function(data) { 
						    }
						});

	    			}
	    		})
	    		$('body').on('touchend', function(e){
	    			console.log('3')
	    			pos_x = 99999
	    			pos_y = 99999
			    		$.ajax({
						    url: "update.php",
						    type: "POST",
  							cache: false,
						    data: {id:id, pos_x:pos_x, pos_y:pos_y},
						    success: function(data) {  
						    }
						});
	    		})



	    		var bgarray = ['bg_1','bg_2']
	    		var k = Math.floor(Math.random()*bgarray.length)
	    		$('body').css({'background':'url(img/'+bgarray[k]+'.png)'})
    		})
			getinfo()
			function getinfo() { 
			$('.updated').removeClass('updated')
			setTimeout(function(){getinfo()},100)
		     	$.ajax({    //create an ajax request to display.php
		        	type: "GET",
  					cache: false,
		        	url: "output.php",  //expect html to be returned                
		        	success: function(response){
		        	    var pre_array = response.split('/'); 
		        	    for (var k = pre_array.length - 1; k >= 0; k--) {
		        	    	var array = pre_array[k].split(',')
		        	    	if(array.length==3 && parseInt(array[0])!==parseInt(id,10)){
		        	    		console.log(parseInt(array[0])==parseInt(id,10))
		        	    		console.log(parseInt(array[0])!==parseInt(id,10))
		        	    		console.log(parseInt(id,10))
		        	    		console.log(parseInt(array[0]))
		        	    		if($('#'+array[0]).length){
		        	    			movefinger(array[0],array[1],array[2])
		        	    		}else{
		        	    			addnewfinger(array[0],array[1],array[2])
		    						$('.overlay').addClass('overlay_light')
		        	    		}
		        	    	}
		        	    	if(k==0){
		        	    		$( '.work:not(.updated)' ).removeClass('work').addClass('no_work').removeAttr('id')
		        	    	}
		        	    }
		        	}
		    	});
		    	// removed outdated
		     	$.ajax({
		        	url: "remove.php", 
  					cache: false,     
		        	success: function(data){  

		        	}
		    	});
		     	$.ajax({
		        	url: "old.php",  
  					cache: false,    
		        	success: function(data){  
		        	}
		    	});
		    	if($('.work').length>0){
		    		$('.overlay').addClass('overlay_light')
		    	}else{
		    		$('.overlay_light').removeClass('overlay_light')
		    	}
			}
			function hasarray(array1,array2){
    	    		for (var i = array1.length - 1; i >= 0; i--) {
    	    			for (var j = array2.length - 1; j >= 0; j--) {
    	    				if(array1[i][0] == array2[j][0] && array1[i][1] !== array2[j][1]){
    	    					return(array1[i])
    	    				}
    	    			}
    	    		}
			}
			function addnewfinger(id,left,top){
				if($('.no_work').length>0){
					$('.no_work').eq(0).addClass('work').attr('id',id).removeClass('no_work')
					$('#'+id).css({'left':left + 'vw'})
					$('#'+id).css({'top': (top /100)*h + 'px'})
					$('#'+id).addClass('updated')
				}else if($('.work').length>20){
					alert('Sorry! Maximum of 20 people is allowed!')
				}
			}
			function movefinger(id,left,top){	
				$('#'+id).css({'left':left + 'vw'})
				$('#'+id).css({'top': (top /100)*h + 'px'})
				$('#'+id).addClass('updated')
			}
			function removefinger(id,left,top){	
				$('#'+id).removeClass('work').addClass('no_work').removeAttr('id');
			    		$.ajax({
						    url: "remove.php",
						    type: "POST",
						    data: {id:id},
						    success: function(data) {  
						    	console.log('removed!!!')
						    }
						});
			}
    	</script>
    	<div class="overlay"></div>
    	<img src="img/finger.png" class="finger no_work">
    	<img src="img/finger.png" class="finger no_work">
    	<img src="img/finger-2.png" class="finger no_work">
    	<img src="img/finger-3.png" class="finger no_work">
    	<img src="img/finger-2.png" class="finger no_work">
    	<img src="img/finger.png" class="finger no_work">
    	<img src="img/finger-3.png" class="finger no_work">
    	<img src="img/finger-3.png" class="finger no_work">
    	<img src="img/finger.png" class="finger no_work">
    	<img src="img/finger-2.png" class="finger no_work">
    	<img src="img/finger-2.png" class="finger no_work">
    	<img src="img/finger-3.png" class="finger no_work">
    	<img src="img/finger.png" class="finger no_work">
    	<img src="img/finger.png" class="finger no_work">
    	<img src="img/finger-2.png" class="finger no_work">
    	<img src="img/finger-3.png" class="finger no_work">
    	<img src="img/finger.png" class="finger no_work">
    	<img src="img/finger.png" class="finger no_work">
    	<img src="img/finger-3.png" class="finger no_work">
    	<img src="img/finger-3.png" class="finger no_work">
    </body>
</html>   