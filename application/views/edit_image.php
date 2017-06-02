<html>
<head>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/custom.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('assets/ui/jquery-ui.css');?>">
    <title>Image edit  page</title>
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
<body>
	<div class="col-sm-offset-3 col-lg-6 col-sm-6 well">
		<legend>Edit image</legend>
			<fieldset>
				<form action="<?=base_url('Gallery/process_edit_image')?>" method="post">
					<div class="form-group">
						<div class="row colbox">
							<div class="col-lg-4 col-sm-4">
								<label for="model_name" class="control-label">Image name</label>
							</div>
							<div class="col-lg-8 col-sm-8">
									  <input type="text" name="name" value="<?php //echo $name[0]['name_image'];?>">
							</div>
						</div>
					</div>

					
					
					<div class="form-group">   
						<div class="form-group">
							<div class="col-sm-offset-4 col-lg-8 col-sm-8 text-left">
								<button type="submit" id="submit" class="btn btn-primary">Отправить</button>
								<?= form_close()?>
							</div>
						</div>	
                    </div>

</body>
</html>

