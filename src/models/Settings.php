<?php

namespace zoilorys\craft\ReactExternalServer\models;


use craft\base\Model;


class Settings extends Model
{

    public $env = 'client_side';

    public function rules()
    {
        return [
            [['env'], 'required'],
        ];
    }
}
