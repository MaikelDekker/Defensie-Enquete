<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('videocard/edit/'.$videocard_item['id']); ?>
    <table>
        <tr>
            <td><label for="title">Name</label></td>
            <td><input type="input" name="name" size="50" value="<?php echo $videocard_item['name'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Designer</label></td>
            <td><input type="input" name="designer" size="50" value="<?php echo $videocard_item['designer'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Series</label></td>
            <td><input type="input" name="series" size="50" value="<?php echo $videocard_item['series'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Price</label></td>
            <td><input type="input" name="price" size="50" value="<?php echo $videocard_item['price'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Description</label></td>
            <td><textarea name="description" rows="2" cols="52"><?php echo $videocard_item['description'] ?></textarea></td>
        </tr>
        <tr>
            <td><label for="title">Clocking Speed</label></td>
            <td><input type="input" name="clockingSpeed" size="50" value="<?php echo $videocard_item['clockingSpeed'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Boost Speed</label></td>
            <td><input type="input" name="boostSpeed" size="50" value="<?php echo $videocard_item['boostSpeed'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Stream Processors</label></td>
            <td><input type="input" name="streamProcessors" size="50" value="<?php echo $videocard_item['streamProcessors'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Features</label></td>
            <td><input type="input" name="features" size="50" value="<?php echo $videocard_item['features'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Direct X</label></td>
            <td><input type="input" name="directx" size="50" value="<?php echo $videocard_item['directx'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Open GL</label></td>
            <td><input type="input" name="opengl" size="50" value="<?php echo $videocard_item['opengl'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Video Ram</label></td>
            <td><input type="input" name="memoryAmount" size="50" value="<?php echo $videocard_item['memoryAmount'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Memory Type</label></td>
            <td><input type="input" name="memoryType" size="50" value="<?php echo $videocard_item['memoryType'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Memory Interface</label></td>
            <td><input type="input" name="memoryInterface" size="50" value="<?php echo $videocard_item['memoryInterface'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Memory Speed</label></td>
            <td><input type="input" name="memorySpeed" size="50" value="<?php echo $videocard_item['memorySpeed'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Displayport</label></td>
            <td><input type="input" name="displayport" size="50" value="<?php echo $videocard_item['displayport'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Displayport Version</label></td>
            <td><input type="input" name="displayportVer" size="50" value="<?php echo $videocard_item['displayportVer'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Dvi-D</label></td>
            <td><input type="input" name="dviD" size="50" value="<?php echo $videocard_item['dviD'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Dvi Dual Channels</label></td>
            <td><input type="input" name="dviDualChannels" size="50" value="<?php echo $videocard_item['dviDualChannels'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Slots Used</label></td>
            <td><input type="input" name="slotsUsed" size="50" value="<?php echo $videocard_item['slotsUsed'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Dvi Hdcp</label></td>
            <td><input type="input" name="dviHdcp" size="50" value="<?php echo $videocard_item['dviHdcp'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Hdmi</label></td>
            <td><input type="input" name="hdmi" size="50" value="<?php echo $videocard_item['hdmi'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Hdmi Version</label></td>
            <td><input type="input" name="hdmiVer" size="50" value="<?php echo $videocard_item['hdmiVer'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Multi Gpu</label></td>
            <td><input type="input" name="multiGpu" size="50" value="<?php echo $videocard_item['multiGpu'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Tdp</label></td>
            <td><input type="input" name="tdp" size="50" value="<?php echo $videocard_item['tdp'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Connection</label></td>
            <td><input type="input" name="connection" size="50" value="<?php echo $videocard_item['connection'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Extra</label></td>
            <td><input type="input" name="extra" size="50" value="<?php echo $videocard_item['extra'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Vr-Ready</label></td>
            <td><input type="input" name="vrReady" size="50" value="<?php echo $videocard_item['vrReady'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">G-Sync</label></td>
            <td><input type="input" name="gSync" size="50" value="<?php echo $videocard_item['gSync'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Sli</label></td>
            <td><input type="input" name="sli" size="50" value="<?php echo $videocard_item['sli'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Crossfire</label></td>
            <td><input type="input" name="crossfire" size="50" value="<?php echo $videocard_item['crossfire'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="releaseDate">Release Date</label></td>
            <td><input type="input" name="releaseDate" size="50" maxlength="10" value="<?php echo $videocard_item['releaseDate'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Dimensions</label></td>
            <td><input type="input" name="dimensions" size="50" value="<?php echo $videocard_item['dimensions'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Warranty</label></td>
            <td><input type="input" name="warranty" size="50" value="<?php echo $videocard_item['warranty'] ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit Processor item" /></td>
        </tr>
    </table>
</form>