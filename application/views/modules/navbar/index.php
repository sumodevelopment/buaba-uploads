<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('upload'); ?>">Bauba</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="<?php echo $page == 'uploads' ? 'active' : ''; ?>"><a href="<?php echo site_url('upload'); ?>"><i class="fa fa-plus-circle"></i> New upload <span class="sr-only">(current)</span></a></li>
                <li class="<?php echo $page == 'news' ? 'active' : ''; ?>"><a href="<?php echo site_url('news'); ?>">View news</a></li>
                <li class="<?php echo $page == 'investor' ? 'active' : ''; ?>"><a href="<?php echo site_url('investor'); ?>">View investor news</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" id="btn-logout"><i class="fa fa-sign-out"></i>  Logout</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div id="logout-modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Logout</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to log out?</p>
            </div>
            <div class="modal-footer">
                <form action="<?php echo site_url('login/logout'); ?>" method="post">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Nope</button>
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
