<?php
session_start();
if(empty($_SESSION['username'])){
	session_destroy();
	header('location: /');
	die();
}
include('config.php');
include('head_login.php');
?>


<body>
    
<script type='text/javascript'>
//<![CDATA[
//Ctrl+U
shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){top.location.href="/"});
//]]>
</script>
</script>   
<br>                             

   <strong><marquee direction="right"><font style="background-color: #FFFF00"> --- CH??O M???NG B???N ?????N V???I H??? TH???NG B??N HOTMAIL - TOKEN - HOTMAIL RAMDOM !!! ???? --- CH??C B???N S??? D???NG D???CH V??? C???A CH??NG T??I VUI V??? - C???M ??N !!! ???? --- </font></marquee></strong>   
     <strong><marquee direction="left"><font style="background-color: #FFFF00"> --- N???U C???N H??? TR??? VUI L??NG LI??N H??? FACEBOOK HO???C ZALO ADMIN TH??I : 0859243940!!! ???? --- </font></marquee></strong>  
</div><div class="box-header with-border">

    <div class="container">
        <div class="col-sm-12 col-xs-16">

<div class="row">
<div class="col-lg-12 col-lg-12"> 

<div class="panel panel-info">
<div class="panel-heading"><center>TH??NG TIN T??I KHO???N</center></div>
<div class="panel-body">
    <center><li class="list-group-item">T??I KHO???N: <font color="red"><b><?php echo $_SESSION['username']; ?> <img src="/theme/logo/verify.png" alt="" style="width:16px;height:16px"> </b></font>S??? D??: <font color="red"><b><?php $vnd = mysqli_fetch_assoc(mysqli_query($ketnoi,"SELECT `VND` FROM `account` WHERE `username` = '".$_SESSION['username']."'"))['VND']; echo $vnd; ?></b></font> VN??</li>
           <li class="list-group-item"><a class="btn btn-info" href="https://www.facebook.com/SayHiThaiNe" "="">
           <font color="white">FACEBOOK ADMIN TH??I</font></a>
           </span><a class="btn btn-info" href="napthe.php" "="">
               <font color="white">N???P TI???N </font></a></span> <a class="btn btn-danger" href="/dangxuat.php" "="">
               <font color="white">????NG XU???T</font></a></span>
            <?php
  if($_SESSION['username'] == 'adminmail'|| $_SESSION['username'] == 'adminmail'){ // tai khoan admin
  echo '
<li class="list-group-item"><a class="btn btn-info" href="/Admin/congtien.php">
           <font color="white">C???ng ti???n cho members</font></a>
<a class="btn btn-info" href="/Admin/addmail.php">
           <font color="white">Th??m mail</font></a>
<a class="btn btn-info" href="/the-voduythai/thechoduyet.txt">
           <font color="white">Th??? ch??? duy???t</font></a>
';
}
?>  
               
               
</pre>

</div>
</div>
</div>
    <div class="row">
                                   <div class="col-sm-12 col-md-3">
                                    <div class="thumbnail">
                                        <div class="caption">
                                         <center>
<img src="https://solucionsolarled.com/wp-content/uploads/2018/02/img_260077.png" alt="" style="width:50px;height:50px">                                  <i class="mdi mdi-check"></i>
                                 </button>
                                               <h3><b>HOTMAIL C???</b></h3>
                                               <a href="mail.php"><button type="button" class="btn btn-success"><b>S??? D???NG NGAY</b></button></a>
                                            </center>
                                        </div>
                                    </div>
									</div>
									
									<div class="col-sm-12 col-md-3">
                                    <div class="thumbnail">
                                        <div class="caption">
                                         <center>
<img src="https://solucionsolarled.com/wp-content/uploads/2018/02/img_260077.png" alt="" style="width:50px;height:50px">                                  <i class="mdi mdi-check"></i>
                                  <i class="mdi mdi-account-check"></i>
                                 </button>
                                               <h3><b>TOKEN</b></h3>
                                               <a href="token.php"><button type="button" class="btn btn-info"><b>S??? D???NG NGAY</b></button></a>
                                            </center>
                                        </div>
                                    </div>
									</div>
									
									<div class="col-sm-12 col-md-3">
                                    <div class="thumbnail">
                                        <div class="caption">
                                         <center>
<img src="https://solucionsolarled.com/wp-content/uploads/2018/02/img_260077.png" alt="" style="width:50px;height:50px">                                  <i class="mdi mdi-check"></i>
                                  <i class="mdi mdi-shield-outline"></i>
                                 </button>
                                               <h3><b>HOTMAIL RAMDOM</b></h3>
                                               <a href="mailramdom.php"><button type="button" class="btn btn-danger"><b>S??? D???NG NGAY</b></button></a>
                                            </center>
                                        </div>
                                    </div>
									</div>
									
									<div class="col-sm-12 col-md-3">
                                    <div class="thumbnail">
                                        <div class="caption">
                                         <center>
<img src="https://solucionsolarled.com/wp-content/uploads/2018/02/img_260077.png" alt="" style="width:50px;height:50px">                                  <i class="mdi mdi-check"></i>
                                  <i class="mdi mdi-account-remove"></i>
                                 </button>
                                               <h3><b>N???P TI???N</b></b></h3>
                                               <a href="https://www.facebook.com/SayHiThaiNe"><button type="button" class="btn btn-primary"><b>S??? D???NG NGAY</b></button></a>
                                            </center>
                                        </div>
                                    </div>
									</div>
