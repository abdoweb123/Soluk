<?php

namespace Modules\Setting\Http\Controllers;

use App\Functions\ResponseHelper;
use App\Http\Controllers\BasicController;
use Modules\Setting\Entities\Model;

class APIController extends BasicController
{
    public function video()
    {
        ResponseHelper::make(asset(setting('video')));
    }

    public function contact()
    {
        $images = [
            'phone_img' => asset('icons/phone.png'),
            'email_img' => asset('icons/email.png'),
            'address_c_img' => asset('icons/website.png'),
        ];

        $keys = ['phone', 'email', 'address_c'];


        $infoWithImages = Model::whereIn('key', $keys)
            ->select('key', 'value')
            ->get()
            ->map(function ($item) use ($images) {
                $item['title'] = __('trans.'.$item['key']) ?? $item['key'];
                $item['icon'] = $images[$item['key'] . '_img'] ?? null;
                return $item;
            });


        ResponseHelper::make([
            'info' => $infoWithImages,
            'social' => [
                [
                    'key' => 'facebook',
                    'link' => setting('facebook'),
                    'icon' => asset('icons/facebook.png'),
                ],
                [
                    'key' => 'instagram',
                    'link' => setting('instagram'),
                    'icon' => asset('icons/instagram.png'),
                ],
                [
                    'key' => 'twitter',
                    'link' => setting('twitter'),
                    'icon' => asset('icons/twitter.png'),
                ],
                [
                    'key' => 'snapchat',
                    'link' => setting('snapchat'),
                    'icon' => asset('icons/snapchat.png'),
                ],
                [
                    'key' => 'tiktok',
                    'link' => setting('tiktok'),
                    'icon' => asset('icons/tiktok.png'),
                ],
            ],
        ],__('trans.Data_fetched_successfully'));
    }
}
