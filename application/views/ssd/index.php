<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>ID</strong></td>
        <td><strong>Serie</strong></td>
        <td><strong>Designer</strong></td>
        <td><strong>Price</strong></td>
        <td><strong>Description</strong></td>
        <td><strong>Component</strong></td>
        <td><strong>Construction</strong></td>
        <td><strong>Capacity</strong></td>
        <td><strong>Interface</strong></td>
        <td><strong>Read</strong></td>
        <td><strong>Write</strong></td>
        <td><strong>Chiptype</strong></td>
        <td><strong>Cache</strong></td>
        <td><strong>Power Connector</strong></td>
        <td><strong>Power Start</strong></td>
        <td><strong>Power Stand-By</strong></td>
        <td><strong>IOPS Read</strong></td>
        <td><strong>IOPS Write</strong></td>
        <td><strong>MTBF</strong></td>
        <td><strong>Trim</strong></td>
        <td><strong>Controller</strong></td>
        <td><strong>Accessoires</strong></td>
        <td><strong>Dimensions</strong></td>
        <td><strong>Release Date</strong></td>
        <td><strong>Extra Information</strong></td>
        <td><strong>Weight</strong></td>
        <td><strong>Warranty</strong></td>
        <td colspan="3"><strong>Action</strong></td>
    </tr>
<?php foreach ($ssd as $ssd_item): ?>
        <tr>
            <td><?php echo $ssd_item['id']; ?></td>
            <td><?php echo $ssd_item['serie']; ?></td>
            <td><?php echo $ssd_item['designer']; ?></td>
            <td><?php echo $ssd_item['price']; ?></td>
            <td><?php echo $ssd_item['description']; ?></td>
            <td><?php echo $ssd_item['component']; ?></td>
            <td><?php echo $ssd_item['construction'] ?></td>
            <td><?php echo $ssd_item['capacity']; ?></td>
            <td><?php echo $ssd_item['interface']; ?></td>
            <td><?php echo $ssd_item['read']; ?></td>
            <td><?php echo $ssd_item['write']; ?></td>
            <td><?php echo $ssd_item['chiptype']; ?></td>
            <td><?php echo $ssd_item['cache']; ?></td>
            <td><?php echo $ssd_item['powerConnector']; ?></td>
            <td><?php echo $ssd_item['powerStart']; ?></td>
            <td><?php echo $ssd_item['powerStandby']; ?></td>
            <td><?php echo $ssd_item['iopsRead']; ?></td>
            <td><?php echo $ssd_item['iopsWrite']; ?></td>
            <td><?php echo $ssd_item['mtbf']; ?></td>
            <td><?php echo $ssd_item['trim']; ?></td>
            <td><?php echo $ssd_item['controller']; ?></td>
            <td><?php echo $ssd_item['accessoires']; ?></td>
            <td><?php echo $ssd_item['dimensions']; ?></td>
            <td><?php echo $ssd_item['releaseDate']; ?></td>
            <td><?php echo $ssd_item['information']; ?></td>
            <td><?php echo $ssd_item['weight']; ?></td>
            <td><?php echo $ssd_item['warranty']; ?></td>

            <td><a href="<?php echo site_url('ssd/'.$ssd_item['slug']); ?>">View</a></td>
            <td><a href="<?php echo site_url('ssd/edit/'.$ssd_item['id']); ?>">Edit</a></td>
            <td><a href="<?php echo site_url('ssd/delete/'.$ssd_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
        </tr>
<?php endforeach; ?>
</table>
<br><button><a href="<?php echo site_url('ssd/create'); ?>"><strong>Create new SSD</strong></a></button>