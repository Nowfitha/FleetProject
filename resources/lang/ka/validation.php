<?php

return array(

    'accepted' => ':attribute დაადასტურეთ',
    'active_url' => ':attribute URL არასწორია',
    'after' => ':attribute უნდა იყოს თარიღი, :date - ის შემდეგ .',
    'alpha' => ':attribute შეიძლება შეიცავდეს მხოლოდ ასოებს.',
    'alpha_dash' => ':attribute შეიძლება შეიცავდეს მხოლოდ წერილებს, ნომრებს და დაძაბულობას.',
    'alpha_num' => ':attribute შეიძლება შეიცავდეს მხოლოდ ასოებსა და ნომრებს.',
    'array' => ':attribute უნდა იყოს მასივი.',
    'before' => ':attribute უნდა იყოს თარიღი :date .',
    'between'  => array(
        'numeric' => ':attribute უნდა იყოს შორის :min და :max .',
        'file' => ':attribute უნდა იყოს შორის :min და :max kilobytes.',
        'string' => ':attribute უნდა იყოს შორის :min და :max სიმბოლოები.',
        'array' => ':attribute უნდა ჰქონდეს :min და :max .',
    ),
    'confirmed' => ':attribute დადასტურება არ ემთხვევა.',
    'date' => ':attribute არ არის სწორი თარიღი.',
    'date_format' => ':attribute არ შეესაბამება ფორმატს :format .',
    'different' => ':attribute და :other უნდა იყოს განსხვავებული.',
    'digits' => ':attribute უნდა იყოს :digits ციფრი.',
    'digits_between' => ':attribute უნდა იყოს შორის :min და :max .',
    'email' => ':attribute უნდა იყოს სწორი ელ.ფოსტის მისამართი.',
    'exists' => 'შერჩეული :attribute არასწორია.',
    'image' => ':attribute უნდა იყოს გამოსახულება.',
    'in' => 'შერჩეული :attribute არასწორია.',
    'integer' => ':attribute უნდა იყოს მთელი რიცხვი.',
    'ip' => ':attribute უნდა იყოს სწორი IP მისამართი.',
    'max'  => array(
        'numeric' => ':attribute შეიძლება იყოს უფრო მეტი, ვიდრე :max .',
        'file' => ':attribute შეიძლება იყოს უფრო მეტი ვიდრე :max kilobytes.',
        'string' => ':attribute შეიძლება იყოს უფრო მეტი, ვიდრე :max სიმბოლო.',
        'array' => ':attribute შეიძლება არ ჰქონდეს მეტი :max ელემენტი.',
    ),
    'mimes' => ':attribute უნდა იყოს ტიპის ტიპი :values .',
    'min'  => array(
        'numeric' => ':attribute უნდა იყოს მინიმუმ :min .',
        'file' => ':attribute უნდა იყოს მინიმუმ :min kilobytes.',
        'string' => ':attribute უნდა იყოს მინიმუმ :min სიმბოლოები.',
        'array' => ':attribute უნდა ჰქონდეს მინიმუმ :min ელემენტები.',
    ),
    'not_in' => 'შერჩეული :attribute არასწორია.',
    'numeric' => ':attribute უნდა იყოს რიცხვი.',
    'regex' => ':attribute ფორმატი არასწორია.',
    'required' => ':attribute ველი აუცილებელია.',
    'required_if' => ':attribute ველი აუცილებელია.',
    'required_with' => ':attribute ველი საჭიროა, როდესაც :values იმყოფება.',
    'required_with_all' => ':attribute ველი საჭიროა, როდესაც :values იმყოფება.',
    'required_without' => ':attribute ველი საჭიროა, როდესაც :values არ არის წარმოდგენილი.',
    'required_without_all' => ':attribute ველი საჭიროა, როდესაც არც ერთი :values არის.',
    'same' => ':attribute და :other უნდა ემთხვეოდეს.',
    'size'  => array(
        'numeric' => ':attribute უნდა იყოს :size .',
        'file' => ':attribute უნდა იყოს :size kilobytes.',
        'string' => ':attribute უნდა იყოს :size სიმბოლოები.',
        'array' => ':attribute უნდა შეიცავდეს :size ნივთებს.',
    ),
    'unique' => ':attribute უკვე მიღებულია.',
    'url' => ':attribute ფორმატი არასწორია.',
    'array_max' => ':attribute მაქსიმალური ელემენტი :max .',
    'lesser_than' => ':attribute უნდა იყოს ნაკლები, ვიდრე :other',
    'custom'  => array(
        'attribute-name'  => array(
            'rule-name' => 'საბაჟო შეტყობინება',
        ),
        'frontpage_logo'  => array(
            'dimensions' => 'წინა გვერდის ლოგოზე მაქსიმალური სიმაღლეა 60 პიქსელი.',
        ),
        'favicon'  => array(
            'dimensions' => 'Favicon უნდა იყოს 16 პიქსელი 16 პიქსელით.',
        ),
    ),
    'attributes'  => array(
        'email' => 'ელ.ფოსტა',
        'password' => 'პაროლი',
        'password_confirmation' => 'პაროლის დადასტურება',
        'remember_me' => 'დამახსოვრება',
        'name' => 'სახელი',
        'imei' => 'IMEI',
        'imei_device' => 'IMEI / იდენტიფიკატორი',
        'fuel_measurement_type' => 'საწვავის გაზომვა',
        'fuel_cost' => 'საწვავის ღირებულება',
        'icon_id' => 'მოწყობილობის სიმბოლო',
        'active' => 'აქტიური',
        'polygon_color' => 'ფერი',
        'devices' => 'ობიექტები',
        'geofences' => 'ტერიტორიები',
        'overspeed' => 'სიჩქარის გადაჭარბება',
        'fuel_consumption' => 'საწვავის მოხმარება',
        'description' => 'აღწერა',
        'map_icon_id' => 'მარკეტის სიმბოლო',
        'coordinates' => 'რუკის წერტილი',
        'date_from' => 'თარიღიდან',
        'date_to' => 'თარიღამდე',
        'code' => 'კოდი',
        'title' => 'სათაური',
        'note' => 'შინაარსი',
        'path' => 'ფაილი',
        'period_name' => 'პერიოდის სახელი',
        'days' => 'დღეები',
        'devices_limit' => 'ობიექტების ლიმიტი',
        'trial' => 'საცდელი',
        'price' => 'ფასი',
        'message' => 'შეტყობინება',
        'tag' => 'პარამეტრი',
        'timezone_id' => 'დროის სარტყელი',
        'unit_of_distance' => 'მანძილის ერთეული',
        'unit_of_capacity' => 'მოცულობის ერთეული',
        'user' => 'მომხმარებელი',
        'group_id' => 'ჯგუფი',
        'permission_to_add_devices' => 'მოწყობილობების დამატება ერთი',
        'unit_of_altitude' => 'სიმაღლის ერთეული',
        'sms_gateway_url' => 'SMS სერვერის URL ',
        'mobile_phone' => 'მობილური ტელეფონი',
        'permission_to_use_sms_gateway' => 'SMS სერვერი',
        'loged_at' => 'ბოლო შესვლა',
        'manager_id' => 'მენეჯერი',
        'sim_number' => 'SIM ნომერი',
        'device_model' => 'მოწყობილობა მოდელი',
        'rfid' => 'RFID',
        'phone' => 'ტელეფონი',
        'device_id' => 'ობიექტი',
        'tag_value' => 'პარამეტრის მნიშვნელობა',
        'device_port' => 'მოწყობილობის პორტი',
        'event' => 'შემთხვევა',
        'port' => 'პორტი',
        'device_protocol' => 'მოწყობილობის პროტოკოლი',
        'protocol' => 'პროტოკოლი',
        'sensor_name' => 'სენსორის სახელი',
        'sensor_type' => 'სენსორი',
        'sensor_template' => 'სენსორის შაბლონი',
        'tag_name' => 'პარამეტრის სახელი',
        'min_value' => 'მინ. ღირებულება',
        'max_value' => 'მაქს. ღირებულება',
        'on_value' => 'ჩართვის მნიშვნელობა',
        'off_value' => 'გათიშვის მნიშვნელობა',
        'shown_value_by' => 'მნისვნელობის ჩვენება:',
        'full_tank_value' => 'პარამეტრის მნიშვნელობა',
        'formula' => 'ფორმულა',
        'parameters' => 'პარამეტრები',
        'full_tank' => 'სავსე ავზი ლიტრი/გალონი',
        'fuel_tank_name' => 'საწვავის ავზის სახელი',
        'odometer_value' => 'მნიშვნელობა',
        'odometer_value_by' => 'ოდომეტრი',
        'unit_of_measurement' => 'საზომი ერთეული',
        'plate_number' => 'ავტომობილის ნომერი',
        'vin' => 'VIN კოდი',
        'registration_number' => 'რეგისტრაცია / აქტივის ნომერი',
        'object_owner' => 'ობიექტის მფლობელი / მენეჯერი',
        'additional_notes' => 'დამატებითი ჩანაწერები',
        'expiration_date' => 'ვადის გასვლის თარიღი',
        'days_to_remind' => 'დღეების რაოდენობა ვადის გასვლის შეხსენებისთვის',
        'type' => 'ფორმატი',
        'format' => 'ფორმატი',
        'show_addresses' => 'მისამართების ჩვენება',
        'stops' => 'გაჩერებები',
        'speed_limit' => 'სიჩქარის შეზღუდვა',
        'zones_instead' => 'მისამართების ნაცვლად ზონები',
        'daily' => 'ყოველდღიური',
        'weekly' => 'ყოველკვირეული',
        'send_to_email' => 'e-mail-ზე გაგზავნა',
        'filter' => 'ფილტრი',
        'status' => 'სტატუსი',
        'date' => 'თარიღი',
        'geofence_name' => 'ტერიტორიის სახელი',
        'tail_color' => 'კუდის ფერი',
        'tail_length' => 'კუდის სიგრძე',
        'engine_hours' => 'მოტოსაათი',
        'detect_engine' => 'სტარტერის განსაზღვრა ON/OFF',
        'min_moving_speed' => 'მინ. მოძრაობის სიჩქარე კმ / სთ',
        'min_fuel_fillings' => 'მინ. საწვავის სხვაობა საწვავის შევსების დადგენის მიზნით',
        'min_fuel_thefts' => 'მინ. საწვავის სხვაობა საწვავის მოპარვის შესამოწმებლად',
        'expiration_by' => 'ვადის ამოწურვა',
        'interval' => 'ინტერვალი',
        'last_service' => 'ბოლო მომსახურება',
        'trigger_event_left' => 'ტრიგერის ჩართვა, როდესაც დატოვებს',
        'current_odometer' => 'მიმდინარე ოდომეტრის ჩვენება',
        'current_engine_hours' => 'მოტოსაათი',
        'renew_after_expiration' => 'განახლება გათიშვის შემდეგ',
        'sms_template_id' => 'SMS შაბლონი',
        'frequency' => 'სიხშირე',
        'unit' => 'ერთეული',
        'noreply_email' => 'მეილი პასუხის გაცემის გარეშე',
        'signature' => 'ხელმოწერა',
        'use_smtp_server' => 'SMTP სერვერის გამოყენება',
        'smtp_server_host' => 'SMTP სერვერის ჰოსტი',
        'smtp_server_port' => 'SMTP სერვერის პორტი',
        'smtp_security' => 'SMTP უსაფრთხოება',
        'smtp_username' => 'SMTP მომხმარებლის სახელი',
        'smtp_password' => 'SMTP პაროლი',
        'from_name' => 'სახელიდან',
        'icons' => 'სიმბოლოები',
        'server_name' => 'სერვერის სახელი',
        'available_maps' => 'ხელმისაწვდომი რუკები',
        'default_language' => 'ძირითადი ენა',
        'default_timezone' => 'ნაგულისხმები დროის სარტყელი',
        'default_unit_of_distance' => 'დაშორების ნაგულისხმევ ერთეული',
        'default_unit_of_capacity' => 'სიმძლავრის ნაგულისხმები მოცულობა',
        'default_unit_of_altitude' => 'სიმაღლის ნაგულისხმები ერთეული',
        'default_date_format' => 'ნაგულისხმები თარიღის ფორმატი',
        'default_time_format' => ' ნაგულისხმები დროის ფორმატი',
        'default_map' => 'ძირითადი რუკა',
        'default_object_online_timeout' => 'ნაგულისხმები ობიექტის ონლაინ შეყოვნება',
        'logo' => 'ლოგო',
        'login_page_logo' => 'შესვლის გვერდის ლოგო',
        'frontpage_logo' => 'მთავარი გვერდის ლოგო',
        'favicon' => 'სიმბოლო',
        'allow_users_registration' => 'თანხმობა მომხმარებლების რეგისტრაციაზე',
        'default_maps' => 'ნაგულისხმევი რუკები',
        'subscription_expiration_after_days' => 'გამოწერის ვადის გასვლის შემდეგ',
        'gprs_template_id' => 'GPRS შაბლონი',
        'calibrations' => 'კალიბრაციები',
        'ftp_server' => 'FTP სერვერი',
        'ftp_port' => 'FTP პორტი',
        'ftp_username' => 'FTP მომხმარებლის სახელი',
        'ftp_password' => 'FTP პაროლი',
        'ftp_path' => 'FTP path',
        'period' => 'პერიოდი',
        'hour' => 'საათი',
        'color' => 'ფერი',
        'polyline' => 'მარშრუტი',
        'request_method' => 'მოთხოვნის მეთოდი',
        'authentication' => 'იდენთიფიკაცია',
        'username' => 'სახელი',
        'encoding' => 'კოდირება',
        'time_adjustment' => 'დროის კორექტირება',
        'parameter' => 'პარამეტრი',
        'export_type' => 'ექსპორტის ფორმატი',
        'groups' => 'ჯგუფები',
        'file' => 'ფაილი',
        'extra' => 'დამატებითი',
        'parameter_value' => 'პარამეტრის მნიშვნელობა',
        'enable_plans' => 'გეგმების ჩართვა',
        'payment_type' => 'გადახდის ფორმატი',
        'paypal_client_id' => 'Paypal მომხმარებლის ID',
        'paypal_secret' => 'Paypal საიდუმლო',
        'paypal_currency' => 'Paypal ვალუტა',
        'paypal_payment_name' => 'Paypal გადახდის სახელი',
        'objects' => 'ობიექტები',
        'duration_value' => 'ხანგრძლივობა',
        'permissions' => 'ნებართვები',
        'plan' => 'გეგმა',
        'default_billing_plan' => 'ნაგულისხმევი საგადასახადო გეგმა',
        'sensor_group_id' => 'სენსორის ჯგუფი',
        'daylight_saving_time' => 'ზაფხულის დრო',
        'phone_number' => 'ტელეფონის ნომერი',
        'action' => 'მოქმედება',
        'time' => 'დრო',
        'order' => 'დაალაგე',
        'geocoder_api' => 'Geocoder API',
        'geocoder_cache' => 'Geocoder cache',
        'geocoder_cache_days' => 'Geocoder cache days',
        'geocoder_cache_delete' => 'გეოკოდერის ქეშის წაშლა',
        'api_key' => 'API გასაღები',
        'api_url' => 'API url',
        'map_center_latitude' => 'რუკა ცენტრი გრძედი',
        'map_center_longitude' => 'რუკის ცენტრი განედი',
        'map_zoom_level' => 'რუკის მასშტაბის დონე',
        'dst_type' => 'ფორმატი',
        'provider' => 'პროვაიდერი',
        'week_start_day' => 'სალენდარული კვირის დაწყვების დღე:',
        'ip' => 'IP',
        'gprs_templates_only' => 'აჩვენე მხოლოდ GPRS შაბლონის ბრძანებები',
        'select_all_objects' => 'აირჩიეთ ყველა ობიექტი',
        'icon_type' => 'სიმბოლოს ტიპი',
        'on_setflag_1' => 'დაწყების ხასიათი',
        'on_setflag_2' => 'სიმბოლოების რაოდენობა',
        'on_setflag_3' => 'პარამეტრის მნიშვნელობა',
        'domain' => 'დომენი',
        'auth_id' => 'Auth ID',
        'auth_token' => 'Auth token',
        'senders_phone' => 'გამგზავნის ტელეფონის ნომერი',
        'database_clear_status' => 'ავტომატური ისტორიის გასუფთავება',
        'database_clear_days' => 'რამდენი დღე შეინარჩუნოს',
        'ignition_detection' => 'დაქოქვის დადგენა :',
        'here_map_id' => 'HERE.com app ID',
        'here_map_code' => 'HERE.com აპლიკაციის კოდი',
        'login_page_panel_background_color' => 'Login page panel background color',
        'login_page_panel_transparency' => 'Login page panel transparency',
        'visible' => 'ხილული',
        'template_color' => 'შაბლონის ფერი',
        'background' => 'ფონის',
        'login_page_text_color' => 'შესვლა გვერდზე ტექსტი ფერი',
        'login_page_background_color' => 'შესვლის გვერდი ფონის ფერი',
        'welcome_text' => 'მოგესალმებით ტექსტი',
        'bottom_text' => 'ქვედა ტექსტი',
        'apple_store_link' => 'App store ლინკი',
        'google_play_link' => 'Google Play ბმული',
        'position' => 'პოზიცია',
        'stop_duration_longer_than' => 'პარკირების ხანგრძლივობა',
        'mapbox_access_token' => 'MapBox წვდომის ნიშნად',
        'flag' => 'დროშა',
        'shift_start' => 'დაიწყე დაწყება',
        'shift_finish' => 'Shift დასრულება',
        'shift_start_tolerance' => 'გადაიტანეთ ტოლერანტობა',
        'shift_finish_tolerance' => 'გადაიტანეთ ტოლერანტობა',
        'excessive_exit' => 'გადაჭარბებული გასასვლელი',
        'smtp_authentication' => 'SMTP ავთენტიფიკაცია',
        'skip_calibration' => 'კალიბრაციის დიაპაზონის გამოთვლის გამორიცხვა',
        'bing_maps_key' => 'Bing რუკების გასაღები',
        'stripe_public_key' => 'საზოგადოების საჯარო გასაღები',
        'stripe_secret_key' => 'STRIPE საიდუმლო გასაღები',
        'stripe_currency' => 'გაცვლითი ვალუტა',
        'priority' => 'პრიორიტეტი',
        'pickup_address' => 'პიკაპის მისამართი',
        'delivery_address' => 'მიტანის მისამართი',
        'schedule' => 'განრიგი',
        'sound_notification' => 'ხმოვანი შეტყობინება',
        'push_notification' => 'App Push შეტყობინება',
        'email_notification' => 'დარღვევის/შეტყობინების e-mail-ზე გამოწერა',
        'sms_notification' => 'SMS შეტყობინება',
        'webhook_notification' => 'Webhook შეტყობინება',
        'offline_duration_longer_than' => 'ხაზგარეშე ხანგრძლივობა მეტია',
        'sms_gateway_headers' => 'გამავალი შეტყობინების სათაური',
        'forward' => 'გადამისამართება',
        'by_status' => 'სტატუსის მიხედვით',
        'icon_status_online' => 'ონლაინ სტატუსის ხატულა',
        'icon_status_offline' => 'ოფლაინ სტატუსის ხატი',
        'icon_status_ack' => 'Ack სტატუსი ხატი',
        'icon_status_engine' => 'სტარტერის იკონკა',
        'server_description' => 'სერვერის აღწერა',
        'bypass_invalid' => 'არასწორი კოორდინატების დაშვება',
        'installation_date' => 'ინსტალაციის თარიღი',
        'sim_activation_date' => 'SIM გააქტიურების თარიღი',
        'sim_expiration_date' => 'SIM ვადის გასვლის თარიღი',
        'activation_date' => 'გააქტიურების თარიღი',
        'secret_key' => 'საიდუმლო გასაღები',
        'currency' => 'ვალუტა',
        'client_id' => 'კლიენტის ID',
        'secret' => 'საიდუმლო',
        'payment_name' => 'გადახდის სახელი',
        'merchant_id' => 'სავაჭრო ID',
        'public_key' => 'საჯარო გასაღები',
        'private_key' => 'პირადი გასაღები',
        'braintree_plan_ids' => 'Braintree გეგმის IDs სერვერის გეგმები',
        'braintree_plan_explanation' => 'Braintree- ის პანელზე უნდა შეიქმნას რეკულტურული ბილინგის გეგმა, შეარჩიეთ ID- ის შესაბამისი ბილინგის გეგმა თქვენს სერვერზე.',
        'braintree_merchant_explanation' => 'თქვენ უნდა შეიქმნას სავაჭრო ანგარიში Braintree პანელი და შეიყვანეთ ID აქ.',
        'braintree_currency_match' => 'სავაჭრო ანგარიშის ვალუტა უნდა შეესაბამებოდეს გეგმის ვალდებულებას',
        'merchant_account_id' => 'სავაჭრო ანგარიში ID',
        'master_key' => 'სამაგისტრო გასაღები',
        'token' => 'Ნიშანი',
        'paydunya_currency_warning' => 'ერთადერთი ვალუტაა FCFA. თუ დააკონფიგურირეთ, გთხოვთ, დარწმუნდეთ იმაში, რომ თქვენი სხვა გადახდები შეესაბამება იმავე ვალუტას. სხვაგვარად მომხმარებლებს შეეძლება შეიძინონ იგივე გეგმა სხვადასხვა ფასებით.',
        'country' => 'ქვეყანა',
        'merchant_account' => 'სავაჭრო ანგარიში',
        'origin_key' => 'წარმოშობის გასაღები',
        'test_config' => 'ტესტი კონფიგურაცია',
        'environment' => 'გარემო',
        'three_letter_iso' => 'სამი ასო ISO ვალუტა კოდი',
        'google_maps_key' => 'Google რუკები API გასაღები',
        'maptiler_key' => 'MapTiler გასაღები',
        'streetview_api' => 'Streetview API',
        'streetview_key' => 'Streetview API გასაღები',
        'openmaptiles_url' => 'OpenMapTiles Url',
        'unit_cost' => 'Ერთეულის ფასი',
        'supplier' => 'Მიმწოდებელი',
        'buyer' => 'მყიდველი',
        'expense_type' => 'ხარჯების ტიპი',
        'device_cameras_days' => 'მოწყობილობის კამერის სურათების შენახვის დღეები',
        'api_app_id' => 'აპის ID',
        'api_app_code' => 'აპის კოდი',
        'api_app_secret' => 'აპლიკაციის საიდუმლო',
        'invoice_number' => 'Ინვოისის ნომერი',
        'one_time_payment' => 'ერთჯერადი გადახდა',
        'sharing_id' => 'გაზიარება',
        'idle_duration_longer_than' => 'უსაქმურობის ხანგრძლივობა უფრო მეტია, ვიდრე',
        'delete_after_expiration' => 'ამოწურვის შემდეგ წაშლა',
        'sharing_email' => 'ელ.ფოსტის შეტყობინება გაზიარების ბმულით',
        'sharing_sms' => 'SMS შეტყობინებას გაზიარების ბმულზე',
        'sms' => 'ესემესი',
        'template' => 'შაბლონი',
        'commands' => 'ბრძანებები',
        'brand' => 'მოწყობილობის მწარმოებელი',
        'model' => 'მოდელი',
        'apn_name' => 'APN სახელი',
        'apn_username' => 'APN მომხმარებლის სახელი',
        'apn_password' => 'APN პაროლი',
        'ignition_duration_longer_than' => 'ანთების ხანგრძლივობა უფრო მეტია, ვიდრე',
        'tasks' => 'Დავალებები',
        'id' => 'პირადობის მოწმობა',
        'columns' => 'Სვეტები',
        'called_at' => 'დარეკეთ',
        'alert_type' => 'განგაშის ტიპი',
        'response' => 'პასუხი',
        'remarks' => 'შენიშვნები',
        'client' => 'კლიენტი',
        'event_type' => 'ღონისძიების ტიპი',
        'data_type' => 'Მონაცემთა ტიპი',
        'slug' => 'გლუვი',
        'required' => 'საჭირო',
        'validation' => 'დამოწმება',
        'text' => 'ტექსტი',
        'datetime' => 'Datetime',
        'boolean' => 'ბულიონი',
        'select' => 'შეარჩიეთ',
        'multiselect' => 'მულტივარდი',
        'options' => 'Პარამეტრები',
        'option' => 'ვარიანტი',
        'default' => 'ნაგულისხმევი',
        'msisdn' => 'MSISDN',
        'notes' => 'შენიშვნები',
        'skip_empty' => 'ცარიელი მნიშვნელობის გამოტოვება',
        'distance_limit' => 'მანძილის ზღვარი',
        'distance_tolerance' => 'დისტანციური ტოლერანტობა',
        'pois' => 'POI',
        'device_type_id' => 'მოწყობილობის ტიპი',
        'custom_fields' => 'მორგებული ველები',
        'device_name' => 'მოწყობილობის სახელი',
        'auto_hide_notification' => 'ფანჯრის ავტომატურად დამალვა',
        'continuous_duration' => 'უწყვეტი ხანგრძლივობა',
        'captcha_provider' => 'CAPTCHA პროვაიდერი',
        'google_recaptcha' => 'Google reCAPTCHA',
        'recaptcha_site_key' => 'ReCAPTCHA საიტის გასაღები',
        'recaptcha_secret_key' => 'ReCAPTCHA საიდუმლო გასაღები',
        'g-recaptcha-response' => 'ReCAPTCHA',
        'here_api_key' => 'HERE.com API გასაღები',
        'time_duration' => 'დროის ხანგრძლივობა',
        'offset' => 'კომპენსაცია',
        'geofence_device' => 'მოწყობილობა',
        'webhook_key' => 'ვებჰუკის გასაღები',
        'skip_blank_results' => 'გამოტოვეთ ცარიელი შედეგები',
        'account_sid' => 'ანგარიშის SID',
        'speed_limit_tolerance' => 'სიჩქარის შეზღუდვის ტოლერანტობა',
        'started_at' => 'დაწყების დრო',
        'ended_at' => 'Დროის დასასრული',
        'region' => 'რეგიონი',
        'adapted' => 'ადაპტირებული',
        'silent_notification' => 'შეტყობინებების იგნორირება, თუ რამდენიმე წუთში განმეორდება',
        'tomtom_key' => 'TomTom გასაღები',
        'authorized' => 'ავტორიზებული',
        'email_verification' => 'Ელ. ფოსტით ვერიფიკაცია',
        'project_id' => 'პროექტის ID',
        'project_psw' => 'პროექტის პაროლი',
        'verify_id' => 'დაადასტურეთ ID',
        'app_tracker_login' => 'ტრეკერის აპლიკაციის შესვლა ჩართულია',
        'merchant_code' => 'სავაჭრო კოდი',
        'count' => 'დათვალეთ',
        'detect_distance' => 'დისტანციის ამოცნობა მიერ',
        'detect_speed' => 'სიჩქარის გამოვლენა მიერ',
        'routes' => 'მარშრუტები',
        'battery_threshold' => 'ბატარეის ბარიერი',
        'state' => 'სახელმწიფო',
        'duration' => 'ხანგრძლივობა',
        'statuses' => 'სტატუსები',
        'first_name' => 'Სახელი',
        'last_name' => 'Გვარი',
        'personal_code' => 'პირადი კოდი',
        'birth_date' => 'Დაბადების თარიღი',
        'company_id' => 'კომპანია',
        'registration_code' => 'Სარეგისტრაციო კოდი',
        'vat_number' => 'დღგ ნომერი',
        'address' => 'მისამართი',
        'comment' => 'კომენტარი',
        'duration_format' => 'ხანგრძლივობის ფორმატი',
        'default_duration_format' => 'ხანგრძლივობის ნაგულისხმევი ფორმატი',
        'login_token' => 'Ნიშანი',
        'monthly' => 'ყოველთვიური',
        'amount' => 'თანხა',
        'bad_sms_gateway_url' => 'არასწორი SMS კარიბჭის url ან კონფიგურაცია',
        'rates' => 'განაკვეთები',
        'fields' => 'ველები',
        'tenant_id' => 'მოიჯარე პირადობის მოწმობა',
        'client_secret' => 'კლიენტის საიდუმლო',
        'default_login_methods' => 'შესვლის ნაგულისხმევი მეთოდები',
        'forwards' => 'ფორვარდები',
        'detection_speed' => 'გამოვლენის სიჩქარე',
        'detach_on_no_position_data' => 'გამორთეთ პოზიციის მონაცემების გარეშე',
        'extra_expiration_time' => 'დამატებითი ვადის გასვლის დრო',
        'fuel_detect_sec_after_stop' => 'გამოავლინეთ საწვავის ცვლილება გაჩერების შემდეგ',
        'login_periods' => 'შესვლის პერიოდები',
        'readonly' => 'Წაიკითხეთ მხოლოდ',
        'popup_notification' => 'ამომხტარი შეტყობინება',
        'allow_user_change_plan' => 'მომხმარებლის შეცვლის გეგმის დაშვება',
        'only_one_session' => 'მხოლოდ ერთი სესია',
        'value' => 'ღირებულება',
        'bitcut_start' => 'ცოტა დაწყება',
        'bitcut_count' => 'ბიტის დათვლა',
        'move_duration_longer_than' => 'გადაადგილების ხანგრძლივობა აღემატება',
        'min_parking_duration' => 'პარკირების მინიმალური ხანგრძლივობა',
        'model_id' => 'მოდელი',
        'min_load_duration' => 'მინიმალური დატვირთვის ხანგრძლივობა',
        'min_detect_change' => 'მინიმალური ცვლილება გამოსავლენად',
        'role_id' => 'როლი',
        'on_collision' => 'შეჯახებაზე',
        'launcher' => 'გამშვები',
        'processed' => 'დამუშავებული',
        'created_at' => 'შექმნილია',
        'reserved_at' => 'რეზერვირებულია',
        'completed_at' => 'დასრულდა ზე',
        'failed_at' => 'ვერ მოხერხდა',
        'pickup_time_from' => 'აყვანის დრო დან',
        'pickup_time_to' => 'აყვანის დრო',
        'delivery_time_from' => 'მიწოდების დრო დან',
        'delivery_time_to' => 'მიწოდების დრო',
        'task_set_id' => 'ამოცანების ნაკრები',
        'firebase_config' => 'Firebase კონფიგურაცია',
    ),
    'same_protocol' => 'ობიექტებს უნდა ქონდეს იდენტური პროტოკოლი',
    'contains' => ':attribute უნდა შეიცავდეს :value .',
    'ip_port' => ':attribute არ შეესაბამება  ფორმა IP:PORT',
    'required_unless' => ':attribute ველი აუცილებელია.',
    'translation_file' => 'თარგმანის ფაილი არ არსებობს',
    'placeholder' => 'ატრიბუტი &quot; :placeholder &quot; აკლია',
    'image_valid' => ':attribute უნდა იყოს გამოსახულება.',
    'missing_configuration_value' => 'დაკარგული :attribute კონფიგურაციის მნიშვნელობა.',
    'sms_gateway_error' => 'წერილის გაგზავნა შეუძლებელია. Sms კარიბჭის შეცდომა.',
    'cant_configure_device' => 'მოწყობილობის კონფიგურაცია ვერ მოხერხდა',
    'field_does_not_exist' => 'ველი :attribute არ არსებობს',
    'unsupported_rules' => 'დაუსაბუთებელი წესები:',
    'unsupported_parameterized_rules' => 'არაპროგრამირებული პარამეტრული წესები:',
    'cant_update_custom_field' => 'ველის განახლება შეუძლებელია &quot; :field &quot;, რადგან არსებობს არსებული ჩანაწერები ამ პერსონალური ველის გამოყენებით',
    'secure_password' => 'უსაფრთხო პაროლი',
    'uppercase_character' => 'საჭიროა დიდი ასო',
    'lowercase_character' => 'საჭიროა მცირე ზომის სიმბოლო',
    'digit_character' => 'საჭიროა ციფრის სიმბოლო',
    'wrong_captcha' => 'არასწორი CAPTCHA',
    'dimensions' => ':attribute სურათის არასწორი ზომები აქვს.',
    'mimetypes' => ':attribute უნდა იყოს ფაილის ტიპი :values .',
    'in_array' => ':attribute ველი არ არსებობს :other .',
    'uploaded' => ':attribute ატვირთვა ვერ მოხერხდა. შესაძლებელია, რომ სერვერმა არ მიიღოს ასეთი ზომა.',
    'login_methods'  => array(
        'email' => 'ელფოსტა',
        'azure' => 'Microsoft Azure',
    ),
    'host' => ':attribute არ არის სწორი ჰოსტი',
    'host_port' => ':attribute არ ემთხვევა ფორმატს HOST :PORT',
    'unique_table_msg' => ':attribute უკვე აღებულია :table ში',
    'pay_provider_min_charge' => 'მინიმალური თანხა :pay_provider თან გადასახადისთვის არის :amount',
    'formula' => 'არასწორი ფორმულა',
    'gt'  => array(
        'numeric' => ':attribute უნდა იყოს :value მეტი.',
        'file' => ':attribute უნდა იყოს :value კილობაიტზე მეტი.',
        'string' => ':attribute უნდა იყოს :value სიმბოლოებზე მეტი.',
        'array' => ':attribute უნდა ჰქონდეს :value ზე მეტი ელემენტი.',
    ),
    'gte'  => array(
        'numeric' => ':attribute უნდა იყოს მეტი ან ტოლი :value .',
        'file' => ':attribute უნდა იყოს მეტი ან ტოლი :value კილობაიტზე.',
        'string' => ':attribute უნდა იყოს მეტი ან ტოლი :value სიმბოლოებზე.',
        'array' => ':attribute უნდა ჰქონდეს :value ელემენტი ან მეტი.',
    ),
    'lt'  => array(
        'numeric' => ':attribute უნდა იყოს :value ზე ნაკლები.',
        'file' => ':attribute უნდა იყოს :value კილობაიტზე ნაკლები.',
        'string' => ':attribute უნდა იყოს :value სიმბოლოზე ნაკლები.',
        'array' => ':attribute უნდა ჰქონდეს :value ზე ნაკლები ელემენტი.',
    ),
    'lte'  => array(
        'numeric' => ':attribute უნდა იყოს ნაკლები ან ტოლი :value .',
        'file' => ':attribute უნდა იყოს ნაკლები ან ტოლი :value კილობაიტზე.',
        'string' => ':attribute უნდა იყოს ნაკლები ან ტოლი :value სიმბოლოებზე.',
        'array' => ':attribute არ უნდა ჰქონდეს :value ზე მეტი ელემენტი.',
    ),
    'special_character' => 'საჭიროა სპეციალური სიმბოლო',
    'task_set_dedicated_to_device' => 'ამოცანების ნაკრები ეძღვნება :device მოწყობილობას',
    'tasks_only_one_device' => 'ამოცანები შეიძლება ეკუთვნოდეს მხოლოდ ერთ მოწყობილობას',
);