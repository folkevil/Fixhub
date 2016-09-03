<?php

/*
 * This file is part of Fixhub.
 *
 * Copyright (C) 2016 Fixhub.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fixhub\Http\Controllers\Admin;

use Exception;
use Fixhub\Http\Controllers\Controller;
use Fixhub\Services\Settings\Repository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

/**
 * Site settings management controller.
 */
class SettingController extends Controller
{
    public function index()
    {
        return view('admin.settings.index', [
                'title' => 'Settings'
            ]);
    }

    public function postSettings(Request $request)
    {
        $excludedParams = ['_token', 'current_tab'];
        $current_tab = $request->get('current_tab');
        $setting = app(Repository::class);
        try {
            foreach($request->except($excludedParams) as $settingName => $settingValue) {
                $setting->set($settingName, $settingValue);
            }
        } catch (Exception $e) {

        }
        Session::flash('current_tab', $current_tab);

        return Redirect::back();
    }
}
