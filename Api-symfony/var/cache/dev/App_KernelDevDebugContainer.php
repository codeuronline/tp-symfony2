<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container47SnAPx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container47SnAPx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container47SnAPx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container47SnAPx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container47SnAPx\App_KernelDevDebugContainer([
    'container.build_hash' => '47SnAPx',
    'container.build_id' => '75a475fe',
    'container.build_time' => 1654961980,
], __DIR__.\DIRECTORY_SEPARATOR.'Container47SnAPx');
