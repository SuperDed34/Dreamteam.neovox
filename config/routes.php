<?php

use max\Router;
//Правила админа
Router::add('^(admin)$', ['controller' => 'Main','action'=> 'index', 'admin_prefix'=>'admin']);
Router::add('^admin/(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)?$', ['admin_prefix'=>'admin']);
//Общие правила дефолт
Router::add('^$', ['controller' => 'Main']);
Router::add('^(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)/?$');
//Router::add('^(?P<controller>[a-z-]+?/)$', ['action' =>'index']);

