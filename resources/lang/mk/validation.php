<?php

return array(

    'accepted' => 'На :attribute мора да биде прифатен.',
    'active_url' => 'На :attribute не е валидна URL.',
    'after' => 'На :attribute мора да биде датум после :date.',
    'alpha' => 'На :attribute може да содржи само букви.',
    'alpha_dash' => 'На :attribute може да содржи само букви, бројки и цртички.',
    'alpha_num' => 'На :attribute може да содржи само букви и броеви.',
    'array' => 'На :attribute мора да биде низа.',
    'before' => 'На :attribute мора да биде пред :date.',
    'between'  => array(
        'file' => 'На :attribute мора да биде помеѓу :min и :max.',
        'string' => 'На :attribute мора да биде помеѓу :min и :max карактери.',
        'array' => 'На :attribute мора да биде помеѓу :min и :max предмети.',
        'numeric' => ':attribute мора да биде помеѓу :min И :max .',
    ),
    'confirmed' => 'На :attribute на атрибутот не се совпаѓа.',
    'date' => 'На :attribute не е валиден датум.',
    'date_format' => 'На :attribute не се совпаѓа со форматот :format.',
    'different' => 'На :attribute и :other мора да биде поинаку.',
    'digits' => 'На :attribute мора да биде :digits бројки.',
    'digits_between' => 'На :attribute мора да биде помеѓу :min и :max бројки.',
    'email' => 'На :attribute мора да биде валидна емаил адреса.',
    'exists' => 'На избраниот :attribute е неважечки.',
    'image' => 'На :attribute мора да биде слика.',
    'in' => 'На избраниот :attribute е неважечки.',
    'integer' => 'На :attribute мора да биде цел број.',
    'ip' => 'На :attribute мора да биде валидна IP адреса.',
    'max'  => array(
        'numeric' => 'На :attribute не може да биде поголем од :max.',
        'file' => 'На :attribute не може да биде поголем од :max килобајти.',
        'string' => 'На :attribute не може да биде поголем од :max карактери.',
        'array' => 'На :attribute не може да биде поголем од :max предмети.',
    ),
    'mimes' => 'На :attribute мора да биде датотека од типот: :values.',
    'min'  => array(
        'numeric' => 'На :attribute мора да биде најмалку :min.',
        'file' => 'На :attribute мора да биде најмалку :min килобајти.',
        'string' => 'На :attribute мора да биде најмалку :min карактери.',
        'array' => 'На :attribute мора да биде најмалку :min предмети.',
    ),
    'not_in' => 'На избраниот :attribute е неважечки.',
    'numeric' => 'На :attribute мора да биде број.',
    'regex' => 'На :attribute е неважечки формат.',
    'required' => 'На :attribute поле е потребно.',
    'required_if' => 'На :attribute поле е потребно.',
    'required_with' => 'На :attribute поле е потребно кога :values се присутни.',
    'required_with_all' => 'На :attribute поле е потребно кога :values се присутни.',
    'required_without' => 'На :attribute поле е потребно кога :values не се присутни.',
    'required_without_all' => 'На :attribute поле е потребно кога никој од :values се присутни.',
    'same' => 'На :attribute и :other мора да одговараат.',
    'size'  => array(
        'numeric' => 'На :attribute мора да е :size.',
        'file' => 'На :attribute мора да е :size на килобајти.',
        'string' => 'На :attribute мора да е :size на карактери.',
        'array' => 'На :attribute мора да содржи :size на предмети.',
    ),
    'unique' => 'На :attribute веќе е преземен.',
    'url' => 'На :attribute е неважечки формат.',
    'array_max' => 'На :attribute мах предмети :max.',
    'lesser_than' => 'На :attribute мора да е помал :other',
    'custom'  => array(
        'attribute-name'  => array(
            'rule-name' => 'прилагодена-порака',
        ),
        'frontpage_logo'  => array(
            'dimensions' => 'Максималната висина на логото на насловната страница е 60px.',
        ),
        'favicon'  => array(
            'dimensions' => 'Фавикон мора да биде 16px со 16px.',
        ),
    ),
    'attributes'  => array(
        'email' => 'Емаил',
        'password' => 'Лозинка',
        'password_confirmation' => 'Конформација за лозинка',
        'remember_me' => 'Запомни ме',
        'name' => 'Име',
        'imei' => 'IMEI',
        'imei_device' => 'IMEI или Уред идентификационен број (Device identifier)',
        'fuel_measurement_type' => 'Мерење на гориво',
        'fuel_cost' => 'Цена на гориво',
        'icon_id' => 'Икона на уред',
        'active' => 'Аткивен',
        'polygon_color' => 'Боја на позадина',
        'devices' => 'Уреди',
        'geofences' => 'Геоогради',
        'overspeed' => 'Прекорачување на брзина',
        'fuel_consumption' => 'Потрошувачката на гориво',
        'description' => 'Опис',
        'map_icon_id' => 'Маркер икона',
        'coordinates' => 'Координата',
        'date_from' => 'Дата од',
        'date_to' => 'Дата до',
        'code' => 'Код',
        'title' => 'Наслов',
        'note' => 'Содржина',
        'path' => 'Фајл',
        'period_name' => 'Периодично име',
        'days' => 'Денови',
        'devices_limit' => 'Лимит на уред',
        'trial' => 'Пробно',
        'price' => 'Цена',
        'message' => 'Порака',
        'tag' => 'Параметар',
        'timezone_id' => 'Временска зона',
        'unit_of_distance' => 'Единица на растојание',
        'unit_of_capacity' => 'Единица за капацитет',
        'unit_of_altitude' => 'Единица на надморска височина',
        'user' => 'Корисник',
        'group_id' => 'Група',
        'permission_to_add_devices' => 'Додајте уреди еден два',
        'sms_gateway_url' => 'SMS gateway URL',
        'mobile_phone' => 'Мобилен',
        'permission_to_use_sms_gateway' => 'SMS gateway',
        'loged_at' => 'Последно најавување',
        'manager_id' => 'Менаџер',
        'sim_number' => 'SIM број',
        'device_model' => 'Модел на уредот',
        'rfid' => 'RFID',
        'phone' => 'Телефон',
        'device_id' => 'Уред',
        'tag_value' => 'Параметар вредност',
        'device_port' => 'Уред порт',
        'event' => 'Настан',
        'port' => 'Порт',
        'device_protocol' => 'Уред протокол',
        'protocol' => 'Протокол',
        'sensor_name' => 'Име на сензор',
        'sensor_type' => 'Вид на сензор',
        'sensor_template' => 'Шаблон сензор',
        'tag_name' => 'Име на параметар',
        'min_value' => 'Мин.вредност',
        'max_value' => 'Мах.вредност',
        'on_value' => 'Вклучување вредност',
        'off_value' => 'Исклучување вредност',
        'shown_value_by' => 'Прикажи вредност од',
        'full_tank_value' => 'Параметар вредност',
        'formula' => 'Формула',
        'parameters' => 'Параметри',
        'full_tank' => 'Резервоар на гориво во литри/галони',
        'fuel_tank_name' => 'Име на резервоар на гориво',
        'odometer_value' => 'Вредност',
        'odometer_value_by' => 'Одометар',
        'unit_of_measurement' => 'Мерна единица',
        'plate_number' => 'Регистрација',
        'vin' => 'VIN',
        'registration_number' => 'Единица за мерење/Број на средства',
        'object_owner' => 'Сопственик на единица / менаџер',
        'additional_notes' => 'Дополнителни забелешки',
        'expiration_date' => 'Дата на истекување',
        'days_to_remind' => 'Денови за потсетување пред истекот',
        'type' => 'Вид',
        'format' => 'Формат',
        'show_addresses' => 'Покажи адреса',
        'stops' => 'Застанувања',
        'speed_limit' => 'Ограничување на брзината',
        'zones_instead' => 'Зони наместо адреси',
        'daily' => 'Дневно',
        'weekly' => 'Неделно',
        'send_to_email' => 'Прати на емаил',
        'filter' => 'Филтер',
        'status' => 'Статус',
        'date' => 'Датум',
        'geofence_name' => 'Име на геоограда',
        'tail_color' => 'Боја на линија на движење',
        'tail_length' => 'Линија на движење долзина',
        'engine_hours' => 'Саати на мотор',
        'detect_engine' => 'Детектирај мотор Вклучен/Исклучен од',
        'min_moving_speed' => 'Мин. брзина на движење во км/ч',
        'min_fuel_fillings' => 'Мин. разликата во горивото за да се открие надополнување на гориво',
        'expiration_by' => 'Завршува од',
        'interval' => 'Интервал',
        'last_service' => 'Последен сервис',
        'trigger_event_left' => 'Активирајте го настанот кога ќе замине',
        'current_odometer' => 'Моментален одометар',
        'current_engine_hours' => 'Моментални саати на мотор',
        'renew_after_expiration' => 'Обнови по истекот',
        'sms_template_id' => 'SMS шаблон',
        'frequency' => 'Фрекфенција',
        'unit' => 'единица',
        'noreply_email' => 'Нема одговор емаил',
        'signature' => 'Потпис',
        'use_smtp_server' => 'Користи SMTP сервер',
        'smtp_server_host' => 'SMTP сервер хост',
        'smtp_server_port' => 'SMTP сервер порт',
        'smtp_security' => 'SMTP обезбедувањњ',
        'smtp_username' => 'SMTP корсничко име',
        'smtp_password' => 'SMTP лозинка',
        'from_name' => 'Од име',
        'icons' => 'Икони',
        'server_name' => 'Име на сервер',
        'available_maps' => 'Достапни мапи',
        'default_language' => 'Стандард јазик',
        'default_timezone' => 'Стандард временска зона',
        'default_unit_of_distance' => 'Стандард единица на растојание',
        'default_unit_of_capacity' => 'Стандард единица на капацитет',
        'default_unit_of_altitude' => 'Стандард единица на надморска височина',
        'default_date_format' => 'Стандард датум формат',
        'default_time_format' => 'Стандард временски формат',
        'default_map' => 'Стандард мапа',
        'default_object_online_timeout' => 'Стандард единица вклучена пауза',
        'logo' => 'Лого',
        'login_page_logo' => 'Лого на најавување',
        'frontpage_logo' => 'Лого на страна за најавување',
        'favicon' => 'фавикон',
        'allow_users_registration' => 'Овозможи регистрација на корисници',
        'default_maps' => 'Стандард мапи',
        'subscription_expiration_after_days' => 'Истекот на претплата по денови',
        'gprs_template_id' => 'GPRS шаблон',
        'calibrations' => 'Калибрации',
        'ftp_server' => 'FTP сервер',
        'ftp_port' => 'FTP порт',
        'ftp_username' => 'FTP корисничко име',
        'ftp_password' => 'FTP лозинка',
        'ftp_path' => 'FTP пат',
        'period' => 'Период',
        'hour' => 'Сат',
        'color' => 'Боја',
        'polyline' => 'Рута',
        'request_method' => 'Барање метод',
        'username' => 'Корисничко име',
        'encoding' => 'Кодирање',
        'time_adjustment' => 'Прилагодување на времето',
        'parameter' => 'Параметар',
        'export_type' => 'Вид на извоз',
        'groups' => 'Група',
        'file' => 'Фајл',
        'extra' => 'Екстра',
        'parameter_value' => 'Параметар вредност',
        'enable_plans' => 'Овозможи планови',
        'payment_type' => 'Платежно средство',
        'paypal_client_id' => 'Paypal client ID',
        'paypal_secret' => 'Paypal тајна',
        'paypal_currency' => 'Paypal валута',
        'paypal_payment_name' => 'Paypal претплатничко име',
        'objects' => 'Единици',
        'duration_value' => 'Времетраење',
        'permissions' => 'Дозволи',
        'plan' => 'План',
        'default_billing_plan' => 'Стандард план за наплата',
        'sensor_group_id' => 'Сензорски групи',
        'daylight_saving_time' => 'Дневно сметање на времето',
        'phone_number' => 'Телефонски број',
        'action' => 'Акција',
        'time' => 'Време',
        'order' => 'Нарачај',
        'geocoder_api' => 'Геокодер API',
        'geocoder_cache' => 'Geocoder кеш меморија',
        'geocoder_cache_days' => 'Geocoder кеш меморија денови',
        'geocoder_cache_delete' => 'Избриши геокодер кењ меморија',
        'api_key' => 'API клуч',
        'api_url' => 'API урл',
        'map_center_latitude' => 'Ширина на картата на центарот',
        'map_center_longitude' => 'Должина на картата на центарот',
        'map_zoom_level' => 'Ниво на мапа на зумирање',
        'dst_type' => 'Вид',
        'provider' => 'Провајдер',
        'week_start_day' => 'Стандард ден на календарската недела',
        'ip' => 'IP',
        'gprs_templates_only' => 'Покажи GPRS шаблон команди',
        'select_all_objects' => 'Селектирај ги сите единици',
        'icon_type' => 'Вид на икона',
        'on_setflag_1' => 'Почетниот карактер',
        'on_setflag_2' => 'Количина на карактери',
        'on_setflag_3' => 'Вредност на параметар',
        'domain' => 'Домејн',
        'auth_id' => 'Auth ID',
        'auth_token' => 'Auth токен',
        'senders_phone' => 'Телефонскиот број на испраќачот',
        'database_clear_status' => 'Автоматско чистење на историјата',
        'database_clear_days' => 'Денови да се зачуваат',
        'ignition_detection' => 'Детекција на палење од',
        'template_color' => 'Боја на шаблон',
        'background' => 'Позадина',
        'login_page_text_color' => 'Боја на текст на страна за најавување',
        'login_page_background_color' => 'Боја на позадина на страна за најавување',
        'welcome_text' => 'Почетен текст',
        'bottom_text' => 'Текст на дното',
        'apple_store_link' => 'Apple store линк',
        'google_play_link' => 'Google play линк',
        'here_map_id' => 'HERE.com app ID',
        'here_map_code' => 'HERE.com app code',
        'login_page_panel_background_color' => 'Боја на панел на страна за најавување',
        'login_page_panel_transparency' => 'Транспарентност на панел на страна за најавување',
        'visible' => 'Видлисвост',
        'min_fuel_thefts' => 'Мин. разликата во горивото за откривање на кражби на гориво',
        'authentication' => 'Автентикација',
        'position' => 'Позиција',
        'stop_duration_longer_than' => 'Стоп за времетраење подолго од',
        'mapbox_access_token' => 'Токенот за пристап до MapBox',
        'flag' => 'Знаме',
        'shift_start' => 'Почеток на менувањето',
        'shift_finish' => 'Заврши од смена',
        'shift_start_tolerance' => 'Толеранција за започнување на менувањето',
        'shift_finish_tolerance' => 'Shift заврши толеранција',
        'excessive_exit' => 'Прекумерно излегување',
        'smtp_authentication' => 'SMTP автентикација',
        'skip_calibration' => 'Исклучете ги пресметките надвор од опсегот на калибрација',
        'bing_maps_key' => 'Бинг мапира клуч',
        'stripe_public_key' => 'Јавен клуч STRIPE',
        'stripe_secret_key' => 'STRIPE таен клуч',
        'stripe_currency' => 'STRIPE валута',
        'priority' => 'Приоритет',
        'pickup_address' => 'Давачка адреса',
        'delivery_address' => 'Адреса на доставување',
        'schedule' => 'Распоред',
        'sound_notification' => 'Известување за звук',
        'push_notification' => 'Известување за Push на апликацијата',
        'email_notification' => 'Е-мејл известување',
        'sms_notification' => 'SMS известување',
        'webhook_notification' => 'Известување за Webhook',
        'offline_duration_longer_than' => 'Офлајн траење подолго од',
        'sms_gateway_headers' => 'Заглавија за наслови на SMS',
        'forward' => 'Напред',
        'by_status' => 'Со статус',
        'icon_status_online' => 'Икона за статус на интернет',
        'icon_status_offline' => 'Икона за статус на Offline',
        'icon_status_ack' => 'Ack статус икона',
        'icon_status_engine' => 'Икона за статус на моторот',
        'server_description' => 'Опис на серверот',
        'bypass_invalid' => 'Дозволи невалидни координати',
        'installation_date' => 'Датум на инсталација',
        'sim_activation_date' => 'Датум на активирање на СИМ',
        'sim_expiration_date' => 'Датум на истекување на СИМ',
        'activation_date' => 'Датум на активација',
        'secret_key' => 'Таен клуч',
        'currency' => 'Валута',
        'client_id' => 'ID на клиентот',
        'secret' => 'Тајна',
        'payment_name' => 'Име на исплата',
        'merchant_id' => 'Трговски проект',
        'public_key' => 'Јавен клуч',
        'private_key' => 'Приватен клуч',
        'braintree_plan_ids' => '',
        'braintree_plan_explanation' => 'Мора да креирате реалистичен план за наплата во контролниот панел на Braintree, изберете го тука соодветниот план за наплата на вашиот сервер.',
        'braintree_merchant_explanation' => 'Мора да креирате Merchant Account во Braintree контролен панел и внесете го ID-то тука.',
        'braintree_currency_match' => 'Монетарната сметка на Merchant Account мора да одговара на валута на планот',
        'merchant_account_id' => 'ID на трговска сметка',
        'master_key' => 'Главен клуч',
        'token' => 'Токен',
        'paydunya_currency_warning' => 'Единствената достапна валута е FCFA. Ако го конфигурирате, проверете дали вашите други плаќања се совпаѓаат со истата валута. Инаку корисниците ќе имаат шанса да го купат истиот план со различни цени.',
        'country' => 'Земја',
        'merchant_account' => 'Трговска сметка',
        'origin_key' => 'Клуч за потекло',
        'test_config' => 'Тест конфигурација',
        'environment' => 'Животна средина',
        'three_letter_iso' => 'Код со три букви во ISO валута',
        'google_maps_key' => 'Google го мапи API клучот',
        'maptiler_key' => 'Копче MapTiler',
        'streetview_api' => 'API на Streetview',
        'streetview_key' => 'Уред за API на Streetview',
        'openmaptiles_url' => 'URL на OpenMapTiles',
        'unit_cost' => 'Единечен трошок',
        'supplier' => 'Добавувач',
        'buyer' => 'Купувачот',
        'expense_type' => 'Вид на расходи',
        'device_cameras_days' => 'Денови за чување на сликите на камерата на уредот',
        'api_app_id' => 'ИД на апликација',
        'api_app_code' => 'Код за апликација',
        'api_app_secret' => 'Тајната на апликациите',
        'invoice_number' => 'Број на фактура',
        'one_time_payment' => 'Еднократно плаќање',
        'sharing_id' => 'Споделување',
        'idle_duration_longer_than' => 'Времетраење на мирување подолго од',
        'delete_after_expiration' => 'Избришете по истекот',
        'sharing_email' => 'Известување за е-пошта со врска за споделување',
        'sharing_sms' => 'SMS известување со линк за споделување',
        'sms' => 'порака',
        'template' => 'Шаблон',
        'commands' => 'Команди',
        'brand' => 'Производител на уреди',
        'model' => 'Модел',
        'apn_name' => 'Име на АПН',
        'apn_username' => 'Корисничко име на АПН',
        'apn_password' => 'АПН лозинка',
        'ignition_duration_longer_than' => 'Времетраење на палење подолго од',
        'tasks' => 'Задачи',
        'id' => 'Лична карта',
        'columns' => 'Колони',
        'called_at' => 'Јавете се на',
        'alert_type' => 'Тип на сигнализација',
        'response' => 'Одговор',
        'remarks' => 'Забелешки',
        'client' => 'Клиент',
        'event_type' => 'Тип на настан',
        'data_type' => 'Тип на податоци',
        'slug' => 'Голтка',
        'required' => 'Задолжително',
        'validation' => 'Валидација',
        'text' => 'Текст',
        'datetime' => 'Датум време',
        'boolean' => 'Булеан',
        'select' => 'Изберете',
        'multiselect' => 'Повеќе избор',
        'options' => 'Опции',
        'option' => 'Опција',
        'default' => 'Стандардно',
        'msisdn' => 'MSISDN',
        'notes' => 'Белешки',
        'skip_empty' => 'Прескокнете ја празната вредност',
        'distance_limit' => 'Ограничување на растојанието',
        'distance_tolerance' => 'Толеранција на далечина',
        'pois' => 'POI',
        'device_type_id' => 'Тип на уред',
        'custom_fields' => 'Прилагодени полиња',
        'device_name' => 'Име на уред',
        'auto_hide_notification' => 'Автоматско скривање на скокачкиот прозорец',
        'continuous_duration' => 'Континуирано траење',
        'captcha_provider' => 'Давател на CAPTCHA',
        'google_recaptcha' => 'Google reCAPTCHA',
        'recaptcha_site_key' => 'клуч на страницата reCAPTCHA',
        'recaptcha_secret_key' => 'ReCAPTCHA таен клуч',
        'g-recaptcha-response' => 'ReCAPTCHA',
        'here_api_key' => 'АПИ-клуч ТУКА.com',
        'time_duration' => 'Времетраење',
        'offset' => 'Офсет',
        'geofence_device' => 'Уред',
        'webhook_key' => 'Клуч за кука',
        'skip_blank_results' => 'Прескокнете празни резултати',
        'account_sid' => 'СИД на сметката',
        'speed_limit_tolerance' => 'Толеранција за ограничување на брзината',
        'started_at' => 'Време на започнување',
        'ended_at' => 'Време на завршување',
        'region' => 'Регионот',
        'adapted' => 'Адаптирано',
        'silent_notification' => 'Игнорирајте ги известувањата ако се повторуваат за неколку минути',
        'tomtom_key' => 'ТомТом клуч',
        'authorized' => 'Овластен',
        'email_verification' => 'Потврда за е-пошта',
        'project_id' => 'ИД на проектот',
        'project_psw' => 'Лозинка на проектот',
        'verify_id' => 'Потврдете го идентификацијата',
        'app_tracker_login' => 'Овозможено е најавување на апликацијата Tracker',
        'merchant_code' => 'Код на трговец',
        'count' => 'брои',
        'detect_distance' => 'Откривање на растојание од',
        'detect_speed' => 'Откривање на брзина од',
        'routes' => 'Рути',
        'battery_threshold' => 'Праг на батеријата',
        'state' => 'држава',
        'duration' => 'Времетраење',
        'statuses' => 'Статуси',
        'first_name' => 'Име',
        'last_name' => 'Презиме',
        'personal_code' => 'Личен код',
        'birth_date' => 'Датум на раѓање',
        'company_id' => 'Компанијата',
        'registration_code' => 'Код за регистрација',
        'vat_number' => 'ДДВ број',
        'address' => 'Адреса',
        'comment' => 'Коментар',
        'duration_format' => 'Формат на времетраење',
        'default_duration_format' => 'Стандарден формат на времетраење',
        'login_token' => 'Токен',
        'monthly' => 'Месечно',
        'amount' => 'износ',
        'bad_sms_gateway_url' => 'Лоша URL адреса или конфигурација на портата за СМС',
        'rates' => 'Стапки',
        'fields' => 'Полиња',
        'tenant_id' => 'ИД на закупец',
        'client_secret' => 'Тајна на клиентот',
        'default_login_methods' => 'Стандардни методи за најавување',
        'forwards' => 'Напаѓачи',
        'detection_speed' => 'Брзина на откривање',
        'detach_on_no_position_data' => 'Откачете ги податоците без позиција',
        'extra_expiration_time' => 'Дополнително време на истекување',
        'fuel_detect_sec_after_stop' => 'Откријте промена на горивото по застанувањето',
        'login_periods' => 'Периодите за најавување',
        'readonly' => 'Само Читај',
        'popup_notification' => 'Известување за скокачки прозорец',
        'allow_user_change_plan' => 'Дозволи план за промена на корисникот',
        'only_one_session' => 'Само една сесија',
        'value' => 'Вредност',
        'bitcut_start' => 'Мал почеток',
        'bitcut_count' => 'Броење на битови',
        'move_duration_longer_than' => 'Траење на движење подолго од',
        'min_parking_duration' => 'Минимално времетраење на паркирањето',
        'model_id' => 'Модел',
        'min_load_duration' => 'Минимално времетраење на оптоварување',
        'min_detect_change' => 'Минимум промена за откривање',
        'role_id' => 'Улога',
        'on_collision' => 'На судир',
        'launcher' => 'Стартувач',
        'processed' => 'Обработени',
        'created_at' => 'Создаден во',
        'reserved_at' => 'Резервирано во',
        'completed_at' => 'Завршено во',
        'failed_at' => 'Не успеа во',
        'pickup_time_from' => 'Време на подигање од',
        'pickup_time_to' => 'Време на подигање до',
        'delivery_time_from' => 'Време на испорака од',
        'delivery_time_to' => 'Време на испорака до',
        'task_set_id' => 'Збир на задачи',
        'firebase_config' => 'Конфигурација на Firebase',
    ),
    'same_protocol' => 'На уредите мора да бидат од ист протокол.',
    'contains' => ':attribute мора да содржи :value .',
    'ip_port' => ':attribute не се совпаѓа со формат IP:PORT',
    'required_unless' => 'Полето :attribute е потребно.',
    'translation_file' => 'Преводувачката датотека не постои',
    'placeholder' => 'Недостасува атрибут &quot; :placeholder &quot;',
    'image_valid' => ':attribute мора да биде слика.',
    'missing_configuration_value' => 'Недостасува :attribute вредност за конфигурација на :attribute .',
    'sms_gateway_error' => 'Пораката не може да се испрати. Грешка во портата СМС.',
    'cant_configure_device' => 'Не може да се конфигурира уредот',
    'field_does_not_exist' => 'Поле :attribute не постои',
    'unsupported_rules' => 'Неподдржани правила:',
    'unsupported_parameterized_rules' => 'Неподдржани параметарски правила:',
    'cant_update_custom_field' => 'Не можам да го ажурирам полето &quot; :field &quot; затоа што има постојни записи користејќи го ова прилагодено поле',
    'secure_password' => 'Безбедна лозинка',
    'uppercase_character' => 'Потребен е голема буква',
    'lowercase_character' => 'Потребен е мала буква',
    'digit_character' => 'Потребен е знак на цифра',
    'wrong_captcha' => 'Погрешен CAPTCHA',
    'dimensions' => ':attribute има невалидни димензии на сликата.',
    'mimetypes' => ':attribute мора да биде датотека од типот :values .',
    'in_array' => 'Полето :attribute не постои во :other .',
    'uploaded' => ':attribute не успеа да се постави. Можно е серверот да не прифати таква големина.',
    'login_methods'  => array(
        'email' => 'Е-пошта',
        'azure' => 'Мајкрософт Азур',
    ),
    'host' => ':attribute не е валиден домаќин',
    'host_port' => ':attribute не се совпаѓа со форматот HOST :PORT',
    'unique_table_msg' => ':attribute веќе е земен во :table',
    'pay_provider_min_charge' => 'Минималниот износ за наплата кај :pay_provider е :amount',
    'formula' => 'Неважечка формула',
    'gt'  => array(
        'numeric' => ':attribute мора да биде поголем од :value .',
        'file' => ':attribute мора да биде поголем од :value килобајти.',
        'string' => ':attribute мора да биде поголем од знаците :value .',
        'array' => ':attribute мора да има повеќе од ставки :value .',
    ),
    'gte'  => array(
        'numeric' => ':attribute мора да биде поголем или еднаков на :value .',
        'file' => ':attribute мора да биде поголем или еднаков на :value килобајти.',
        'string' => ':attribute мора да биде поголем или еднаков на знаците :value .',
        'array' => ':attribute мора да има ставки :value или повеќе.',
    ),
    'lt'  => array(
        'numeric' => ':attribute мора да биде помал од :value .',
        'file' => ':attribute мора да биде помал од :value килобајти.',
        'string' => ':attribute мора да биде помал од знаците :value .',
        'array' => ':attribute мора да има ставки помалку од :value .',
    ),
    'lte'  => array(
        'numeric' => ':attribute мора да биде помал или еднаков на :value .',
        'file' => ':attribute мора да биде помал или еднаков на :value килобајти.',
        'string' => ':attribute мора да биде помал или еднаков на знаците :value .',
        'array' => ':attribute не смее да има повеќе од ставки :value .',
    ),
    'special_character' => 'Потребен е посебен знак',
    'task_set_dedicated_to_device' => 'Комплетот задачи е посветен на :device',
    'tasks_only_one_device' => 'Задачите можат да припаѓаат само на еден уред',
);