<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDBwduLi\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDBwduLi/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDBwduLi.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDBwduLi\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDBwduLi\App_KernelDevDebugContainer([
    'container.build_hash' => 'DBwduLi',
    'container.build_id' => '1389d465',
    'container.build_time' => 1632783765,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDBwduLi');
