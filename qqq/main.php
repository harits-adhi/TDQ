<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Task Master!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type ="text/css" href="css/bootstrap.min.css">
  <link rel = "stylesheet" type = "text/css" href = "css/style2.css" />
  <script src="js/jquerry.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<div class="back"><a href="index.html"><img src="TAskMAster/Quest%20mode_main/back.png"></a></div>
	<div class="questmode"><img src="TAskMAster/Quest%20mode_main/Quest-Mode-Logo.png"></div>
	<div id="fillbar"></div>
	<div class="breakbar"></div> 
	<div class="framebar"><img src="TAskMAster/Quest%20mode_main/TimeBar_Frame.png"></div>
	
	<img id="arrow" src="TAskMAster/Quest%20mode_main/panah.png">
	<div class="task">
		<img src="TAskMAster/Quest%20mode_main/Window-Task.png">
		<img id="star-1" onclick="changeStar1()" src="TAskMAster/Quest%20mode_main/star_incomplete.png">
		<img id="star-2" onclick="changeStar2()" src="TAskMAster/Quest%20mode_main/star_incomplete.png">
		<img id="star-3" onclick="changeStar3()" src="TAskMAster/Quest%20mode_main/star_incomplete.png">
		<img id="star-4" onclick="changeStar4()" src="TAskMAster/Quest%20mode_main/star_incomplete.png">
		<img id="star-5" onclick="changeStar5()" src="TAskMAster/Quest%20mode_main/star_incomplete.png">
		<div id="desc"><p id="desc_text"><?php echo $_SESSION['inputTask'] ?></p></div>
		<div id="start"><p id="start_text"><?php echo $_SESSION['beginTask'] ?></p></div>
	</div>
	<div class="taskk">
		<img src="TAskMAster/Quest%20mode_main/Window-Task.png">
		<img id="star-11" onclick="changeStar11()" src="TAskMAster/Quest%20mode_main/star_incomplete.png">
		<img id="star-22" onclick="changeStar22()" src="TAskMAster/Quest%20mode_main/star_incomplete.png">
		<img id="star-33" onclick="changeStar33()" src="TAskMAster/Quest%20mode_main/star_incomplete.png">
		<img id="star-44" onclick="changeStar44()" src="TAskMAster/Quest%20mode_main/star_incomplete.png">
		<img id="star-55" onclick="changeStar55()" src="TAskMAster/Quest%20mode_main/star_incomplete.png">
		<div id="descc"><p id="desc_text"><?php echo $_SESSION['inputTaskk'] ?></p></div>
		<div id="finish"><p id="finish_text"><?php echo $_SESSION['finishTaskk'] ?></p></div>
	</div>
	<div class="reset"><a href="#yourModal" data-toggle="modal" data-target="#yourModal"><img src="TAskMAster/Quest%20mode_main/Reset.png"></a></div>
	
	 <!-- Modal -->
  <div class="modal modal-wide fade" id="yourModal" role="dialog" style="background:transparent;box-shadow: none;border:0;">
    <div class="modal-dialog modal-lg" style="background:transparent;box-shadow: none;border:0;">
      <div class="modal-content" style="background:transparent;box-shadow: none;border:0;">
        <div class="modal-body" style="background-image:url(TAskMAster/Quest%20mode_window/BGnoT.png);background-size:cover;box-shadow: none;border:0;">
          <div class = "kantin-container">
			<div class = "kantin-peta">	
				<form name="input_data" method="post" action="quest.php">		
				<div class="barak"><img name="barak" id="add-2" src="TAskMAster/Quest%20mode_window/plus.png" style="width:40px;height:40px;" alt="javascript button"></a></div>
				<div class="cbar"><img name="cbar" src="TAskMAster/Quest%20mode_window/Add.png" style="width:160px;height:80px;" alt="javascript button"></div>
				
				<div class="ctim"><table id="table-2" style="width:40%;">
				<div style="position:relative"><tr><td><img name="ctim" src="TAskMAster/Quest%20mode_window/Task-window_v2.png" style="width:700px;height:80px" alt="javascript button">
				<div class="box"><img name="box" src="TAskMAster/Quest%20mode_window/break-box.png" style="width:80px;height:20px;" alt="javascript button"></div>
				<div class="boxa"><img name="boxa" src="TAskMAster/Quest%20mode_window/break-box.png" style="width:80px;height:20px;" alt="javascript button"></div>
				<div class="borju"><input type="text" name="inputTask" maxlength="1000" style="width:465px;height:40px;background:transparent;box-shadow: none;border:0;" required="required" placeholder="Type your target here..."/></div>
				<div class="gbar"><input type="time" name="beginTask" maxlength="1000" style="width:100px;height:18px;background:transparent;box-shadow: none;border:0;" required="required"/></div>
				<div class="saraga"><input type="time" name="finishTask" maxlength="1000" style="width:100px;height:18px;background:transparent;box-shadow: none;border:0;" required="required"/></div></td></tr></div>				
				</table>
				</div>
				
				<div class ="breaked"><img name="breaked" src="TAskMAster/Quest%20mode_window/break-teks.png" alt="javascript button"></div>
				<div class ="breakedd"><img name="breaked" src="TAskMAster/Quest%20mode_window/break-box.png" alt="javascript button"></div>
				<div class ="breakeddd"><input type="number" name="breakeddd" min="10" max="30" style="width:100px;height:18px;background:transparent;box-shadow: none;border:0;" required="required" placeholder="30"/></div>
				<div class ="breakedddd"><p><strong>minute(s)</strong></p></div>
				
				<div class="ctimtim"><table id="table-2" style="width:40%;">
				<div style="position:relative"><tr><td><img name="ctim" src="TAskMAster/Quest%20mode_window/Task-window_v2.png" style="width:700px;height:80px" alt="javascript button">
				<div class="box"><img name="box" src="TAskMAster/Quest%20mode_window/break-box.png" style="width:80px;height:20px;" alt="javascript button"></div>
				<div class="boxa"><img name="boxa" src="TAskMAster/Quest%20mode_window/break-box.png" style="width:80px;height:20px;" alt="javascript button"></div>
				<div class="borju"><input type="text" name="inputTaskk" maxlength="1000" style="width:465px;height:40px;background:transparent;box-shadow: none;border:0;" required="required" placeholder="Type your target here..."/></div>
				<div class="gbar"><input type="time" name="beginTaskk" maxlength="1000" style="width:100px;height:18px;background:transparent;box-shadow: none;border:0;" required="required"/></div>
				<div class="saraga"><input type="time" name="finishTaskk" maxlength="1000" style="width:100px;height:18px;background:transparent;box-shadow: none;border:0;" required="required"/></div></td></tr></div>				
				</table>
				</div>
				
				<div class="sbm"><input type="submit" name="submit" class="linkButton" value="Done"/></div>
				<div class="sf"><a href="#"><img name="close" src="TAskMAster/Quest%20mode_window/Layer-1.png" style="width:40px;height:40px;" data-dismiss="modal" alt="javascript button"></a></div>
				</form>
			</div>
		</div>
        </div>
      </div>
    </div>
  </div>
