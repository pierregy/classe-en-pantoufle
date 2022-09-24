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

    'accepted'             => 'Le :attribute doit être accepté.',
    'active_url'           => 'Le :attribute n\'est pas une URL valide.',
    'after'                => 'Le :attribute doit être une date supérieure à :date.',
    'after_or_equal'       => 'Le :attribute doit être une date supérieure ou égale à :date.',
    'alpha'                => 'Le :attribute ne doit contenir que des lettres.',
    'alpha_dash'           => 'Le :attribute ne doit contenir que des lettres, nombres et slash.',
    'alpha_num'            => 'Le :attribute ne doit contenir que des lettres et des nombres.',
    'array'                => 'Le :attribute doit être un tableau.',
    'before'               => 'Le :attribute doit être une date inférieure à :date.',
    'before_or_equal'      => 'Le :attribute doit être une date inférieure ou égale à :date.',
    'between'              => [
        'numeric' => 'Le :attribute doit être entre :min et :max.',
        'file'    => 'Le :attribute doit être entre :min et :max kilobytes.',
        'string'  => 'Le :attribute doit être entre :min et :max lettres.',
        'array'   => 'Le :attribute doit être entre :min et :max objets.',
    ],
    'boolean'              => 'Le :attribute doit être vrai ou faux.',
    'confirmed'            => 'Le :attribute de confirmation ne correspond pas.',
    'date'                 => 'Le :attribute n\'est pas une date valide.',
    'date_format'          => 'Le :attribute ne correspond pas au format :format.',
    'different'            => 'Le :attribute et :other doivent être différents.',
    'digits'               => 'Le :attribute doit être :digits digital.',
    'digits_between'       => 'Le :attribute doit être entre :min et :max chiffres.',
    'dimensions'           => 'Le :attribute a des dimensions d\'image invalides.',
    'distinct'             => 'Le :attribute de champ est en double.',
    'email'                => 'Le :attribute doit être une adresse email valide.',
    'exists'               => 'Le :attribute sélectionné est invalide.',
    'file'                 => 'Le :attribute doit être un fichier.',
    'filled'               => 'Le :attribute doit avoir une valeur.',
    'image'                => 'Le :attribute doit être une image.',
    'in'                   => 'Le :attribute sélectionné est invalide.',
    'in_array'             => 'Le :attribute champ n\'existe pas dans :oLer.',
    'integer'              => 'Le :attribute doit être un entier.',
    'ip'                   => 'Le :attribute doit être une adresse IP valide.',
    'json'                 => 'Le :attribute doit être une chaîne de caractères JSON valides.',
    'max'                  => [
        'numeric' => 'Le :attribute ne doit pas plus grand que :max.',
        'file'    => 'Le :attribute ne doit pas plus grand que :max kilobytes.',
        'string'  => 'Le :attribute ne doit pas plus grand que :max lettres.',
        'array'   => 'Le :attribute ne doit pas plus grand que :max objets.',
    ],
    'mimes'                => 'Le :attribute doit être un fichier de type: :values.',
    'mimetypes'            => 'Le :attribute doit être un fichier de type: :values.',
    'min'                  => [
        'numeric' => 'Le :attribute doit contenir au minimum :min.',
        'file'    => 'Le :attribute doit contenir au minimum :min kilobytes.',
        'string'  => 'Le :attribute doit contenir au minimum :min lettres.',
        'array'   => 'Le :attribute doit contenir au minimum :min objets.',
    ],
    'not_in'               => 'Le :attribute sélectionné est invalide.',
    'numeric'              => 'Le :attribute doit être un nombre.',
    'present'              => 'Le :attribute champ doit être présent.',
    'regex'                => 'Le format de :attribute est invalide.',
    'required'             => 'Le champ :attribute est obligatoire.',
    'required_if'          => 'Le champ :attribute est obligatoire quand :oLer est :value.',
    'required_unless'      => 'Le champ :attribute est obligatoire à moins que :oLer soit dans :values.',
    'required_with'        => 'Le champ :attribute est obligatoire quand :values est présent.',
    'required_with_all'    => 'Le champ :attribute est obligatoire quand :values est présent.',
    'required_without'     => 'Le champ :attribute est obligatoire quand :values n\'est pas present.',
    'required_without_all' => 'Le champ :attribute est obligatoire quand aucune de ces valeurs :values n\'est presentes.',
    'same'                 => 'Le champ :attribute et :oLer doivent correspondre.',
    'size'                 => [
        'numeric' => 'Le :attribute doit être de :size.',
        'file'    => 'Le :attribute doit être de :size kilobytes.',
        'string'  => 'Le :attribute doit être de :size lettres.',
        'array'   => 'Le :attribute doit être de :size objets.',
    ],
    'string'               => 'Le :attribute doit être une chaine de caractères.',
    'timezone'             => 'Le :attribute doit être une zone valide.',
    'unique'               => 'Le :attribute est déjà pris.',
    'uploaded'             => 'Le :attribute a échoué pour êtte chargé.',
    'url'                  => 'Le format de :attribute est invalide.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'message personnalisé',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
