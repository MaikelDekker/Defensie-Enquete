<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('hdd/create'); ?>    
    <table>
        <tr>
            <td><label for="name">Name</label></td>
            <td><input type="input" name="name" size="50" placeholder="BaraCuda Pro"></td>
        </tr>
        <tr>
            <td><label for="designer">Designer</label></td>
            <td><input type="input" name="designer" size="50" placeholder="Seagate"></td>
        </tr>
        <tr>
            <td><label for="price">Price</label></td>
            <td><input type="input" name="price" size="50" value="€"></td>
        </tr>
        <tr>
            <td><label for="description">Description</label></td>
            <td><textarea name="description" rows="2" cols="52" placeholder="Description of product"></textarea></td>
        </tr>
        <tr>
            <td><label for="construction">Construction</label></td>
            <td><input type="input" name="construction" size="50" placeholder="3,5 Inch"></td>
        </tr>
        <tr>
            <td><label for="component">Component</label></td>
            <td><input type="input" name="component" size="50" placeholder="HDD"></td>
        <tr>
            <td><label for="capacity">Capacity</label></td>
            <td><input type="input" name="capacity" size="50" placeholder="1 TB"></td>
        </tr>
        <tr>
            <td><label for="interface">Interface</label></td>
            <td><input type="input" name="interface" size="50" placeholder="1x SATA/600"></td>
        </tr>
        <tr>
            <td><label for="read">Read</label></td>
            <td><input type="input" name="read" size="50" placeholder="150 MB/s"></td>
        </tr>
        <tr>
            <td><label for="rpm">RPM</label></td>
            <td><input type="input" name="rpm" size="50" placeholder="7.200 RPM"/></td>
        </tr>
        <tr>
            <td><label for="cache">Cache</label></td>
            <td><input type="input" name="cache" size="50" placeholder="256 MB"/></td>
        </tr>
        <tr>
            <td><label for="volumeuse">Volume Use</label></td>
            <td><input type="input" name="volumeuse" size="50" placeholder="30 dB"></td>
        </tr>
        <tr>
            <td><label for="volumestandby">Volume Stand-By</label></td>
            <td><input type="input" name="volumestandby" size="50" placeholder="25 dB"></td>
        </tr>
        <tr>
            <td><label for="powerread">Power Read</label></td>
            <td><input type="input" name="powerread" size="50" placeholder="7,8 Watt"></td>
        </tr>
        <tr>
            <td><label for="powerstandby">Power Stand-By</label></td>
            <td><input type="input" name="powerstandby" size="50" placeholder="5 Watt"></td>
        </tr>
        <tr>
            <td><label for="powersleep">Power Sleep</label></td>
            <td><input type="input" name="powersleep" size="50" placeholder="5 Watt"></td>
        </tr>
        <tr>
            <td><label for="poweridle">Power Idle</label></td>
            <td><input type="input" name="poweridle" size="50" placeholder="0,8 Watt"></td>
        </tr>
        <tr>
            <td><label for="dimensions">Dimensions</label></td>
            <td><input type="input" name="dimensions" size="50" placeholder="101,85 mm x 123mm x 69mm"></td>
        </tr>
        <tr>
            <td><label for="extra">Extra Information</label></td>
            <td><textarea name="extra" rows="4" cols="52" placeholder="Additional Information"></textarea></td>
        </tr>
        <tr>
            <td><label for="weight">Weight</label></td>
            <td><input type="input" name="weight" size="50" placeholder="705 gram"></td>
        </tr>
        <tr>
            <td><label for="warranty">Warranty</label></td>
            <td><input type="input" name="warranty" size="50" placeholder="60 Maanden"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Add new HDD"></td>
        </tr>
    </table>    
</form>