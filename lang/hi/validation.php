<?php

return [

    /*
    |--------------------------------------------------------------------------
    | सत्यापन भाषा रेखाएँ
    |--------------------------------------------------------------------------
    |
    | निम्नलिखित भाषा रेखाएँ वे डिफ़ॉल्ट त्रुटि संदेश हैं जो
    | सत्यापनकर्ता वर्ग द्वारा उपयोग किए जाते हैं। इन नियमों में से कुछ के
    | कई संस्करण होते हैं, जैसे आकार के नियम। यहाँ इन संदेशों को
    | अनुकूलित करने के लिए स्वतंत्र महसूस करें।
    |
    */

    'accepted' => ':attribute को स्वीकार किया जाना चाहिए।',
    'accepted_if' => ':attribute को तब स्वीकार किया जाना चाहिए जब :other :value हो।',
    'active_url' => ':attribute एक मान्य URL नहीं है।',
    'after' => ':attribute :date के बाद की तिथि होनी चाहिए।',
    'after_or_equal' => ':attribute :date के बाद या उसके बराबर की तिथि होनी चाहिए।',
    'alpha' => ':attribute में केवल अक्षर होने चाहिए।',
    'alpha_dash' => ':attribute में केवल अक्षर, संख्याएँ, डैश और अंडरस्कोर होने चाहिए।',
    'alpha_num' => ':attribute में केवल अक्षर और संख्याएँ होनी चाहिए।',
    'array' => ':attribute एक एरे होना चाहिए।',
    'ascii' => ':attribute में केवल सिंगल-बाइट अल्फ़ान्यूमेरिक वर्ण और प्रतीक होने चाहिए।',
    'before' => ':attribute :date से पहले की तिथि होनी चाहिए।',
    'before_or_equal' => ':attribute :date से पहले या उसके बराबर की तिथि होनी चाहिए।',
    'between' => [
        'array' => ':attribute में :min और :max आइटम्स के बीच होने चाहिए।',
        'file' => ':attribute :min और :max किलोबाइट्स के बीच होना चाहिए।',
        'numeric' => ':attribute :min और :max के बीच होना चाहिए।',
        'string' => ':attribute :min और :max अक्षरों के बीच होना चाहिए।',
    ],
    'boolean' => ':attribute फ़ील्ड सही या गलत होनी चाहिए।',
    'confirmed' => ':attribute पुष्टिकरण मेल नहीं खाता।',
    'current_password' => 'पासवर्ड गलत है।',
    'date' => ':attribute एक मान्य तिथि नहीं है।',
    'date_equals' => ':attribute :date के बराबर की तिथि होनी चाहिए।',
    'date_format' => ':attribute प्रारूप :format से मेल नहीं खाता।',
    'decimal' => ':attribute में :decimal दशमलव स्थान होने चाहिए।',
    'declined' => ':attribute को अस्वीकार किया जाना चाहिए।',
    'declined_if' => ':attribute को तब अस्वीकार किया जाना चाहिए जब :other :value हो।',
    'different' => ':attribute और :other अलग होने चाहिए।',
    'digits' => ':attribute :digits अंक का होना चाहिए।',
    'digits_between' => ':attribute :min और :max अंकों के बीच होना चाहिए।',
    'dimensions' => ':attribute का छवि आयाम अवैध है।',
    'distinct' => ':attribute फ़ील्ड में एक डुप्लिकेट मान है।',
    'doesnt_end_with' => ':attribute निम्नलिखित में से किसी एक के साथ समाप्त नहीं हो सकता है: :values।',
    'doesnt_start_with' => ':attribute निम्नलिखित में से किसी एक के साथ शुरू नहीं हो सकता है: :values।',
    'email' => ':attribute एक मान्य ईमेल पता होना चाहिए।',
    'ends_with' => ':attribute निम्नलिखित में से एक के साथ समाप्त होना चाहिए: :values।',
    'enum' => 'चयनित :attribute अवैध है।',
    'exists' => 'चयनित :attribute अवैध है।',
    'file' => ':attribute एक फ़ाइल होनी चाहिए।',
    'filled' => ':attribute फ़ील्ड में मान होना चाहिए।',
    'gt' => [
        'array' => ':attribute में :value से अधिक आइटम्स होने चाहिए।',
        'file' => ':attribute :value किलोबाइट्स से अधिक होना चाहिए।',
        'numeric' => ':attribute :value से अधिक होना चाहिए।',
        'string' => ':attribute :value अक्षरों से अधिक होना चाहिए।',
    ],
    'gte' => [
        'array' => ':attribute में :value आइटम्स या उससे अधिक होने चाहिए।',
        'file' => ':attribute :value किलोबाइट्स से अधिक या उसके बराबर होना चाहिए।',
        'numeric' => ':attribute :value से अधिक या उसके बराबर होना चाहिए।',
        'string' => ':attribute :value अक्षरों से अधिक या उसके बराबर होना चाहिए।',
    ],
    'image' => ':attribute एक छवि होनी चाहिए।',
    'in' => 'चयनित :attribute अवैध है।',
    'in_array' => ':attribute फ़ील्ड :other में मौजूद नहीं है।',
    'integer' => ':attribute एक पूर्णांक होना चाहिए।',
    'ip' => ':attribute एक मान्य IP पता होना चाहिए।',
    'ipv4' => ':attribute एक मान्य IPv4 पता होना चाहिए।',
    'ipv6' => ':attribute एक मान्य IPv6 पता होना चाहिए।',
    'json' => ':attribute एक मान्य JSON स्ट्रिंग होनी चाहिए।',
    'lowercase' => ':attribute लोअरकेस होना चाहिए।',
    'lt' => [
        'array' => ':attribute में :value से कम आइटम्स होने चाहिए।',
        'file' => ':attribute :value किलोबाइट्स से कम होना चाहिए।',
        'numeric' => ':attribute :value से कम होना चाहिए।',
        'string' => ':attribute :value अक्षरों से कम होना चाहिए।',
    ],
    'lte' => [
        'array' => ':attribute में :value से अधिक आइटम्स नहीं होने चाहिए।',
        'file' => ':attribute :value किलोबाइट्स से कम या उसके बराबर होना चाहिए।',
        'numeric' => ':attribute :value से कम या उसके बराबर होना चाहिए।',
        'string' => ':attribute :value अक्षरों से कम या उसके बराबर होना चाहिए।',
    ],
    'mac_address' => ':attribute एक मान्य MAC पता होना चाहिए।',
    'max' => [
        'array' => ':attribute में :max से अधिक आइटम्स नहीं होने चाहिए।',
        'file' => ':attribute :max किलोबाइट्स से अधिक नहीं हो सकता है।',
        'numeric' => ':attribute :max से अधिक नहीं हो सकता है।',
        'string' => ':attribute :max अक्षरों से अधिक नहीं हो सकता है।',
    ],
    'max_digits' => ':attribute में :max से अधिक अंक नहीं हो सकते।',
    'mimes' => ':attribute एक प्रकार की फ़ाइल होनी चाहिए: :values।',
    'mimetypes' => ':attribute एक प्रकार की फ़ाइल होनी चाहिए: :values।',
    'min' => [
        'array' => ':attribute में कम से कम :min आइटम्स होने चाहिए।',
        'file' => ':attribute कम से कम :min किलोबाइट्स का होना चाहिए।',
        'numeric' => ':attribute कम से कम :min होना चाहिए।',
        'string' => ':attribute कम से कम :min अक्षरों का होना चाहिए।',
    ],
    'min_digits' => ':attribute में कम से कम :min अंक होने चाहिए।',
    'missing' => ':attribute फ़ील्ड गायब होना चाहिए।',
    'missing_if' => ':attribute फ़ील्ड तब गायब होना चाहिए जब :other :value हो।',
    'missing_unless' => ':attribute फ़ील्ड तब गायब होना चाहिए जब :other :value में न हो।',
    'missing_with' => ':attribute फ़ील्ड तब गायब होना चाहिए जब :values मौजूद हो।',
    'missing_with_all' => ':attribute फ़ील्ड तब गायब होना चाहिए जब :values मौजूद हों।',
    'multiple_of' => ':attribute :value का गुणांक होना चाहिए।',
    'not_in' => 'चयनित :attribute अवैध है।',
    'not_regex' => ':attribute प्रारूप अवैध है।',
    'numeric' => ':attribute एक संख्या होनी चाहिए।',
    'password' => [
        'letters' => ':attribute में कम से कम एक अक्षर होना चाहिए।',
        'mixed' => ':attribute में कम से कम एक अपरकेस और एक लोअरकेस अक्षर होना चाहिए।',
        'numbers' => ':attribute में कम से कम एक संख्या होनी चाहिए।',
        'symbols' => ':attribute में कम से कम एक प्रतीक होना चाहिए।',
        'uncompromised' => 'दिया गया :attribute डेटा लीक में पाया गया है। कृपया एक अलग :attribute चुनें।',
    ],
    'present' => ':attribute फ़ील्ड उपस्थित होना चाहिए।',
    'prohibited' => ':attribute फ़ील्ड प्रतिबंधित है।',
    'prohibited_if' => ':attribute फ़ील्ड तब प्रतिबंधित होता है जब :other :value हो।',
    'prohibited_unless' => ':attribute फ़ील्ड तब प्रतिबंधित होता है जब :other :values में न हो।',
    'prohibits' => ':attribute फ़ील्ड :other को उपस्थित होने से रोकता है।',
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
