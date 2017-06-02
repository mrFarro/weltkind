 <nav class='text-center'>
        <ul class="pagination">
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
<footer>
    <p class="text-center">&copy; 2017 Php Junior</p>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?=base_url('assets/js/bootstrap.min.js');?>"</script>
 <script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
 <script src="<?php echo base_url('assets/fancybox/dist/jquery.fancybox.min.js');?>"</script>
 
 	<script src="<?php echo base_url('assets/ui/jquery-ui.js')?>"></script>

	<script>
$(function(){
	$( "#date" ).datepicker({
		dateFormat: "dd.mm.yy"
	});
});
	</script>
</body>
</html>