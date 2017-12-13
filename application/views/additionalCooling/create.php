<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('additionalCooling/create'); ?>    
    <table>        
        <tr><td><label for="name">Name</label></td><td><input type="input" name="name" size="50" placeholder="Corsair AF120" /></td></tr>
        <tr><td><label for="component">Component</label></td><td><input type="input" name="component" size="50" placeholder="Case Fan" /></td></tr>
        <tr><td><label for="designer">Designer</label></td><td><input type="input" name="designer" size="50" placeholder="Corsair" /></td></tr>
        <tr><td><label for="color">Color</label></td><td><input type="input" name="color" size="50" placeholder="Black" /></td></tr>
        <tr><td><label for="color2">Secondary Color</label></td><td><input type="input" name="color2" size="50" placeholder="White" /></td></tr>
        <tr><td><label for="ledColor">Led Color</label></td><td><input type="input" name="ledColor" size="50" placeholder="Red" /></td></tr>
        <tr><td><label for="price">Price</label></td><td><input type="input" name="price" size="50" placeholder="€25" /></td></tr>
        <tr><td><label for="type">Type</label></td><td><input type="input" name="type" size="50" placeholder="Additional Cooling" /></td></tr>
        <tr><td><label for="dimensions">Dimensions</label></td><td><input type="input" name="dimensions" size="50" placeholder="140 mm x 140 mm x 25 mm" /></td></tr>
        <tr><td><label for="fanSize">Fan Size</label></td><td><input type="input" name="fanSize" size="50" placeholder="120mm" /></td></tr>
        <tr><td><label for="fanType">Fan Type</label></td><td><input type="input" name="fanType" size="50" placeholder="Air Flow" /></td></tr>
        <tr><td><label for="description">Description</label></td><td><input type="input" name="description" size="50" placeholder="Sukkakok" /></td></tr>
        <tr><td><label for="specialInfo">Special info</label></td><td><input type="input" name="specialInfo" size="50" placeholder="Rubber screws, Very Powerfull" /></td></tr>
        <tr><td><label for="material">Material</label></td><td><input type="input" name="material" size="50" placeholder="Plastic" /></td></tr>
        <tr><td><label for="compatibility">Compatibility</label></td><td><input type="input" name="compatibility" size="50" placeholder="Check Case Manual" /></td></tr>
        <tr><td><label for="attachment">Attachment</label></td><td><input type="input" name="attachment" size="50" placeholder="Rubber Screws & Screws" /></td></tr>
        <tr><td><label for="decibel">Decibel</label></td><td><input type="input" name="decibel" size="50" placeholder="10db - 25db" /></td></tr>
        <tr><td><label for="speed">Speed</label></td><td><input type="input" name="speed" size="50" placeholder="1.150 Rpm" /></td></tr>
        <tr><td><label for="airMovement">Air Movement</label></td><td><input type="input" name="airMovement" size="50" placeholder="67.8 Cfm" /></td></tr>
        <tr><td><label for="connection">Connection</label></td><td><input type="input" name="connection" size="50" placeholder="3-Pins" /></td></tr>
        <tr><td><label for="warranty">Warranty</label></td><td><input type="input" name="warranty" size="50" placeholder="24 Maanden" /></td></tr>
        <tr><td><label for="cableLength">Cable Length</label></td><td><input type="input" name="cableLength" size="50" placeholder="50mm" /></td></tr>
        <tr><td><label for="voltage">Voltage</label></td><td><input type="input" name="voltage" size="50" placeholder="5 Volt" /></td></tr>
        <tr><td><label for="mtbf">Mtbf</label></td><td><input type="input" name="mtbf" size="50" placeholder="mtbf" /></td></tr>
        <tr><td><label for="coolant">Coolant</label></td><td><input type="input" name="coolant" size="50" placeholder="1000ml" /></td></tr>
        <tr><td><label for="radiatorSize">Radiator Size</label></td><td><input type="input" name="radiatorSize" size="50" placeholder="2x 120mm" /></td></tr>
        <tr>
            <td><label for="releaseDate">Release Date</label></td>
            <td><input type="input" name="releaseDate" size="50" maxlength="10" value="DD/MM/YY"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Add new Processor" /></td>
        </tr>
    </table>    
</form>