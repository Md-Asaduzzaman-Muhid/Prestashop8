<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container296Sxbk\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container296Sxbk/appAppKernelProdContainer.php') {
    touch(__DIR__.'/Container296Sxbk.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\Container296Sxbk\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \Container296Sxbk\appAppKernelProdContainer([
    'container.build_hash' => '296Sxbk',
    'container.build_id' => 'ebbf3c00',
    'container.build_time' => 1707986678,
], __DIR__.\DIRECTORY_SEPARATOR.'Container296Sxbk');
