<span class="ir-arriba fas fa-angle-up"></span>
<script>
     $(document).ready(function(){

$('.ir-arriba').click(function(){
     $('body, html').animate({
          scrollTop: '0px'
     }, 300);
});

$(window).scroll(function(){
     if( $(this).scrollTop() > 0 ){
          $('.ir-arriba').slideDown(300);
     } else {
          $('.ir-arriba').slideUp(300);
     }
});

});
</script>


<style>
     .ir-arriba {
	display:none;
	padding:20px;
	background: #666666;
	font-size:20px;
	color:#fff;
	cursor:pointer;
	position: fixed;
	bottom:20px;
	left:20px;
     border-radius: 0.5em;
}
</style>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>

</body>

</html>