<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>ID</strong></td>
        <td><strong>Name</strong></td>
        <td><strong>Designer</strong></td>
        <td><strong>Description</strong></td>
        <td><strong>Price</strong></td>
        <td><strong>Color</strong></td>
        <td><strong>Type</strong></td>
        <td><strong>Construction</strong></td>
        <td><strong>Motherboard Size</strong></td>
        <td><strong>Length GPU</strong></td>
        <td><strong>Height Cooler</strong></td>
        <td><strong>Length Cooler</strong></td>
        <td><strong>Power Supply</strong></td>
        <td><strong>Extern 5'25</strong></td>
        <td><strong>Toolles 5'25</strong></td>
        <td><strong>Intern 3'5</strong></td>
        <td><strong>Toolles 3'5</strong></td>
        <td><strong>Intern 2'5</strong></td>
        <td><strong>Fullsize Slots</strong></td>
        <td><strong>Water Cooling</strong></td>
        <td><strong>Window Kit</strong></td>
        <td><strong>Dimensions</strong></td>
        <td><strong>Release Date</strong></td>
        <td><strong>Extra Information</strong></td>
        <td><strong>Weight</strong></td>
        <td><strong>Warranty</strong></td>
        <td colspan="3"><strong>Action</strong></td>
    </tr>

<?php foreach ($case as $case_item): ?>
        <tr>
            <td><?php echo $case_item['id']; ?></td>
            <td><?php echo $case_item['name']; ?></td>
            <td><?php echo $case_item['designer']; ?></td>
            <td><?php echo $case_item['description']; ?></td>
            <td><?php echo $case_item['price']; ?></td>
            <td><?php echo $case_item['color']; ?></td>
            <td><?php echo $case_item['type']; ?></td>
            <td><?php echo $case_item['construction']; ?></td>
            <td><?php echo $case_item['motherboardsize']; ?></td>
            <td><?php echo $case_item['lengthgpu']; ?></td>
            <td><?php echo $case_item['heightcooler']; ?></td>
            <td><?php echo $case_item['lengthcooler']; ?></td>
            <td><?php echo $case_item['powersupply']; ?></td>
            <td><?php echo $case_item['extern525']; ?></td>
            <td><?php echo $case_item['toolles525']; ?></td>
            <td><?php echo $case_item['intern35']; ?></td>
            <td><?php echo $case_item['toolles35']; ?></td>
            <td><?php echo $case_item['intern25']; ?></td>
            <td><?php echo $case_item['fullsizeslots']; ?></td>
            <td><?php echo $case_item['watercooling']; ?></td>
            <td><?php echo $case_item['windowkit']; ?></td>
            <td><?php echo $case_item['dimensions']; ?></td>
            <td><?php echo $case_item['releasedate']; ?></td>
            <td><?php echo $case_item['information']; ?></td>
            <td><?php echo $case_item['weight']; ?></td>
            <td><?php echo $case_item['warranty']; ?></td>
            <td><a href="<?php echo site_url('cases/'.$case_item['slug']); ?>">View</a></td>
            <td><a href="<?php echo site_url('cases/edit/'.$case_item['id']); ?>">Edit</a></td>
            <td><a href="<?php echo site_url('cases/delete/'.$case_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
        </tr>
<?php endforeach; ?>
</table>

<br><button><a href="<?php echo site_url('cases/create'); ?>"><strong>Create a new case</strong></a></button>