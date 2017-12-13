<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('powerSupply/create'); ?>    
    <table>
        <tr><td><label for="name">Name</label></td>
        <td><input type="input" name="name" size="50" placeholder=""></td></tr>
        <tr><td><label for="designer">Designer</label></td>
        <td><input type="input" name="designer" size="50" placeholder=""></td></tr>
        <tr><td><label for="information">Information</label></td>
        <td><textarea name="information" rows="2" cols="52" placeholder="Information of product"></textarea></td></tr>
        <tr><td><label for="price">Price</label></td>
        <td><input type="input" name="price" size="50" value="€"></td></tr>
        <tr><td><label for="component">Component</label></td>
        <td><input type="input" name="component" size="50" placeholder=""></td></tr>
        <tr><td><label for="color">Color</label></td>
        <td><input type="input" name="color" size="50" placeholder=""></td></tr>
        <tr><td><label for="power">Power</label></td>
        <td><input type="input" name="power" size="50" placeholder=""></td></tr>
        <tr><td><label for="80plus">80 Plus</label></td>
        <td><input type="input" name="80plus" size="50" placeholder=""></td></tr>
        <tr><td><label for="mtbf">Mtbf</label></td>
        <td><input type="input" name="mtbf" size="50" placeholder=""></td></tr>
        <tr><td><label for="modular">Modular</label></td>
        <td><input type="input" name="modular" size="50" placeholder=""></td></tr>
        <tr><td><label for="fanlessMode">Fanless Mode</label></td>
        <td><input type="input" name="fanlessMode" size="50" placeholder=""></td></tr>
        <tr><td><label for="fanType">Fan Type</label></td>
        <td><input type="input" name="fanType" size="50" placeholder=""></td></tr>
        <tr><td><label for="continuousTemp">Continuous Temperature</label></td>
        <td><input type="input" name="continuousTemp" size="50" placeholder=""></td></tr>
        <tr><td><label for="weight">Weight</label></td>
        <td><input type="input" name="weight" size="50" placeholder=""></td></tr>
        <tr><td><label for="dimensions">Dimensions</label></td>
        <td><input type="input" name="dimensions" size="50" placeholder=""></td></tr>
        <tr><td><label for="sleevedCables">Sleeved Cables</label></td>
        <td><input type="input" name="sleevedCables" size="50" placeholder=""></td></tr>
        <tr><td><label for="warranty">Warranty</label></td>
        <td><input type="input" name="warranty" size="50" placeholder=""></td></tr>
        <tr><td><label for="atxConnector">Atx Connector</label></td>
        <td><input type="input" name="atxConnector" size="50" placeholder=""></td></tr>
        <tr><td><label for="epsConnector">Eps Connector</label></td>
        <td><input type="input" name="epsConnector" size="50" placeholder=""></td></tr>
        <tr><td><label for="floppyConnector">Floppy Connector</label></td>
        <td><input type="input" name="floppyConnector" size="50" placeholder=""></td></tr>
        <tr><td><label for="fourPinPeripheralConnector">Four Pin Peripheral Connectors</label></td>
        <td><input type="input" name="fourPinPeripheralConnector" size="50" placeholder=""></td></tr>
        <tr><td><label for="pcieConnector">Pcie Connector</label></td>
        <td><input type="input" name="pcieConnector" size="50" placeholder=""></td></tr>
        <tr><td><label for="sataConnector">Sata Connector</label></td>
        <td><input type="input" name="sataConnector" size="50" placeholder=""></td></tr>
        <tr><td><label for="noise">Noise</label></td>
        <td><input type="input" name="noise" size="50" placeholder=""></td></tr>
        <tr><td><label for="safety">Safety</label></td>
        <td><input type="input" name="safety" size="50" placeholder=""></td></tr>
        <tr><td><label for="current33V">Current 3,3V</label></td>
        <td><input type="input" name="current33V" size="50" placeholder=""></td></tr>
        <tr><td><label for="current5V">Current 5V</label></td>
        <td><input type="input" name="current5V" size="50" placeholder=""></td></tr>
        <tr><td><label for="current5Vsb">Current 5Vsb</label></td>
        <td><input type="input" name="current5Vsb" size="50" placeholder=""></td></tr>
        <tr><td><label for="current12V">Current 12V</label></td>
        <td><input type="input" name="current12V" size="50" placeholder=""></td></tr>
        <tr><td><label for="current12VJointly">Current 12V Gezamelijk</label></td>
        <td><input type="input" name="current12VJointly" size="50" placeholder=""></td></tr>
        <tr><td><label for="pfc">pfc</label></td>
        <td><input type="input" name="pfc" size="50" placeholder=""></td></tr>
        <tr><td><label for="accessories">Accessories</label></td>
        <td><input type="input" name="accessories" size="50" placeholder=""></td></tr>
        <tr><td><label for="switch">Switch</label></td>
        <td><input type="input" name="switch" size="50" placeholder=""></td></tr>
        <tr><td><label for="12VJointly">12 V Gezamelijk</label></td>
        <td><input type="input" name="12VJointly" size="50" placeholder=""></td></tr>
        <tr><td><label for="335VJointly">3,3 V And 5 V Gezamelijk</label></td>
        <td><input type="input" name="335VJointly" size="50" placeholder=""></td></tr>
        <tr><td><label for="efficiency">Efficiency</label></td>
        <td><input type="input" name="efficiency" size="50" placeholder=""></td></tr>
        <tr><td><label for="inputVoltageRange">Input Voltage Range</label></td>
        <td><input type="input" name="inputVoltageRange" size="50" placeholder=""></td></tr>
        <tr><td><label for="amperage">Amperage</label></td>
        <td><input type="input" name="amperage" size="50" placeholder=""></td></tr>
        <tr><td><label for="releaseDate">Release Date</label></td>
        <td><input type="input" name="releaseDate" size="50" value="DD/MM/YY"></td></tr>
        <tr><td><label for="description">Description</label></td>
        <td><textarea name="description" rows="2" cols="52" placeholder="Description of product"></textarea></td></tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Add a new Power Supply"></td>
        </tr>
    </table>    
</form>