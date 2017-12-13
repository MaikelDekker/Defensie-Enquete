<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('ram/create'); ?>    
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
            <td><label for="name">Price</label></td>
            <td><input type="input" name="price" size="50" placeholder="GTX Series" /></td>
        </tr>
        <tr>
            <td><label for="name">Capacity</label></td>
            <td><input type="input" name="capacity" size="50" placeholder="1784 Mhz" /></td>
        </tr>
        <tr>
            <td><label for="name">Type</label></td>
            <td><input type="input" name="type" size="50" value="€" /></td>
        </tr>
        <tr>
            <td><label for="name">Timings</label></td>
            <td><input type="input" name="timings" size="50" placeholder="Nvidia Gamestream, Nvidia Gpu Boost" /></td>
        </tr>
        <tr>
            <td><label for="name">Frequency</label></td>
            <td><input type="input" name="frequency" size="50" placeholder="1936 Mhz" /></td>
        </tr>
        <tr>
            <td><label for="name">Dims</label></td>
            <td><input type="input" name="dims" size="50" placeholder="2560" /></td>
        </tr>
        <tr>
            <td><label for="releaseDate">Release Date</label></td>
            <td><input type="input" name="releaseDate" size="50" maxlength="10" value="DD/MM/YY"></td>
        </tr>
        <tr>
            <td><label for="name">Warranty</label></td>
            <td><input type="input" name="warranty" size="50" placeholder="8192 MB" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Add new RAM item" /></td>
        </tr>
    </table>
</form>