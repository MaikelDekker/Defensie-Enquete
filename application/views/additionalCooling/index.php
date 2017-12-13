<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>ID</strong></td>
        <td><strong>Name</strong></td>
        <td><strong>Component</strong></td>
        <td><strong>Designer</strong></td>
        <td><strong>Color</strong></td>
        <td><strong>Secondary Color</strong></td>
        <td><strong>Led Color</strong></td>
        <td><strong>Price</strong></td>
        <td><strong>Type</strong></td>
        <td><strong>Dimensions</strong></td>
        <td><strong>Fan Size</strong></td>
        <td><strong>Fan Type</strong></td>
        <td><strong>Description</strong></td>
        <td><strong>Special Info</strong></td>
        <td><strong>Material</strong></td>
        <td><strong>Compatibility</strong></td>
        <td><strong>Attachment</strong></td>
        <td><strong>Decibel</strong></td>
        <td><strong>Speed</strong></td>
        <td><strong>Air Movement</strong></td>
        <td><strong>Connection</strong></td>
        <td><strong>Warranty</strong></td>
        <td><strong>Cable Length</strong></td>
        <td><strong>Voltage</strong></td>
        <td><strong>Mtbf</strong></td>
        <td><strong>Coolant</strong></td>
        <td><strong>Radiator Size</strong></td>
        <td><strong>Release Date</strong></td>

        <td colspan="3"><strong>Action</strong></td>
    </tr>

<?php foreach ($additionalCooling as $additionalCooling_item): ?>
        <tr>
            <td><?php echo $additionalCooling_item['id']; ?></td>
            <td><?php echo $additionalCooling_item['name']; ?></td>
            <td><?php echo $additionalCooling_item['component']; ?></td>
            <td><?php echo $additionalCooling_item['designer']; ?></td>
            <td><?php echo $additionalCooling_item['color']; ?></td>
            <td><?php echo $additionalCooling_item['color2']; ?></td>
            <td><?php echo $additionalCooling_item['ledColor']; ?></td>
            <td><?php echo $additionalCooling_item['price']; ?></td>
            <td><?php echo $additionalCooling_item['type']; ?></td>
            <td><?php echo $additionalCooling_item['dimensions']; ?></td>
            <td><?php echo $additionalCooling_item['fanSize']; ?></td>
            <td><?php echo $additionalCooling_item['fanType']; ?></td>
            <td><?php echo $additionalCooling_item['description']; ?></td>
            <td><?php echo $additionalCooling_item['specialInfo']; ?></td>
            <td><?php echo $additionalCooling_item['material']; ?></td>
            <td><?php echo $additionalCooling_item['compatibility']; ?></td>
            <td><?php echo $additionalCooling_item['attachment']; ?></td>
            <td><?php echo $additionalCooling_item['decibel']; ?></td>
            <td><?php echo $additionalCooling_item['speed']; ?></td>
            <td><?php echo $additionalCooling_item['airMovement']; ?></td>
            <td><?php echo $additionalCooling_item['connection']; ?></td>
            <td><?php echo $additionalCooling_item['warranty']; ?></td>
            <td><?php echo $additionalCooling_item['cableLength']; ?></td>
            <td><?php echo $additionalCooling_item['voltage']; ?></td>
            <td><?php echo $additionalCooling_item['mtbf']; ?></td>
            <td><?php echo $additionalCooling_item['coolant']; ?></td>
            <td><?php echo $additionalCooling_item['radiatorSize']; ?></td>
            <td><?php echo $additionalCooling_item['releasedate']; ?></td>
            <td><a href="<?php echo site_url('additionalCooling/'.$additionalCooling_item['slug']); ?>">View</a></td>
            <td><a href="<?php echo site_url('additionalCooling/edit/'.$additionalCooling_item['id']); ?>">Edit</a></td>
            <td><a href="<?php echo site_url('additionalCooling/delete/'.$additionalCooling_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
        </tr>
<?php endforeach; ?>
</table>

<br><button><a href="<?php echo site_url('additionalCooling/create'); ?>"><strong>Create a new Additional Cooler</strong></a></button>