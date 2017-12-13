<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>ID</strong></td>
        <td><strong>Name</strong></td>
        <td><strong>Designer</strong></td>
        <td><strong>Price</strong></td>
        <td><strong>Description</strong></td>
        <td><strong>Component</strong></td>
        <td><strong>cpuType</strong></td>
        <td><strong>Clock Speed</strong></td>
        <td><strong>Turbo Modus</strong></td>
        <td><strong>Microarchitecture</strong></td>
        <td><strong>Cooler</strong></td>
        <td><strong>Size</strong></td>
        <td><strong>Memory Channels</strong></td>
        <td><strong>Memory Voltage</strong></td>
        <td><strong>Supported Memory</strong></td>
        <td><strong>Socket</strong></td>
        <td><strong>Cores</strong></td>
        <td><strong>Threads</strong></td>
        <td><strong>Cache</strong></td>
        <td><strong>TDP</strong></td>
        <td><strong>GPU</strong></td>
        <td><strong>Multi Cpu System</strong></td>
        <td><strong>Gpu Clock Speed</strong></td>
        <td><strong>Bus Speed</strong></td>
        <td><strong>Release Date</strong></td>
        <td><strong>Warranty</strong></td>
        <td colspan="3"><strong>Action</strong></td>
    </tr>

<?php foreach ($processor as $processor_item): ?>
        <tr>
            <td><?php echo $processor_item['id']; ?></td>
            <td><?php echo $processor_item['name']; ?></td>
            <td><?php echo $processor_item['designer']; ?></td>
            <td><?php echo $processor_item['price']; ?></td>
            <td><?php echo $processor_item['description']; ?></td>
            <td><?php echo $processor_item['component']; ?></td>
            <td><?php echo $processor_item['cpuType']; ?></td>
            <td><?php echo $processor_item['clockSpeed']; ?></td>
            <td><?php echo $processor_item['turbomodus']; ?></td>
            <td><?php echo $processor_item['microarchitecture']; ?></td>
            <td><?php echo $processor_item['cooler']; ?></td>
            <td><?php echo $processor_item['size']; ?></td>
            <td><?php echo $processor_item['memoryChannels']; ?></td>
            <td><?php echo $processor_item['memoryVoltage']; ?></td>
            <td><?php echo $processor_item['supportedMemory']; ?></td>
            <td><?php echo $processor_item['socket']; ?></td>
            <td><?php echo $processor_item['cores']; ?></td>
            <td><?php echo $processor_item['threads']; ?></td>
            <td><?php echo $processor_item['cache']; ?></td>
            <td><?php echo $processor_item['tdp']; ?></td>
            <td><?php echo $processor_item['gpu']; ?></td>
            <td><?php echo $processor_item['multiCpuSystem']; ?></td>
            <td><?php echo $processor_item['gpuClockspeed']; ?></td>
            <td><?php echo $processor_item['busSpeed']; ?></td>
            <td><?php echo $processor_item['releaseDate']; ?></td>
            <td><?php echo $processor_item['warranty']; ?></td>
            <td><a href="<?php echo site_url('processor/'.$processor_item['slug']); ?>">View</a></td>
            <td><a href="<?php echo site_url('processor/edit/'.$processor_item['id']); ?>">Edit</a></td>
            <td><a href="<?php echo site_url('processor/delete/'.$processor_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
        </tr>
<?php endforeach; ?>
</table>

<br><button><a href="<?php echo site_url('processor/create'); ?>"><strong>Create a new processor</strong></a></button>