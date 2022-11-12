<?php
namespace Deployer;

require 'recipe/common.php';

set('repository','https://github.com/jonnygoespro/wpaaron_alex_jonas.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
set('shared_files', ['public/wp-config.php']);
set('shared_dirs', ['public/wp-content/uploads']);

// Writable dirs by web server
// set('writable_mode', 'chown');
// set('writable_dirs', ['public/wp-content/uploads']);
set('allow_anonymous_stats', false);

// Hosts
host('vm-brandy.multimediatechnology.at')
        ->set('remote_user','aaron')
        ->set('port','5412')
        ->set('deploy_path', '/home/aaron/app');

// Composer
set('composer_action', false);

// Tasks
desc('Deploy your project');
task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:writable',
    'deploy:clear_paths',
    'deploy:symlink',
    'deploy:unlock',
]);

// [Optional] If deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');