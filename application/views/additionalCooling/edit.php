<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('additionalCooling/edit/'.$additionalCooling_item['id']); ?>
    <table>
        <td><label for="name">Name</label></td><td><input type="input" name="name" size="50" value="<?php echo $additionalCooling_item['name'] ?>" /></td></tr>
        <td><label for="component">Component</label></td><td><input type="input" name="component" size="50" value="<?php echo $additionalCooling_item['component'] ?>" /></td></tr>
        <td><label for="designer">Designer</label></td><td><input type="input" name="designer" size="50" value="<?php echo $additionalCooling_item['designer'] ?>" /></td></tr>
        <td><label for="color">Color</label></td><td><input type="input" name="color" size="50" value="<?php echo $additionalCooling_item['color'] ?>" /></td></tr>
        <td><label for="color2">Secondary Color</label></td><td><input type="input" name="color2" size="50" value="<?php echo $additionalCooling_item['color2'] ?>" /></td></tr>
        <td><label for="ledColor">Led Color</label></td><td><input type="input" name="ledColor" size="50" value="<?php echo $additionalCooling_item['ledColor'] ?>" /></td></tr>
        <td><label for="price">Price</label></td><td><input type="input" name="price" size="50" value="<?php echo $additionalCooling_item['price'] ?>" /></td></tr>
        <td><label for="type">Type</label></td><td><input type="input" name="type" size="50" value="<?php echo $additionalCooling_item['type'] ?>" /></td></tr>
        <td><label for="dimensions">Dimensions</label></td><td><input type="input" name="dimensions" size="50" value="<?php echo $additionalCooling_item['dimensions'] ?>" /></td></tr>
        <td><label for="fanSize">Fan Size</label></td><td><input type="input" name="fanSize" size="50" value="<?php echo $additionalCooling_item['fanSize'] ?>" /></td></tr>
        <td><label for="fanType">Fan Type</label></td><td><input type="input" name="fanType" size="50" value="<?php echo $additionalCooling_item['fanType'] ?>" /></td></tr>
        <td><label for="description">Description</label></td><td><input type="input" name="description" size="50" value="<?php echo $additionalCooling_item['description'] ?>" /></td></tr>
        <td><label for="specialInfo">Special info</label></td><td><input type="input" name="specialInfo" size="50" value="<?php echo $additionalCooling_item['specialInfo'] ?>" /></td></tr>
        <td><label for="material">Material</label></td><td><input type="input" name="material" size="50" value="<?php echo $additionalCooling_item['material'] ?>" /></td></tr>
        <td><label for="compatibility">Compatibility</label></td><td><input type="input" name="compatibility" size="50" value="<?php echo $additionalCooling_item['compatibility'] ?>" /></td></tr>
        <td><label for="attachment">Attachment</label></td><td><input type="input" name="attachment" size="50" value="<?php echo $additionalCooling_item['attachment'] ?>" /></td></tr>
        <td><label for="decibel">Decibel</label></td><td><input type="input" name="decibel" size="50" value="<?php echo $additionalCooling_item['decibel'] ?>" /></td></tr>
        <td><label for="speed">Speed</label></td><td><input type="input" name="speed" size="50" value="<?php echo $additionalCooling_item['speed'] ?>" /></td></tr>
        <td><label for="airMovement">Air Movement</label></td><td><input type="input" name="airMovement" size="50" value="<?php echo $additionalCooling_item['airMovement'] ?>" /></td></tr>
        <td><label for="connection">Connection</label></td><td><input type="input" name="connection" size="50" value="<?php echo $additionalCooling_item['connection'] ?>" /></td></tr>
        <td><label for="warranty">Warranty</label></td><td><input type="input" name="warranty" size="50" value="<?php echo $additionalCooling_item['warranty'] ?>" /></td></tr>
        <td><label for="cableLength">Cable Length</label></td><td><input type="input" name="cableLength" size="50" value="<?php echo $additionalCooling_item['cableLength'] ?>" /></td></tr>
        <td><label for="voltage">Voltage</label></td><td><input type="input" name="voltage" size="50" value="<?php echo $additionalCooling_item['voltage'] ?>" /></td></tr>
        <td><label for="mtbf">Mtbf</label></td><td><input type="input" name="mtbf" size="50" value="<?php echo $additionalCooling_item['mtbf'] ?>" /></td></tr>
        <td><label for="coolant">Coolant</label></td><td><input type="input" name="coolant" size="50" value="<?php echo $additionalCooling_item['coolant'] ?>" /></td></tr>
        <td><label for="radiatorSize">Radiator Size</label></td><td><input type="input" name="radiatorSize" size="50" value="<?php echo $additionalCooling_item['radiatorSize'] ?>" /></td></tr>
        <tr>
            <td><label for="releasedate">Release Date</label></td>
            <td><input type="input" name="releasedate" size="50" maxlength="10" value="<?php echo $additionalCooling_item['releasedate'] ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit additionalCooling item" /></td>
        </tr>
    </table>
</form>