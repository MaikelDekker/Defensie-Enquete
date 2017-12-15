<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Title</strong></td>
        <td><strong>Content</strong></td>
        <td colspan="3"><strong>Action</strong></td>
    </tr>
<?php foreach ($enquete as $enquete_item): ?>
        <tr>
            <td><?php echo $enquete_item['title']; ?></td>
            <td><?php echo $enquete_item['text']; ?></td>
            <td><a href="<?php echo site_url('enquete/'.$enquete_item['slug']); ?>">View</a></td>
            <td><a href="<?php echo site_url('enquete/edit/'.$enquete_item['id']); ?>">Edit</a></td>
            <td><a href="<?php echo site_url('enquete/delete/'.$enquete_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
            <form action="theSamePage.php" method="post">
                <input type="submit" name="someAction" value="GO" />
            </form>
        </tr>
<?php endforeach; ?>
</table>
<br><button><a href="<?php echo site_url('enquete/create'); ?>"><strong>Create new enquete Item</strong></a></button>