<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('cases/create'); ?>    
    <table>
        <tr>
            <td><label for="name">Name</label></td>
            <td><input type="input" name="name" size="50" placeholder="AI7000"></td>
        </tr>
        <tr>
            <td><label for="designer">Designer</label></td>
            <td><input type="input" name="designer" size="50" placeholder="Sharkoon"></td>
        </tr>
        <tr>
            <td><label for="description">Description</label></td>
            <td><textarea name="description" rows="2" cols="52" placeholder="Description of product"></textarea></td>
        </tr>
        <tr>
            <td><label for="price">Price</label></td>
            <td><input type="input" name="price" size="50" value="€"></td>
        </tr>
        <tr>
            <td><label for="color">Color</label></td>
            <td><input type="input" name="color" size="50" placeholder="Pink"></td>
        </tr>
        <tr>
            <td><label for="type">Type</label></td>
            <td><input type="input" name="type" size="50" placeholder="Tower-Behuizing"></td>
        </tr>
         <tr>
            <td><label for="construction">Construction</label></td>
            <td><input type="input" name="construction" size="50" placeholder="Midi-Tower"></td>
        </tr>
         <tr>
            <td><label for="motherboardsize">Motherboard Size</label></td>
            <td><input type="input" name="motherboardsize" size="50" placeholder="ATX"></td>
        </tr>
         <tr>
            <td><label for="lengthgpu">Length GPU</label></td>
            <td><input type="input" name="lengthgpu" size="50" placeholder="380mm"></td>
        </tr>
         <tr>
            <td><label for="heightcooler">Height Cooler</label></td>
            <td><input type="input" name="heightcooler" size="50" placeholder="175mm"></td>
        </tr>
         <tr>
            <td><label for="lengthcooler">Length Cooler</label></td>
            <td><input type="input" name="lengthcooler" size="50" placeholder="230mm"></td>
        </tr>
         <tr>
            <td><label for="powersupply">Power Supply</label></td>
            <td><input type="input" name="powersupply" size="50" placeholder="ATX"></td>
        </tr>
         <tr>
            <td><label for="extern525">Extern 5"25</label></td>
            <td><input type="input" name="extern525" size="50" placeholder="2"></td>
        </tr>
         <tr>
            <td><label for="toolles525">Toolles 5"25</label></td>
            <td><input type="input" name="toolles525" size="50" placeholder="Yes"></td>
        </tr>
         <tr>
            <td><label for="intern35">Intern 3"5</label></td>
            <td><input type="input" name="intern35" size="50" placeholder="3"></td>
        </tr>
         <tr>
            <td><label for="toolles35">Toolles 3"5</label></td>
            <td><input type="input" name="toolles35" size="50" placeholder="No"></td>
        </tr>
         <tr>
            <td><label for="intern25">Intern 2"5</label></td>
            <td><input type="input" name="intern25" size="50" placeholder="2"></td>
        </tr>
         <tr>
            <td><label for="fullsizeslots">Full-size slots</label></td>
            <td><input type="input" name="fullsizeslots" size="50" placeholder="7"></td>
        </tr>
         <tr>
            <td><label for="watercooling">Water Cooling</label></td>
            <td><input type="input" name="watercooling" size="50" placeholder="2"></td>
        </tr>
        <tr>
            <td><label for="windowkit">Window Kit</label></td>
            <td><input type="input" name="windowkit" size="50" placeholder="Yes"></td>
        </tr>
         <tr>
            <td><label for="dimensions">Dimensions</label></td>
            <td><input type="input" name="dimensions" size="50" placeholder="213mm x 470mm x 446mm"></td>
        </tr>
        <tr>
            <td><label for="releaseDate">Release Date</label></td>
            <td><input type="input" name="releaseDate" size="50" maxlength="10" value="DD/MM/YY"></td>
        </tr>
        <tr>
            <td><label for="information">Extra Information</label></td>
            <td><textarea name="information" rows="2" cols="52" placeholder="Extra information of product"></textarea></td>
        </tr>
         <tr>
            <td><label for="weight">Weight</label></td>
            <td><input type="input" name="weight" size="50" placeholder="8 Kg"></td>
        </tr>
         <tr>
            <td><label for="warranty">Warranty</label></td>
            <td><input type="input" name="warranty" size="50" placeholder="6 Maanden"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Add new Case"></td>
        </tr>
    </table>    
</form>