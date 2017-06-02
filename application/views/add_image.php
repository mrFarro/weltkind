<html>
<head>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <script type="text/javascript" src="<?php echo base_url("assets/js/jqery.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link href="<?php echo base_url('assets/css/custom.css');?>" rel="stylesheet">
    <title>Insert image page</title>
    <style>
        .menu
        {
            background-color: #00547E;
            border-bottom: 4px solid #04A3ED;
            width:100%;
            height: auto;
            padding: 0 10px;
            position: fixed;
            margin: 0px;
            z-index: 1;
            opacity: 0.9;
        }

        .menu  .navbar-nav > .active > a
        {
            background-color : #04A3ED;
            color: white;
            font-weight: bold;
        }

        .menu  .navbar-nav >  li >  a
        {
            font-size: 13px;
            color: white;
            padding: 10px 35px;

        }
        .menu  .navbar-nav >  li >  a:hover
        {
            background-color: #04A3ED;
        }

        .navbar-header > a
        {
            font-family: 'Ubuntu Condensed', sans-serif;
            padding: 0px;
            margin: 0px;
            text-decoration: none;
            color: white;
            font-size: 25px;
            padding: 5px 30px;
        }
        .navbar-header > a:hover
        {
            text-decoration: none;
            color: #04A3ED;
        }
    </style>
</head>
<div class="col-sm-offset-3 col-lg-6 col-sm-6 well">
    <legend>Add new image</legend>
    <fieldset>
        <form action="<?=base_url('Gallery/process_add_img')?>" method="post"  enctype="multipart/form-data">
            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                        <label for="name" class="control-lprocess_add_imgabel">Image name</label>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        
                        <input type="text" name="name" required id="name" placeholder="Name" class="form-control"/>
                    </div>
                </div>
            </div>




            <input type="hidden" name="id" value="<?php echo $id;?>"> <br><br>


            <div class="form-group">
                <div class="row colbox">
                    <div class="col-lg-4 col-sm-4">
                        <label for="hireddate" class="control-label"></label>
                    </div>
                    <div class="col-lg-8 col-sm-8">
                        <!-- <input type="file" name="userfile[]" required id="image_file" accept=".png,.jpg,.jpeg,.gif" multiple>!-->
                        <?php //echo form_open_multipart('upload/do_upload');?>
                        <input type="file" name="userfile" size="20" />

                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-offset-4 col-lg-8 col-sm-8 text-left">
                    <input type="submit" id="saveForm" name="saveForm"  class="btn btn-primary" value="Добавить">
                </div>   
            </div>
   <?php echo form_close(); ?>
        </div>
   
 <hr>
            
            
            




