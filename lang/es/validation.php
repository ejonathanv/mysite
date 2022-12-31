<?php

return [
    
        /*
        |--------------------------------------------------------------------------
        | Validation Language Lines
        |--------------------------------------------------------------------------
        |
        | The following language lines contain the default error messages used by
        | the validator class. Some of these rules have multiple versions such
        | as the size rules. Feel free to tweak each of these messages here.
        |
        */
    
        'accepted'             => 'El campo :attribute debe ser aceptado.',
        'active_url'           => 'El campo :attribute no es una URL válida.',
        'after'                => 'El campo :attribute debe ser una fecha posterior a :date.',
        'after_or_equal'       => 'El campo :attribute debe ser una fecha posterior o igual a :date.',
        'alpha'                => 'El campo :attribute sólo puede contener letras.',
        'alpha_dash'           => 'El campo :attribute sólo puede contener letras, números y guiones.',
        'alpha_num'            => 'El campo :attribute sólo puede contener letras y números.',
        'array'                => 'El campo :attribute debe ser un conjunto.',
        'before'               => 'El campo :attribute debe ser una fecha anterior a :date.',
        'before_or_equal'      => 'El campo :attribute debe ser una fecha anterior o igual a :date.',
        'between'              => [
            'numeric' => 'El campo :attribute debe tener un valor entre :min - :max.',
            'file'    => 'El archivo :attribute debe pesar entre :min - :max kilobytes.',
            'string'  => 'El texto :attribute debe contener entre :min - :max caracteres.',
            'array'   => 'El conjunto :attribute debe tener entre :min - :max elementos.',
        ],
        'boolean'              => 'El campo :attribute debe tener un valor verdadero o falso.',
        'confirmed'            => 'La confirmación de :attribute no coincide.',
        'date'                 => 'El campo :attribute no corresponde con una fecha válida.',
        'date_equals'          => 'El campo :attribute debe ser una fecha igual a :date.',
        'date_format'          => 'El campo :attribute no corresponde con el formato de fecha :format.',
        'different'            => 'Los campos :attribute y :other deben ser diferentes.',
        'digits'               => 'El campo :attribute debe contener :digits dígitos',
        'digits_between'       => 'El campo :attribute debe contener entre :min y :max dígitos.',
        'dimensions'           => 'El campo :attribute tiene dimensiones de imagen no válidas.',
        'distinct'             => 'El campo :attribute tiene un valor duplicado.',
        'email'                => 'El formato del :attribute es inválido.',
        'ends_with'            => 'El campo :attribute debe terminar con uno de los siguientes valores: :values',
        'exists'               => 'El campo :attribute seleccionado no es válido.',
        'file'                 => 'El campo :attribute debe ser un archivo.',
        'filled'               => 'El campo :attribute es obligatorio.',
        'gt'                   => [
            'numeric' => 'El campo :attribute debe ser mayor que :value.',
            'file'    => 'El archivo :attribute debe pesar más de :value kilobytes.',
            'string'  => 'El texto :attribute debe contener más de :value caracteres.',
            'array'   => 'El conjunto :attribute debe tener más de :value elementos.',
        ],
        'gte'                  => [
            'numeric' => 'El campo :attribute debe ser mayor o igual que :value.',
            'file'    => 'El archivo :attribute debe pesar :value kilobytes o más.',
            'string'  => 'El texto :attribute debe contener :value caracteres o más.',
            'array'   => 'El conjunto :attribute debe tener :value elementos o más.',
        ],
        'image'                => 'El campo :attribute debe ser una imagen.',
        'in'                   => 'El campo :attribute seleccionado no es válido.',
        'in_array'             => 'El campo :attribute no existe en :other.',
        'integer'              => 'El campo :attribute debe ser un número entero.',
        'ip'                   => 'El campo :attribute debe ser una dirección IP válida.',
        'ipv4'                 => 'El campo :attribute debe ser una dirección IPv4 válida.',
        'ipv6'                 => 'El campo :attribute debe ser una dirección IPv6 válida.',
        'json'                 => 'El campo :attribute debe ser una cadena JSON válida.',
        'lt'                   => [
            'numeric' => 'El campo :attribute debe ser menor que :value.',
            'file'    => 'El archivo :attribute debe pesar menos de :value kilobytes.',
            'string'  => 'El texto :attribute debe contener menos de :value caracteres.',
            'array'   => 'El conjunto :attribute debe tener menos de :value elementos.',
        ],
        'lte'                  => [
            'numeric' => 'El campo :attribute debe ser menor o igual que :value.',
            'file'    => 'El archivo :attribute debe pesar :value kilobytes o menos.',
            'string'  => 'El texto :attribute debe contener :value caracteres o menos.',
            'array'   => 'El conjunto :attribute debe tener :value elementos o menos.',
        ],
        'max'                  => [
            'numeric' => 'El campo :attribute no puede ser mayor que :max.',
            'file'    => 'El archivo :attribute no puede pesar más de :max kilobytes.',
            'string'  => 'El texto :attribute no puede contener más de :max caracteres.',
            'array'   => 'El conjunto :attribute no puede tener más de :max elementos.',
        ],
        'mimes'                => 'El campo :attribute debe ser un archivo de tipo: :values.',
        'mimetypes'            => 'El campo :attribute debe ser un archivo de tipo: :values.',
        'min'                  => [
            'numeric' => 'El campo :attribute debe tener al menos :min.',
            'file'    => 'El archivo :attribute debe pesar al menos :min kilobytes.',
            'string'  => 'El texto :attribute debe contener al menos :min caracteres.',
            'array'   => 'El conjunto :attribute debe tener al menos :min elementos.',
        ],
        'not_in'               => 'El campo :attribute seleccionado no es válido.',
        'not_regex'            => 'El formato del campo :attribute es inválido.',
        'numeric'              => 'El campo :attribute debe ser numérico.',
        'password'             => 'La contraseña es incorrecta.',
        'present'              => 'El campo :attribute debe estar presente.',
        'regex'                => 'El formato del campo :attribute es inválido.',
        'required'             => 'El campo :attribute es obligatorio.',
        'required_if'          => 'El campo :attribute es obligatorio cuando el campo :other es :value.',
        'required_unless'      => 'El campo :attribute es obligatorio a menos que :other esté en :values.',
        'required_with'        => 'El campo :attribute es obligatorio cuando :values está presente.',
        'required_with_all'    => 'El campo :attribute es obligatorio cuando :values está presente.',
        'required_without'     => 'El campo :attribute es obligatorio cuando :values no está presente.',
        'required_without_all' => 'El campo :attribute es obligatorio cuando ninguno de :values están presentes.',
        'same'                 => 'Los campos :attribute y :other deben coincidir.',
        'size'                 => [
            'numeric' => 'El campo :attribute debe tener :size.',
            'file'    => 'El archivo :attribute debe pesar :size kilobytes.',
            'string'  => 'El texto :attribute debe contener :size caracteres.',
            'array'   => 'El conjunto :attribute debe contener :size elementos.',
        ],
        'string'               => 'El campo :attribute debe ser una cadena de caracteres.',
        'timezone'             => 'El campo :attribute debe ser una zona válida.',
        'unique'               => 'El valor del campo :attribute ya está en uso.',
        'uploaded'             => 'El archivo :attribute no se pudo subir.',
        'url'                  => 'El formato de :attribute es inválido.',
        'uuid'                 => 'El campo :attribute debe ser un UUID válido.',
        'recaptcha'            => 'El campo :attribute no es correcto.',
];