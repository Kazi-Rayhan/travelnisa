<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Exceptions\HttpResponseException;
use Str;

class Hotel extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $casts = [
        'images' => 'array',
        'attributes' => 'array',
    ];

    public function getRouteKey()
    {
        return Str::slug($this->name) . '-' . $this->id;
    }

    public function resolveRouteBinding($value, $field = null)
    {
        $id = last(explode('-', $value));
        $model = parent::resolveRouteBinding($id, $field);
        if (!$model) abort(404);
        if ($model->getRouteKey() == $value) {
            return $model;
        }
        throw new HttpResponseException(redirect()->to(route(request()->route()->getName(), $model)));
    }
}
