<?php

/*
 * This file is part of the HWIOAuthBundle package.
 *
 * (c) Hardware Info <opensource@hardware.info>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HWI\Bundle\OAuthBundle\Tests\OAuth\ResourceOwner;

use HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\ItembaseResourceOwner;
use HWI\Bundle\OAuthBundle\Test\OAuth\ResourceOwner\GenericOAuth2ResourceOwnerTestCase;

/**
 * Class ItembaseResourceOwnerTest.
 *
 * @author Thomas Bretzke <tb@itembase.biz>
 */
final class ItembaseResourceOwnerTest extends GenericOAuth2ResourceOwnerTestCase
{
    protected $resourceOwnerClass = ItembaseResourceOwner::class;
    protected $userResponse = <<<json
{
    "uuid": "1",
    "username": "bar",
    "email": "baz",
    "first_name": "Peter",
    "last_name": "Griffin"
}
json;

    protected $paths = [
        'identifier' => 'uuid',
        'nickname' => 'username',
        'firstname' => 'first_name',
        'lastname' => 'last_name',
        'email' => 'email',
    ];
}
