<?php
/*
 * This file is part of the OpxCore.
 *
 * Copyright (c) Lozovoy Vyacheslav <opxcore@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OpxCore\App\Interfaces;

interface AppBootstrapperInterface
{
    /**
     * This function will be called on bootstrapping.
     *
     * @param AppInterface $app
     *
     * @return  array|null Instances to be registered in application container.
     */
    public function bootstrap(AppInterface $app): ?array;
}