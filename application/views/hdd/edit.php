<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('hdd/edit/'.$hdd_item['id']); ?>
    <table>
        <tr>
            <td><label for="title">Name</label></td>
            <td><input type="input" name="name" size="50" value="<?php echo $hdd_item['name'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Designer</label></td>
            <td><input type="input" name="designer" size="50" value="<?php echo $hdd_item['designer'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Description</label></td>
            <td><textarea name="description" rows="2" cols="52"><?php echo $hdd_item['description'] ?></textarea></td>
        </tr>
        <tr>
            <td><label for="title">Price</label></td>
            <td><input type="input" name="price" size="50" value="<?php echo $hdd_item['price'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Component</label></td>
            <td><input type="input" name="component" size="50" value="<?php echo $hdd_item['component'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Construction</label></td>
            <td><input type="input" name="construction" size="50" value="<?php echo $hdd_item['construction'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Capacity</label></td>
            <td><input type="input" name="capacity" size="50" value="<?php echo $hdd_item['capacity'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Interface</label></td>
            <td><input type="input" name="interface" size="50" value="<?php echo $hdd_item['interface'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Read</label></td>
            <td><input type="input" name="read" size="50" value="<?php echo $hdd_item['read'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">RPM</label></td>
            <td><input type="input" name="rpm" size="50" value="<?php echo $hdd_item['rpm'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Cache</label></td>
            <td><input type="input" name="cache" size="50" value="<?php echo $hdd_item['cache'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Volume Use</label></td>
            <td><input type="input" name="volumeuse" size="50" value="<?php echo $hdd_item['volumeuse'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Volume Stand-By</label></td>
            <td><input type="input" name="volumestandby" size="50" value="<?php echo $hdd_item['volumestandby'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Power Read/Write</label></td>
            <td><input type="input" name="powerread" size="50" value="<?php echo $hdd_item['powerread'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Power Stand By</label></td>
            <td><input type="input" name="powerstandby" size="50" value="<?php echo $hdd_item['powerstandby'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Power Sleep</label></td>
            <td><input type="input" name="powersleep" size="50" value="<?php echo $hdd_item['powersleep'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Power Idle</label></td>
            <td><input type="input" name="poweridle" size="50" value="<?php echo $hdd_item['poweridle'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Dimensions</label></td>
            <td><input type="input" name="dimensions" size="50" value="<?php echo $hdd_item['dimensions'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Extra Information</label></td>
            <td><textarea name="information" rows="2" cols="52"><?php echo $hdd_item['information'] ?></textarea></td>
        </tr>
        <tr>
            <td><label for="title">Weight</label></td>
            <td><input type="input" name="weight" size="50" value="<?php echo $hdd_item['weight'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Warranty</label></td>
            <td><input type="input" name="warranty" size="50" value="<?php echo $hdd_item['warranty'] ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit hdd item" /></td>
        </tr>
    </table>
</form>