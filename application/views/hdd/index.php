<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>ID</strong></td>
        <td><strong>Name</strong></td>
        <td><strong>Designer</strong></td>
        <td><strong>Description</strong></td>
        <td><strong>Price</strong></td>
        <td><strong>Component</strong></td>
        <td><strong>Construction</strong></td>
        <td><strong>Capacity</strong></td>
        <td><strong>Interface</strong></td>
        <td><strong>Read</strong></td>
        <td><strong>RPM</strong></td>
        <td><strong>Cache</strong></td>
        <td><strong>Volume Use</strong></td>
        <td><strong>Volume Stand By</strong></td>
        <td><strong>Power Read/Write</strong></td>
        <td><strong>Power Stand By</strong></td>
        <td><strong>Power Sleep</strong></td>
        <td><strong>Power Idle</strong></td>
        <td><strong>Dimensions</strong></td>
        <td><strong>Information</strong></td>
        <td><strong>Weight</strong></td>
        <td><strong>Warranty</strong></td>
        <td colspan="3"><strong>Action</strong></td>
    </tr>
<?php foreach ($hdd as $hdd_item): ?>
        <tr>
            <td><?php echo $hdd_item['id']; ?></td>
            <td><?php echo $hdd_item['name']; ?></td>
            <td><?php echo $hdd_item['designer']; ?></td>
            <td><?php echo $hdd_item['description']; ?></td>
            <td><?php echo $hdd_item['price']; ?></td>
            <td><?php echo $hdd_item['component']; ?></td>
            <td><?php echo $hdd_item['construction'] ?></td>
            <td><?php echo $hdd_item['capacity']; ?></td>
            <td><?php echo $hdd_item['interface']; ?></td>
            <td><?php echo $hdd_item['read']; ?></td>
            <td><?php echo $hdd_item['rpm']; ?></td>
            <td><?php echo $hdd_item['cache']; ?></td>
            <td><?php echo $hdd_item['volumeuse']; ?></td>
            <td><?php echo $hdd_item['volumestandby']; ?></td>
            <td><?php echo $hdd_item['powerread']; ?></td>
            <td><?php echo $hdd_item['powerstandby']; ?></td>
            <td><?php echo $hdd_item['powersleep']; ?></td>
            <td><?php echo $hdd_item['poweridle']; ?></td>
            <td><?php echo $hdd_item['dimensions']; ?></td>
            <td><?php echo $hdd_item['information']; ?></td>
            <td><?php echo $hdd_item['weight']; ?></td>
            <td><?php echo $hdd_item['warranty']; ?></td>

            <td><a href="<?php echo site_url('hdd/'.$hdd_item['slug']); ?>">View</a></td>
            <td><a href="<?php echo site_url('hdd/edit/'.$hdd_item['id']); ?>">Edit</a></td>
            <td><a href="<?php echo site_url('hdd/delete/'.$hdd_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
        </tr>
<?php endforeach; ?>
</table>
<br><button><a href="<?php echo site_url('hdd/create'); ?>"><strong>Create new HDD</strong></a></button>