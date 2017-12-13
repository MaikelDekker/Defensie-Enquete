<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('cases/edit/'.$case_item['id']); ?>
    <table>
        <tr>
            <td><label for="title">Name</label></td>
            <td><input type="input" name="name" size="50" value="<?php echo $case_item['name'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Designer</label></td>
            <td><input type="input" name="designer" size="50" value="<?php echo $case_item['designer'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Description</label></td>
            <td><textarea name="description" rows="2" cols="52"><?php echo $case_item['description'] ?></textarea></td>
        </tr>
        <tr>
            <td><label for="title">Price</label></td>
            <td><input type="input" name="price" size="50" value="<?php echo $case_item['price'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Color</label></td>
            <td><input type="input" name="color" size="50" value="<?php echo $case_item['color'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Type</label></td>
            <td><input type="input" name="type" size="50" value="<?php echo $case_item['type'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Construction</label></td>
            <td><input type="input" name="construction" size="50" value="<?php echo $case_item['construction'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Motherboard Size</label></td>
            <td><input type="input" name="motherboardsize" size="50" value="<?php echo $case_item['motherboardsize'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Length GPU</label></td>
            <td><input type="input" name="lengthgpu" size="50" value="<?php echo $case_item['lengthgpu'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Height Cooler</label></td>
            <td><input type="input" name="heightcooler" size="50" value="<?php echo $case_item['heightcooler'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Length Cooler</label></td>
            <td><input type="input" name="lengthcooler" size="50" value="<?php echo $case_item['lengthcooler'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Power Supply</label></td>
            <td><input type="input" name="powersupply" size="50" value="<?php echo $case_item['powersupply'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Extern 5"25</label></td>
            <td><input type="input" name="extern525" size="50" value="<?php echo $case_item['extern525'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Toolles 5"25</label></td>
            <td><input type="input" name="toolles525" size="50" value="<?php echo $case_item['toolles525'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Intern 3"5</label></td>
            <td><input type="input" name="intern35" size="50" value="<?php echo $case_item['intern35'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Toolles 3"5</label></td>
            <td><input type="input" name="toolles35" size="50" value="<?php echo $case_item['toolles35'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Intern 2"5</label></td>
            <td><input type="input" name="intern25" size="50" value="<?php echo $case_item['intern25'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Full-size Slots</label></td>
            <td><input type="input" name="fullsizeslots" size="50" value="<?php echo $case_item['fullsizeslots'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Water Cooling</label></td>
            <td><input type="input" name="watercooling" size="50" value="<?php echo $case_item['watercooling'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Window Kit</label></td>
            <td><input type="input" name="windowkit" size="50" value="<?php echo $case_item['windowkit'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Dimensions</label></td>
            <td><input type="input" name="dimensions" size="50" value="<?php echo $case_item['dimensions'] ?>"></td>
        </tr>
        <tr>
            <td><label for="releasedate">Release Date</label></td>
            <td><input type="input" name="releasedate" size="50" maxlength="10" value="<?php echo $case_item['releasedate'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="title">Extra Information</label></td>
            <td><textarea name="information" rows="2" cols="52"><?php echo $case_item['information'] ?></textarea></td>
        </tr>
        <tr>
            <td><label for="title">Weight</label></td>
            <td><input type="input" name="weight" size="50" value="<?php echo $case_item['weight'] ?>"></td>
        </tr>
        <tr>
            <td><label for="title">Warranty</label></td>
            <td><input type="input" name="warranty" size="50" value="<?php echo $case_item['warranty'] ?>"></td>
        </tr>
        
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit case item"></td>
        </tr>
    </table>
</form>