</div>
	<script>
	$(".modal-wide").on("show.bs.modal", function() {
	  var height = $(window).height() - 50;
	  $(this).find(".modal-body").css("max-height", height);
	});
  </script>
  
<script>
$(document).ready(function(){
	var bar = document.getElementById("fillbar");
	var arrow = document.getElementById("arrow");
	var x = 1;
	var id = setInterval(frame, 100);
	function frame() {
	  if (x == 1024) {
		clearInterval(id);
	  } else {
		x++; 
		bar.style.width = x + 'px'; 
		arrow.style.left = 118 + x + 'px'; 
	  }
	};
		$("#add").click(function() {
		$("#table").append("<img name='bengkok' src='TAskMAster/Quest%20mode_window/break-teks.png' style='width:auto;height:20px;margin-top:15px;margin-bottom:15px;margin-left:30px' alt='javascript button'/><img name='sr' src='TAskMAster/Quest%20mode_window/break-box.png' style='width:auto;height:20px;margin-top:15px;margin-bottom:15px;margin-left:10px' alt='javascript button'/><div style='position:relative'><tr><td><img name='ctim' src='TAskMAster/Quest%20mode_window/Task-window.png' style='width:700px;height:80px' alt='javascript button'/><div style='position:absolute;top:20px;left:65px'><input type='text' name='inputTask' maxlength='1000' style='width:465px;height:40px;' required='required' placeholder='Type your target here...'/></div><div style='position:absolute;top:15px;left:621px'><input type='text' name='beginTask' maxlength='1000' style='width:48px;height:15px;' required='required' placeholder='20:00'/></div><div style='position:absolute;top:-34px;left:110px'><input type='text' name='breakTime' maxlength='1000' style='width:63px;height:18px' required='required' placeholder='3 min'/></div><div style='position:absolute;top:50px;left:621px'><input type='text' name='beginTask' maxlength='1000' style='width:48px;height:15px;' required='required' placeholder='21:00'/></div></td></tr></div>");
	});
});
</script>

