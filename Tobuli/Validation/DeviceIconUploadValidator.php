<?php namespace Tobuli\Validation;

class DeviceIconUploadValidator extends Validator {

    /**
     * @var array Validation rules for the test form, they can contain in-built Laravel rules or our custom rules
     */
    public $rules = [
        'create' => [
            'type' => 'required|in:icon,rotating',
            'file' => 'required|image|mimes:jpeg,gif,png|max:20000|dimensions:min_width=10,min_height=10'
        ],
        'update' => [
            'type' => 'required|in:icon,rotating',
            'file' => 'nullable|image|mimes:jpeg,gif,png|max:20000|dimensions:min_width=10,min_height=10'
        ]
    ];

}   //end of class


//EOF