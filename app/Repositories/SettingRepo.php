<?php

namespace App\Repositories;


use App\Models\Setting;

class SettingRepo
{
    public function update($type, $desc)
    {
        return Setting::where('type', $type)->update(['description' => $desc]);
    }

    public function getSetting($type)
    {
        return Setting::where('type', $type)->get();
    }

    public function all()
    {
        return Setting::all();
    }

    // public function add($type,$description)
    // {
    //     $setting =  new Setting();
    //     $setting->type = $request->type;
    //     $setting->description = $request->description;
    //     $save = $setting->save();
    //     return $save;
    //     // return Setting::create([
    //     //     'type' =>$type,
    //     //     'description'=>$description
    //     // ]);
    // }
}