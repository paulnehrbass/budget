<?php
return  [
    //'button' => '<button{{attrs}}>{{text}}</button>',
    'button' => '<button class="btn btn-primary" {{attrs}}>{{text}}</button>',

    //'' => '<button type="submit" class="btn btn-primary w-md">Submit</button>',



    'checkbox' => '<input type="checkbox" name="{{name}}" value="{{value}}"{{attrs}}>',

    'checkboxFormGroup' => '{{label}}',

    'checkboxWrapper' => '<div class="checkbox">{{label}}</div>',

    'error' => '<div class="error-message" id="{{id}}">{{content}}</div>',

    'errorList' => '<ul>{{content}}</ul>',

    'errorItem' => '<li>{{text}}</li>',

    'file' => '<input type="file" name="{{name}}"{{attrs}}>',

    'fieldset' => '<fieldset{{attrs}}>{{content}}</fieldset>',

    'formStart' => '<form{{attrs}}>',

    'formEnd' => '</form>',

    'formGroup' => '{{label}}{{input}}',

    'hiddenBlock' => '<div{{attrs}}>{{content}}</div>',

    //'input' => '<input type="{{type}}" name="{{name}}"{{attrs}}>',
    'input' => '<div class="col-sm-9">
                    <input id="horizontal-{{name}}-input" class="form-control" type="{{type}}" name="{{name}}"{{attrs}} placeholder="Enter {{name}}">
                </div>',


    'inputSubmit' => '<input type="{{type}}"{{attrs}}>',

    'inputContainer' => '<div class="row mb-4 {{type}}{{required}}">{{content}}</div>',

     //'rno' => '<div class="row mb-4">{{content}}</div>',

    'inputContainerError' => '<div class="input {{type}}{{required}} error">{{content}}{{error}}</div>',

    //'label' => '<label{{attrs}}>{{text}}</label>',
    'label' => '<label{{attrs}} class="col-sm-3 col-form-label">{{text}}</label>',

    'nestingLabel' => '{{hidden}}<label{{attrs}}>{{input}}{{text}}</label>',

    'legend' => '<legend>{{text}}</legend>',

    'multicheckboxTitle' => '<legend>{{text}}</legend>',

    'multicheckboxWrapper' => '<fieldset{{attrs}}>{{content}}</fieldset>',
    'option' => '<option value="{{value}}"{{attrs}}>{{text}}</option>',
    'optgroup' => '<optgroup label="{{label}}"{{attrs}}>{{content}}</optgroup>',
    'select' => '<select name="{{name}}"{{attrs}}>{{content}}</select>',
    'selectMultiple' => '<select name="{{name}}[]" multiple="multiple"{{attrs}}>{{content}}</select>',
    'radio' => '<input type="radio" name="{{name}}" value="{{value}}"{{attrs}}>',
    'radioWrapper' => '{{label}}',
    'textarea' => '<textarea name="{{name}}"{{attrs}}>{{value}}</textarea>',
    'submitContainer' => '<div class="submit">{{content}}</div>',
    'confirmJs' => '{{confirm}}'

]
?>