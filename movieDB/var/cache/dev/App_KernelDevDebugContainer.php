<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLAIuzEg\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLAIuzEg/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLAIuzEg.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLAIuzEg\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLAIuzEg\App_KernelDevDebugContainer([
    'container.build_hash' => 'LAIuzEg',
    'container.build_id' => '33aab00f',
    'container.build_time' => 1633685469,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLAIuzEg');
