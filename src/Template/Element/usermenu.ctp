<div class="col-md-10"></div>
<div class="d-flex align-items-center">
    <!-- START User Info-->
    <div class="pull-left p-r-10 fs-14 font-heading hidden-md-down">
        <span class="semi-bold"><?= $this->request->getSession()->read('Auth.User.name') ?></span>
    </div>
    <div class="dropdown pull-right hidden-md-down">
        <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="thumbnail-wrapper d32 circular inline">
                <img src="<?= $this->Url->build('/cake_pages_template/img/profiles/avatar.jpg') ?>" alt="" data-src="<?= $this->Url->build('/cake_pages_template/img/profiles/avatar.jpg') ?>" data-src-retina="<?= $this->Url->build('/cake_pages_template/img/profiles/avatar_small2x.jpg') ?>" width="32" height="32">
            </span>
        </button>
        <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
            <a href="#" class="dropdown-item"><i class="pg-settings_small"></i> Settings</a>
            <a href="#" class="dropdown-item"><i class="pg-outdent"></i> Feedback</a>
            <a href="#" class="dropdown-item"><i class="pg-signals"></i> Help</a>
            <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'logout', 'plugin' => false]) ?>" class="clearfix bg-master-lighter dropdown-item">
                <span class="pull-left">Logout</span>
                <span class="pull-right"><i class="pg-power"></i></span>
            </a>
        </div>
    </div>

</div>