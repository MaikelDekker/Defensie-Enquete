<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('cpucooler/create'); ?>    
    <table>
        <tr>
            <td><label for="name">Name</label></td>
            <td><input type="input" name="name" size="50" placeholder="H7 Quad Lumi"></td>
        </tr>
        <tr>
            <td><label for="designer">Designer</label></td>
            <td><input type="input" name="designer" size="50" placeholder="Cryorig"></td>
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
            <td><input type="input" name="component" size="50" placeholder="CPU Cooler"></td>
        <tr>
            <td><label for="sockets">Sockets</label></td>
            <td><input type="input" name="sockets" size="50" placeholder="1150, 1151, 1155, 1156, 2011-3, AM2, AM2+, AM3, AM3+, FM1, FM2, FM2+, AM4"></td>
        </tr>
        <tr>
            <td><label for="attachment">Attachment</label></td>
            <td><input type="input" name="attachment" size="50" placeholder="Screwed"></td>
        </tr>
        <tr>
            <td><label for="soundlevel">Sound Level</label></td>
            <td><input type="input" name="soundlevel" size="50" placeholder="10 dB / 25 dB"></td>
        </tr>
        <tr>
            <td><label for="cpu">CPU</label></td>
            <td><input type="input" name="cpu" size="50" placeholder="160 W"></td>
        </tr>
        <tr>
            <td><label for="equipment">Equipment</label></td>
            <td><input type="input" name="equipment" size="50" placeholder="LED lights"></td>
        </tr>
        <tr>
            <td><label for="ledcolors">LED Colors</label></td>
            <td><input type="input" name="ledcolors" size="50" placeholder="RGB"></td>
        </tr>
        <tr>
            <td><label for="rpm">RPM</label></td>
            <td><input type="input" name="rpm" size="50" placeholder="330 up to 1.600 RPM"></td>
        </tr>
        <tr>
            <td><label for="material">Material</label></td>
            <td><input type="input" name="material" size="50" placeholder="copper"></td>
        </tr>
        <tr>
            <td><label for="heatpipeconnections">Heatpipe Connection</label></td>
            <td><input type="input" name="heatpipeconnections" size="50" placeholder="4 pieces"></td>
        </tr>
        <tr>
            <td><label for="airflow">Airflow</label></td>
            <td><input type="input" name="airflow" size="50" placeholder="83,3 m³/h (49 cfm)"></td>
        </tr>
        <tr>
            <td><label for="staticpressure">Static Pressure</label></td>
            <td><input type="input" name="staticpressure" size="50" placeholder="Up to 1,65 mm/H2O"></td>
        </tr>
        <tr>
            <td><label for="powerconnector">Power Connector</label></td>
            <td><input type="input" name="powerconnector" size="50" placeholder="4-Pins PWM"></td>
        </tr>
        <tr>
            <td><label for="accessoires">Accessoires</label></td>
            <td><input type="input" name="accessoires" size="50" placeholder="Backplate, AMD Montage plaat, Intel Montage rails, 2 Draadclips, Montageschroeven, Koelpasta"></td>
        </tr>
        <tr>
            <td><label for="leds">LEDs</label></td>
            <td><input type="input" name="leds" size="50" placeholder="RGB Logo on top"></td>
        </tr>
        <tr>
            <td><label for="bearings">Bearings</label></td>
            <td><input type="input" name="bearings" size="50" placeholder="HPLN (High Precision Low Noise)"></td>
        </tr>
        <tr>
            <td><label for="impeller">Impeller</label></td>
            <td><input type="input" name="impeller" size="50" placeholder="40 stuks, T = 0,4 mm, Gap = 2,2 mm "></td>
        </tr>
        <tr>
            <td><label for="heatpipes">Heatpipes</label></td>
            <td><input type="input" name="heatpipes" size="50" placeholder="4x 6mm heatpipe "></td>
        </tr>
        <tr>
            <td><label for="dimensions">Dimensions</label></td>
            <td><input type="input" name="dimensions" size="50" placeholder="123 mm x 145 mm x 98 mm"></td>
        </tr>
        <tr>
            <td><label for="weight">Weight</label></td>
            <td><input type="input" name="weight" size="50" placeholder="713 gram"></td>
        </tr>
        <tr>
            <td><label for="information">Extra Information</label></td>
            <td><textarea name="information" rows="4" cols="52" placeholder="Additional Information"></textarea></td>
        </tr>
        <tr>
            <td><label for="releaseDate">Release Date</label></td>
            <td><input type="input" name="releaseDate" size="50" maxlength="10" value="DD/MM/YY"></td>
        </tr>
        <tr>
            <td><label for="warranty">Warranty</label></td>
            <td><input type="input" name="warranty" size="50" placeholder="60 Maanden"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Add new CPU Cooler"></td>
        </tr>
    </table>    
</form>