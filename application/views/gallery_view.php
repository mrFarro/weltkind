<?php $this->load->view('/template/header');?>
    <div class="row">
        <?php foreach ($index as $item): ?>

        <div class="col-lg-4 col-md-4 col-sm-6">

            <div class="thumbnail">

                <a href="<?=base_url('/Gallery/image/'.$item['album_id'])?>">

                    <img src="<?php echo base_url('./assets/uploads/').$item ['path']?>"/>

                </a>

                <div class="thumbnail-caption">

                    <h4><a href="<?=base_url('/Gallery/image/'.$item['album_id'])?>"> <?php echo $item['name_image'];?></a></h4>

                </div>

            </div>

        </div><!-- /.col-lg-3.col-md-4.col-sm-6 -->

        <?php endforeach; ?>

    </div><!-- ./row -->

<nav class='text-center'>
    <ul class="pagination">
<div class="pagination">             
     <p><?php echo $links; ?></p>
</div>
            <?php //echo $this->pagination->create_links();?>

    </ul>
</nav>
<footer>
    <p class="text-center">&copy; 2017 Php Junior</p>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.min.js"></script>




