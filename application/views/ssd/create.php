<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('ssd/create'); ?>    
    <table>
        <tr>
            <td><label for="serie">Serie</label></td>
            <td><input type="input" name="serie" size="50" placeholder="850 EVO"></td>
        </tr>
        <tr>
            <td><label for="designer">Designer</label></td>
            <td><input type="input" name="designer" size="50" placeholder="Samsung"></td>
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
            <td><label for="component">Component</label></td>
            <td><input type="input" name="component" size="50" placeholder="SSD"></td>
        </tr>
        <tr>
            <td><label for="construction">Construction</label></td>
            <td><input type="input" name="construction" size="50" placeholder="2,5 Inch"></td>
        </tr>
        <tr>
            <td><label for="capacity">Capacity</label></td>
            <td><input type="input" name="capacity" size="50" placeholder="250 GB"></td>
        </tr>
        <tr>
            <td><label for="interface">Interface</label></td>
            <td><input type="input" name="interface" size="50" placeholder="1x SATA/600"></td>
        </tr>
        <tr>
            <td><label for="read">Read</label></td>
            <td><input type="input" name="read" size="50" placeholder="540 MB/s"></td>
        </tr>
        <tr>
            <td><label for="rpm">Write</label></td>
            <td><input type="input" name="write" size="50" placeholder="520 MB/s"/></td>
        </tr>
        <tr>
            <td><label for="chiptype">chiptype</label></td>
            <td><input type="input" name="chiptype" size="50" placeholder="TLC"></td>
        </tr>
        <tr>
            <td><label for="cache">Cache</label></td>
            <td><input type="input" name="cache" size="50" placeholder="512 MB"/></td>
        </tr>
        <tr>
            <td><label for="powerconnector">Power Connector</label></td>
            <td><input type="input" name="powerconnector" size="50" placeholder="15 Pins"></td>
        </tr>
        <tr>
            <td><label for="powerstart">Power Start</label></td>
            <td><input type="input" name="powerstart" size="50" placeholder="2,4 Watt"></td>
        </tr>
        <tr>
            <td><label for="powerstandby">Power Stand-By</label></td>
            <td><input type="input" name="powerstandby" size="50" placeholder="0,05 Watt"></td>
        </tr>
        <tr>
            <td><label for="">IOPS Read</label></td>
            <td><input type="input" name="iopsread" size="50" placeholder="97.000"></td>
        </tr>
        <tr>
            <td><label for="iopswrite">IOPS Write</label></td>
            <td><input type="input" name="iopswrite" size="50" placeholder="88.000"></td>
        </tr>
        <tr>
            <td><label for="mtbf">MTBF</label></td>
            <td><input type="input" name="mtbf" size="50" placeholder="1,5 Million Hours"></td>
        </tr>
        <tr>
            <td><label for="trim">Trim</label></td>
            <td><input type="input" name="trim" size="50" placeholder="Yes"></td>
        </tr>
        <tr>
            <td><label for="controller">Controller</label></td>
            <td><input type="input" name="controller" size="50" placeholder="Samsung MGX Controller"></td>
        </tr>
        <tr>
            <td><label for="accessoires">Accessoires</label></td>
            <td><input type="input" name="accessoires" size="50" placeholder="Magician software"></td>
        </tr>
        <tr>
            <td><label for="dimensions">Dimensions</label></td>
            <td><input type="input" name="dimensions" size="50" placeholder="100 mm x 101 mm x 102 mm"></td>
        </tr>
        <tr>
            <td><label for="releaseDate">Release Date</label></td>
            <td><input type="input" name="releaseDate" size="50" maxlength="10" value="DD/MM/YY"></td>
        </tr>
        <tr>
            <td><label for="information">Extra Information</label></td>
            <td><textarea name="information" rows="2" cols="52" placeholder="Extra Information of product"></textarea></td>
        </tr>
        <tr>
            <td><label for="information">Weight</label></td>
            <td><input type="input" name="information" size="50" placeholder="40 gram"></td>
        </tr>
        <tr>
            <td><label for="warranty">Warranty</label></td>
            <td><input type="input" name="warranty" size="50" placeholder="60 Months"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Add new SSD"></td>
        </tr>
    </table>    
</form>