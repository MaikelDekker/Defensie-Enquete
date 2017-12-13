<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('ssd/edit/'.$ssd_item['id']); ?>
    <table>
        <tr>
            <td><label for="title">Serie</label></td>
            <td><input type="input" name="serie" size="50" value="<?php echo $ssd_item['serie'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Designer</label></td>
            <td><input type="input" name="designer" size="50" value="<?php echo $ssd_item['designer'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Price</label></td>
            <td><input type="input" name="price" size="50" value="<?php echo $ssd_item['price'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Description</label></td>
            <td><textarea name="description" rows="2" cols="52"><?php echo $ssd_item['description'] ?></textarea></td>
        </tr>
        <tr>
            <td><label for="title">Component</label></td>
            <td><input type="input" name="component" size="50" value="<?php echo $ssd_item['component'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Construction</label></td>
            <td><input type="input" name="construction" size="50" value="<?php echo $ssd_item['construction'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Capacity</label></td>
            <td><input type="input" name="capacity" size="50" value="<?php echo $ssd_item['capacity'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Interface</label></td>
            <td><input type="input" name="interface" size="50" value="<?php echo $ssd_item['interface'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Read</label></td>
            <td><input type="input" name="read" size="50" value="<?php echo $ssd_item['read'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Write</label></td>
            <td><input type="input" name="write" size="50" value="<?php echo $ssd_item['write'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Chiptype</label></td>
            <td><input type="input" name="chiptype" size="50" value="<?php echo $ssd_item['chiptype'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Cache</label></td>
            <td><input type="input" name="cache" size="50" value="<?php echo $ssd_item['cache'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Power Connector</label></td>
            <td><input type="input" name="powerConnector" size="50" value="<?php echo $ssd_item['powerConnector'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Power Start</label></td>
            <td><input type="input" name="powerStart" size="50" value="<?php echo $ssd_item['powerStart'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Power Stand By</label></td>
            <td><input type="input" name="powerStandby" size="50" value="<?php echo $ssd_item['powerStandby'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">IOPS Read</label></td>
            <td><input type="input" name="iopsRead" size="50" value="<?php echo $ssd_item['iopsRead'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">IOPS Write</label></td>
            <td><input type="input" name="iopsWrite" size="50" value="<?php echo $ssd_item['iopsWrite'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">MTBF</label></td>
            <td><input type="input" name="mtbf" size="50" value="<?php echo $ssd_item['mtbf'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Trim</label></td>
            <td><input type="input" name="trim" size="50" value="<?php echo $ssd_item['trim'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Controller</label></td>
            <td><input type="input" name="controller" size="50" value="<?php echo $ssd_item['controller'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Accessoires</label></td>
            <td><input type="input" name="accessoires" size="50" value="<?php echo $ssd_item['accessoires'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Dimensions</label></td>
            <td><input type="input" name="dimensions" size="50" value="<?php echo $ssd_item['dimensions'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Release Date</label></td>
            <td><input type="input" name="releaseDate" size="50" maxlength="10" value="<?php echo $ssd_item['releaseDate'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Extra Information</label></td>
            <td><textarea name="information" rows="2" cols="52"><?php echo $ssd_item['information'] ?></textarea></td>
        </tr>
        <tr>
            <td><label for="title">Weight</label></td>
            <td><input type="input" name="weight" size="50" value="<?php echo $ssd_item['weight'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Warranty</label></td>
            <td><input type="input" name="warranty" size="50" value="<?php echo $ssd_item['warranty'] ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit SSD" /></td>
        </tr>
    </table>
</form>