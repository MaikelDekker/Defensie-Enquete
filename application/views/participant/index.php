<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Title</strong></td>
        <td><strong>Content</strong></td>
        <td colspan="3"><strong>Action</strong></td>
    </tr>
<?php foreach ($participant as $participant_item): ?>
        <tr>
            <td><?php echo $participant_item['title']; ?></td>
            <td><?php echo $participant_item['text']; ?></td>
            <td><a href="<?php echo site_url('participant/'.$participant_item['slug']); ?>">View</a></td>
            <td><a href="<?php echo site_url('participant/edit/'.$participant_item['id']); ?>">Edit</a></td>
            <td><a href="<?php echo site_url('participant/delete/'.$participant_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
        </tr>
<?php endforeach; ?>
</table>
<br><button><a href="<?php echo site_url('participant/create'); ?>"><strong>Create new participant Item</strong></a></button>