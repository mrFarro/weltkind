<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Админ панель фотогалерии</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css" rel="stylesheet');?>" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url('assets/css/animate.min.css');?>" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url('assets/css/paper-dashboard.css');?>" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url('assets/css/demo.css');?>" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('assets/css/themify-icons.css');?>" rel="stylesheet">
<style type="text/css">
    .ramka{
        width: 200px;
        height: 200px;
    }
</style>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="black" data-active-color="danger">

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?php echo base_url('gallery/index')?>" class="simple-text">
                    To user_s page
                </a>
            </div>

            <ul class="nav">
                <li>
                      
                       <a href="<?=base_url('/Gallery/add_images/'.$id);?>">
                      <i class="ti-panel"></i>
                           <p>Добавить фото</p>
                    </a>
                        
                </li>

                <li>
                    <a href="<?=base_url('/Gallery/album/');?>">
                        <i class="ti-user"></i>
                        <p>Сначало новые </p>
                    </a>
                </li>
                
                                <li>
                    <a href="<?=base_url('/Gallery/sort_old/');?>">
                        <i class="ti-user"></i>
                        <p>Сначало cтарые </p>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>


                </div>
                <div class="collapse navbar-collapse">

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Images</h4>
                                <p class="category"></p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                  
                                    <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Photo</th>
                                    <th>Action</th>

                                    </tr>
                                    <?php $i=1;?>
                                    <?php foreach ($image as $item): ?>
                                    <tbody>
                                        <tr>
                                            <td><h6><?php echo $i++;?></h6></td>
                                            <td><h4><?php echo $item['path'];?></h4></td>
                                            <td><img class="ramka"src="<?=base_url('assets/uploads/'.$item['path']);?>"</img></td>
                                       
                                        
                                            
                                            <td><button type="button" class="btn btn-info"><a href="<?=base_url('/Gallery/delete_image/'.$item['id']);?>">Delete</a></button></td>
                                            
                                  <?php endforeach;?>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    




