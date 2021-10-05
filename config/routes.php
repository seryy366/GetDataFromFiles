<?php

use csv\Router;
Router::add('^(?P<id>[a-z0-9-]+)/?$',['controller' => 'News', 'action' => 'view']);


Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');