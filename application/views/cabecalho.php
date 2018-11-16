<html>
    <head>
        <meta charset="utf-8" />
        <title>Blog</title>
    </head>
    <body>
        <?php if ($this->session->flashdata('error') == TRUE): ?>
            <h2><?=$this->session->flashdata('error')?></h2>
        <?php endif; ?>
        
        <?php if ($this->session->flashdata('success') == TRUE): ?>
            <h2><?=$this->session->flashdata('success')?></h2>
        <?php endif; ?>
        
        <h1><?=$titulo?></h1>