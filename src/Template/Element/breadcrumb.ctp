<div class=" container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">
  <div class="inner">
    <!-- START BREADCRUMB -->
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#"><?= $this->request->getParam('controller') ?></a></li>
      <li class="breadcrumb-item active"><?= $this->request->getParam('action') ?></li>
    </ol>
    <!-- END BREADCRUMB -->
  </div>
</div>