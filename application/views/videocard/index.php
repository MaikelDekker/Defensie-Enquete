<h2><?php echo $name; ?></h2>
<table border="1">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Designer</th>
        <th>Series</th>
        <th>Price</th>
        <th>Description</th>
        <th>Clocking Speed</th>
        <th>Boost Speed</th>
        <th>Stream Processors</th>
        <th>Features</th>
        <th>Direct X</th>
        <th>Open GL</th>
        <th>V-ram</th>
        <th>Memory Type</th>
        <th>Memory Interface</th>
        <th>Memory Speed</th>
        <th>Displayports</th>
        <th>Displayport version</th>
        <th>DVI-D</th>
        <th>DVI Dual Channels</th>
        <th>Slots Used</th>
        <th>DVI Hdcp</th>
        <th>HDMI</th>
        <th>HDMI Version</th>
        <th>Multi Gpu</th>
        <th>TDP</th>
        <th>Connection</th>
        <th>Extra</th>
        <th>VR-ready</th>
        <th>G-Sync</th>
        <th>Nvidia Sli</th>
        <th>Crossfire</th>
        <th>Release Date</th>
        <th>Dimensions</th>
        <th>Warranty</th>
        <th colspan="3">Actie</th>
    </tr>
        
    <?php foreach ($videocard as $videocard_item) { ?>
    <tr>
        <td><?php echo $videocard_item['id']; ?></td>
        <td><?php echo $videocard_item['name']; ?></td>
        <td><?php echo $videocard_item['designer']; ?></td>
        <td><?php echo $videocard_item['series']; ?></td>
        <td><?php echo $videocard_item['price']; ?></td>
        <td><?php echo $videocard_item['description']; ?></td>
        <td><?php echo $videocard_item['clockingSpeed']; ?></td>
        <td><?php echo $videocard_item['boostSpeed']; ?></td>
        <td><?php echo $videocard_item['streamProcessors']; ?></td>
        <td><?php echo $videocard_item['features']; ?></td>
        <td><?php echo $videocard_item['directx']; ?></td>
        <td><?php echo $videocard_item['opengl']; ?></td>
        <td><?php echo $videocard_item['memoryAmount']; ?></td>
        <td><?php echo $videocard_item['memoryType']; ?></td>
        <td><?php echo $videocard_item['memoryInterface']; ?></td>
        <td><?php echo $videocard_item['memorySpeed']; ?></td>
        <td><?php echo $videocard_item['displayport']; ?></td>
        <td><?php echo $videocard_item['displayportVer']; ?></td>
        <td><?php echo $videocard_item['dviD']; ?></td>
        <td><?php echo $videocard_item['dviDualChannels']; ?></td>
        <td><?php echo $videocard_item['slotsUsed']; ?></td>
        <td><?php echo $videocard_item['dviHdcp']; ?></td>
        <td><?php echo $videocard_item['hdmi']; ?></td>
        <td><?php echo $videocard_item['hdmiVer']; ?></td>
        <td><?php echo $videocard_item['multiGpu']; ?></td>
        <td><?php echo $videocard_item['tdp']; ?></td>
        <td><?php echo $videocard_item['connection']; ?></td>
        <td><?php echo $videocard_item['extra']; ?></td>
        <td><?php echo $videocard_item['vrReady']; ?></td>
        <td><?php echo $videocard_item['gSync']; ?></td>
        <td><?php echo $videocard_item['sli']; ?></td>
        <td><?php echo $videocard_item['crossfire']; ?></td>
        <td><?php echo $videocard_item['releaseDate']; ?></td>
        <td><?php echo $videocard_item['dimensions']; ?></td>
        <td><?php echo $videocard_item['warranty']; ?></td>
        <td><a href="<?php echo site_url('videocard/'.$videocard_item['slug']); ?>">View</a></td>
        <td><a href="<?php echo site_url('videocard/edit/'.$videocard_item['id']); ?>">Edit</a></td>
        <td><a href="<?php echo site_url('videocard/delete/'.$videocard_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
    </tr>
    <?php } ?>
</table>
<br><button><a href="<?php echo site_url('videocard/create'); ?>">Create a new videocard</a></button>
</div>