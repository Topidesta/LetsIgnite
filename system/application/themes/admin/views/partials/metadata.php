<meta charset="utf-8">
    <title><?php echo $this->config->item('site_title', 'ion_auth') .' - '. $template['title']; ?></title>
    
    <?php echo $template['metadata']; ?>
    
    <?php echo theme_css('bootstrap.css'); ?>
    
    <style type="text/css">
      body { padding-top: 60px; padding-bottom: 40px; }
      .sidebar-nav { padding: 9px 0; }
    </style>
    
    <?php echo theme_css('bootstrap-responsive.css'); ?>
    

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo theme_image_path('ico/favicon.ico'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo theme_image_path('ico/apple-touch-icon-114-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo theme_image_path('ico/apple-touch-icon-72-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo theme_image_path('ico/apple-touch-icon-57-precomposed.png'); ?>">

