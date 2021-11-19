<?php // phpcs:disable ?>
<?php if ($should_load) : ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=<?= $ga4_id ?>">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '<?= $ga4_id ?>');
  <?php if ($google_analytics_id) : ?>
  gtag('config', '<?= $google_analytics_id ?>'{<?php if ($anonymize_ip) : ?>, 'anonymize_ip': true<?php endif; ?><?php if ($optimize_id) : ?>, 'optimize_id': '<?= $optimize_id; ?>'});<?php endif; ?>
  <?php endif; ?>
</script>
<?php endif; ?>
