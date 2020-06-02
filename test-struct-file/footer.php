<footer id="gioithieu">
		<div class="container">
			<div class="box1">
				<div class="__box1">Thông tin cửa hàng</div>
				<div class="__box11">
					<p>Địa chỉ : Thái Bình</p> 
					<p>Cửa hàng duy nhất tại Thái Bình :|| </p>
					<p>Cung cấp dịch vụ xem mẫu điện thoại trực tuyến</p> 
					
				</div>
			</div>
			<div class="box1">
				<div class="__box1">Thông tin liên hệ</div>
				<div class="__box11">
					<p>admin : Thịnh</p> 
					<p>Địa chỉ : Thái Bình </p>
					<p>SĐT :0123456789</p> 
					<p>Email : email@gmail.com </p>
					
				</div>
			</div>
			<div class="box1">
				<div class="__box1">Nhân viên chăm sóc khách hàng</div>
				<div class="__box11">
					<p>empl : Thịnh</p> 
					<p>Địa chỉ : Thái Bình </p>
					<p>SĐT :0123456789</p> 
					<p>Email : email@gmail.com </p>
				</div>
			</div>
			<div class="box1">
				<div class="__box1">Tình trạng btl </div>
				<div class="__box11">
					<p> </p> 
					<p> </p>
					<p> </p> 
					<p> ...</p>
				</div>
			</div>
		</div>
		<div class="design">
			design by thinh / shop didong.vn
		</div>
	</footer>

<?php mysqli_close($conn);?>



<script type="text/javascript">
	var slideIndex = 1;
	showSlides(slideIndex);

	// Next/previous controls
	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	// Thumbnail image controls
	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  if (n > slides.length) {slideIndex = 1}
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
	      slides[i].style.display = "none";
	  }
	  for (i = 0; i < dots.length; i++) {
	      dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";
	  dots[slideIndex-1].className += " active";
	} 
        
        var myIndex = 0;
        carousel();

        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 5000);    
        }
</script>
<script type="text/javascript">
	function() {
	  jQuery('.search-form').slideToggle();
	}
</script>
</body>
</html>