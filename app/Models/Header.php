<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class Header extends Model
{
    use HasFactory;

    protected $fillable = ['title_logo', 'logo', 'link1', 'link2', 'link3', 'link4', 'link5', 'mode_button_image'];


    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'title'
    //         ]
    //     ];
    // }

    public static function uploadLogo(Request $request, $image = null)
    {
        if ($request->hasFile('logo')) {
            if ($image) {
                Storage::delete($image);
            }
            $folder = date('Y-m-d');
            return $request->file('logo')->store("images/{$folder}");           
        }
        return null;
    }

    public static function uploadModeButton(Request $request, $image = null)
    {
        if ($request->hasFile('mode_button_image')) {
            if ($image) {
                Storage::delete($image);
            }
            $folder = date('Y-m-d');
            return $request->file('mode_button_image')->store("images/{$folder}");           
        }
        return null;
    }

    public function getLogo()
    {
        if (!$this->logo) {
            return asset("no-image.jpg");
        }
        return asset("uploads/{$this->logo}");
    }

    public function getModeButton()
    {
        if (!$this->mode_button_image) {
            return asset("no-image.jpg");
        }
        return asset("uploads/{$this->mode_button_image}");
    }

    public function getPostDate()
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d F, Y');
    }
}