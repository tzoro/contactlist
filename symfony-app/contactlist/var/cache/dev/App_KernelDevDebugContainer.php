<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8bkQEuP\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8bkQEuP/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container8bkQEuP.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container8bkQEuP\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container8bkQEuP\App_KernelDevDebugContainer([
    'container.build_hash' => '8bkQEuP',
    'container.build_id' => 'b7768238',
    'container.build_time' => 1640238628,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8bkQEuP');
