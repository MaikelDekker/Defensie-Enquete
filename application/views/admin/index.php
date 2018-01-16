<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>First name</strong></td>
        <td><strong>Last name</strong></td>
        <td colspan="4"><strong>Action</strong></td>
    </tr>
<?php foreach ($admin as $admin_item): ?>
        <tr>
            <td><?php echo $admin_item['title']; ?></td>
            <td><?php echo $admin_item['text']; ?></td>
            <td><a href="<?php echo site_url('admin/'.$admin_item['slug']); ?>">View</a></td>
            <td><a href="<?php echo site_url('admin/edit/'.$admin_item['id']); ?>">Edit</a></td>
            <td><a href="<?php echo site_url('admin/delete/'.$admin_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
            <td><a href="<?php echo site_url('admin/results'); ?>">Results</a></td>
        </tr>
<?php endforeach; ?>
</table>
<br><button><a href="<?php echo site_url('admin/create'); ?>"><strong>Create</strong></a></button>