<?php

return array(

    'accepted' => 'A :attribute el kell fogadni.',
    'active_url' => 'A :attribute nem érvényes URL.',
    'after' => 'A :attribute dátumnak kell lennie :date .',
    'alpha' => 'A :attribute csak betűket tartalmazhat.',
    'alpha_dash' => 'A :attribute csak leveleket, számokat és kötőjeleket tartalmazhat.',
    'alpha_num' => 'A :attribute csak betűket és számokat tartalmazhat.',
    'array' => 'A :attribute tömbnek kell lennie.',
    'before' => 'A :attribute dátumnak kell lennie :date .',
    'between'  => array(
        'numeric' => 'A :attribute :min és :max .',
        'file' => 'A :attribute :min és :max kilobyte között kell lennie.',
        'string' => 'Az :attribute :min és :max karaktereknek kell lennie.',
        'array' => 'A :attribute kell :min és :max elem között.',
    ),
    'confirmed' => 'A :attribute megerősítése nem egyezik.',
    'date' => 'A :attribute nem érvényes dátum.',
    'date_format' => 'A :attribute nem egyezik a formátum :format .',
    'different' => 'A :attribute és a :other kell lennie.',
    'digits' => 'A :attribute :digits kell állnia.',
    'digits_between' => 'A :attribute :min és :max számjegynek kell lennie.',
    'email' => 'A :attribute érvényes e-mail címnek kell lennie.',
    'exists' => 'A kiválasztott :attribute érvénytelen.',
    'image' => 'A :attribute képnek kell lennie.',
    'in' => 'A kiválasztott :attribute érvénytelen.',
    'integer' => 'A :attribute egész számnak kell lennie.',
    'ip' => 'A :attribute érvényes IP-címnek kell lennie.',
    'max'  => array(
        'numeric' => 'A :attribute nem lehet nagyobb, mint :max .',
        'file' => 'A :attribute nem lehet nagyobb, mint :max kilobyte.',
        'string' => 'A :attribute nem lehet nagyobb, mint :max karakterek.',
        'array' => 'A :attribute nem lehet több :max eleme.',
    ),
    'mimes' => 'A :attribute a következő típusú fájlnak kell lennie :values .',
    'min'  => array(
        'numeric' => 'A :attribute legalább :min .',
        'file' => 'A :attribute legalább :min kilobyte.',
        'string' => 'A :attribute legalább :min karakternek kell lennie.',
        'array' => 'A :attribute kell legalább :min elemekkel.',
    ),
    'not_in' => 'A kiválasztott :attribute érvénytelen.',
    'numeric' => 'A :attribute számnak kell lennie.',
    'regex' => 'A :attribute formátuma érvénytelen.',
    'required' => 'A :attribute mező szükséges.',
    'required_if' => 'A :attribute mező szükséges.',
    'required_with' => 'A :attribute mező akkor szükséges, ha :values vannak jelen.',
    'required_with_all' => 'A :attribute mező akkor szükséges, ha :values vannak jelen.',
    'required_without' => 'A :attribute mező akkor kötelező, ha :values nincsenek jelen.',
    'required_without_all' => 'A :attribute akkor szükséges, ha egyik sem :values nincs.',
    'same' => 'A :attribute és :other kell egyeznie.',
    'size'  => array(
        'numeric' => 'A :attribute :size kell lennie.',
        'file' => 'A :attribute :size kilobájtnak kell lennie.',
        'string' => 'A :attribute :size karaktereknek kell lennie.',
        'array' => 'A :attribute tartalmaznia kell :size elemeket.',
    ),
    'unique' => 'A :attribute már megtörtént.',
    'url' => 'A :attribute formátuma érvénytelen.',
    'array_max' => 'A :attribute max elemek :max .',
    'lesser_than' => 'A :attribute kisebbnek kell lennie, mint :other',
    'custom'  => array(
        'attribute-name'  => array(
            'rule-name' => 'Egyedi üzenet',
        ),
        'frontpage_logo'  => array(
            'dimensions' => 'A kezdőlap logójának maximális magassága 60 képpont.',
        ),
        'favicon'  => array(
            'dimensions' => 'A Faviconnak 16 × 16 képpont méretűnek kell lennie.',
        ),
    ),
    'attributes'  => array(
        'email' => 'Email',
        'password' => 'Jelszó',
        'password_confirmation' => 'Jelszó megerősítése',
        'remember_me' => 'Emlékezz rám',
        'name' => 'Név',
        'imei' => 'IMEI',
        'imei_device' => 'IMEI vagy eszközazonosító',
        'fuel_measurement_type' => 'Üzemanyagmérés',
        'fuel_cost' => 'Üzemanyag költség',
        'icon_id' => 'Eszköz ikon',
        'active' => 'Aktív',
        'polygon_color' => 'Háttérszín',
        'devices' => 'Eszközök',
        'geofences' => 'Geofences',
        'overspeed' => 'Túlzott sebesség',
        'fuel_consumption' => 'Üzemanyag fogyasztás',
        'description' => 'Leírás',
        'map_icon_id' => 'Jelző ikon',
        'coordinates' => 'Térképpont',
        'date_from' => 'Dátum',
        'date_to' => 'Dátum',
        'code' => 'Kód',
        'title' => 'Cím',
        'note' => 'Tartalom',
        'path' => 'Fájl',
        'period_name' => 'Periódus neve',
        'days' => 'Napok',
        'devices_limit' => 'A készülékek korlátozzák',
        'trial' => 'Próba',
        'price' => 'Ár',
        'message' => 'Üzenet',
        'tag' => 'Paraméter',
        'timezone_id' => 'Időzóna',
        'unit_of_distance' => 'Távolsági egység',
        'unit_of_capacity' => 'Kapacitásegység',
        'user' => 'Használó',
        'group_id' => 'Csoport',
        'permission_to_add_devices' => 'Eszközök hozzáadása kettő',
        'unit_of_altitude' => 'Magassági egység',
        'sms_gateway_url' => 'SMS átjáró URL',
        'mobile_phone' => 'Mobiltelefon',
        'permission_to_use_sms_gateway' => 'SMS átjáró',
        'loged_at' => 'Utolsó bejelentkezés',
        'manager_id' => 'Menedzser',
        'sim_number' => 'SIM-szám',
        'device_model' => 'Eszközmodell',
        'rfid' => 'RFID',
        'phone' => 'Telefon',
        'device_id' => 'Eszköz',
        'tag_value' => 'Paraméterérték',
        'device_port' => 'Eszközport',
        'event' => 'Esemény',
        'port' => 'Kikötő',
        'device_protocol' => 'Eszköz protokoll',
        'protocol' => 'Protokoll',
        'sensor_name' => 'Érzékelő neve',
        'sensor_type' => 'Érzékelő típusa',
        'sensor_template' => 'Érzékelősablon',
        'tag_name' => 'Paraméter neve',
        'min_value' => 'Min. érték',
        'max_value' => 'Max. érték',
        'on_value' => 'BE értéket',
        'off_value' => 'KI értéket',
        'shown_value_by' => 'Az érték megjelenítése:',
        'full_tank_value' => 'Paraméterérték',
        'formula' => 'Képlet',
        'parameters' => 'Paraméterek',
        'full_tank' => 'Teljes tartály literben / gallonban',
        'fuel_tank_name' => 'Üzemanyagtartály neve',
        'odometer_value' => 'Érték',
        'odometer_value_by' => 'Úthosszmérő',
        'unit_of_measurement' => 'Mértékegység',
        'plate_number' => 'Rendszám',
        'vin' => 'VIN',
        'registration_number' => 'Regisztráció / Asset number',
        'object_owner' => 'Objektum tulajdonos / menedzser',
        'additional_notes' => 'További megjegyzések',
        'expiration_date' => 'Lejárati dátum',
        'days_to_remind' => 'Az emlékeztető napok a lejárat előtt',
        'type' => 'Típus',
        'format' => 'Formátum',
        'show_addresses' => 'Címek megjelenítése',
        'stops' => 'Leállítja',
        'speed_limit' => 'Sebességhatár',
        'zones_instead' => 'Címek helyett zónák',
        'daily' => 'Napi',
        'weekly' => 'Heti',
        'send_to_email' => 'Küldjön e-mailben',
        'filter' => 'Szűrő',
        'status' => 'Állapot',
        'date' => 'Dátum',
        'geofence_name' => 'Geofence név',
        'tail_color' => 'Farok színe',
        'tail_length' => 'Farokhossz',
        'engine_hours' => 'Motorórák száma',
        'detect_engine' => 'A motor be- / kikapcsolása',
        'min_moving_speed' => 'Min. mozgási sebesség km / h-ban',
        'min_fuel_fillings' => 'Min. üzemanyag-különbség az üzemanyag-töltetek észleléséhez',
        'min_fuel_thefts' => 'Min. üzemanyag-különbség a tüzelőanyag-lopások felderítésére',
        'expiration_by' => 'Lejárat dátuma:',
        'interval' => 'Intervallum',
        'last_service' => 'Utolsó szolgáltatás',
        'trigger_event_left' => 'A baloldali esemény bekapcsolása',
        'current_odometer' => 'Aktuális kilométer-számláló',
        'current_engine_hours' => 'A jelenlegi motorórák száma',
        'renew_after_expiration' => 'Megújul a lejárat után',
        'sms_template_id' => 'SMS sablon',
        'frequency' => 'Frekvencia',
        'unit' => 'Egység',
        'noreply_email' => 'Nincs válasz e-mail cím',
        'signature' => 'Aláírás',
        'use_smtp_server' => 'Használjon SMTP szervert',
        'smtp_server_host' => 'SMTP kiszolgáló állomás',
        'smtp_server_port' => 'SMTP szerver port',
        'smtp_security' => 'SMTP biztonság',
        'smtp_username' => 'SMTP felhasználónév',
        'smtp_password' => 'SMTP jelszó',
        'from_name' => 'Névből',
        'icons' => 'Ikonok',
        'server_name' => 'Szerver név',
        'available_maps' => 'Elérhető térképek',
        'default_language' => 'Alapértelmezett nyelv',
        'default_timezone' => 'Alapértelmezett időzóna',
        'default_unit_of_distance' => 'A távolság alapértelmezett egysége',
        'default_unit_of_capacity' => 'A kapacitás alapegysége',
        'default_unit_of_altitude' => 'Alapértelmezett magassági egység',
        'default_date_format' => 'Alapértelmezett dátumformátum',
        'default_time_format' => 'Alapértelmezett időformátum',
        'default_map' => 'Alapértelmezett térkép',
        'default_object_online_timeout' => 'Az alapértelmezett objektum online időtúllépése',
        'logo' => 'Logo',
        'login_page_logo' => 'Bejelentkezés oldal logója',
        'frontpage_logo' => 'Címlap logója',
        'favicon' => 'Favicon',
        'allow_users_registration' => 'Engedélyezze a felhasználók regisztrációját',
        'default_maps' => 'Alapértelmezett térképek',
        'subscription_expiration_after_days' => 'Előfizetés lejárta napok után',
        'gprs_template_id' => 'GPRS sablon',
        'calibrations' => 'Kalibrációk',
        'ftp_server' => 'FTP szerver',
        'ftp_port' => 'FTP port',
        'ftp_username' => 'FTP felhasználónév',
        'ftp_password' => 'FTP jelszó',
        'ftp_path' => 'FTP elérési út',
        'period' => 'Időszak',
        'hour' => 'Óra',
        'color' => 'Szín',
        'polyline' => 'Útvonal',
        'request_method' => 'Kérés módja',
        'authentication' => 'Hitelesítés',
        'username' => 'Felhasználónév',
        'encoding' => 'Kódolás',
        'time_adjustment' => 'Időbeállítás',
        'parameter' => 'Paraméter',
        'export_type' => 'Export típusa',
        'groups' => 'Csoportok',
        'file' => 'Fájl',
        'extra' => 'Külön',
        'parameter_value' => 'Paraméterérték',
        'enable_plans' => 'Engedélyezze a terveket',
        'payment_type' => 'Fizetési mód',
        'paypal_client_id' => 'Paypal ügyfél-azonosító',
        'paypal_secret' => 'Paypal titok',
        'paypal_currency' => 'Paypal valuta',
        'paypal_payment_name' => 'Paypal fizetési név',
        'objects' => 'Tárgyak',
        'duration_value' => 'Tartam',
        'permissions' => 'Engedélyek',
        'plan' => 'Terv',
        'default_billing_plan' => 'Alapértelmezett számlázási terv',
        'sensor_group_id' => 'Érzékelőcsoport',
        'daylight_saving_time' => 'A nyári időszámítás',
        'phone_number' => 'Telefonszám',
        'action' => 'Akció',
        'time' => 'Idő',
        'order' => 'Sorrend',
        'geocoder_api' => 'Geocoder API',
        'geocoder_cache' => 'Geocoder gyorsítótár',
        'geocoder_cache_days' => 'Geocoder cache napok',
        'geocoder_cache_delete' => 'Geokódolvasó-gyorsítótár törlése',
        'api_key' => 'API kulcsot',
        'api_url' => 'API url',
        'map_center_latitude' => 'Térképközpont szélességi fok',
        'map_center_longitude' => 'A térkép középső hosszúsága',
        'map_zoom_level' => 'Térkép nagyítása',
        'dst_type' => 'Típus',
        'provider' => 'Ellátó',
        'week_start_day' => 'Alapértelmezett naptári hét kezdő napja',
        'ip' => 'IP',
        'gprs_templates_only' => 'Csak GPRS sablonok parancsok megjelenítése',
        'select_all_objects' => 'Válassza ki az összes objektumot',
        'icon_type' => 'Ikon típusa',
        'on_setflag_1' => 'Kezdő karakter',
        'on_setflag_2' => 'A karakterek száma',
        'on_setflag_3' => 'A paraméter értéke',
        'domain' => 'Domain',
        'auth_id' => 'Hitelazonosító',
        'auth_token' => 'Auth token',
        'senders_phone' => 'A küldő telefonszáma',
        'database_clear_status' => 'Automatikus történelemtörlés',
        'database_clear_days' => 'Napok tartani',
        'ignition_detection' => 'Gyújtásérzékelés',
        'here_map_id' => 'HERE.com app ID',
        'here_map_code' => 'HERE.com app kód',
        'login_page_panel_background_color' => 'A bejelentkezési oldal háttérszíne',
        'login_page_panel_transparency' => 'Bejelentkezés oldal panel átlátszósága',
        'visible' => 'Látható',
        'template_color' => 'Sablon színe',
        'background' => 'Háttér',
        'login_page_text_color' => 'Bejelentkezés oldal szöveges színe',
        'login_page_background_color' => 'Bejelentkezési oldal háttérszíne',
        'welcome_text' => 'Üdvözlő szöveg',
        'bottom_text' => 'Alsó szöveg',
        'apple_store_link' => 'Apple Store link',
        'google_play_link' => 'Google Play link',
        'position' => 'Pozíció',
        'stop_duration_longer_than' => 'Az időtartam hosszabb, mint',
        'mapbox_access_token' => 'MapBox hozzáférési token',
        'flag' => 'Zászló',
        'shift_start' => 'Shift start',
        'shift_finish' => 'Shift befejezése',
        'shift_start_tolerance' => 'Shift kezdő tűrés',
        'shift_finish_tolerance' => 'Shift befejezési tűrés',
        'excessive_exit' => 'Túlzott kilépés',
        'smtp_authentication' => 'SMTP hitelesítés',
        'skip_calibration' => 'Kizárások kizárása a kalibrálási tartományból',
        'bing_maps_key' => 'Bing térképek kulcsát',
        'stripe_public_key' => 'STRIPE nyilvános kulcs',
        'stripe_secret_key' => 'STRIPE titkos kulcs',
        'stripe_currency' => 'STRIPE valuta',
        'priority' => 'Kiemelten fontos',
        'pickup_address' => 'Felvételi cím',
        'delivery_address' => 'Szállítási cím',
        'schedule' => 'Menetrend',
        'sound_notification' => 'Hangos értesítés',
        'push_notification' => 'App Push értesítés',
        'email_notification' => 'Email értesítés',
        'sms_notification' => 'SMS értesítés',
        'webhook_notification' => 'Webhook értesítés',
        'offline_duration_longer_than' => 'Az offline időtartam hosszabb, mint',
        'sms_gateway_headers' => 'SMS átjáró fejlécek',
        'forward' => 'Előre',
        'by_status' => 'Állapot szerint',
        'icon_status_online' => 'Online állapot ikon',
        'icon_status_offline' => 'Offline állapot ikon',
        'icon_status_ack' => 'Ack állapot ikon',
        'icon_status_engine' => 'Motor állapot ikon',
        'server_description' => 'Szerver leírása',
        'bypass_invalid' => 'Érvénytelen koordináták engedélyezése',
        'installation_date' => 'Telepítési dátum',
        'sim_activation_date' => 'SIM-aktiválási dátum',
        'sim_expiration_date' => 'SIM lejárati dátum',
        'activation_date' => 'Aktiválási dátum',
        'secret_key' => 'Titkos kulcs',
        'currency' => 'Valuta',
        'client_id' => 'Ügyfélazonosító',
        'secret' => 'Titok',
        'payment_name' => 'Fizetési név',
        'merchant_id' => 'Kereskedőazonosító',
        'public_key' => 'Nyilvános kulcs',
        'private_key' => 'Privát kulcs',
        'braintree_plan_ids' => 'Braintree terv azonosító a szerver tervekhez',
        'braintree_plan_explanation' => 'A Braintree kezelőpanelén újratölthető számlázási tervet kell létrehoznia, válassza ki a kiszolgálón az itt megadott számlázási tervet.',
        'braintree_merchant_explanation' => 'A Braintree vezérlőpultján kereskedői számlát kell létrehoznia, és be kell írnia az azonosítót.',
        'braintree_currency_match' => 'A kereskedői számla pénznemének meg kell egyeznie a terv pénznemével',
        'merchant_account_id' => 'Kereskedelmi fiók azonosítója',
        'master_key' => 'Mester kulcs',
        'token' => 'Jelképes',
        'paydunya_currency_warning' => 'Az egyetlen rendelkezésre álló pénznem az FCFA. Ha úgy konfigurálja, győződjön meg róla, hogy más fizetései azonos pénznemben vannak. Ellenkező esetben a felhasználóknak lehetőségük van ugyanazon terv megvásárlására különböző árakkal.',
        'country' => 'Ország',
        'merchant_account' => 'Kereskedői fiók',
        'origin_key' => 'Eredeti kulcs',
        'test_config' => 'Tesztkonfiguráció',
        'environment' => 'Környezet',
        'three_letter_iso' => 'Három betűs ISO-valuta kód',
        'google_maps_key' => 'Google Maps API kulcs',
        'maptiler_key' => 'MapTiler gomb',
        'streetview_api' => 'Streetview API',
        'streetview_key' => 'Streetview API kulcs',
        'openmaptiles_url' => 'OpenMapTiles URL',
        'unit_cost' => 'Darabköltség',
        'supplier' => 'Támogató',
        'buyer' => 'Vevő',
        'expense_type' => 'Költségtípus',
        'device_cameras_days' => 'Napok az eszközkamera képeinek tárolásához',
        'api_app_id' => 'App ID',
        'api_app_code' => 'App Code',
        'api_app_secret' => 'App Secret',
        'invoice_number' => 'Számlaszám',
        'one_time_payment' => 'Egyszeri fizetés',
        'sharing_id' => 'Megosztása',
        'idle_duration_longer_than' => 'Az alapjárati idő hosszabb, mint',
        'delete_after_expiration' => 'Törlés lejárat után',
        'sharing_email' => 'E-mail értesítés megosztási linktel',
        'sharing_sms' => 'SMS értesítés megosztási linktel',
        'sms' => 'SMS',
        'template' => 'Sablon',
        'commands' => 'Parancsok',
        'brand' => 'A készülék gyártója',
        'model' => 'Modell',
        'apn_name' => 'APN név',
        'apn_username' => 'APN felhasználónév',
        'apn_password' => 'APN jelszó',
        'ignition_duration_longer_than' => 'A gyújtás időtartama hosszabb mint',
        'tasks' => 'Feladatok',
        'id' => 'ID',
        'columns' => 'Oszlopok',
        'called_at' => 'Hívjon',
        'alert_type' => 'Riasztás típusa',
        'response' => 'Válasz',
        'remarks' => 'Megjegyzések',
        'client' => 'Ügyfél',
        'event_type' => 'Esemény típus',
        'data_type' => 'Adattípus',
        'slug' => 'Meztelen csiga',
        'required' => 'Kívánt',
        'validation' => 'Érvényesítés',
        'text' => 'Szöveg',
        'datetime' => 'Dátum idő',
        'boolean' => 'Logikai',
        'select' => 'Választ',
        'multiselect' => 'Többszörös választás',
        'options' => 'Lehetőségek',
        'option' => 'Választási lehetőség',
        'default' => 'Alapértelmezett',
        'msisdn' => 'MSISDN',
        'notes' => 'Megjegyzések',
        'skip_empty' => 'Üres érték kihagyása',
        'distance_limit' => 'Távolsághatár',
        'distance_tolerance' => 'Távolságtűrés',
        'pois' => 'POI-k',
        'device_type_id' => 'Eszköztípus',
        'custom_fields' => 'Egyéni mezők',
        'device_name' => 'Eszköz neve',
        'auto_hide_notification' => 'A felugró ablak automatikus elrejtése',
        'continuous_duration' => 'Folyamatos időtartam',
        'captcha_provider' => 'CAPTCHA szolgáltató',
        'google_recaptcha' => 'Google reCAPTCHA',
        'recaptcha_site_key' => 'ReCAPTCHA webhelykulcs',
        'recaptcha_secret_key' => 'ReCAPTCHA titkos kulcs',
        'g-recaptcha-response' => 'ReCAPTCHA',
        'here_api_key' => 'HERE.com API kulcs',
        'time_duration' => 'Időtartam',
        'offset' => 'Eltolás',
        'geofence_device' => 'Eszköz',
        'webhook_key' => 'Webhook kulcs',
        'skip_blank_results' => 'Az üres eredmények kihagyása',
        'account_sid' => 'Fiók SID',
        'speed_limit_tolerance' => 'Sebességkorlátozási tűrés',
        'started_at' => 'Kezdési idő',
        'ended_at' => 'Idő vége',
        'region' => 'Vidék',
        'adapted' => 'Adaptált',
        'silent_notification' => 'Figyelmen kívül hagyja az értesítéseket, ha perceken belül ismétlődik',
        'tomtom_key' => 'TomTom kulcs',
        'authorized' => 'Felhatalmazott',
        'email_verification' => 'Email megerősítés',
        'project_id' => 'Projektazonosító',
        'project_psw' => 'Projektjelszó',
        'verify_id' => 'Igazolja az azonosítót',
        'app_tracker_login' => 'A Tracker alkalmazás bejelentkezés engedélyezve',
        'merchant_code' => 'Kereskedő kódja',
        'count' => 'Számol',
        'detect_distance' => 'Távolságérzékelés által',
        'detect_speed' => 'Sebességérzékelés által',
        'routes' => 'Útvonalak',
        'battery_threshold' => 'Akkumulátor küszöbértéke',
        'state' => 'Állapot',
        'duration' => 'Időtartam',
        'statuses' => 'Állapotok',
        'first_name' => 'Keresztnév',
        'last_name' => 'Vezetéknév',
        'personal_code' => 'Személyi kód',
        'birth_date' => 'Születési dátum',
        'company_id' => 'Vállalat',
        'registration_code' => 'Regisztrációs kód',
        'vat_number' => 'Adószám',
        'address' => 'Cím',
        'comment' => 'Megjegyzés',
        'duration_format' => 'Időtartam formátuma',
        'default_duration_format' => 'Alapértelmezett időtartam formátum',
        'login_token' => 'Jelképes',
        'monthly' => 'Havi',
        'amount' => 'Összeg',
        'bad_sms_gateway_url' => 'Hibás SMS-átjáró URL-címe vagy konfigurációja',
        'rates' => 'Árak',
        'fields' => 'Mezők',
        'tenant_id' => 'Bérlői azonosító',
        'client_secret' => 'Ügyfél titka',
        'default_login_methods' => 'Alapértelmezett bejelentkezési módok',
        'forwards' => 'Előre',
        'detection_speed' => 'Érzékelési sebesség',
        'detach_on_no_position_data' => 'Leválasztás pozícióadatok nélkül',
        'extra_expiration_time' => 'Extra lejárati idő',
        'fuel_detect_sec_after_stop' => 'Üzemanyagcsere észlelése leállás után',
        'login_periods' => 'Bejelentkezési időszakok',
        'readonly' => 'Csak olvasható',
        'popup_notification' => 'Felugró értesítés',
        'allow_user_change_plan' => 'Felhasználói módosítási terv engedélyezése',
        'only_one_session' => 'Csak egy ülés',
        'value' => 'Érték',
        'bitcut_start' => 'Kis kezdés',
        'bitcut_count' => 'Bitszám',
        'move_duration_longer_than' => 'A mozgás időtartama hosszabb, mint',
        'min_parking_duration' => 'Minimális parkolási idő',
        'model_id' => 'Modell',
        'min_load_duration' => 'Minimális terhelési időtartam',
        'min_detect_change' => 'Minimális változás az észleléshez',
        'role_id' => 'Szerep',
        'on_collision' => 'Ütközéskor',
        'launcher' => 'Indító',
        'processed' => 'Feldolgozott',
        'created_at' => 'Létrehozva:',
        'reserved_at' => 'Foglalva:',
        'completed_at' => 'Elkészült:',
        'failed_at' => 'Sikertelen a',
        'pickup_time_from' => 'Átvételi idő innen',
        'pickup_time_to' => 'Felvételi idő a',
        'delivery_time_from' => 'Szállítási idő tól',
        'delivery_time_to' => 'Szállítási idő ig',
        'task_set_id' => 'Feladatkészlet',
        'firebase_config' => 'Firebase konfig',
    ),
    'same_protocol' => 'Az eszközöknek ugyanazzal a protokollal kell rendelkezniük.',
    'contains' => 'A :attribute tartalmaznia kell :value .',
    'ip_port' => 'Az :attribute nem egyezik meg az IP:PORT formátummal',
    'required_unless' => 'A :attribute mező szükséges.',
    'translation_file' => 'A fordítási fájl nem létezik',
    'placeholder' => 'Az attribútum &quot; :placeholder &quot; hiányzik',
    'image_valid' => 'A :attribute képnek kell lennie.',
    'missing_configuration_value' => 'Hiányzik :attribute érték.',
    'sms_gateway_error' => 'Az üzenetet nem lehet elküldeni. Sms átjáró hiba.',
    'cant_configure_device' => 'Nem sikerült konfigurálni az eszközt',
    'field_does_not_exist' => 'Mező :attribute nem létezik',
    'unsupported_rules' => 'Nem támogatott szabályok:',
    'unsupported_parameterized_rules' => 'Nem támogatott paraméterezett szabályok:',
    'cant_update_custom_field' => 'Nem lehet frissíteni a &quot; :field &quot; :field mert léteznek rekordok az egyéni mező használatával',
    'secure_password' => 'Biztonságos jelszó',
    'uppercase_character' => 'Nagybetű szükséges',
    'lowercase_character' => 'Kisbetűs karakter szükséges',
    'digit_character' => 'Számjegyű karakter szükséges',
    'wrong_captcha' => 'Rossz CAPTCHA',
    'dimensions' => 'A :attribute érvénytelen képmérettel rendelkezik.',
    'mimetypes' => 'A :attribute a következő típusú fájlnak kell lennie :values .',
    'in_array' => 'Az :attribute mező nem létezik az :other fájlban.',
    'uploaded' => 'A :attribute feltöltése nem sikerült. Lehetséges, hogy a szerver nem fogad el ilyen méretet.',
    'login_methods'  => array(
        'email' => 'Email',
        'azure' => 'Microsoft Azure',
    ),
    'host' => 'Az :attribute nem érvényes gazdagép',
    'host_port' => 'Az :attribute nem egyezik a HOST :PORT formátummal',
    'unique_table_msg' => 'Az :attribute már szerepel :table',
    'pay_provider_min_charge' => 'A :pay_provider szolgáltatással járó díjak minimális összege :amount',
    'formula' => 'Érvénytelen képlet',
    'gt'  => array(
        'numeric' => 'Az :attribute nagyobbnak kell lennie, mint :value .',
        'file' => 'Az :attribute nagyobbnak kell lennie, mint :value kilobájt.',
        'string' => 'Az :attribute nagyobbnak kell lennie, mint :value karakter.',
        'array' => 'Az :attribute több mint :value elemet kell tartalmaznia.',
    ),
    'gte'  => array(
        'numeric' => 'Az :attribute nagyobbnak vagy egyenlőnek kell lennie, mint :value .',
        'file' => 'Az :attribute nagyobbnak vagy egyenlőnek kell lennie, mint :value kilobyte.',
        'string' => 'Az :attribute nagyobbnak vagy egyenlőnek kell lennie, mint :value karakter.',
        'array' => 'Az :attribute nek legalább :value elemekkel kell rendelkeznie.',
    ),
    'lt'  => array(
        'numeric' => 'Az :attribute kisebbnek kell lennie, mint :value .',
        'file' => 'Az :attribute kisebbnek kell lennie, mint :value kilobájt.',
        'string' => 'Az :attribute kisebbnek kell lennie, mint :value karakter.',
        'array' => 'Az :attribute elemnek kevesebbnek kell lennie, mint :value .',
    ),
    'lte'  => array(
        'numeric' => 'Az :attribute kisebbnek vagy egyenlőnek kell lennie, mint :value .',
        'file' => 'Az :attribute kisebbnek vagy egyenlőnek kell lennie, mint :value kilobájt.',
        'string' => 'Az :attribute kisebb vagy egyenlő lehet, mint :value karakter.',
        'array' => 'Az :attribute nem tartalmazhat több mint :value elemet.',
    ),
    'special_character' => 'Speciális karakter szükséges',
    'task_set_dedicated_to_device' => 'A feladatkészlet az :device device-ra vonatkozik',
    'tasks_only_one_device' => 'A feladatok csak egy eszközhöz tartozhatnak',
);