<script>
function changeStar1() {
    var image1 = document.getElementById('star-1');
    var image2 = document.getElementById('star-2');
    var image3 = document.getElementById('star-3');
    var image4 = document.getElementById('star-4');
    var image5 = document.getElementById('star-5');
    image1.src = "TAskMAster/Quest%20mode_main/star_complete.png";
    image2.src = "TAskMAster/Quest%20mode_main/star_incomplete.png";
    image3.src = "TAskMAster/Quest%20mode_main/star_incomplete.png";
    image4.src = "TAskMAster/Quest%20mode_main/star_incomplete.png";
    image5.src = "TAskMAster/Quest%20mode_main/star_incomplete.png";
}

function changeStar2() {
    var image1 = document.getElementById('star-1');
    var image2 = document.getElementById('star-2');
    var image3 = document.getElementById('star-3');
    var image4 = document.getElementById('star-4');
    var image5 = document.getElementById('star-5');
    image1.src = "TAskMAster/Quest%20mode_main/star_complete.png";
    image2.src = "TAskMAster/Quest%20mode_main/star_complete.png";
    image3.src = "TAskMAster/Quest%20mode_main/star_incomplete.png";
    image4.src = "TAskMAster/Quest%20mode_main/star_incomplete.png";
    image5.src = "TAskMAster/Quest%20mode_main/star_incomplete.png";
}

function changeStar3() {
    var image1 = document.getElementById('star-1');
    var image2 = document.getElementById('star-2');
    var image3 = document.getElementById('star-3');
    var image4 = document.getElementById('star-4');
    var image5 = document.getElementById('star-5');
    image1.src = "TAskMAster/Quest%20mode_main/star_complete.png";
    image2.src = "TAskMAster/Quest%20mode_main/star_complete.png";
    image3.src = "TAskMAster/Quest%20mode_main/star_complete.png";
    image4.src = "TAskMAster/Quest%20mode_main/star_incomplete.png";
    image5.src = "TAskMAster/Quest%20mode_main/star_incomplete.png";
}
function changeStar4() {
    var image1 = document.getElementById('star-1');
    var image2 = document.getElementById('star-2');
    var image3 = document.getElementById('star-3');
    var image4 = document.getElementById('star-4');
    var image5 = document.getElementById('star-5');
    image1.src = "TAskMAster/Quest%20mode_main/star_complete.png";
    image2.src = "TAskMAster/Quest%20mode_main/star_complete.png";
    image3.src = "TAskMAster/Quest%20mode_main/star_complete.png";
    image4.src = "TAskMAster/Quest%20mode_main/star_complete.png";
    image5.src = "TAskMAster/Quest%20mode_main/star_incomplete.png";
}
function changeStar5() {
    var image1 = document.getElementById('star-1');
    var image2 = document.getElementById('star-2');
    var image3 = document.getElementById('star-3');
    var image4 = document.getElementById('star-4');
    var image5 = document.getElementById('star-5');
    image1.src = "TAskMAster/Quest%20mode_main/star_complete.png";
    image2.src = "TAskMAster/Quest%20mode_main/star_complete.png";
    image3.src = "TAskMAster/Quest%20mode_main/star_complete.png";
    image4.src = "TAskMAster/Quest%20mode_main/star_complete.png";
    image5.src = "TAskMAster/Quest%20mode_main/star_complete.png";
}
</script>

