<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Title</strong></td>
        <td><strong>Content</strong></td>
        <td colspan="3"><strong>Action</strong></td>
    </tr>
<?php foreach ($adminEnquete as $adminEnquete_item): ?>
        <tr>
            <td><?php echo $adminEnquete_item['title']; ?></td>
            <td><?php echo $adminEnquete_item['text']; ?></td>
            <td><a href="<?php echo site_url('adminEnquete/'.$adminEnquete_item['slug']); ?>">View</a></td>
            <td><a href="<?php echo site_url('adminEnquete/edit/'.$adminEnquete_item['id']); ?>">Edit</a></td>
            <td><a href="<?php echo site_url('adminEnquete/delete/'.$adminEnquete_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
        </tr>
<?php endforeach; ?>
</table>
<br><button><a href="<?php echo site_url('adminEnquete/create'); ?>"><strong>Create</strong></a></button>