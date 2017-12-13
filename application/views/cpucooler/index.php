<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>ID</strong></td>
        <td><strong>Name</strong></td>
        <td><strong>Designer</strong></td>
        <td><strong>Price</strong></td>
        <td><strong>Description</strong></td>
        <td><strong>Component</strong></td>
        <td><strong>Sockets</strong></td>
        <td><strong>Attachment</strong></td>
        <td><strong>Sound Level</strong></td>
        <td><strong>CPU</strong></td>
        <td><strong>Equipment</strong></td>
        <td><strong>LED Colors</strong></td>
        <td><strong>RPM</strong></td>
        <td><strong>Material</strong></td>
        <td><strong>Heatpipe Connections</strong></td>
        <td><strong>Airflow m³/H</strong></td>
        <td><strong>Static Pressure</strong></td>
        <td><strong>Power Connector</strong></td>
        <td><strong>Accessoires</strong></td>
        <td><strong>LED's</strong></td>
        <td><strong>Bearings</strong></td>
        <td><strong>Impeller</strong></td>
        <td><strong>Heatpipes</strong></td>
        <td><strong>Dimensions</strong></td>
        <td><strong>Information</strong></td>
        <td><strong>Weight</strong></td>
        <td><strong>Release Date</strong></td>
        <td><strong>Warranty</strong></td>
        <td colspan="3"><strong>Action</strong></td>
    </tr>
<?php foreach ($cpucooler as $cpucooler_item): ?>
        <tr>
            <td><?php echo $cpucooler_item['id']; ?></td>
            <td><?php echo $cpucooler_item['name']; ?></td>
            <td><?php echo $cpucooler_item['designer']; ?></td>
            <td><?php echo $cpucooler_item['price']; ?></td>
            <td><?php echo $cpucooler_item['description']; ?></td>
            <td><?php echo $cpucooler_item['component']; ?></td>
            <td><?php echo $cpucooler_item['sockets'] ?></td>
            <td><?php echo $cpucooler_item['attachment']; ?></td>
            <td><?php echo $cpucooler_item['soundlevel']; ?></td>
            <td><?php echo $cpucooler_item['cpu']; ?></td>
            <td><?php echo $cpucooler_item['equipment']; ?></td>
            <td><?php echo $cpucooler_item['ledcolors']; ?></td>
            <td><?php echo $cpucooler_item['rpm']; ?></td>
            <td><?php echo $cpucooler_item['material']; ?></td>
            <td><?php echo $cpucooler_item['heatpipeconnections']; ?></td>
            <td><?php echo $cpucooler_item['airflow']; ?></td>
            <td><?php echo $cpucooler_item['staticpressure']; ?></td>
            <td><?php echo $cpucooler_item['powerconnector']; ?></td>
            <td><?php echo $cpucooler_item['accessoires']; ?></td>
            <td><?php echo $cpucooler_item['leds']; ?></td>
            <td><?php echo $cpucooler_item['bearings']; ?></td>
            <td><?php echo $cpucooler_item['impeller']; ?></td>
            <td><?php echo $cpucooler_item['heatpipes']; ?></td>
            <td><?php echo $cpucooler_item['dimensions']; ?></td>
            <td><?php echo $cpucooler_item['information']; ?></td>
            <td><?php echo $cpucooler_item['weight']; ?></td>
            <td><?php echo $cpucooler_item['releasedate']; ?></td>
            <td><?php echo $cpucooler_item['warranty']; ?></td>

            <td><a href="<?php echo site_url('cpucooler/'.$cpucooler_item['slug']); ?>">View</a></td>
            <td><a href="<?php echo site_url('cpucooler/edit/'.$cpucooler_item['id']); ?>">Edit</a></td>
            <td><a href="<?php echo site_url('cpucooler/delete/'.$cpucooler_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
        </tr>
<?php endforeach; ?>
</table>
<br><button><a href="<?php echo site_url('cpucooler/create'); ?>"><strong>Create new CPU Cooler</strong></a></button>