<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('powerSupply/edit/'.$powerSupply_item['id']); ?>
    <table>
        <tr><td><label for="name">Name</label></td>
        <td><input type="input" name="name" size="50" value="<?php echo $powerSupply_item['name'] ?>"></td></tr>
        <tr><td><label for="designer">Designer</label></td>
        <td><input type="input" name="designer" size="50" value="<?php echo $powerSupply_item['designer'] ?>"></td></tr>
        <tr><td><label for="title">Description</label></td>
        <td><textarea name="description" rows="2" cols="52"><?php echo $powerSupply_item['description'] ?></textarea></td></tr>
        <tr><td><label for="price">Price</label></td>
        <td><input type="input" name="price" size="50" value="<?php echo $powerSupply_item['price'] ?>"></td></tr>
        <tr><td><label for="component">Component</label></td>
        <td><input type="input" name="component" size="50" value="<?php echo $powerSupply_item['component'] ?>"></td></tr>
        <tr><td><label for="color">Color</label></td>
        <td><input type="input" name="color" size="50" value="<?php echo $powerSupply_item['color'] ?>"></td></tr>
        <tr><td><label for="power">Power</label></td>
        <td><input type="input" name="power" size="50" value="<?php echo $powerSupply_item['power'] ?>"></td></tr>
        <tr><td><label for="80plus">80 Plus</label></td>
        <td><input type="input" name="80plus" size="50" value="<?php echo $powerSupply_item['80plus'] ?>"></td></tr>
        <tr><td><label for="mtbf">MTBF</label></td>
        <td><input type="input" name="mtbf" size="50" value="<?php echo $powerSupply_item['mtbf'] ?>"></td></tr>
        <tr><td><label for="modular">Modular</label></td>
        <td><input type="input" name="modular" size="50" value="<?php echo $powerSupply_item['modular'] ?>"></td></tr>
        <tr><td><label for="fanlessMode">Fanless Mode</label></td>
        <td><input type="input" name="fanlessMode" size="50" value="<?php echo $powerSupply_item['fanlessMode'] ?>"></td></tr>
        <tr><td><label for="fanType">Fan Type</label></td>
        <td><input type="input" name="fanType" size="50" value="<?php echo $powerSupply_item['fanType'] ?>"></td></tr>
        <tr><td><label for="continuousTemp">Continuous Temperature</label></td>
        <td><input type="input" name="continuousTemp" size="50" value="<?php echo $powerSupply_item['continuousTemp'] ?>"></td></tr>
        <tr><td><label for="weight">Weight</label></td>
        <td><input type="input" name="weight" size="50" value="<?php echo $powerSupply_item['weight'] ?>"></td></tr>
        <tr><td><label for="dimensions">Dimensions</label></td>
        <td><input type="input" name="dimensions" size="50" value="<?php echo $powerSupply_item['dimensions'] ?>"></td></tr>
        <tr><td><label for="sleevedCables">Sleeved Cables</label></td>
        <td><input type="input" name="sleevedCables" size="50" value="<?php echo $powerSupply_item['sleevedCables'] ?>"></td></tr>
        <tr><td><label for="warranty">Warranty</label></td>
        <td><input type="input" name="warranty" size="50" value="<?php echo $powerSupply_item['warranty'] ?>"></td></tr>
        <tr><td><label for="atxConnector">ATX Connector</label></td>
        <td><input type="input" name="atxConnector" size="50" value="<?php echo $powerSupply_item['atxConnector'] ?>"></td></tr>
        <tr><td><label for="epsConnector">EPS Connector</label></td>
        <td><input type="input" name="epsConnector" size="50" value="<?php echo $powerSupply_item['epsConnector'] ?>"></td></tr>
        <tr><td><label for="floppyConnector">Floppy Connector</label></td>
        <td><input type="input" name="floppyConnector" size="50" value="<?php echo $powerSupply_item['floppyConnector'] ?>"></td></tr>
        <tr><td><label for="fourPinPeripheralConnector">4-Pin Peripheral Connectors</label></td>
        <td><input type="input" name="fourPinPeripheralConnector" size="50" value="<?php echo $powerSupply_item['fourPinPeripheralConnector'] ?>"></td></tr>
        <tr><td><label for="pcieConnector">PCIe Connector</label></td>
        <td><input type="input" name="pcieConnector" size="50" value="<?php echo $powerSupply_item['pcieConnector'] ?>"></td></tr>
        <tr><td><label for="sataConnector">SATA Connector</label></td>
        <td><input type="input" name="sataConnector" size="50" value="<?php echo $powerSupply_item['sataConnector'] ?>"></td></tr>
        <tr><td><label for="noise">Noise</label></td>
        <td><input type="input" name="noise" size="50" value="<?php echo $powerSupply_item['noise'] ?>"></td></tr>
        <tr><td><label for="safety">Safety</label></td>
        <td><input type="input" name="safety" size="50" value="<?php echo $powerSupply_item['safety'] ?>"></td></tr>
        <tr><td><label for="current33V">Current 3,3V</label></td>
        <td><input type="input" name="current33V" size="50" value="<?php echo $powerSupply_item['current33V'] ?>"></td></tr>
        <tr><td><label for="current5V">Current 5V</label></td>
        <td><input type="input" name="current5V" size="50" value="<?php echo $powerSupply_item['current5V'] ?>"></td></tr>
        <tr><td><label for="current5Vsb">Current 5Vsb</label></td>
        <td><input type="input" name="current5Vsb" size="50" value="<?php echo $powerSupply_item['current5Vsb'] ?>"></td></tr>
        <tr><td><label for="current12V">Current 12V</label></td>
        <td><input type="input" name="current12V" size="50" value="<?php echo $powerSupply_item['current12V'] ?>"></td></tr>
        <tr><td><label for="current12VJointly">Current 12V Gezamelijk</label></td>
        <td><input type="input" name="current12VJointly" size="50" value="<?php echo $powerSupply_item['current12VJointly'] ?>"></td></tr>
        <tr><td><label for="pfc">PFC</label></td>
        <td><input type="input" name="pfc" size="50" value="<?php echo $powerSupply_item['pfc'] ?>"></td></tr>
        <tr><td><label for="accessories">Accessories</label></td>
        <td><input type="input" name="accessories" size="50" value="<?php echo $powerSupply_item['accessories'] ?>"></td></tr>
        <tr><td><label for="switch">Switch</label></td>
        <td><input type="input" name="switch" size="50" value="<?php echo $powerSupply_item['switch'] ?>"></td></tr>
        <tr><td><label for="12VJointly">12 V Gezamelijk</label></td>
        <td><input type="input" name="12VJointly" size="50" value="<?php echo $powerSupply_item['12VJointly'] ?>"></td></tr>
        <tr><td><label for="335VJointly">3,3 V And 5 V Gezamelijk</label></td>
        <td><input type="input" name="335VJointly" size="50" value="<?php echo $powerSupply_item['335VJointly'] ?>"></td></tr>
        <tr><td><label for="efficiency">Efficiency</label></td>
        <td><input type="input" name="efficiency" size="50" value="<?php echo $powerSupply_item['efficiency'] ?>"></td></tr>
        <tr><td><label for="inputVoltageRange">Input Voltage Range</label></td>
        <td><input type="input" name="inputVoltageRange" size="50" value="<?php echo $powerSupply_item['inputVoltageRange'] ?>"></td></tr>
        <tr><td><label for="amperage">Amperage</label></td>
        <td><input type="input" name="amperage" size="50" value="<?php echo $powerSupply_item['amperage'] ?>"></td></tr>
        <tr><td><label for="releaseDate">Release Date</label></td>
        <td><input type="input" name="releaseDate" size="50" maxlength="10" value="<?php echo $powerSupply_item['releaseDate'] ?>"></td>
        </tr>
        <tr><td><label for="title">Extra Information</label></td>
        <td><textarea name="information" rows="2" cols="52"><?php echo $powerSupply_item['information'] ?></textarea></td></tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit Power Supply item"></td>
        </tr>
    </table>
</form>