<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Фотогалерея на codeignaiter</title>

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

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="black" data-active-color="danger">

        <!--
            Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
            Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
        -->

        <div class="sidebar-wrapper">
            
            <div class="logo">
                <a href="<?php echo base_url('gallery/index')?>" class="simple-text">
                    To user_s page
                </a>
            </div>

            <ul class="nav">
                <li>
                      
                       <a href="<?=base_url('/Gallery/add_album/');?>>">
                      <i class="ti-panel"></i>
                           <p>Добавить альбом</p>
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
                <hr>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                     </button>
                    
                    
                    
                    
                    
                    

 <p>Total images</p>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
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
                                <h4 class="title">Albums</h4>
                                <p class="category"></p>
                            </div>
                            
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                  
                                    <tr>
                                    <th>Number</th>
                                    <th>Name</th>
                                    <th>Data creating</th>
                                    <th>Album  description</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                   <!-- <th>Total images</th>!-->
                                    </tr>
                                    <?php $i=1;?>
                                    <?php foreach ($albums as $item): ?>
                                    <tbody>
                                        <tr>
                                           
                                          
                                            <td><?php echo $i++;?></td>
                                            <td>
                                                <a href="<?=base_url('/Gallery/images/'.$item['id'])?>">
                                                <?php echo $item['name_image'];?>
                                                </a>
                                            </td>
                                            <td>
                                                <?php echo $item['data'];?>
                                            </td>
                                            <td>
                                                <?php echo $item['descr_image'];?>
                                            </td>
                                            
                                            <td><button type="button" class="btn btn-info"><a href="<?=base_url('/Gallery/edit_album/'.$item['id']);?>">Edit</a></button></td>
                                            <td><button type="button" class="btn btn-info"><a href="<?=base_url('/Gallery/delete_album/'.$item['id']);?>">Delete</a></button></td>
                                                    <?php endforeach;?>
                                             <td><?php echo $total;?></td>
                                
                                            
                                 
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    

         


