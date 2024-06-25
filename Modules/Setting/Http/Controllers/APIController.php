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
            'address_c_img' => asset('icons/website.png'),
            'phone_img' => asset('icons/phone.png'),
            'email_img' => asset('icons/email.png'),
        ];

        $keys = [ 'address_c','phone', 'email'];


        $infoWithImages = Model::whereIn('key', $keys)
            ->select('key', 'value')
            ->get()
            ->map(function ($item) use ($images) {
                $item['title'] = __('trans.'.$item['key']) ?? $item['key'];
                $item['icon'] = $images[$item['key'] . '_img'] ?? null;
                return $item;
            }) ->sortBy(function ($item) use ($keys) {
                return array_search($item['key'], $keys);
            })
            ->values(); // Reindex the collection;


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
