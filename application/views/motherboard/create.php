<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('processor/create'); ?>    
    <table>
        <tr>
            <td><label for="name">Name</label></td>
            <td><input type="input" name="name" size="50" placeholder="Celeron G3930" /></td>
        </tr>
        <tr>
            <td><label for="designer">Designer</label></td>
            <td><input type="input" name="designer" size="50" placeholder="Intel" /></td>
        </tr>
        <tr>
            <td><label for="description">Description</label></td>
            <td><textarea maxlength="1000" name="description" rows="3" cols="52" placeholder="Description of product"></textarea></td>
        </tr>
        <tr>
            <td><label for="price">Price</label></td>
            <td><input type="input" name="price" size="50" value="€" /></td>
        </tr>
        <tr>
            <td><label for="clockingspeed">Clocking Speed</label></td>
            <td><input type="input" name="clockingspeed" size="50" placeholder="2,9 Ghz" /></td>
        </tr>
        <tr>
            <td><label for="turbomodus">Turbomodus</label></td>
            <td><input type="input" name="turbomodus" size="50" placeholder="3,5 Ghz" /></td>
        </tr>
        <tr>
            <td><label for="microarchitecture">Microarchitecture</label></td>
            <td><input type="input" name="microarchitecture" size="50" placeholder="Coffee Lake" /></td>
        </tr>
        <tr>
            <td><label for="cooler">Cooler</label></td>
            <td><input type="input" name="cooler" size="50" placeholder="Yes" /></td>
        </tr>
        <tr>
            <td><label for="nano">Nanometer</label></td>
            <td><input type="input" name="nano" size="50" placeholder="14 nm" /></td>
        </tr>
        <tr>
            <td><label for="socket">Socket</label></td>
            <td><input type="input" name="socket" size="50" placeholder="1151" /></td>
        </tr>
        <tr>
            <td><label for="cores">Cores</label></td>
            <td><input type="input" name="cores" size="50" placeholder="2"/></td>
        </tr>
        <tr>
            <td><label for="threads">Threads</label></td>
            <td><input type="input" name="threads" size="50" placeholder="4" /></td>
        </tr>
        <tr>
            <td><label for="cache">Cache</label></td>
            <td><input type="input" name="cache" size="50" placeholder="8 MB"/></td>
        </tr>
        <tr>
            <td><label for="tdp">TDP</label></td>
            <td><input type="input" name="tdp" size="50" placeholder="65 Watt" /></td>
        </tr>
        <tr>
            <td><label for="gpu">GPU</label></td>
            <td><input type="input" name="gpu" size="50" placeholder="Intel HD Graphics 630" /></td>
        </tr>
        <tr>
            <td><label for="releaseDate">Release Date</label></td>
            <td><input type="input" name="releaseDate" size="50" maxlength="10" value="DD/MM/YY"></td>
        </tr>
        <tr>
            <td><label for="information">Information</label></td>
            <td><textarea maxlength="1000" name="information" rows="3" cols="52" placeholder="Information of product"></textarea></td>
        </tr>
        <tr>
            <td><label for="warranty">Warranty</label></td>
            <td><input type="input" name="warranty" size="50" placeholder="24 Maanden" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Add new Processor" /></td>
        </tr>
    </table>    
</form>