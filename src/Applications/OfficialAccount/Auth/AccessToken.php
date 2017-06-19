<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyWeChat\Applications\OfficialAccount\Auth;

use EasyWeChat\Kernel\AccessToken as BaseAccessToken;

/**
 * Class AccessToken.
 *
 * @author overtrue <i@overtrue.me>
 */
class AccessToken extends BaseAccessToken
{
    protected $endpointToGetToken = 'cgi-bin/token';

    protected function getCredential(): array
    {
        return [
            'grant_type' => 'client_credential',
            'appid' => $this->app['config']['app_id'],
            'secret' => $this->app['config']['secret'],
        ];
    }
}
