<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="/css/front.css">
</head>
<?=$this->getMeta()?>
<body class="hold-transition sidebar-mini">


<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">

            <li class="nav-item d-none d-sm-inline-block">
                <a href="/" class="nav-link">Home</a>
            </li>
        </ul>
    </nav>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Sidebar -->
        <div class="sidebar">

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <form role="form" method="post" action="" >
                        <div class="newqq-stile">
                            <select class="newq-stile"name="formTemplate">
                                <option value="">Выбрать шаблон...</option>
                                <option value="1">Шаблон v1</option>
                                <option value="def">Шаблон v2</option>
                            </select>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Выбрать</button>
                            </div>
                        </div>
                    </form>
                    <hr />
                    <?php if($news): ?>
                        <?php foreach($news as $new): ?>
                            <li class="nav-item">
                                <a href="<?=$new->id;?>" class="nav-link">
                                    <p><?=$new->title;?></p>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>


    <div class="content-wrapper">
        <div class="container mt-2">
            <div class="row">
                <div class="col-12">
                        <ul class="list-unstyled">
                            <li><?=$content;?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/js/front.js"></script>
<script>
    $('.nav-sidebar a').each(function(){
        let location = window.location.protocol + '//' + window.location.host + window.location.pathname;
        let link = this.href;
        if(link == location){
            $(this).addClass('active');
            $(this).closest('.has-treeview').addClass('menu-open');
        }
    });
</script>
</body>
</html>