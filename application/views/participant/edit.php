<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('participant/edit/'.$participant_item['id']); ?>
    <table>
        <tr>
            <td><label for="title">First name</label></td>
            <td><input type="input" name="title" size="50" value="<?php echo $participant_item['title'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="text">Last name</label></td>
            <td><textarea name="text" rows="10" cols="40"><?php echo $participant_item['text'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit participant item" /></td>
        </tr>
    </table>
</form>