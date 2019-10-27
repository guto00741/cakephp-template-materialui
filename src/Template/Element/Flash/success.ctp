<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<script>
    $(function () {
        $('.page-content-wrapper').pgNotification({
            style: 'bar',
            message: '<?= $message ?>',
            position: 'top',
            timeout: 0,
            type: 'success'
        }).show();
    });
</script>