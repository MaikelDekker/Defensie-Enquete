<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('admin/create'); ?>    
    <table>
        <tr>
            <td><label for="title">Title</label></td>
            <td><input type="input" name="title" size="50" /></td>
        </tr>
        <tr>
            <td><label for="text">Text</label></td>
            <td><textarea name="text" rows="10" cols="40"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Create admin item" /></td>
        </tr>
    </table>    
</form>
<button><a href="<?php echo site_url('admin/index'); ?>">Back</a></button>