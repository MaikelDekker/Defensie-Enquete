<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>First name</strong></td>
        <td><strong>Last name</strong></td>
        <td colspan="5"><strong>Action</strong></td>
    </tr>
<?php foreach ($participant as $participant_item): ?>
        <tr>
            <td><?php echo $participant_item['title']; ?></td>
            <td><?php echo $participant_item['text']; ?></td>
            <td><a href="<?php echo site_url('participant/'.$participant_item['slug']); ?>">View</a></td>
            <td><a href="<?php echo site_url('participant/edit/'.$participant_item['id']); ?>">Edit</a></td>
            <td><a href="<?php echo site_url('participant/delete/'.$participant_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
            <td><a href="<?php echo site_url('participant/invite'); ?>">Invite</a></td>
            <td><a href="<?php echo site_url('participant/clear'); ?>">Clear</a></td>
        </tr>
<?php endforeach; ?>
</table>
<br><button><a href="<?php echo site_url('participant/create'); ?>"><strong>Create new participant Item</strong></a></button>