<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPwieEy5\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPwieEy5/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPwieEy5.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPwieEy5\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPwieEy5\App_KernelDevDebugContainer([
    'container.build_hash' => 'PwieEy5',
    'container.build_id' => '063ae1b4',
    'container.build_time' => 1607560833,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPwieEy5');
