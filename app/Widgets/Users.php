<?php

namespace App\Widgets;

use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;
use Vinkla\Hashids\Facades\Hashids;


class Users extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**app/Widget/Staffs.php
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        // $category = ModelsCategory::get();
        // $user = Auth::user()->id;

        $string = trans_choice('voyager::dimmer.user', "My Link");


        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-link',
            'title'  =>  "My Link ",
            'text'   => __("<a style='color:white' href='". route('careersme', Hashids::encode(Auth::user()->id)) ."'>". route('careersme', Hashids::encode(Auth::user()->id)) ."</a>"),
            'button' => [
                'text' => __('My Invite Link'),
                'link' => route('careersme', Hashids::encode(Auth::user()->id)),
            ],
            'image' => asset('wp-content/uploads/2019/02/Eva.png'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return true;
        // return Auth::user()->can('browse', "App\\Models\Application");
    }


}
