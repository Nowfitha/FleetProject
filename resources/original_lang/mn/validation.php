<?php

return array(

    'accepted' => ':attribute хүлээн зөвшөөрсөн байх ёстой.',
    'active_url' => ':attribute нь зөв URL биш байна.',
    'after' => ':attribute :date дараах огноо байх ёстой.',
    'alpha' => ':attribute нь зөвхөн үсэг агуулж болно.',
    'alpha_dash' => ':attribute нь зөвхөн үсэг, тоо, зураас агуулж болно.',
    'alpha_num' => ':attribute нь зөвхөн үсэг, тоо агуулж болно.',
    'array' => ':attribute нь массив байх ёстой.',
    'before' => ':attribute :date өмнөх огноо байх ёстой.',
    'between'  => array(
        'numeric' => ':attribute :min ба :max хооронд байх ёстой.',
        'file' => ':attribute :min ба :max kilobayte хооронд байх ёстой.',
        'string' => ':attribute Шинж чанар нь :min ба :max тэмдэгтүүдийн хооронд байх ёстой.',
        'array' => ':attribute :min ба :max хооронд байх ёстой.',
    ),
    'confirmed' => ':attribute баталгаажуулалт таарахгүй байна.',
    'date' => ':attribute нь хүчин төгөлдөр огноо биш юм.',
    'date_format' => ':attribute форматыг таарахгүй байгаа :format .',
    'different' => ':attribute ба :other нь ялгаатай байх ёстой.',
    'digits' => ':attribute :digits цифр байх ёстой.',
    'digits_between' => ':attribute :min ба :max цифрүүдийн хооронд байх ёстой.',
    'email' => ':attribute нь хүчинтэй имэйл хаяг байх ёстой.',
    'exists' => 'Сонгосон :attribute буруу байна.',
    'image' => ':attribute нь зураг байх ёстой.',
    'in' => 'Сонгосон :attribute буруу байна.',
    'integer' => ':attribute нь бүхэл тоо байх ёстой.',
    'ip' => ':attribute нь хүчинтэй IP хаяг байх ёстой.',
    'max'  => array(
        'numeric' => ':attribute :max ээс их байж болохгүй.',
        'file' => ':attribute :max килобайтаас их байж болохгүй.',
        'string' => ':attribute илүү байж болох :max тэмдэгт.',
        'array' => ':attribute :max ээс ихгүй байж болно.',
    ),
    'mimes' => ':attribute :values төрлийн файл байх ёстой.',
    'min'  => array(
        'numeric' => ':attribute нь дор хаяж :min байх ёстой.',
        'file' => ':attribute нь дор хаяж :min минобайт байх ёстой.',
        'string' => ':attribute Шинж чанар нь дор хаяж :min',
        'array' => ':attribute нь дор хаяж :min зүйлтэй байх ёстой.',
    ),
    'not_in' => 'Сонгосон :attribute буруу байна.',
    'numeric' => ':attribute нь тоо байх ёстой.',
    'regex' => ':attribute формат буруу байна.',
    'required' => ':attribute талбар шаардлагатай.',
    'required_if' => ':attribute талбар шаардлагатай.',
    'required_with' => ':attribute үед талбар шаардагдана :values байх юм.',
    'required_with_all' => ':attribute үед талбар шаардагдана :values байх юм.',
    'required_without' => ':attribute талбар нь :values байхгүй үед шаардлагатай болно.',
    'required_without_all' => ':values аль нь ч байхгүй тохиолдолд :attribute талбар шаардлагатай.',
    'same' => ':attribute ба :other нь тохирч байх ёстой.',
    'size'  => array(
        'numeric' => ':attribute :size байх ёстой.',
        'file' => 'Шинж :attribute :size килобайт байх ёстой.',
        'string' => ':attribute байх ёстой :size тэмдэгт.',
        'array' => ':attribute :size зүйлийг агуулсан байх ёстой.',
    ),
    'unique' => ':attribute аль хэдийн авсан болно.',
    'url' => ':attribute формат буруу байна.',
    'array_max' => 'The :attribute max items :max .',
    'lesser_than' => ':attribute :other харьцуулахад бага байх ёстой',
    'custom'  => array(
        'attribute-name'  => array(
            'rule-name' => 'захиалгат мессеж',
        ),
        'frontpage_logo'  => array(
            'dimensions' => 'Нүүр хуудасны лого хамгийн өндөр нь 60px.',
        ),
        'favicon'  => array(
            'dimensions' => 'Favicon нь 16px-ээс 16px байх ёстой.',
        ),
    ),
    'attributes'  => array(
        'email' => 'Имэйл',
        'password' => 'Нууц үг',
        'password_confirmation' => 'Нууц үгийн баталгаажуулалт',
        'remember_me' => 'Намайг санаарай',
        'name' => 'Нэр',
        'imei' => 'IMEI',
        'imei_device' => 'IMEI эсвэл Төхөөрөмжийн танигч',
        'fuel_measurement_type' => 'Түлшний хэмжилт',
        'fuel_cost' => 'Шатахууны зардал',
        'icon_id' => 'Төхөөрөмжийн дүрс тэмдэг',
        'active' => 'Идэвхтэй',
        'polygon_color' => 'Дэвсгэр өнгө',
        'devices' => 'Төхөөрөмжүүд',
        'geofences' => 'Газарзүйн хашаа',
        'overspeed' => 'Хурд хэтрүүлсэн',
        'fuel_consumption' => 'Түлшний зарцуулалт',
        'description' => 'Тодорхойлолт',
        'map_icon_id' => 'Тэмдэгчийн дүрс',
        'coordinates' => 'Газрын зургийн цэг',
        'date_from' => 'Огноо',
        'date_to' => 'Огноо',
        'code' => 'Код',
        'title' => 'Гарчиг',
        'note' => 'Агуулга',
        'path' => 'Файл',
        'period_name' => 'Хугацааны нэр',
        'days' => 'Өдөр',
        'devices_limit' => 'Төхөөрөмжийн хязгаарлалт',
        'trial' => 'Туршилт',
        'price' => 'Үнэ',
        'message' => 'Мессеж',
        'tag' => 'Параметр',
        'timezone_id' => 'Цагийн бүс',
        'unit_of_distance' => 'Хэмжих нэгж',
        'unit_of_capacity' => 'Хүчин чадлын нэгж',
        'user' => 'Хэрэглэгч',
        'group_id' => 'Бүлэг',
        'permission_to_add_devices' => 'Төхөөрөмжүүдийг нэг хоёр нэмнэ үү',
        'unit_of_altitude' => 'Өндрийн нэгж',
        'sms_gateway_url' => 'SMS гарцын URL',
        'mobile_phone' => 'Гар утас',
        'permission_to_use_sms_gateway' => 'SMS гарц',
        'loged_at' => 'Сүүлийн нэвтрэлт',
        'manager_id' => 'Менежер',
        'sim_number' => 'SIM дугаар',
        'device_model' => 'Төхөөрөмжийн загвар',
        'rfid' => 'RFID',
        'phone' => 'Утас',
        'device_id' => 'Төхөөрөмж',
        'tag_value' => 'Параметрийн утга',
        'device_port' => 'Төхөөрөмжийн порт',
        'event' => 'Үйл явдал',
        'port' => 'Боомт',
        'device_protocol' => 'Төхөөрөмжийн протокол',
        'protocol' => 'Протокол',
        'sensor_name' => 'Мэдрэгчийн нэр',
        'sensor_type' => 'Мэдрэгчийн төрөл',
        'sensor_template' => 'Мэдрэгчийн загвар',
        'tag_name' => 'Параметрийн нэр',
        'min_value' => 'Мин. утга',
        'max_value' => 'Макс. утга',
        'on_value' => 'ON утга',
        'off_value' => 'OFF утга',
        'shown_value_by' => 'Утгыг харуулах',
        'full_tank_value' => 'Параметрийн утга',
        'formula' => 'Томьёо',
        'parameters' => 'Параметрүүд',
        'full_tank' => 'Бүрэн сав литр / галлон',
        'fuel_tank_name' => 'Шатахууны савны нэр',
        'odometer_value' => 'Утга',
        'odometer_value_by' => 'Одометр',
        'unit_of_measurement' => 'Хэмжих нэгж',
        'plate_number' => 'Машины дугаар',
        'vin' => 'VIN',
        'registration_number' => 'Бүртгэл / хөрөнгийн дугаар',
        'object_owner' => 'Объект эзэмшигч / менежер',
        'additional_notes' => 'Нэмэлт тэмдэглэл',
        'expiration_date' => 'Дуусах огноо',
        'days_to_remind' => 'Хугацаа дуусахаас өмнө сануулах өдрүүд',
        'type' => 'Төрөл',
        'format' => 'Формат',
        'show_addresses' => 'Хаягуудыг харуулах',
        'stops' => 'Зогсолт',
        'speed_limit' => 'Хурдны хязгаар',
        'zones_instead' => 'Хаягийн оронд бүс',
        'daily' => 'Өдөр бүр',
        'weekly' => 'Долоо хоног бүр',
        'send_to_email' => 'Имэйлээр илгээх',
        'filter' => 'Шүүлтүүр',
        'status' => 'Статус',
        'date' => 'Огноо',
        'geofence_name' => 'Гео хүрээний нэр',
        'tail_color' => 'Явсан замын өнгө',
        'tail_length' => 'Сүүлийн цэг',
        'engine_hours' => 'Мот цаг',
        'detect_engine' => 'Машин ассан/унтарсан',
        'min_moving_speed' => 'Мин. км / ц хурд',
        'min_fuel_fillings' => 'Мин. түлшний дүүргэлтийг илрүүлэх түлшний ялгаа',
        'min_fuel_thefts' => 'Мин. түлшний өөрчлөлт, алдагдал илрүүлэх',
        'expiration_by' => 'Дуусах хугацаа',
        'interval' => 'Интервал',
        'last_service' => 'Сүүлийн үйлчилгээ',
        'trigger_event_left' => 'Явсан тохиолдолд  мэдэгдэл илгээх',
        'current_odometer' => 'Одометр (одоо)',
        'current_engine_hours' => 'Мот цаг (одоо)',
        'renew_after_expiration' => 'Хугацаа дууссаны дараа шинэчлэх',
        'sms_template_id' => 'SMS загвар',
        'frequency' => 'Давтамж',
        'unit' => 'Нэгж',
        'noreply_email' => 'Авто имэйл',
        'signature' => 'Гарын үсэг',
        'use_smtp_server' => 'SMTP сервер ашиглах',
        'smtp_server_host' => 'SMTP серверийн хост',
        'smtp_server_port' => 'SMTP серверийн порт',
        'smtp_security' => 'SMTP аюулгүй байдал',
        'smtp_username' => 'SMTP хэрэглэгчийн нэр',
        'smtp_password' => 'SMTP нууц үг',
        'from_name' => 'Нэрээс',
        'icons' => 'Дүрс',
        'server_name' => 'Серверийн нэр',
        'available_maps' => 'Боломжтой газрын зураг',
        'default_language' => 'Үндсэн хэл',
        'default_timezone' => 'Үндсэн цагийн бүс',
        'default_unit_of_distance' => 'Зайны үндсэн нэгж',
        'default_unit_of_capacity' => 'Багтаамжын үндсэн нэгж',
        'default_unit_of_altitude' => 'Далайн түвшин',
        'default_date_format' => 'Үндсэн огнооны формат',
        'default_time_format' => 'Үндсэн цагийн формат',
        'default_map' => 'Үндсэн газрын зураг',
        'default_object_online_timeout' => 'Үндсэн объектын онлайн завсарлага',
        'logo' => 'Лого',
        'login_page_logo' => 'Нэвтрэх хуудасны лого',
        'frontpage_logo' => 'Нүүр хуудасны лого',
        'favicon' => 'Фавикон',
        'allow_users_registration' => 'Хэрэглэгчдийн бүртгэлийг зөвшөөрөх',
        'default_maps' => 'Үндсэн газрын зураг',
        'subscription_expiration_after_days' => 'Багц хоногийн дараа дуусна',
        'gprs_template_id' => 'GPRS загвар',
        'calibrations' => 'Тохируулга (калибришон)',
        'ftp_server' => 'FTP сервер',
        'ftp_port' => 'FTP порт',
        'ftp_username' => 'FTP хэрэглэгчийн нэр',
        'ftp_password' => 'FTP нууц үг',
        'ftp_path' => 'FTP зам',
        'period' => 'Хугацаа',
        'hour' => 'Цаг',
        'color' => 'Өнгө',
        'polyline' => 'Маршрут',
        'request_method' => 'Хүсэлтийн арга',
        'authentication' => 'Баталгаажуулалт',
        'username' => 'Хэрэглэгчийн нэр',
        'encoding' => 'Энкод',
        'time_adjustment' => 'Цагийн тохируулга',
        'parameter' => 'Параметр',
        'export_type' => 'Экспортын төрөл',
        'groups' => 'Бүлгүүд',
        'file' => 'Файл',
        'extra' => 'Нэмэлт',
        'parameter_value' => 'Параметрийн утга',
        'enable_plans' => 'Багцыг идэвхжүүлэх',
        'payment_type' => 'Төлбөрийн хэлбэр',
        'paypal_client_id' => 'Paypal үйлчлүүлэгчийн үнэмлэх',
        'paypal_secret' => 'Paypal нууц',
        'paypal_currency' => 'Paypal валют',
        'paypal_payment_name' => 'Paypal төлбөрийн нэр',
        'objects' => 'Объект',
        'duration_value' => 'Үргэлжлэх хугацаа',
        'permissions' => 'Зөвшөөрөл',
        'plan' => 'Төлөвлөгөө',
        'default_billing_plan' => 'Үндсэн төлбөрийн багц',
        'sensor_group_id' => 'Мэдрэгчийн бүлэг',
        'daylight_saving_time' => 'Цагийн тохируулга (цаг урагшлуулах)',
        'phone_number' => 'Утасны дугаар',
        'action' => 'Үйлдэл',
        'time' => 'Хугацаа',
        'order' => 'Захиалга',
        'geocoder_api' => 'Geocoder API',
        'geocoder_cache' => 'Геокодерын кэш',
        'geocoder_cache_days' => 'Геокодерын кэш хийх өдрүүд',
        'geocoder_cache_delete' => 'Геокодерын кэшийг устгах',
        'api_key' => 'API түлхүүр',
        'api_url' => 'API url',
        'map_center_latitude' => 'Газрын зургийн төвийн өргөрөг',
        'map_center_longitude' => 'Газрын зургийн төвийн уртраг',
        'map_zoom_level' => 'Газрын зургийг томруулах',
        'dst_type' => 'Төрөл',
        'provider' => 'Нийлүүлэгч',
        'week_start_day' => 'Үндсэн хуанлийн эхлэх огноо',
        'ip' => 'IP',
        'gprs_templates_only' => 'Зөвхөн GPRS Templates командыг харуулах',
        'select_all_objects' => 'Бүх объектыг сонгоно уу',
        'icon_type' => 'Дүрсний төрөл',
        'on_setflag_1' => 'Эхлэх дүр',
        'on_setflag_2' => 'Тэмдэгтийн хэмжээ',
        'on_setflag_3' => 'Параметрийн утга',
        'domain' => 'Домэйн',
        'auth_id' => 'Auth ID',
        'auth_token' => 'Auth токен',
        'senders_phone' => 'Илгээгчийн утасны дугаар',
        'database_clear_status' => 'Түүхийг автоматаар цэвэрлэх',
        'database_clear_days' => 'Үлдэх хоногууд',
        'ignition_detection' => 'Ignition detection by',
        'here_map_id' => 'HERE.com програмын ID',
        'here_map_code' => 'ЭНД.com програмын код',
        'login_page_panel_background_color' => 'Нэвтрэх хуудасны самбарын арын өнгө',
        'login_page_panel_transparency' => 'Нэвтрэх хуудасны самбар ил тод',
        'visible' => 'Харагдах болно',
        'template_color' => 'Загварын өнгө',
        'background' => 'Арын дэвсгэр',
        'login_page_text_color' => 'Нэвтрэх хуудасны текстийн өнгө',
        'login_page_background_color' => 'Нэвтрэх хуудасны дэвсгэр өнгө',
        'welcome_text' => 'Тавтай морилно уу текст',
        'bottom_text' => 'Доод текст',
        'apple_store_link' => 'Apple дэлгүүрийн холбоос',
        'google_play_link' => 'Google-ийн тоглуулах холбоос',
        'position' => 'Байрлал',
        'stop_duration_longer_than' => 'Үргэлжлэх хугацааг түүнээс удаан хугацаагаар зогсоох',
        'mapbox_access_token' => 'MapBox хандалтын токен',
        'flag' => 'Туг',
        'shift_start' => 'Гараа эхлэх',
        'shift_finish' => 'Гараа дуусгах',
        'shift_start_tolerance' => 'Shift эхлэх хүлцэл',
        'shift_finish_tolerance' => 'Шилжилтийн хүлцэл',
        'excessive_exit' => 'Хэт их гарц',
        'smtp_authentication' => 'SMTP нэвтрэлт танилт',
        'skip_calibration' => 'Тохируулгын хүрээнээс гадуур тооцооллыг хасах',
        'bing_maps_key' => 'Bing газрын зургийн түлхүүр',
        'stripe_public_key' => 'STRIPE нийтийн түлхүүр',
        'stripe_secret_key' => 'STRIPE нууц түлхүүр',
        'stripe_currency' => 'STRIPE валют',
        'priority' => 'Үндсэн зорилго',
        'pickup_address' => 'Авах хаяг',
        'delivery_address' => 'Хүргэлтийн хаяг',
        'schedule' => 'Хуваарь',
        'sound_notification' => 'Дуут мэдэгдэл',
        'push_notification' => 'App Push мэдэгдэл',
        'email_notification' => 'Имэйлийн мэдэгдэл',
        'sms_notification' => 'SMS мэдэгдэл',
        'webhook_notification' => 'Webhook мэдэгдэл',
        'offline_duration_longer_than' => 'Офлайн байсан хугацаа нь',
        'sms_gateway_headers' => 'SMS gateway headers',
        'forward' => 'Урагшаа',
        'by_status' => 'Төлөвөөр',
        'icon_status_online' => 'Онлайн төлөвийн дүрс тэмдэг',
        'icon_status_offline' => 'Офлайн төлөвийн дүрс тэмдэг',
        'icon_status_ack' => 'Ack төлөвийн дүрс',
        'icon_status_engine' => 'Хөдөлгүүрийн төлөвийн дүрс тэмдэг',
        'server_description' => 'Серверийн тодорхойлолт',
        'bypass_invalid' => 'Буруу координатыг зөвшөөрөх',
        'installation_date' => 'Суулгасан огноо',
        'sim_activation_date' => 'SIM идэвхжсэн огноо',
        'sim_expiration_date' => 'SIM-ийн хүчинтэй хугацаа',
        'activation_date' => 'Идэвхжүүлэх огноо',
        'secret_key' => 'Нууц түлхүүр',
        'currency' => 'Валют',
        'client_id' => 'Үйлчлүүлэгчийн  ID',
        'secret' => 'Нууц',
        'payment_name' => 'Төлбөрийн нэр',
        'merchant_id' => 'Худалдааны үнэмлэх',
        'public_key' => 'Олон нийтийн түлхүүр',
        'private_key' => 'Хувийн түлхүүр',
        'braintree_plan_ids' => 'Серверийн төлөвлөгөөний Braintree төлөвлөгөөний ID',
        'braintree_plan_explanation' => 'Та Braintree хяналтын самбар дээр давтагдах төлбөрийн төлөвлөгөө хийх ёстой бөгөөд энд байгаа ID-г өөрийн сервер дээрх харгалзах тооцооны төлөвлөгөөг сонгоно уу.',
        'braintree_merchant_explanation' => 'Та Braintree хяналтын самбарт худалдааны данс үүсгэж, ID-г энд оруулах ёстой.',
        'braintree_currency_match' => 'Худалдааны дансны валют нь төлөвлөгөөний валюттай тохирч байх ёстой',
        'merchant_account_id' => 'Худалдааны дансны дугаар',
        'master_key' => 'Мастер түлхүүр',
        'token' => 'Токен',
        'paydunya_currency_warning' => 'Цорын ганц боломжтой валют бол FCFA юм. Хэрэв та үүнийг тохируулсан бол бусад төлбөрүүд ижил валюттай тохирч байгаа эсэхийг шалгана уу. Үгүй бол хэрэглэгчид ижил төлөвлөгөөг өөр өөр үнээр худалдаж авах боломжтой болно.',
        'country' => 'Улс',
        'merchant_account' => 'Худалдааны данс',
        'origin_key' => 'Гарал үүслийн түлхүүр',
        'test_config' => 'Туршилтын тохиргоо',
        'environment' => 'Байгаль орчин',
        'three_letter_iso' => 'Гурван үсэгтэй ISO валютын код',
        'google_maps_key' => 'Google газрын зургийн API түлхүүр',
        'maptiler_key' => 'MapTiler түлхүүр',
        'streetview_api' => 'Streetview API',
        'streetview_key' => 'Streetview API түлхүүр',
        'openmaptiles_url' => 'OpenMapTiles URL',
        'unit_cost' => 'Нэгжийн өртөг',
        'supplier' => 'Нийлүүлэгч',
        'buyer' => 'Худалдан авагч',
        'expense_type' => 'Зардлын төрөл',
        'device_cameras_days' => 'Төхөөрөмжийн камерын дүрсийг хадгалах өдрүүд',
        'api_app_id' => 'Апп ID',
        'api_app_code' => 'Апп код',
        'api_app_secret' => 'Апп нууц',
        'invoice_number' => 'Нэхэмжлэлийн дугаар',
        'one_time_payment' => 'Нэг удаагийн төлбөр',
        'sharing_id' => 'Хуваалцах',
        'idle_duration_longer_than' => 'Сул зогсолтын хугацаа',
        'delete_after_expiration' => 'Хугацаа дууссаны дараа устгах',
        'sharing_email' => 'Хуваалцах холбоос бүхий имэйлийн мэдэгдэл',
        'sharing_sms' => 'Хуваалцах холбоос бүхий SMS мэдэгдэл',
        'sms' => 'SMS',
        'template' => 'Загвар',
        'commands' => 'Тушаалууд',
        'brand' => 'Төхөөрөмж үйлдвэрлэгч',
        'model' => 'Загвар',
        'apn_name' => 'APN нэр',
        'apn_username' => 'APN хэрэглэгчийн нэр',
        'apn_password' => 'APN нууц үг',
        'ignition_duration_longer_than' => 'Гал асаах хугацаа',
        'tasks' => 'Даалгавар',
        'id' => 'Үнэмлэх',
        'columns' => 'Багана',
        'called_at' => 'Дуудлага хийх',
        'alert_type' => 'Сэрэмжлүүлгийн төрөл',
        'response' => 'Хариу',
        'remarks' => 'Тайлбар',
        'client' => 'Үйлчлүүлэгч',
        'event_type' => 'Эвентийн төрөл',
        'data_type' => 'Мэдээллийн төрөл',
        'slug' => 'Slug',
        'required' => 'Шаардлагатай',
        'validation' => 'Баталгаажуулалт',
        'text' => 'Текст',
        'datetime' => 'Он сар өдөр цаг',
        'boolean' => 'Boolean',
        'select' => 'Сонгох',
        'multiselect' => 'Олон сонголт',
        'options' => 'Сонголтууд',
        'option' => 'Сонголт',
        'default' => 'Үндсэн',
        'msisdn' => 'MSISDN',
        'notes' => 'Тэмдэглэл',
        'skip_empty' => 'Хоосон утгыг алгасах',
        'distance_limit' => 'Зайны хязгаар',
        'distance_tolerance' => 'Зайны хүлцэл (Distance tolerance)',
        'pois' => 'POI',
        'device_type_id' => 'Төхөөрөмжийн төрөл',
        'custom_fields' => 'Захиалгат талбарууд',
        'device_name' => 'Төхөөрөмжийн нэр',
        'auto_hide_notification' => 'Автоматаар нуух цонх',
        'continuous_duration' => 'Тасралтгүй үргэлжлэх хугацаа',
        'captcha_provider' => 'CAPTCHA үйлчилгээ үзүүлэгч',
        'google_recaptcha' => 'Google reCAPTCHA',
        'recaptcha_site_key' => 'ReCAPTCHA сайтын түлхүүр',
        'recaptcha_secret_key' => 'ReCAPTCHA нууц түлхүүр',
        'g-recaptcha-response' => 'ReCAPTCHA',
        'here_api_key' => 'HERE.com API түлхүүр',
        'time_duration' => 'Цаг хугацаа',
        'offset' => 'Офсет',
        'geofence_device' => 'Төхөөрөмж',
        'webhook_key' => 'Webhook түлхүүр',
        'skip_blank_results' => 'Хоосон үр дүнг алгасах',
        'account_sid' => 'Бүртгэлийн SID',
        'speed_limit_tolerance' => 'Хурдны хязгаарлалт',
        'started_at' => 'Эхлэх цаг',
        'ended_at' => 'Дуусах цаг',
        'region' => 'Бүс нутаг',
        'adapted' => 'Дасан зохицсон',
        'silent_notification' => 'Хэдэн минутын дотор давтагдсан мэдэгдлүүдийг үл тоомсорло',
        'tomtom_key' => 'TomTom түлхүүр',
        'authorized' => 'Зөвшөөрөгдсөн',
        'email_verification' => 'Имэйл баталгаажуулалт',
        'project_id' => 'Төслийн ID',
        'project_psw' => 'Төслийн нууц үг',
        'verify_id' => 'ID баталгаажуулна уу',
        'app_tracker_login' => 'Tracker програмын нэвтрэлтийг идэвхжүүлсэн',
        'merchant_code' => 'Худалдааны код',
        'count' => 'Тоол',
        'detect_distance' => 'Зайг илрүүлэх',
        'detect_speed' => 'Хурд илрүүлэх',
        'routes' => 'Маршрутууд',
        'battery_threshold' => 'Батерейны босго',
        'state' => 'муж',
        'duration' => 'Үргэлжлэх хугацаа',
        'statuses' => 'Статусууд',
        'first_name' => 'Нэр',
        'last_name' => 'Овог нэр',
        'personal_code' => 'Хувийн код',
        'birth_date' => 'Төрсөн огноо',
        'company_id' => 'Компани',
        'registration_code' => 'Бүртгэлийн код',
        'vat_number' => 'НӨАТ-ын дугаар',
        'address' => 'Хаяг',
        'comment' => 'Сэтгэгдэл',
        'duration_format' => 'Үргэлжлэх хугацаа формат',
        'default_duration_format' => 'Өгөгдмөл үргэлжлэх хугацааны формат',
        'login_token' => 'Токен',
        'monthly' => 'Сар бүр',
        'amount' => 'Дүн',
        'bad_sms_gateway_url' => 'SMS гарцын URL эсвэл тохиргоо буруу байна',
        'rates' => 'Үнэ',
        'fields' => 'Талбайнууд',
        'tenant_id' => 'Түрээслэгчийн ID',
        'client_secret' => 'Үйлчлүүлэгчийн нууц',
        'default_login_methods' => 'Өгөгдмөл нэвтрэх аргууд',
        'forwards' => 'довтлогч',
        'detection_speed' => 'Илрүүлэх хурд',
        'detach_on_no_position_data' => 'Байршлын өгөгдөлгүй дээр салга',
        'extra_expiration_time' => 'Нэмэлт дуусах хугацаа',
        'fuel_detect_sec_after_stop' => 'Зогсоосны дараа түлшний өөрчлөлтийг илрүүлэх',
        'login_periods' => 'Нэвтрэх хугацаа',
        'readonly' => 'Зөвхөн унших',
        'popup_notification' => 'Попап мэдэгдэл',
        'allow_user_change_plan' => 'Хэрэглэгчийн төлөвлөгөөг өөрчлөхийг зөвшөөрөх',
        'only_one_session' => 'Зөвхөн нэг сесс',
        'value' => 'Үнэ цэнэ',
        'bitcut_start' => 'Бяцхан эхлэл',
        'bitcut_count' => 'Битийн тоо',
        'move_duration_longer_than' => '-ээс урт шилжих хугацаа',
        'min_parking_duration' => 'Зогсоолын хамгийн бага хугацаа',
        'model_id' => 'Загвар',
        'min_load_duration' => 'Хамгийн бага ачааллын хугацаа',
        'min_detect_change' => 'Илрүүлэх хамгийн бага өөрчлөлт',
        'role_id' => 'Үүрэг',
        'on_collision' => 'Мөргөлдөөн дээр',
        'launcher' => 'Эхлүүлэгч',
        'processed' => 'Боловсруулсан',
        'created_at' => 'Үүсгэсэн',
        'reserved_at' => 'Захиалагдсан',
        'completed_at' => 'Дууссан',
        'failed_at' => 'Амжилтгүй болсон',
        'pickup_time_from' => '-аас авах хугацаа',
        'pickup_time_to' => 'Татаж авах хугацаа',
        'delivery_time_from' => '-аас хүргэх хугацаа',
        'delivery_time_to' => 'Хүргэлтийн хугацаа',
        'task_set_id' => 'Даалгаврын багц',
        'firebase_config' => 'Firebase тохиргоо',
    ),
    'same_protocol' => 'Төхөөрөмжүүд ижил протоколтой байх ёстой.',
    'contains' => ':attribute :value агуулсан байх ёстой.',
    'ip_port' => ':attribute :PORT форматтай таарахгүй байна',
    'required_unless' => ':attribute талбар шаардлагатай.',
    'translation_file' => 'Орчуулгын файл байхгүй байна',
    'placeholder' => '&quot; :placeholder &quot; шинж чанар байхгүй байна',
    'image_valid' => ':attribute нь зураг байх ёстой.',
    'missing_configuration_value' => 'Алга болсон :attribute тохиргооны утга.',
    'sms_gateway_error' => 'Зурвас илгээх боломжгүй. Sms гарцын алдаа.',
    'cant_configure_device' => 'Төхөөрөмжийг тохируулж чадсангүй',
    'field_does_not_exist' => 'Талбар :attribute байхгүй байна',
    'unsupported_rules' => 'Дэмжигдээгүй дүрмүүд:',
    'unsupported_parameterized_rules' => 'Дэмжигдээгүй параметрчилсэн дүрмүүд:',
    'cant_update_custom_field' => 'Энэ өөрчлөн тохируулсан талбарыг ашигласан бүртгэлүүд байгаа тул :field &quot; талбарыг шинэчлэх боломжгүй байна',
    'secure_password' => 'Аюулгүй нууц үг',
    'uppercase_character' => 'Том үсгийн тэмдэгт шаардлагатай',
    'lowercase_character' => 'Жижиг үсэг шаардлагатай',
    'digit_character' => 'Тоон тэмдэгт шаардлагатай',
    'wrong_captcha' => 'Буруу CAPTCHA',
    'dimensions' => ':attribute нь буруу зургийн хэмжээтэй байна.',
    'mimetypes' => ':attribute :values төрлийн файл байх ёстой.',
    'in_array' => ':attribute талбар нь :other д байхгүй.',
    'uploaded' => ':attribute байршуулж чадсангүй. Сервер ийм хэмжээг хүлээж авахгүй байж магадгүй юм.',
    'login_methods'  => array(
        'email' => 'Имэйл',
        'azure' => 'Microsoft Azure',
    ),
    'host' => ':attribute хүчингүй хост байна',
    'host_port' => ':attribute HOST :PORT форматтай таарахгүй байна',
    'unique_table_msg' => ':attribute :table аль хэдийн авсан байна',
    'pay_provider_min_charge' => ':pay_provider ийн төлбөрийн доод хэмжээ нь :amount байна',
    'formula' => 'Томъёо буруу',
    'gt'  => array(
        'numeric' => ':attribute нь :value ээс их байх ёстой.',
        'file' => ':attribute :value килобайтаас их байх ёстой.',
        'string' => ':attribute нь :value тэмдэгтээс их байх ёстой.',
        'array' => ':attribute нь :value зүйлээс илүү байх ёстой.',
    ),
    'gte'  => array(
        'numeric' => ':attribute :value ээс их буюу тэнцүү байх ёстой.',
        'file' => ':attribute :value килобайтаас их буюу тэнцүү байх ёстой.',
        'string' => ':attribute :value тэмдэгтээс их буюу тэнцүү байх ёстой.',
        'array' => ':attribute нь :value буюу түүнээс дээш зүйлтэй байх ёстой.',
    ),
    'lt'  => array(
        'numeric' => ':attribute нь :value ээс бага байх ёстой.',
        'file' => ':attribute :value килобайтаас бага байх ёстой.',
        'string' => ':attribute нь :value тэмдэгтээс бага байх ёстой.',
        'array' => ':attribute нь :value зүйлээс бага байх ёстой.',
    ),
    'lte'  => array(
        'numeric' => ':attribute :value ээс бага эсвэл тэнцүү байх ёстой.',
        'file' => ':attribute :value килобайтаас бага буюу тэнцүү байх ёстой.',
        'string' => ':attribute нь :value тэмдэгтээс бага эсвэл тэнцүү байх ёстой.',
        'array' => ':attribute нь :value зүйлээс илүү байж болохгүй.',
    ),
    'special_character' => 'Тусгай дүр шаардлагатай',
    'task_set_dedicated_to_device' => 'Даалгаврын багц нь :device төхөөрөмжид зориулагдсан',
    'tasks_only_one_device' => 'Даалгаврууд нь зөвхөн нэг төхөөрөмжид хамаарах боломжтой',
);