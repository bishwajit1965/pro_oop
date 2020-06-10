<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
<script src="public/js/jquery-3.2.1.slim.min.js"></script>   
<script src="public/js/popper.min.js"></script>
<script src="public/bootstrap-4.1.1/dist/js/bootstrap.min.js"></script>
<script>
    $(function () {
    $('[data-toggle="tooltip"]').tooltip()
    })
</script>

<!-- Fade out bootstrap alert messages -->
<script type="text/javascript">
  $(document).ready(function () {
    window.setTimeout(function() {
        $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
            $(this).remove(); 
        });
    }, 3000);   
});
</script>