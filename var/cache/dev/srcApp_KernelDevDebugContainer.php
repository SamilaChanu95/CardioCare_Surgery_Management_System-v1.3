<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFIRNy9s\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFIRNy9s/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFIRNy9s.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFIRNy9s\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerFIRNy9s\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'FIRNy9s',
    'container.build_id' => '4a6a8cf9',
    'container.build_time' => 1598861005,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFIRNy9s');
