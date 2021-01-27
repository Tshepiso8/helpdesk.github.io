<div class="container">
  <div class="row">
    <div class="col-md-12 content-area">

    	<h3 class="home-label"><?php echo lang("ctn_520") ?></h3>

<ol class="breadcrumb">
  <li><a href="<?php echo site_url() ?>"><?php echo lang("ctn_2") ?></a></li>
  <li class="active"><?php echo lang("ctn_520") ?></li>
</ol>

<div class="panel panel-default">
<div class="panel-body">

<div class="clearfix">
<span class="plan-title"><?php echo lang("ctn_273") ?></span>

<div class="pull-right">
<a href="<?php echo site_url("client/payment_log") ?>" class="btn btn-info btn-sm"><?php echo lang("ctn_623") ?></a> <a href="<?php echo site_url("client/funds") ?>" class="btn btn-primary btn-sm"><?php echo lang("ctn_245") ?></a>
</div>
</div>

<hr>

<div class="content-wrapper">

<?php foreach($plans->result() as $r) : ?>
<div class="plan-wrapper">

	<div class="n-plan-title" style="background: #<?php echo $r->hexcolor ?>; color: #<?php echo $r->fontcolor ?>;">
		<?php echo $r->name ?>
	</div>

	<div class="n-plan-pricing">
		<p><?php echo $this->settings->info->payment_symbol ?><?php echo number_format($r->cost,2) ?></p>
		<p class="small-text"><?php if($r->days >0) : ?>
		<p class="plan-days"><?php echo $r->days ?> <?php echo lang("ctn_277") ?></p>
		<?php else : ?>
		<p class="plan-days"><?php echo lang("ctn_283") ?></p>
		<?php endif; ?></p>
	</div>

	<div class="n-plan-content">
		<?php echo $r->description ?>

		<p class="align-center"><a href="<?php echo site_url("funds/buy_plan/" . $r->ID . "/" . $this->security->get_csrf_hash()) ?>" class="btn n-plan-button" style="border-color: #<?php echo $r->hexcolor ?>; color: #<?php echo $r->hexcolor ?>;">Buy Plan</a></p>
	</div>


</div>
<?php endforeach; ?>

</div>

<hr>

<p><?php echo lang("ctn_248") ?>: <?php echo number_format($this->user->info->points,2) ?></p>

<?php if($this->user->info->premium_time > 0) : ?>
	<?php $time = $this->common->convert_time($this->user->info->premium_time) ?>
<p><?php echo lang("ctn_276") ?> <?php echo $this->common->get_time_string($time) ?> <?php echo lang("ctn_281") ?></p>
<?php elseif($this->user->info->premium_time == -1) : ?>
<p><?php echo lang("ctn_282") ?></p>
<?php endif; ?>

</div>
</div>

</div>
</div>
</div>