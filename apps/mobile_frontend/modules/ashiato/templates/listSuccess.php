<?php if ($pager->getNbResults()): ?>
<?php op_mobile_page_title(__('Pageview logs')) ?>

<?php echo __('Pageview Logs of %1%', array('%1%' => $sf_user->getMember()->getName())) ?>
<hr color="#b3ceef">
<?php echo __('Pageview %d Count', array('%d' =>$count)) ?>
<hr color="#b3ceef">

<table width="100%">
<?php foreach ($pager->getResults() as $ashiato) : ?>
<tr><td bgcolor="<?php echo cycle_vars($id, '#e0eaef,#ffffff') ?>">
<?php echo op_format_date($ashiato->ua, 'XDateTime'); ?>
&nbsp;
<?php if ($ashiato->Member_2 && $ashiato->Member_2->id): ?>
  <?php echo link_to($ashiato->Member_2->name, 'member/profile?id='.$ashiato->Member_2->id); ?>
<?php else: ?>
  <?php echo opConfig::get('nickname_of_member_who_does_not_have_credentials', '') ?>
<?php endif ?>
</td></tr>
<?php endforeach; ?>

<?php endif; ?>
