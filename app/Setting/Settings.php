<?php

namespace App\Setting;

use App\Models\Setting;
use Illuminate\Support\Facades\Storage;

class Settings
{
    public function setting ($key, $default = null)
    {
        $setting = Setting::where('key', $key)->first();
        if($setting && $setting->type=='image'){
           return Storage::url($setting->image);
        }else{
            return $setting->value ?? '';
        }
    }

}
