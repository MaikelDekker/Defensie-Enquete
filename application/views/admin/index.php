<!DOCTYPE html>
<html>
<body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styleAdmin.css">
<nav class="nav">
    <ul>
        <li>
            <a id="menuButton" style="background-image: url(http://edresearchsociety.org/EDRS_ONLINE/mobile/images/white-menu-icon.png);" href="#"></a>
            <ul>
                <li><a href="<?php echo site_url('news/index'); ?>">Home</a></li>
                <li><a href="<?php echo site_url('enquete/index'); ?>">Enquete</a></li>
                <li><a href="<?php echo site_url('participant/index'); ?>">Participants</a></li>
                <li><a href="<?php echo site_url('admin/index'); ?>">Admin</a></li>
            </ul>
        </li>
        <a id="logout" href="<?php echo base_url('index.php/admin/user_logout');?>"><button type="button" class="btn-primary">Logout</button></a>
    </ul>
</nav>
<main style="width: 50%; text-align: center; margin-left: 25%;">
<h2><?php echo $title; ?></h2>
 
<p>Welkom op de admin pagina. Vanuit deze pagina kunt u naar andere pagina's om bijvoorbeeld deelnemers uit te nodigen, deelnemers toe te voegen en resultaten uit te lezen.</p>
<section id="adminButtons">
    <a href="<?php echo site_url('participant/index'); ?>" style="background-image: url(https://daks2k3a4ib2z.cloudfront.net/56ae61b9a81ccf191fe0eeb3/56ae61b9a81ccf191fe0eef7_Icon-group.png);"></a>
    <a href="<?php echo site_url('admin/results'); ?>" style="background-image: url(http://kalypso.com/uploads/content/RR-Icon-Business-Results-White.png)"></a>
    <a href="<?php echo site_url('enquete/index'); ?>" style="background-image: url(http://pngify.me/gd/makefg.php?i=icons/Application/task-03.png&r=255&g=255&b=255)"></a>
</section>
</main>
</body></html>