<script>
function changeStar11() {
    var image1 = document.getElementById('star-11');
    var image2 = document.getElementById('star-22');
    var image3 = document.getElementById('star-33');
    var image4 = document.getElementById('star-44');
    var image5 = document.getElementById('star-55');
    image1.src = "TAskMAster/Quest%20mode_main/star_complete.png";
    image2.src = "TAskMAster/Quest%20mode_main/star_incomplete.png";
    image3.src = "TAskMAster/Quest%20mode_main/star_incomplete.png";
    image4.src = "TAskMAster/Quest%20mode_main/star_incomplete.png";
    image5.src = "TAskMAster/Quest%20mode_main/star_incomplete.png";
}

function changeStar22() {
    var image1 = document.getElementById('star-11');
    var image2 = document.getElementById('star-22');
    var image3 = document.getElementById('star-33');
    var image4 = document.getElementById('star-44');
    var image5 = document.getElementById('star-55');
    image1.src = "TAskMAster/Quest%20mode_main/star_complete.png";
    image2.src = "TAskMAster/Quest%20mode_main/star_complete.png";
    image3.src = "TAskMAster/Quest%20mode_main/star_incomplete.png";
    image4.src = "TAskMAster/Quest%20mode_main/star_incomplete.png";
    image5.src = "TAskMAster/Quest%20mode_main/star_incomplete.png";
}

function changeStar33() {
    var image1 = document.getElementById('star-11');
    var image2 = document.getElementById('star-22');
    var image3 = document.getElementById('star-33');
    var image4 = document.getElementById('star-44');
    var image5 = document.getElementById('star-55');
    image1.src = "TAskMAster/Quest%20mode_main/star_complete.png";
    image2.src = "TAskMAster/Quest%20mode_main/star_complete.png";
    image3.src = "TAskMAster/Quest%20mode_main/star_complete.png";
    image4.src = "TAskMAster/Quest%20mode_main/star_incomplete.png";
    image5.src = "TAskMAster/Quest%20mode_main/star_incomplete.png";
}
function changeStar44() {
    var image1 = document.getElementById('star-11');
    var image2 = document.getElementById('star-22');
    var image3 = document.getElementById('star-33');
    var image4 = document.getElementById('star-44');
    var image5 = document.getElementById('star-55');
    image1.src = "TAskMAster/Quest%20mode_main/star_complete.png";
    image2.src = "TAskMAster/Quest%20mode_main/star_complete.png";
    image3.src = "TAskMAster/Quest%20mode_main/star_complete.png";
    image4.src = "TAskMAster/Quest%20mode_main/star_complete.png";
    image5.src = "TAskMAster/Quest%20mode_main/star_incomplete.png";
}
function changeStar55() {
    var image1 = document.getElementById('star-11');
    var image2 = document.getElementById('star-22');
    var image3 = document.getElementById('star-33');
    var image4 = document.getElementById('star-44');
    var image5 = document.getElementById('star-55');
    image1.src = "TAskMAster/Quest%20mode_main/star_complete.png";
    image2.src = "TAskMAster/Quest%20mode_main/star_complete.png";
    image3.src = "TAskMAster/Quest%20mode_main/star_complete.png";
    image4.src = "TAskMAster/Quest%20mode_main/star_complete.png";
    image5.src = "TAskMAster/Quest%20mode_main/star_complete.png";
}
</script>

<script>
function newDoc() {
    window.location.assign("http://localhost/qqq/index.php")
}
</script>

<script>
     var time = new Date().getTime();
     $(document.body).bind("mousemove keypress", function(e) {
         time = new Date().getTime();
     });

     function refresh() {
         if(new Date().getTime() - time >= 120000) 
             window.location.reload(true);
         else 
             setTimeout("location.href = 'http://localhost/qqq/index.html';", 180000);
     }

     setTimeout("location.href = 'http://localhost/qqq/index.php';", 180000);
</script>
  
</body>
</html>