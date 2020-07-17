<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>
<body>

    <div class="container mt-5 mb-5 text-center">
        <h4>Data Pada Form</h4>
    </div>
    <div class="container">
        <?php
        if(!empty(session()->getFlashdata('success'))){ ?>

        <div class="alert alert-success">
            <?php echo session()->getFlashdata('success');?>
        </div>
            
        <?php } ?>
        <?php if(!empty(session()->getFlashdata('info'))){ ?>

        <div class="alert alert-info">
            <?php echo session()->getFlashdata('info');?>
        </div>
            
        <?php } ?>

        <?php if(!empty(session()->getFlashdata('warning'))){ ?>

        <div class="alert alert-warning">
            <?php echo session()->getFlashdata('warning');?>
        </div>
            
        <?php } ?>
    </div>
    <div class="container">
        <a href="<?php echo base_url('product/create'); ?>" class="btn btn-success float-right mb-3">Tambah Produk</a>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php 
                    foreach($product as $key => $data) { ?>
                    <tr>
                        <td><?php echo $key+1; ?></td>
                        <td><?php echo $data['user_name']; ?></td>
                        <td><?php echo $data['user_name']; ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="<?php echo base_url('product/edit/'.$data['product_id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="<?php echo base_url('product/delete/'.$data['product_id']); ?>" class="btn btn-danger btn-sm" >