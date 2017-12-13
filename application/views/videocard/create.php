<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('videocard/create'); ?>    
    <table>
        <tr>
            <td><label for="name">Name</label></td>
            <td><input type="input" name="name" size="50" placeholder="Gigabyte" /></td>
        </tr>
        <tr>
            <td><label for="name">Designer</label></td>
            <td><input type="input" name="designer" size="50" placeholder="Nvidia" /></td>
        </tr>
        <tr>
            <td><label for="name">Series</label></td>
            <td><input type="input" name="series" size="50" placeholder="GTX Series" /></td>
        </tr>
        <tr>
            <td><label for="description">Description</label></td>
            <td><textarea name="description" rows="2" cols="52" placeholder="Description of product"></textarea></td>
        </tr>
        <tr>
            <td><label for="name">Price</label></td>
            <td><input type="input" name="price" size="50" value="€" /></td>
        </tr>
        <tr>
            <td><label for="name">Clocking Speed</label></td>
            <td><input type="input" name="clockingSpeed" size="50" placeholder="1784 Mhz" /></td>
        </tr>
        <tr>
            <td><label for="name">Boosting Speed</label></td>
            <td><input type="input" name="boostSpeed" size="50" placeholder="1936 Mhz" /></td>
        </tr>
        <tr>
            <td><label for="name">Stream Processors</label></td>
            <td><input type="input" name="streamProcessors" size="50" placeholder="2560" /></td>
        </tr>
        <tr>
            <td><label for="name">Features</label></td>
            <td><input type="input" name="features" size="50" placeholder="Nvidia Gamestream, Nvidia Gpu Boost" /></td>
        </tr>
        <tr>
            <td><label for="name">Direct X Version</label></td>
            <td><input type="input" name="directx" size="50" placeholder="12" /></td>
        </tr>
        <tr>
            <td><label for="name">Open GL Version</label></td>
            <td><input type="input" name="opengl" size="50" placeholder="4.5" /></td>
        </tr>
        <tr>
            <td><label for="name">Video Ram</label></td>
            <td><input type="input" name="memoryAmount" size="50" placeholder="8192 MB" /></td>
        </tr>
        <tr>
            <td><label for="name">Memory Type</label></td>
            <td><input type="input" name="memoryType" size="50" placeholder="GDDR5" /></td>
        </tr>
        <tr>
            <td><label for="name">Memory Interface</label></td>
            <td><input type="input" name="memoryInterface" size="50" placeholder="256 Bit" /></td>
        </tr>
        <tr>
            <td><label for="name">Memory Speed</label></td>
            <td><input type="input" name="memorySpeed" size="50" placeholder="10,4 Ghz" /></td>
        </tr>
        <tr>
            <td><label for="name">Displayport</label></td>
            <td><input type="input" name="displayport" size="50" placeholder="3" /></td>
        </tr>
        <tr>
            <td><label for="name">Displayport Version</label></td>
            <td><input type="input" name="displayportVer" size="50" placeholder="1.4" /></td>
        </tr>
        <tr>
            <td><label for="name">Dvi-D</label></td>
            <td><input type="input" name="dviD" size="50" placeholder="1" /></td>
        </tr>
        <tr>
            <td><label for="name">Dvi Dual Channels</label></td>
            <td><input type="input" name="dviDualChannels" size="50" placeholder="1" /></td>
        </tr>
        <tr>
            <td><label for="name">Slots Used</label></td>
            <td><input type="input" name="slotsUsed" size="50" placeholder="2" /></td>
        </tr>
        <tr>
            <td><label for="name">DVI Hdcp</label></td>
            <td><input type="input" name="dviHdcp" size="50" placeholder="1" /></td>
        </tr>
        <tr>
            <td><label for="name">HDMI</label></td>
            <td><input type="input" name="hdmi" size="50" placeholder="1" /></td>
        </tr>
        <tr>
            <td><label for="name">Hdmi Version</label></td>
            <td><input type="input" name="hdmiVer" size="50" placeholder="2.0b" /></td>
        </tr>
        <tr>
            <td><label for="name">Multi GPU</label></td>
            <td><input type="input" name="multiGpu" size="50" placeholder="SLI-HB" /></td>
        </tr>
        <tr>
            <td><label for="name">TDP</label></td>
            <td><input type="input" name="tdp" size="50" placeholder="375 Watt" /></td>
        </tr>
        <tr>
            <td><label for="name">Connection</label></td>
            <td><input type="input" name="connection" size="50" placeholder="2x 8-pins(6+2)connection" /></td>
        </tr>
        <tr>
            <td><label for="name">Extra</label></td>
            <td><input type="input" name="extra" size="50" placeholder="Actively Cooled(Windforce Stacked 3x)" /></td>
        </tr>
        <tr>
            <td><label for="name">VR Ready</label></td>
            <td><input type="input" name="vrReady" size="50" placeholder="Yes" /></td>
        </tr>
        <tr>
            <td><label for="name">G-Sync</label></td>
            <td><input type="input" name="gSync" size="50" placeholder="Yes" /></td>
        </tr>
        <tr>
            <td><label for="name">Sli</label></td>
            <td><input type="input" name="sli" size="50" placeholder="Yes" /></td>
        </tr>
        <tr>
            <td><label for="name">Crossfire</label></td>
            <td><input type="input" name="crossfire" size="50" placeholder="No" /></td>
        </tr>
        <tr>
            <td><label for="releaseDate">Release Date</label></td>
            <td><input type="input" name="releaseDate" size="50" maxlength="10" value="DD/MM/YY"></td>
        </tr>
        <tr>
            <td><label for="name">Dimensions</label></td>
            <td><input type="input" name="dimensions" size="50" placeholder="Width 142 mm x Height 55 mm x Length 293 mm" /></td>
        </tr>
        <tr>
            <td><label for="name">Warranty</label></td>
            <td><input type="input" name="warranty" size="50" placeholder="36 Months" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Add new Videocard" /></td>
        </tr>
    </table>    
</form>