<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>ID</strong></td>
        <td><strong>Name</strong></td>
        <td><strong>Designer</strong></td>
        <td><strong>Component</strong></td>
        <td><strong>Description</strong></td>
        <td><strong>Price</strong></td>
        <td><strong>Color</strong></td>
        <td><strong>Power Capacity</strong></td>
        <td><strong>80 Plus</strong></td>
        <td><strong>MTBF</strong></td>
        <td><strong>Modular</strong></td>
        <td><strong>Fanless Mode</strong></td>
        <td><strong>Fan Type</strong></td>
        <td><strong>Continuous Temperature</strong></td>
        <td><strong>Sleeved Cables</strong></td>
        <td><strong>ATX Connector</strong></td>
        <td><strong>EPS Connector</strong></td>
        <td><strong>Floppy Connector</strong></td>
        <td><strong>4-Pin Peripheral Connector</strong></td>
        <td><strong>PCIe Connector</strong></td>
        <td><strong>SATA Connector</strong></td>
        <td><strong>Noise</strong></td>
        <td><strong>Safety</strong></td>
        <td><strong>Stroomsterkte 3,3 V</strong></td>
        <td><strong>Stroomsterkte 5 V</strong></td>
        <td><strong>Stroomsterkte 5 Vsb</strong></td>
        <td><strong>Stroomsterkte 12 V</strong></td>
        <td><strong>Stroomsterkte 12 V Gezamelijk</strong></td>
        <td><strong>PFC</strong></td>
        <td><strong>Accessoires</strong></td>
        <td><strong>Switch</strong></td>
        <td><strong>12V Gezamelijk</strong></td>
        <td><strong>3.3V And 5V Gezamelijk </strong></td>
        <td><strong>Efficiency</strong></td>
        <td><strong>Input Voltage Range</strong></td>
        <td><strong>Amperage</strong></td>
        <td><strong>Release Date</strong></td>
        <td><strong>Weight</strong></td>
        <td><strong>Dimensions</strong></td>
        <td><strong>Extra Information</strong></td>
        <td><strong>Warranty</strong></td>
        <td colspan="3"><strong>Action</strong></td>
    </tr>

<?php foreach ($powerSupply as $powerSupply_item): ?>
        <tr>
            <td><?php echo $powerSupply_item['id']; ?></td>
            <td><?php echo $powerSupply_item['name']; ?></td>
            <td><?php echo $powerSupply_item['designer']; ?></td>
            <td><?php echo $powerSupply_item['component']; ?></td>
            <td><?php echo $powerSupply_item['description']; ?></td>
            <td><?php echo $powerSupply_item['price']; ?></td>
            <td><?php echo $powerSupply_item['color']; ?></td>
            <td><?php echo $powerSupply_item['power']; ?></td>
            <td><?php echo $powerSupply_item['80plus']; ?></td>
            <td><?php echo $powerSupply_item['mtbf']; ?></td>
            <td><?php echo $powerSupply_item['modular']; ?></td>
            <td><?php echo $powerSupply_item['fanlessMode']; ?></td>
            <td><?php echo $powerSupply_item['fanType']; ?></td>
            <td><?php echo $powerSupply_item['continuousTemp']; ?></td>
            <td><?php echo $powerSupply_item['sleevedCables']; ?></td>
            <td><?php echo $powerSupply_item['atxConnector']; ?></td>
            <td><?php echo $powerSupply_item['epsConnector']; ?></td>
            <td><?php echo $powerSupply_item['floppyConnector']; ?></td>
            <td><?php echo $powerSupply_item['fourPinPeripheralConnector']; ?></td>
            <td><?php echo $powerSupply_item['pcieConnector']; ?></td>
            <td><?php echo $powerSupply_item['sataConnector']; ?></td>
            <td><?php echo $powerSupply_item['noise']; ?></td>
            <td><?php echo $powerSupply_item['safety']; ?></td>
            <td><?php echo $powerSupply_item['current33V']; ?></td>
            <td><?php echo $powerSupply_item['current5V']; ?></td>
            <td><?php echo $powerSupply_item['current5Vsb']; ?></td>
            <td><?php echo $powerSupply_item['current12V']; ?></td>
            <td><?php echo $powerSupply_item['current12VJointly']; ?></td>
            <td><?php echo $powerSupply_item['pfc']; ?></td>
            <td><?php echo $powerSupply_item['accessories']; ?></td>
            <td><?php echo $powerSupply_item['switch']; ?></td>
            <td><?php echo $powerSupply_item['12VJointly']; ?></td>
            <td><?php echo $powerSupply_item['335VJointly']; ?></td>
            <td><?php echo $powerSupply_item['efficiency']; ?></td>
            <td><?php echo $powerSupply_item['inputVoltageRange']; ?></td>
            <td><?php echo $powerSupply_item['amperage']; ?></td>
            <td><?php echo $powerSupply_item['releaseDate']; ?></td>
            <td><?php echo $powerSupply_item['weight']; ?></td>
            <td><?php echo $powerSupply_item['dimensions']; ?></td>
            <td><?php echo $powerSupply_item['information']; ?></td>
            <td><?php echo $powerSupply_item['warranty']; ?></td>
            <td><a href="<?php echo site_url('powerSupply/'.$powerSupply_item['slug']); ?>">View</a></td>
            <td><a href="<?php echo site_url('powerSupply/edit/'.$powerSupply_item['id']); ?>">Edit</a></td>
            <td><a href="<?php echo site_url('powerSupply/delete/'.$powerSupply_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
        </tr>
<?php endforeach; ?>
</table>

<br><button><a href="<?php echo site_url('powerSupply/create'); ?>"><strong>Create a new Power Supply</strong></a></button>