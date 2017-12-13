<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('ram/edit/'.$ram_item['id']); ?>
    <table>
        <tr>
            <td><label for="title">Name</label></td>
            <td><input type="input" name="name" size="50" value="<?php echo $ram_item['name'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Designer</label></td>
            <td><input type="input" name="designer" size="50" value="<?php echo $ram_item['designer'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Price</label></td>
            <td><input type="input" name="price" size="50" value="<?php echo $ram_item['price'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Capacity</label></td>
            <td><input type="input" name="capacity" size="50" value="<?php echo $ram_item['capacity'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Type</label></td>
            <td><input type="input" name="type" size="50" value="<?php echo $ram_item['type'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Timings</label></td>
            <td><input type="input" name="timings" size="50" value="<?php echo $ram_item['timings'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Frequency</label></td>
            <td><input type="input" name="frequency" size="50" value="<?php echo $ram_item['frequency'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Dims</label></td>
            <td><input type="input" name="dims" size="50" value="<?php echo $ram_item['dims'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="releaseDate">Release Date</label></td>
            <td><input type="input" name="releaseDate" size="50" maxlength="10" value="<?php echo $ram_item['releaseDate'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Warranty</label></td>
            <td><input type="input" name="warranty" size="50" value="<?php echo $ram_item['warranty'] ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit RAM item" /></td>
        </tr>
    </table>
</form>