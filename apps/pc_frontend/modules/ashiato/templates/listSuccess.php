<div class="dparts ashiatoList"><div class="parts">
<div class="partsHeading"><h3><?php echo __('Pageview logs') ?></h3></div>
<div class="partsInfo">
<p>
<?php echo __('Pageview Logs of %1%', array('%1%' => $sf_user->getMember()->getName())) ?>
<?php echo __('Pageview %d Logs Explanation', array('%d' => sfConfig::get('mod_ashiato_max_ashiato'))) ?>
</p>
</div>
<div class="item">
<p><?php echo __('Pageview %d Count', array('%d' =>$count)) ?></p>
<ul class="list">
    <?php foreach ($pager->getResults() as $ashiato) : ?>
    <li><?php echo op_format_date($ashiato->max_updated_at, 'XDateTimeJaBr'); ?>&nbsp;
    <?php if ($ashiato->Member_2 && $ashiato->Member_2->id): ?>
      <?php echo link_to($ashiato->Member_2->name, 'member/profile?id='.$ashiato->Member_2->id); ?>
    <?php else: ?>
      <?php echo opConfig::get('nickname_of_member_who_does_not_have_credentials', '') ?>
    <?php endif ?>
    </li>
    <?php endforeach; ?>
</ul>
</div>
</div></div>
