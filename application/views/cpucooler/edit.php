<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('cpucooler/edit/'.$cpucooler_item['id']); ?>
    <table>
        <tr>
            <td><label for="title">Name</label></td>
            <td><input type="input" name="name" size="50" value="<?php echo $cpucooler_item['name'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Designer</label></td>
            <td><input type="input" name="designer" size="50" value="<?php echo $cpucooler_item['designer'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Price</label></td>
            <td><input type="input" name="price" size="50" value="<?php echo $cpucooler_item['price'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Description</label></td>
            <td><textarea name="description" rows="2" cols="52"><?php echo $cpucooler_item['description'] ?></textarea></td>
        </tr>
        <tr>
            <td><label for="title">Component</label></td>
            <td><input type="input" name="component" size="50" value="<?php echo $cpucooler_item['component'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Sockets</label></td>
            <td><input type="input" name="sockets" size="50" value="<?php echo $cpucooler_item['sockets'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Attachment</label></td>
            <td><input type="input" name="attachment" size="50" value="<?php echo $cpucooler_item['attachment'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Sound Level</label></td>
            <td><input type="input" name="soundlevel" size="50" value="<?php echo $cpucooler_item['soundlevel'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">CPU</label></td>
            <td><input type="input" name="cpu" size="50" value="<?php echo $cpucooler_item['cpu'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Equipment</label></td>
            <td><input type="input" name="equipment" size="50" value="<?php echo $cpucooler_item['equipment'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">ledcolors</label></td>
            <td><input type="input" name="ledcolors" size="50" value="<?php echo $cpucooler_item['ledcolors'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">RPM</label></td>
            <td><input type="input" name="rpm" size="50" value="<?php echo $cpucooler_item['rpm'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Material</label></td>
            <td><input type="input" name="material" size="50" value="<?php echo $cpucooler_item['material'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Heatpipe Connections</label></td>
            <td><input type="input" name="heatpipeconnections" size="50" value="<?php echo $cpucooler_item['heatpipeconnections'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Airflow</label></td>
            <td><input type="input" name="airflow" size="50" value="<?php echo $cpucooler_item['airflow'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Static Pressure</label></td>
            <td><input type="input" name="staticpressure" size="50" value="<?php echo $cpucooler_item['staticpressure'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Power Connector</label></td>
            <td><input type="input" name="powerconnector" size="50" value="<?php echo $cpucooler_item['powerconnector'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Accessoires</label></td>
            <td><input type="input" name="accessoires" size="50" value="<?php echo $cpucooler_item['accessoires'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">LED's</label></td>
            <td><input type="input" name="leds" size="50" value="<?php echo $cpucooler_item['leds'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Bearings</label></td>
            <td><input type="input" name="bearings" size="50" value="<?php echo $cpucooler_item['bearings'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Impeller</label></td>
            <td><input type="input" name="impeller" size="50" value="<?php echo $cpucooler_item['impeller'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Heatpipes</label></td>
            <td><input type="input" name="heatpipes" size="50" value="<?php echo $cpucooler_item['heatpipes'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Dimensions</label></td>
            <td><input type="input" name="dimensions" size="50" value="<?php echo $cpucooler_item['dimensions'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Weight</label></td>
            <td><input type="input" name="weight" size="50" value="<?php echo $cpucooler_item['weight'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Extra Information</label></td>
            <td><textarea name="information" rows="2" cols="52"><?php echo $cpucooler_item['information'] ?></textarea></td>
        </tr>
        <tr>
            <td><label for="releasedate">Release Date</label></td>
            <td><input type="input" name="releasedate" size="50" maxlength="10" value="<?php echo $cpucooler_item['releasedate'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Warranty</label></td>
            <td><input type="input" name="warranty" size="50" value="<?php echo $cpucooler_item['warranty'] ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit CPU Cooler item"></td>
        </tr>
    </table>
</form>