<div align="center" style="z-index:9;visibility:visible;">
<div align="center" style="z-index:9;visibility:visible;"></div><style>HTML,BODY{cursor: url("http://downloads.totallyfreecursors.com/cursor_files/hand.cur"), url("http://downloads.totallyfreecursors.com/thumbnails/hand.gif"), auto;}</style>

<style>
body {
        background-image: url("https://wikicachlam.com/wp-content/uploads/2018/03/mau-tim.jpg");
} 
 
</style>
     <div class="col-sm-12 col-xs-12">
<div class="panel panel-info">
<div class="panel-heading"><center>C???ng Tr?? Truy???n</center></div>
<div class="panel-body">
<h><center>B???n c?? th???c m???c g?? h??y ????? l???i ?? ki???n t???i ????y !!!</center></h><br>  
<div class="form-group">
<input type="text" class="form-control" id="tinhan" placeholder="Nh???p Tin Nh???n T???i ????y...">
</div>
<div class="text-center">
<div class="form-group">
<button id="gui" type="button" class="btn btn-danger">G???i Tin Nh???n</button>

</div>

<div class="list-group-item list-group-item-success"><span style="color:#ff0000"><b style="text-decoration: bolder;color : #ff0000;text-shadow: 0 0 6px #ff000070;">
<div id="messenger">
</div>
</div>
</div></div>

<div id="messenger">
</div>
</div>
</div>
</div>           

<div class="form-group" id = "mess"></div>
<script type="text/javascript">

    $(document).ready(function() {
	setInterval(function(){
		$.get('mess.php', {
				}, function(data, status) {
					$("#messenger").html(data);
				});
		},1e3);
	});
	
	
	$('#gui').click(function(){
				var mess = $('#tinhan').val();
				if (mess == '') {
					toarst("warning","Vui L??ng Nh???p ?????y ????? Th??ng Tin","Th??ng B??o");
					return false;
				}
				$('#submit').prop('disabled', true)
				$.post('mess.php', {
					mess: mess,
				}, function(data, status) {
					$("#messenger").html(data);
					$('#tinhan').val('');
				});
			}) 
			
$(document).keypress(function(event){
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
		var mess = $('#tinhan').val();
				if (mess == '') {
				toarst("warning","Vui L??ng Nh???p ?????y ????? Th??ng Tin","Th??ng B??o");
					return false;
				}
				$('#submit').prop('disabled', true)
				$.post('mess.php', {
					mess: mess,
				}, function(data, status) {
					$("#messenger").html(data);
					$('#tinhan').val('');
				});
	}
});
	
$('#mua').click(function(){
				var soluong = $('#soluong').val();
				var loai = $('#loai').val();
				if(soluong < 0){
					toarst("error","BUG C??I L???N M?? BUG ?????T CON M??? M??Y BI???N NH?? OK !!!","Th??ng B??o");
					return;
				}
				if (soluong == '') {
					toarst("warning","Vui L??ng Nh???p ?????y ????? Th??ng Tin","Th??ng B??o");
					return false;
				}
				if (soluong == '') {
					toarst("error","S??? L?????ng Ph???i L???n H??n 1","Th??ng B??o");
					return false;
				}
				$('#submit').prop('disabled', true);
				    $('#mua').addClass('btn btn-info').html('??ang L???y...').attr('disabled','disabled');
				   
				$.post('thanhtoan.php', {
					soluong: soluong,
					loai:loai
				}, function(data, status) {
					$("#mess").html(data);
					$('#submit').prop('disabled', false);
					$('#mua').removeClass('btn btn-info').addClass('btn btn-primary').html('Mua Ti???p').removeAttr('disabled');
				});
			});


$('#soluong').keyup(function(){
			var soluong = $('#soluong').val();
			var loai = $('#loai').val();
			if(soluong < 0){
				toarst("error","BUG C??I L???N M??? M OK !!!","Th??ng B??o");
				return;
			}
			if(loai == 1 && soluong > 999999){
				toarst("error","S??? L?????ng Kh??ng ???????c L???n H??n  ??? H??? Th???ng","Th??ng B??o");
				return;
			}
			if(loai == 2 && soluong > 999999){
				toarst("error","S??? L?????ng Kh??ng ???????c L???n H??n  ??? H??? Th???ng","Th??ng B??o");
				return;
			}
                        if(loai == 1){
			var gia = 400;
                        }
                        if(loai == 2){
			var gia =9000;
                        }
			var tien = gia * soluong;
			var vnd = 10; // s??? ti???n khi t???o t??i kho???n m???i
			if(tien < vnd){
				toarst("error","B???n Kh??ng ????? Ti???n ????? Mua","Th??ng B??o");
			}
			$('#tongthanhtoan').html(tien.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,"));
			});
</script>
<div class="col-sm-12 col-xs-12">
</div>
		<div id="trave" style="display: none;">
		</div>
		<script type="text/javascript">
 
    function toarst(status, msg, title) {
        Command: toastr[status](msg, title)
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "onclick": null,
            "showDuration": "400",
            "hideDuration": "1000",
            "timeOut": "4000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "slideDown",
            "hideMethod": "slideUp"
        }
    }
</script>
<script type='text/javascript'>
//<![CDATA[
//Ctrl+U
shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){top.location.href="/"});
//]]>
</script>
    </body>
    
        </html>