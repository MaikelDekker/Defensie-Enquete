<h2><?php echo "boy"; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>token</strong></td>
        <td colspan="3"><strong>Action</strong></td>
    </tr>
<?php foreach ($onetimelinks as $onetimelinks_item): ?>
        <tr>
            <td><?php echo $onetimelinks_item['token']; ?></td>
            <td><a href="<?php echo site_url('participant/invite'); ?>">Invite</a></td>
        </tr>
<?php endforeach; ?>
</table>
<br><button><a href="<?php echo site_url('participant/create'); ?>"><strong>Create new participant Item</strong></a></button>