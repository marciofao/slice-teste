<footer class="blog-footer">
        <a href="#">Back to top</a>
      </p>
</footer>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
$(document).on('click','a.text-dark',function(e){

	if($(this).attr("href") == "http://www.estadao.com.br"){
 		e.preventDefault();
	}

});

$(".d-inline-block.mb-2.text-success").each(function(){
	if($(this).text() == "Política" || $(this).text() == "Home")
	{
		$(this).removeClass("text-success");
		$(this).addClass("text-warning");
	}
});


</script>