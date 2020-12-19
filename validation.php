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

    'accepted'        => ':attribute ir jābut pieņemtam.',
    'active_url'      => ':attribute nav derīga saite.',
    'after'           => ':attribute ir jābut datumam pēc :date.',
    'after_or_equal'  => ':attribute ir jābūt datumam pēc vai vienādam ar :date.',
    'alpha'           => ':attribute var saturēt tikai burtus.',
    'alpha_dash'      => ':attribute var saturēt tikai burtus, skaitļus, domuzīmes, un apakšvītras.',
    'alpha_num'       => ':attribute var saturēt tikai burtus un skaitļus.',
    'array'           => ':attribute ir jābut masīvam.',
    'before'          => ':attribute ir jābut datumam pirms :date.',
    'before_or_equal' => ':attribute datumam ir jābut pirms vai vienādam ar :date.',
    'between'         => [
        'numeric' => ':attribute ir jābut starp :min un :max.',
        'file'    => ':attribute ir jābut starp :min un :max kilobaitiem.',
        'string'  => ':attribute ir jābut starp :min un :max rakstzīmēm.',
        'array'   => ':attribute ir jābut starp :min un :max lietām.',
    ],
    'boolean'        => ':attribute ir jābut patiesam vai nepatiesam.',
    'confirmed'      => ':attribute apstiprināšana nesakrīt.',
    'date'           => ':attribute nav derīgs datums.',
    'date_equals'    => ':attribute datumam ir jābut vienādam ar :date.',
    'date_format'    => ':attribute nesakrīt ar formātu :format.',
    'different'      => ':attribute un :other ir jābūt atšķirīgiem.',
    'digits'         => ':attribute ir jābūt :digits cipariem.',
    'digits_between' => ':attribute ir jābut starp :min un :max cipariem.',
    'dimensions'     => ':attribute ir nederīgi attēla izmēri.',
    'distinct'       => ':attribute ir dublikāta vērtība.',
    'email'          => ':attribute ir jābūt derīgai e-pasta adresei.',
    'ends_with'      => ':attribute ir jābeidzas ar vienu no sekojošiem: :values.',
    'exists'         => ':attribute nav derīgs.',
    'file'           => ':attribute ir jābut failam.',
    'filled'         => ':attribute laukam ir jābūt vērtībai.',
    'gt'             => [
        'numeric' => ':attribute ir jābūt lielākam par :value.',
        'file'    => ':attribute ir jābūt lielākam par :value kilobaitiem.',
        'string'  => ':attribute ir jābūt lielākam par :value rakstzīmēm.',
        'array'   => ':attribute ir jābūt lielākam par :value lietām.',
    ],
    'gte' => [
        'numeric' => ':attribute ir jābut lielākam vai vienādam ar :value.',
        'file'    => ':attribute ir jābut lielākam vai vienādam ar :value kilobaitiem.',
        'string'  => ':attribute ir jābut lielākam vai vienādam ar :value rakstzīmēm.',
        'array'   => ':attribute ir jābut :value lietām vai vairāk.',
    ],
    'image'    => ':attribute ir jābut bildei.',
    'in'       => 'atlasīts :attribute ir nederīgs.',
    'in_array' => ':attribute laukums neeksistē iekšā :other.',
    'integer'  => ':attribute ir jābūt veselam skaitlim.',
    'ip'       => ':attribute ir jābūt derīgai ip adresei.',
    'ipv4'     => ':attribute ir jābūt derīgai IPv4 adresei.',
    'ipv6'     => ':attribute ir jābūt derīgai IPv6 adresei.',
    'json'     => ':attribute ir jābūt derīgai JSON kopa.',
    'lt'       => [
        'numeric' => ':attribute ir jābūt mazākam par :value.',
        'file'    => ':attribute ir jābūt mazākam par :value kilobaitiem.',
        'string'  => ':attribute ir jābūt mazākam par  :value rakstzīmēm.',
        'array'   => ':attribute ir jābūt mazākam par  :value lietām.',
    ],
    'lte' => [
        'numeric' => ':attribute ir jābūt mazākam vai vienādam ar :value.',
        'file'    => ':attribute ir jābūt mazākam vai vienādam ar :value kilobaitiem.',
        'string'  => ':attribute ir jābūt mazākam vai vienādam ar :value rakstzīmēm.',
        'array'   => ':attribute ir jābūt ne vairāk par :value lietām.',
    ],
    'max' => [
        'numeric' => ':attribute nedrīkst būt lielāks par :max.',
        'file'    => ':attribute nedrīkst būt lielāks par :max kilobaitiem.',
        'string'  => ':attribute nedrīkst būt lielāks par :max rakstzīmēm.',
        'array'   => ':attribute nedrīkst būt lielāks par :max lietām.',
    ],
    'mimes'     => ':attribute ir jābūt šī datu tipa: :values.',
    'mimetypes' => ':attribute ir jābūt šī datu tipa: :values.',
    'min'       => [
        'numeric' => ':attribute ir jābūt vismaz :min.',
        'file'    => ':attribute ir jābūt vismaz :min kilobaitiem.',
        'string'  => ':attribute ir jābūt vismaz least :min rakstzīmēm.',
        'array'   => ':attribute ir jābūt vismaz :min lietām.',
    ],
    'multiple_of'          => ':attribute ir jābūt vairākiem no :value',
    'not_in'               => 'atlasīts :attribute ir nederīgs.',
    'not_regex'            => ':attribute formāts ir nederīgs.',
    'numeric'              => ':attribute ir jābūt skaitlim.',
    'password'             => 'parole nav pareiza.',
    'present'              => ':attribute laukumam ir jābūt klāt.',
    'regex'                => ':attribute formāts ir nederīgs.',
    'required'             => ':attribute lauks ir nepieciešams.',
    'required_if'          => ':attribute lauks ir nepieciešams kad :other ir :value.',
    'required_unless'      => ':attribute lauks ir nepieciešams ja vien :other ir iekšā :values.',
    'required_with'        => ':attribute lauks ir nepieciešams kad :values ir klāt.',
    'required_with_all'    => ':attribute lauks ir nepieciešams kad :values ir klāt.',
    'required_without'     => ':attribute lauks ir nepieciešams kad :values nav klāt.',
    'required_without_all' => ':attribute lauks ir nepieciešams kad neviens no :values nav klāt.',
    'same'                 => ':attribute un :other jāatbilst.',
    'size'                 => [
        'numeric' => ':attribute ir jābūt :size.',
        'file'    => ':attribute ir jābūt :size kilobaitiem.',
        'string'  => ':attribute ir jābūt :size rakstzīmēm.',
        'array'   => ':attribute ir jāsatur :size lietām',
    ],
    'starts_with' => ':attribute ir jāsākas ar vienu no sekojošām: :values.',
    'string'      => ':attribute ir jābūt kopai.',
    'timezone'    => ':attribute ir jābūt derīgam diapazonam.',
    'unique'      => ':attribute jau ir paņemts.',
    'uploaded'    => ':attribute neizdevās augšupielādēt.',
    'url'         => ':attribute formāts ir nederīgs.',
    'uuid'        => ':attribute ir jābūt derīgam UUID.',

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
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
