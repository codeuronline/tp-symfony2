<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUZ6CZxI\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUZ6CZxI/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUZ6CZxI.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUZ6CZxI\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUZ6CZxI\App_KernelDevDebugContainer([
    'container.build_hash' => 'UZ6CZxI',
    'container.build_id' => '9f2b62f9',
    'container.build_time' => 1655363600,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUZ6CZxI');
