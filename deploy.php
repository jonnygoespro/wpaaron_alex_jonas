<?php
namespace Deployer;

require 'recipe/common.php';

// Config

set('repository', 'https://github.com/jonnygoespro/wpaaron_alex_jonas.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('193.170.119.198')
    ->set('remote_user', 'aaron')
    ->set('port','5412')
    ->set('deploy_path', '~/app');

// Hooks

// Tasks
desc('Deploy your project');
task('deploy', [
    'deploy:prepare',
    'deploy:publish'
]);


after('deploy:failed', 'deploy:unlock');
