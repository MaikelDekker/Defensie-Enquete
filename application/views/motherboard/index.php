<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>ID</strong></td>
        <td><strong>Name</strong></td>
        <td><strong>Designer</strong></td>
        <td><strong>Description</strong></td>
        <td><strong>Price</strong></td>
        <td><strong>Formfactor</strong></td>
        <td><strong>Socket</strong></td>
        <td><strong>Chipset</strong></td>
        <td><strong>PCIe x1</strong></td>
        <td><strong>PCIe x16</strong></td>
        <td><strong>UEFI BIOS</strong></td>
        <td><strong>Use</strong></td>
        <td><strong>Power</strong></td>
        <td><strong>Max. Memory</strong></td>
        <td><strong>Memory Slots</strong></td>
        <td><strong>Memory Ranks</strong></td>
        <td><strong>Memory Controller</strong></td>
        <td><strong>SATA Controller</strong></td>
        <td><strong>USB Controller</strong></td>
        <td><strong>Supported CPU</strong></td>
        <td><strong>Supported Type</strong></td>
        <td><strong>Supported Standard</strong></td>
        <td><strong>Channels</strong></td>
        <td><strong>Max. Datadensity</strong></td>
        <td><strong>Keyboard</strong></td>
        <td><strong>Mice</strong></td>
        <td><strong>USB 3.0</strong></td>
        <td><strong>USB 3.C</strong></td>
        <td><strong>USB 2.0</strong></td>
        <td><strong>VGA</strong></td>
        <td><strong>DVI D</strong></td>
        <td><strong>HDMI</strong></td>
        <td><strong>Microphone</strong></td>
        <td><strong>Line In</strong></td>
        <td><strong>Line Out</strong></td>
        <td><strong>RJ 45</strong></td>
        <td><strong>M.2</strong></td>
        <td><strong>M.2 Key</strong></td>
        <td><strong>M.2 Interface</strong></td>
        <td><strong>M.2 Length</strong></td>
        <td><strong>PWM Fan</strong></td>
        <td><strong>Sounds</strong></td>
        <td><strong>LAN</strong></td>
        <td><strong>Features</strong></td>
        <td><strong>Release Date</strong></td>
        <td><strong>Extra Information</strong></td>
        <td><strong>Warranty</strong></td>
        <td colspan="3"><strong>Action</strong></td>
    </tr>

<?php foreach ($motherboard as $motherboard_item): ?>
        <tr>
            <td><?php echo $motherboard_item['id']; ?></td>
            <td><?php echo $motherboard_item['name']; ?></td>
            <td><?php echo $motherboard_item['designer']; ?></td>
            <td><?php echo $motherboard_item['description']; ?></td>
            <td><?php echo $motherboard_item['price']; ?></td>
            <td><?php echo $motherboard_item['formfactor']; ?></td>
            <td><?php echo $motherboard_item['socket']; ?></td>
            <td><?php echo $motherboard_item['chipset']; ?></td>
            <td><?php echo $motherboard_item['pciex1']; ?></td>
            <td><?php echo $motherboard_item['pciex16']; ?></td>
            <td><?php echo $motherboard_item['uefibios']; ?></td>
            <td><?php echo $motherboard_item['use']; ?></td>
            <td><?php echo $motherboard_item['power']; ?></td>
            <td><?php echo $motherboard_item['maxmemory']; ?></td>
            <td><?php echo $motherboard_item['memoryslots']; ?></td>
            <td><?php echo $motherboard_item['memoryranks']; ?></td>
            <td><?php echo $motherboard_item['memorycontroller']; ?></td>
            <td><?php echo $motherboard_item['satacontroller']; ?></td>
            <td><?php echo $motherboard_item['usbcontroller']; ?></td>
            <td><?php echo $motherboard_item['supportedcpu']; ?></td>
            <td><?php echo $motherboard_item['supportedtype']; ?></td>
            <td><?php echo $motherboard_item['supportedstandard']; ?></td>
            <td><?php echo $motherboard_item['channels']; ?></td>
            <td><?php echo $motherboard_item['maxdatadensity']; ?></td>
            <td><?php echo $motherboard_item['keyboard']; ?></td>
            <td><?php echo $motherboard_item['mice']; ?></td>
            <td><?php echo $motherboard_item['usb3']; ?></td>
            <td><?php echo $motherboard_item['usb3c']; ?></td>
            <td><?php echo $motherboard_item['usb2']; ?></td>
            <td><?php echo $motherboard_item['vga']; ?></td>
            <td><?php echo $motherboard_item['dvid']; ?></td>
            <td><?php echo $motherboard_item['hdmi']; ?></td>
            <td><?php echo $motherboard_item['microphone']; ?></td>
            <td><?php echo $motherboard_item['linein']; ?></td>
            <td><?php echo $motherboard_item['lineout']; ?></td>
            <td><?php echo $motherboard_item['rj45']; ?></td>
            <td><?php echo $motherboard_item['m2']; ?></td>
            <td><?php echo $motherboard_item['m2key']; ?></td>
            <td><?php echo $motherboard_item['m2interface']; ?></td>
            <td><?php echo $motherboard_item['m2length']; ?></td>
            <td><?php echo $motherboard_item['pwmfan']; ?></td>
            <td><?php echo $motherboard_item['sounds']; ?></td>
            <td><?php echo $motherboard_item['lan']; ?></td>
            <td><?php echo $motherboard_item['features']; ?></td>
            <td><?php echo $motherboard_item['releasedate']; ?></td>
            <td><?php echo $motherboard_item['information']; ?></td>
            <td><?php echo $motherboard_item['warranty']; ?></td>


            <td><a href="<?php echo site_url('motherboard/'.$motherboard_item['slug']); ?>">View</a></td>
            <td><a href="<?php echo site_url('motherboard/edit/'.$motherboard_item['id']); ?>">Edit</a></td>
            <td><a href="<?php echo site_url('motherboard/delete/'.$motherboard_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
        </tr>
<?php endforeach; ?>
</table>

<br><button><a href="<?php echo site_url('motherboard/create'); ?>"><strong>Create a new motherboard</strong></a></button>