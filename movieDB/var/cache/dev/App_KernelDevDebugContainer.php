<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container4xcbkxu\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container4xcbkxu/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container4xcbkxu.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container4xcbkxu\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container4xcbkxu\App_KernelDevDebugContainer([
    'container.build_hash' => '4xcbkxu',
    'container.build_id' => 'fd2d9421',
    'container.build_time' => 1632786310,
], __DIR__.\DIRECTORY_SEPARATOR.'Container4xcbkxu');
