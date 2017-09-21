<?php

$path = wa('apps')->getAppPath('lib/config/data/');
$handlersPath = wa('apps')->getAppPath('lib/handlers/');
$files = waFiles::listDir($path);
foreach ($files as $file) {
$app = include($path.$file);
foreach ($app['hooks'] as $key=>$hook) {
    $handler = $app['id'].'.'.$key.'.handler.php';
    $keys = empty($hook['array_keys'])? 'null' : var_export($hook['array_keys'], 1);
    $content = "<?php

class apps".ucfirst($app['id']).ucfirst(str_replace('.','',$key))."Handler extends waEventHandler
{
    public function execute(&\$params = null, \$array_keys = $keys){
        return wa('apps')->event('".$app['id'].'.'.$key."', \$params, \$array_keys);
    }
}
";
    waFiles::write($handlersPath.$handler, $content);
    }
}
