<?php

return array(

    'accepted' => ' :attribute pitää tulla hyväksytyksi.',
    'active_url' => ' :attribute ei ole kelvollinen URL.',
    'after' => ' :attribute täytyy olla päivämäärä jälkeen :date.',
    'alpha' => ' :attribute voi sisältää vain kirjaimia.',
    'alpha_dash' => ' :attribute voi sisältää vain kirjaimia, numeroita, ja viivoja.',
    'alpha_num' => ' :attribute voi sisältää vain kirjaimia, numeroita.',
    'array' => ' :attribute pitää olla joukko.',
    'before' => ' :attribute pitää olla päivämäärä ennen :date.',
    'between'  => array(
        'numeric' => ' :attribute pitää olla :min ja :max välistä.',
        'file' => ' :attribute pitää olla :min ja :max kilotavun väliltä.',
        'string' => ' :attribute pitää olla :min ja :max merkin väliltä.',
        'array' => ' :attribute pitää olla :min ja :max kohteen väliltä.',
    ),
    'confirmed' => ':attribute varmistus ei täsmää.',
    'date' => ':attribute ei ole kelvollinen päivämäärä.',
    'date_format' => ':attribute ei vastaa formaattia :format.',
    'different' => ':attribute ja :or pitää olla erilainen.',
    'digits' => ':attribute pitää olla :digits numeroa.',
    'digits_between' => ':attribute pitää olla :min ja :max numeroa.',
    'email' => ':attribute pitää olla kelvollinen sähköposti osoite.',
    'exists' => 'valittu :attribute ei ole kelvollinen.',
    'image' => ':attribute pitää olla kuva.',
    'in' => 'valittu :attribute ei ole kelvollinen.',
    'integer' => ':attribute pitää olla kokonaisluku.',
    'ip' => ':attribute pitää olla kelvollinen IP-osoite.',
    'max'  => array(
        'numeric' => ':attribute ei voi olla suurempi kuin :max.',
        'file' => ':attribute ei voi olla suurempi kuin :max kilotavua.',
        'string' => ':attribute ei voi olla suurempi kuin :max merkkiä.',
        'array' => ':attribute ei voi olla suurempi kuin :max kohdetta.',
    ),
    'mimes' => ' :attribute pitää olla tiedosto tyyppiä: :values.',
    'min'  => array(
        'numeric' => ':attribute pitää olla vähintään :min.',
        'file' => ':attribute pitää olla vähintään :min kilotavua.',
        'string' => ':attribute pitää olla vähintään :min merkkiä.',
        'array' => ':attribute pitää olla vähintään :min kohdetta.',
    ),
    'not_in' => 'valittu :attribute ei ole kelvollinen.',
    'numeric' => ':attribute pitää olla numero.',
    'regex' => ':attribute formaatti ei kelpaa.',
    'required' => ':attribute kenttä on pakollinen.',
    'required_if' => ':attribute kenttä on pakollinen.',
    'required_with' => ':attribute kenttä on pakollinen kun :values on saatavilla.',
    'required_with_all' => ':attribute kenttä on pakollinen kun :values on saatavilla.',
    'required_without' => ':attribute kenttä on pakollinen kun :values ei ole saatavilla.',
    'required_without_all' => ':attribute kenttä on pakollinen kun yksikään :values ei ole saatavilla.',
    'same' => ':attribute ja :other pitää olla samanlaiset.',
    'size'  => array(
        'numeric' => ':attribute pitää olla :size.',
        'file' => ':attribute pitää olla :size kilotavua.',
        'string' => ':attribute pitää olla :size merkkiä.',
        'array' => ':attribute pitää sisältää :size kohdetta.',
    ),
    'unique' => ':attribute on jo käytössä.',
    'url' => ':attribute formaatti ei kelpaa.',
    'array_max' => ':attribute max kohdetta :max.',
    'lesser_than' => ':attribute pitää olla vähemmän kuin :other',
    'custom'  => array(
        'attribute-name'  => array(
            'rule-name' => 'custom-message',
        ),
        'frontpage_logo'  => array(
            'dimensions' => 'Etusivun logon korkeus on 60 kuvapistettä.',
        ),
        'favicon'  => array(
            'dimensions' => 'Faviconin on oltava 16 x 16 kuvapistettä.',
        ),
    ),
    'attributes'  => array(
        'email' => 'Sähköposti',
        'password' => 'Salasana',
        'password_confirmation' => 'Salasanan vahvistus',
        'remember_me' => 'Muista minut',
        'name' => 'Nimi',
        'imei' => 'IMEI',
        'imei_device' => 'IMEI tai Laitteen tunnistenumero',
        'fuel_measurement_type' => 'Polttoaineen mittaus',
        'fuel_cost' => 'Polttoaineen hinta',
        'icon_id' => 'Laitteen kuvake',
        'active' => 'Aktiivinen',
        'polygon_color' => 'Taustaväri',
        'devices' => 'Laitteet',
        'geofences' => 'Geofencet',
        'overspeed' => 'Ylinopeus',
        'fuel_consumption' => 'Polttoaineen kulutus',
        'description' => 'Kuvaus',
        'map_icon_id' => 'Markkerin kuvake',
        'coordinates' => 'Kartan piste',
        'date_from' => 'Päivämäärä alkaen',
        'date_to' => 'Päivämäärä päättyen',
        'code' => 'Koodi',
        'title' => 'Nimike',
        'note' => 'Sisältö',
        'path' => 'Tiedosto',
        'period_name' => 'Ajanjakson nimi',
        'days' => 'Päiviä',
        'devices_limit' => 'Laitteiden määrärajoitus',
        'trial' => 'Koeversio',
        'price' => 'Hinta',
        'message' => 'Viesti',
        'tag' => 'Parametri',
        'timezone_id' => 'Aikavyöhyke',
        'unit_of_distance' => 'Matkan yksikkö',
        'unit_of_capacity' => 'Tilavuuden yksikkö',
        'unit_of_altitude' => 'Korkeuden yksikkö',
        'user' => 'Käyttäjä',
        'group_id' => 'Ryhmä',
        'permission_to_add_devices' => 'Lisää laite',
        'sms_gateway_url' => 'SMS-yhdyspalvelimen URL',
        'mobile_phone' => 'Mobiili puhelin',
        'permission_to_use_sms_gateway' => 'SMS-yhdyspalvelin',
        'loged_at' => 'Viimeinen kirjautuminen',
        'manager_id' => 'Valvoja',
        'sim_number' => 'SIM numero',
        'device_model' => 'Laitteen malli',
        'rfid' => 'RFID',
        'phone' => 'Puhelin',
        'device_id' => 'Laite',
        'tag_value' => 'Parametrin arvo',
        'device_port' => 'Laite portti',
        'event' => 'Tapahtuma',
        'port' => 'Portti',
        'device_protocol' => 'Laitteen protokolla',
        'protocol' => 'Protokolla',
        'sensor_name' => 'Sensorin nimi',
        'sensor_type' => 'Sensorin tyyppi',
        'sensor_template' => 'Anturi malliin',
        'tag_name' => 'Parametrin nimi',
        'min_value' => 'Min. arvo',
        'max_value' => 'Max. arvo',
        'on_value' => 'ON arvo',
        'off_value' => 'OFF arvo',
        'shown_value_by' => 'Näytä arvon mukaan',
        'full_tank_value' => 'Parametrin arvo',
        'formula' => 'Kaava',
        'parameters' => 'Parametrit',
        'full_tank' => 'Täysi tankki litroissa/gallonoissa',
        'fuel_tank_name' => 'Polttoainetankin nimi',
        'odometer_value' => 'Arvo',
        'odometer_value_by' => 'Matkamittari',
        'unit_of_measurement' => 'Mittayksikkö',
        'plate_number' => 'Kilven numero',
        'vin' => 'Ajoneuvon tunnistenumero',
        'registration_number' => 'Rekisteri / Koneen numero',
        'object_owner' => 'Laitteen omistaja / Valvoja',
        'additional_notes' => 'Lisämerkinnät',
        'expiration_date' => 'Vanhenemispäivämäärä',
        'days_to_remind' => 'Päiviä ennen vanhenemisen muistutusta',
        'type' => 'Tyyppi',
        'format' => 'Formaatti',
        'show_addresses' => 'Näytä osoitteet',
        'stops' => 'Pysähdykset',
        'speed_limit' => 'Nopeusrajoitus',
        'zones_instead' => 'Alueet osoitteiden sijaan',
        'daily' => 'Päivittäinen',
        'weekly' => 'Viikottainen',
        'send_to_email' => 'Lähetä sähköpostiin',
        'filter' => 'Suodata',
        'status' => 'Tila',
        'date' => 'Päivämäärä',
        'geofence_name' => ' Geofencen nimi',
        'tail_color' => 'Hännän väri',
        'tail_length' => 'Hännän pituus',
        'engine_hours' => 'Moottorin käyttöaika',
        'detect_engine' => 'Havaitse moottori ON/OFF',
        'min_moving_speed' => 'Min. liikkumis nopeus km/h',
        'min_fuel_fillings' => 'Min. polttoaine erotus tankkauksien tunnistukseen',
        'min_fuel_thefts' => 'Min. polttoaineen erotus polttoaine varkauksien tunnistukseen',
        'expiration_by' => 'Vanhenee',
        'interval' => 'aikaväli',
        'last_service' => 'Viimeisin huolto',
        'trigger_event_left' => 'Käynnistä tapahtuma kun jäljellä',
        'current_odometer' => 'Matkamittarissa tällähetkellä',
        'current_engine_hours' => 'Moottorin käyttötunnit tällähetkellä',
        'renew_after_expiration' => 'Uudista vanhenemisen jälkeen',
        'sms_template_id' => 'SMS mallipohja',
        'frequency' => 'Taajuus',
        'unit' => 'Yksikkä',
        'noreply_email' => 'ei vastaus sähköpostiosoite',
        'signature' => 'Allekirjoitus',
        'use_smtp_server' => 'Käytä SMTP palvelinta',
        'smtp_server_host' => 'SMTP palvelin ',
        'smtp_server_port' => 'SMTP palvelin portti',
        'smtp_security' => 'SMTP suojaus',
        'smtp_username' => 'SMTP käyttäjänimi',
        'smtp_password' => 'SMTP salasana',
        'from_name' => 'Nimestä',
        'icons' => 'Kuvakkeet',
        'server_name' => 'Palvelimen nimi',
        'available_maps' => 'Saatavilla olevat kartat',
        'default_language' => 'Oletuskieli',
        'default_timezone' => 'Oletusaikavyöhyke',
        'default_unit_of_distance' => 'Oletusarvo matkanyksikkö',
        'default_unit_of_capacity' => 'Oletusarvo tilavuudenyksikkö',
        'default_unit_of_altitude' => 'Oletusarvo korkeudenyksikkä',
        'default_date_format' => 'Oletus päivämäärän muoto',
        'default_time_format' => 'Oletus ajan muoto',
        'default_map' => 'Oletuskartta',
        'default_object_online_timeout' => 'Kohteen aikakatkaisun oletusarvo',
        'logo' => 'Logo',
        'login_page_logo' => 'Sisäänkirjautumis-sivun logo',
        'frontpage_logo' => 'Etusivun logo',
        'favicon' => 'Favicon',
        'allow_users_registration' => 'Salli käyttäjien rekisteröityminen',
        'default_maps' => 'Oletuskartat',
        'subscription_expiration_after_days' => 'Tilauksen vanhenemiseen jäljellä päiviä',
        'gprs_template_id' => 'GPRS mallipohja',
        'calibrations' => 'Kalibroinnit',
        'ftp_server' => 'FTP palvelin',
        'ftp_port' => 'FTP portti',
        'ftp_username' => 'FTP käyttäjänimi',
        'ftp_password' => 'FTP salasana',
        'ftp_path' => 'FTP reitti',
        'period' => 'Jakso',
        'hour' => 'Tunti',
        'color' => 'Väri',
        'polyline' => 'Reitti',
        'request_method' => 'pyyntö tapa',
        'authentication' => 'Todennus',
        'username' => 'Käyttäjänimi',
        'encoding' => 'Koodaus',
        'time_adjustment' => 'ajan asetus',
        'parameter' => 'Parametri',
        'export_type' => 'Vienti tyyppi',
        'groups' => 'Ryhmät',
        'file' => 'Tiedosto',
        'extra' => 'Extra',
        'parameter_value' => 'Parametrin arvo',
        'enable_plans' => 'Ota tilauspaketti käyttöön',
        'payment_type' => 'Maksutapa',
        'paypal_client_id' => 'Paypal käyttäjä ID',
        'paypal_secret' => 'Paypal secret',
        'paypal_currency' => 'Paypal valuutta',
        'paypal_payment_name' => 'Paypal maksun nimi',
        'objects' => 'Kohteet',
        'duration_value' => 'Kesto',
        'permissions' => 'Oikeudet',
        'plan' => 'Tilauspaketti',
        'default_billing_plan' => 'Oletus laskutus paketti',
        'sensor_group_id' => 'Sensori ryhmä',
        'daylight_saving_time' => 'Kesäaika',
        'phone_number' => 'Puhelinnumero',
        'action' => 'Toimita',
        'time' => 'Aika',
        'order' => 'Tilaus',
        'geocoder_api' => 'Geocoder API',
        'geocoder_cache' => 'Geocoder cache',
        'geocoder_cache_days' => 'Geocoder cache days',
        'geocoder_cache_delete' => 'Delete geocoder cache',
        'api_key' => 'API Avain',
        'api_url' => 'API url',
        'map_center_latitude' => 'Kartan keskipisteen leveysaste',
        'map_center_longitude' => 'Kartan keskipisteen pituusaste',
        'map_zoom_level' => 'Kartan tarkennus taso',
        'dst_type' => 'Tyyppi',
        'provider' => 'Toimittaja',
        'week_start_day' => 'Oletuskoodi kalenteriviikossa tulopäivää',
        'ip' => 'IP',
        'gprs_templates_only' => 'Näytä GPRS Mallit komentoja vain',
        'select_all_objects' => 'Valitse kaikki objektit',
        'icon_type' => 'Icon type',
        'on_setflag_1' => 'Starting character',
        'on_setflag_2' => 'Amount of characters',
        'on_setflag_3' => 'Value of parameter',
        'domain' => 'Domain',
        'auth_id' => 'Auth ID',
        'auth_token' => 'Auth token',
        'senders_phone' => 'Sender\'s phone number',
        'database_clear_status' => 'Automaattinen historia cleanup',
        'database_clear_days' => 'Days pitää',
        'ignition_detection' => 'Ignition havaitseminen',
        'template_color' => 'Mallin väri',
        'background' => 'Tausta',
        'login_page_text_color' => 'Kirjautumissivun tekstin väri',
        'login_page_background_color' => 'Kirjautumissivun taustaväri',
        'welcome_text' => 'Tervetulotoivotus',
        'bottom_text' => 'Alaosa',
        'apple_store_link' => 'AppleStore-linkki',
        'google_play_link' => 'GooglePlay-linkki',
        'here_map_id' => 'HERE.com-sovelluksen tunnus',
        'here_map_code' => 'HERE.com sovelluskoodi',
        'login_page_panel_background_color' => 'Kirjautuminen sivupaneelin taustaväri',
        'login_page_panel_transparency' => 'Kirjautuminen sivupaneelin läpinäkyvyys',
        'visible' => 'Näkyvä',
        'position' => 'Asento',
        'stop_duration_longer_than' => 'Pysäytä kesto yli',
        'mapbox_access_token' => 'MapBoxin käyttöoikeus',
        'flag' => 'Lippu',
        'shift_start' => 'Vaihda aloitus',
        'shift_finish' => 'Vaihda viimeistely',
        'shift_start_tolerance' => 'Vaihtorajoituskestävyys',
        'shift_finish_tolerance' => 'Vaihda viimeistelysietokyky',
        'excessive_exit' => 'Liiallinen poistuminen',
        'smtp_authentication' => 'SMTP-todennus',
        'skip_calibration' => 'Sulje laskelmat pois kalibrointialueelta',
        'bing_maps_key' => 'Bing-karttojen avain',
        'stripe_public_key' => 'STRIPE julkinen avain',
        'stripe_secret_key' => 'STRIPE salainen avain',
        'stripe_currency' => 'STRIPE valuutta',
        'priority' => 'Prioriteetti',
        'pickup_address' => 'Nouto-osoite',
        'delivery_address' => 'Toimitusosoite',
        'schedule' => 'Ajoittaa',
        'sound_notification' => 'Ääniilmoitus',
        'push_notification' => 'App Push -ilmoitus',
        'email_notification' => 'Sähköposti-ilmoitus',
        'sms_notification' => 'SMS-ilmoitus',
        'webhook_notification' => 'Webhook-ilmoitus',
        'offline_duration_longer_than' => 'Offline-kesto on pidempi kuin',
        'sms_gateway_headers' => 'SMS-yhdyskäytävien otsikot',
        'forward' => 'Eteenpäin',
        'by_status' => 'Tilauksen mukaan',
        'icon_status_online' => 'Online-tilan kuvake',
        'icon_status_offline' => 'Offline-tilan kuvake',
        'icon_status_ack' => 'Ack-tilan kuvake',
        'icon_status_engine' => 'Moottorin tilan kuvake',
        'server_description' => 'Palvelimen kuvaus',
        'bypass_invalid' => 'Salli virheelliset koordinaatit',
        'installation_date' => 'Asennuspäivä',
        'sim_activation_date' => 'SIM-kortin aktivointipäivä',
        'sim_expiration_date' => 'SIM-kortin viimeinen voimassaolopäivä',
        'activation_date' => 'Aktivointipäivä',
        'secret_key' => 'Salainen avain',
        'currency' => '',
        'client_id' => 'Asiakastunnus',
        'secret' => 'Salaisuus',
        'payment_name' => 'Maksun nimi',
        'merchant_id' => 'Kauppiaan tunnus',
        'public_key' => 'Julkinen avain',
        'private_key' => 'Yksityinen avain',
        'braintree_plan_ids' => 'Braintree-suunnitelman tunnukset palvelinsuunnitelmille',
        'braintree_plan_explanation' => 'Sinun on luotava uusi laskutussuunnitelma Braintree-ohjauspaneelissa, valitse ID tässä vastaava laskutussuunnitelma palvelimellasi.',
        'braintree_merchant_explanation' => 'Sinun on luotava kauppiastili Braintree-ohjauspaneelissa ja annettava tunnus tähän.',
        'braintree_currency_match' => 'Merchant-tilin valuutan on vastattava suunnitelman valuuttaa',
        'merchant_account_id' => 'Kauppias-tilin tunnus',
        'master_key' => 'Yleisavain',
        'token' => 'Symbolinen',
        'paydunya_currency_warning' => 'Ainoa käytettävissä oleva valuutta on FCFA. Jos määrität sen, varmista, että muut maksut vastaavat samaa valuuttaa. Muuten käyttäjät voivat ostaa saman suunnitelman eri hinnoilla.',
        'country' => 'Maa',
        'merchant_account' => 'Kauppias-tili',
        'origin_key' => 'Alkuperä-avain',
        'test_config' => 'Testausasetukset',
        'environment' => 'Ympäristö',
        'three_letter_iso' => 'Kolmen kirjaimen ISO-valuuttakoodi',
        'google_maps_key' => 'Google-karttojen API-avain',
        'maptiler_key' => 'MapTiler-näppäin',
        'streetview_api' => 'Streetview API',
        'streetview_key' => 'Streetview API -avain',
        'openmaptiles_url' => 'OpenMapTiles-URL-osoite',
        'unit_cost' => 'Yksikköhinta',
        'supplier' => 'Toimittaja',
        'buyer' => 'Ostaja',
        'expense_type' => 'Kulutyyppi',
        'device_cameras_days' => 'Päivää laitekameran kuvien pitämiseen',
        'api_app_id' => 'Sovelluksen tunnus',
        'api_app_code' => 'Sovelluskoodi',
        'api_app_secret' => 'Sovellussalaisuus',
        'invoice_number' => 'Laskun numero',
        'one_time_payment' => 'Kertamaksu',
        'sharing_id' => 'Jakaminen',
        'idle_duration_longer_than' => 'Joutokäynti kestää yli',
        'delete_after_expiration' => 'Poista vanhenemisesta',
        'sharing_email' => 'Sähköposti-ilmoitus jakamislinkillä',
        'sharing_sms' => 'Tekstiviesti-ilmoitus jakamislinkillä',
        'sms' => 'Tekstiviesti',
        'template' => 'Sapluuna',
        'commands' => 'Komennot',
        'brand' => 'Laitteen valmistaja',
        'model' => 'Malli',
        'apn_name' => 'APN-nimi',
        'apn_username' => 'APN-käyttäjänimi',
        'apn_password' => 'APN-salasana',
        'ignition_duration_longer_than' => 'Sytytyksen kesto yli',
        'tasks' => 'Tehtävät',
        'id' => 'ID',
        'columns' => 'Pylväät',
        'called_at' => 'Soita',
        'alert_type' => 'Hälytystyyppi',
        'response' => 'Vastaus',
        'remarks' => 'Huomautukset',
        'client' => 'Asiakas',
        'event_type' => 'Tapahtumatyyppi',
        'data_type' => 'Tietotyyppi',
        'slug' => 'Etana',
        'required' => 'Vaaditaan',
        'validation' => 'Validation',
        'text' => 'Teksti',
        'datetime' => 'Treffiaika',
        'boolean' => 'Boolean',
        'select' => 'Valita',
        'multiselect' => 'Monivalinta',
        'options' => 'Vaihtoehdot',
        'option' => 'Vaihtoehto',
        'default' => 'Oletusarvo',
        'msisdn' => 'MSISDN',
        'notes' => 'Huomautuksia',
        'skip_empty' => 'Ohita tyhjä arvo',
        'distance_limit' => 'Etäisyysraja',
        'distance_tolerance' => 'Etäisyystoleranssi',
        'pois' => 'KP: t',
        'device_type_id' => 'Laitetyyppi',
        'custom_fields' => 'Mukautetut kentät',
        'device_name' => 'Laitteen nimi',
        'auto_hide_notification' => 'Piilota ponnahdusikkuna automaattisesti',
        'continuous_duration' => 'Jatkuva kesto',
        'captcha_provider' => 'CAPTCHA-palveluntarjoaja',
        'google_recaptcha' => 'Google reCAPTCHA',
        'recaptcha_site_key' => 'ReCAPTCHA-sivustoavain',
        'recaptcha_secret_key' => 'ReCAPTCHA salainen avain',
        'g-recaptcha-response' => 'ReCAPTCHA',
        'here_api_key' => 'HERE.com-sovellusliittymäavain',
        'time_duration' => 'Ajan kesto',
        'offset' => 'Offset',
        'geofence_device' => 'Laite',
        'webhook_key' => 'Webhook-avain',
        'skip_blank_results' => 'Ohita tyhjät tulokset',
        'account_sid' => 'Tilin SID',
        'speed_limit_tolerance' => 'Nopeusrajoitusten toleranssi',
        'started_at' => 'Aloitusaika',
        'ended_at' => 'Loppu aika',
        'region' => 'Alue',
        'adapted' => 'Mukautettu',
        'silent_notification' => 'Ohita ilmoitukset, jos ne toistuvat minuuteissa',
        'tomtom_key' => 'TomTom-avain',
        'authorized' => 'Valtuutettu',
        'email_verification' => 'Sähköpostivarmistus',
        'project_id' => 'Projektin tunnus',
        'project_psw' => 'Projektin salasana',
        'verify_id' => 'Vahvista tunnus',
        'app_tracker_login' => 'Tracker-sovelluksen kirjautuminen käytössä',
        'merchant_code' => 'Kauppiaan koodi',
        'count' => 'Kreivi',
        'detect_distance' => 'Etäisyyden tunnistus',
        'detect_speed' => 'Nopeuden tunnistus',
        'routes' => 'Reitit',
        'battery_threshold' => 'Akun kynnys',
        'state' => 'Osavaltio',
        'duration' => 'Kesto',
        'statuses' => 'Tilat',
        'first_name' => 'Etunimi',
        'last_name' => 'Sukunimi',
        'personal_code' => 'Henkilökohtainen koodi',
        'birth_date' => 'Syntymäpäivä',
        'company_id' => 'Yhtiö',
        'registration_code' => 'Rekisteröintikoodi',
        'vat_number' => 'ALV-numero',
        'address' => 'Osoite',
        'comment' => 'Kommentti',
        'duration_format' => 'Keston muoto',
        'default_duration_format' => 'Keston oletusmuoto',
        'login_token' => 'Token',
        'monthly' => 'Kuukausittain',
        'amount' => 'Määrä',
        'bad_sms_gateway_url' => 'Virheellinen SMS-yhdyskäytävän URL-osoite tai määritys',
        'rates' => 'Hinnat',
        'fields' => 'Kentät',
        'tenant_id' => 'Vuokralaisen tunnus',
        'client_secret' => 'Asiakkaan salaisuus',
        'default_login_methods' => 'Oletuskirjautumistavat',
        'forwards' => 'Eteenpäin',
        'detection_speed' => 'Havaitsemisnopeus',
        'detach_on_no_position_data' => 'Irrota ilman sijaintitietoja',
        'extra_expiration_time' => 'Ylimääräinen voimassaoloaika',
        'fuel_detect_sec_after_stop' => 'Tunnista polttoaineen vaihto pysähtymisen jälkeen',
        'login_periods' => 'Kirjautumisajat',
        'readonly' => 'Lue ainoastaan',
        'popup_notification' => 'Ponnahdusikkuna ilmoitus',
        'allow_user_change_plan' => 'Salli käyttäjän muutossuunnitelma',
        'only_one_session' => 'Vain yksi istunto',
        'value' => 'Arvo',
        'bitcut_start' => 'Vähän aloitus',
        'bitcut_count' => 'Bittimäärä',
        'move_duration_longer_than' => 'Siirron kesto pidempi kuin',
        'min_parking_duration' => 'Minimaalinen pysäköintiaika',
        'model_id' => 'Malli',
        'min_load_duration' => 'Minimi latausaika',
        'min_detect_change' => 'Pienin havaittava muutos',
        'role_id' => 'Rooli',
        'on_collision' => 'Törmäyksessä',
        'launcher' => 'Käynnistysohjelma',
        'processed' => 'Käsitelty',
        'created_at' => 'Luotu klo',
        'reserved_at' => 'Varattu klo',
        'completed_at' => 'Valmistui klo',
        'failed_at' => 'Epäonnistui klo',
        'pickup_time_from' => 'Noutoaika alkaen',
        'pickup_time_to' => 'Noutoaika',
        'delivery_time_from' => 'Toimitusaika alkaen',
        'delivery_time_to' => 'Toimitusaika',
        'task_set_id' => 'Tehtäväsarja',
        'firebase_config' => 'Firebase-määritys',
    ),
    'same_protocol' => 'Laitteiden on oltava samassa protokollassa.',
    'contains' => 'The :attribute on oltava :value .',
    'ip_port' => ':attribute ei vastaa muotoa IP:PORT',
    'required_unless' => ':attribute kenttä on pakollinen.',
    'translation_file' => 'Käännöstiedostoa ei ole',
    'placeholder' => 'Attribuutti &quot; :placeholder &quot; puuttuu',
    'image_valid' => ':attribute on oltava kuva.',
    'missing_configuration_value' => 'Puuttuu :attribute määritysarvo.',
    'sms_gateway_error' => 'Viestiä ei voi lähettää. SMS-yhdyskäytävän virhe.',
    'cant_configure_device' => 'Laitetta ei voitu määrittää',
    'field_does_not_exist' => 'Kenttä :attribute ei ole',
    'unsupported_rules' => 'Ei tuettuja sääntöjä:',
    'unsupported_parameterized_rules' => 'Ei tueta parametrisoituja sääntöjä:',
    'cant_update_custom_field' => 'Kenttää &quot; :field &quot; ei voi päivittää, koska tätä mukautettua kenttää käyttämällä on olemassa tietueita',
    'secure_password' => 'Suojattu salasana',
    'uppercase_character' => 'Vaaditaan isoa kirjainta',
    'lowercase_character' => 'Pieniä kirjaimia vaaditaan',
    'digit_character' => 'Vaaditaan numeromerkki',
    'wrong_captcha' => 'Väärä captcha',
    'dimensions' => ':attribute on virheellisiä kuvamittoja.',
    'mimetypes' => ':attribute on oltava tiedosto, jonka tyyppi on :values .',
    'in_array' => ':attribute kenttää ei ole :other .',
    'uploaded' => ':attribute lataus epäonnistui. On mahdollista, että palvelin ei hyväksy tällaista kokoa.',
    'login_methods'  => array(
        'email' => 'Sähköposti',
        'azure' => 'Microsoft Azure',
    ),
    'host' => ':attribute ei ole kelvollinen isäntä',
    'host_port' => ':attribute ei vastaa muotoa HOST :PORT',
    'unique_table_msg' => ':attribute on jo otettu :table',
    'pay_provider_min_charge' => ':pay_provider maksujen vähimmäissumma on :amount',
    'formula' => 'Virheellinen kaava',
    'gt'  => array(
        'numeric' => 'Attribuutin :attribute on oltava suurempi kuin :value .',
        'file' => ':attribute on oltava suurempi kuin :value kilotavua.',
        'string' => ':attribute on oltava suurempi kuin :value -merkkejä.',
        'array' => ':attribute on oltava enemmän kuin :value .',
    ),
    'gte'  => array(
        'numeric' => ':attribute on oltava suurempi tai yhtä suuri kuin :value .',
        'file' => ':attribute on oltava suurempi tai yhtä suuri kuin :value kilotavua.',
        'string' => ':attribute on oltava suurempi tai yhtä suuri kuin :value merkit.',
        'array' => ':attribute on oltava vähintään :value kohteita.',
    ),
    'lt'  => array(
        'numeric' => 'Attribuutin :attribute on oltava pienempi kuin :value .',
        'file' => ':attribute on oltava pienempi kuin :value kilotavua.',
        'string' => ':attribute on oltava pienempi kuin :value -merkkejä.',
        'array' => ':attribute on oltava vähemmän kuin :value kohteita.',
    ),
    'lte'  => array(
        'numeric' => 'Attribuutin :attribute on oltava pienempi tai yhtä suuri kuin :value .',
        'file' => ':attribute on oltava pienempi tai yhtä suuri kuin :value kilotavua.',
        'string' => ':attribute on oltava pienempi tai yhtä suuri kuin :value merkkejä.',
        'array' => ':attribute ei saa sisältää enempää kuin :value alkioita.',
    ),
    'special_character' => 'Erikoismerkki vaaditaan',
    'task_set_dedicated_to_device' => 'Tehtäväsarja on omistettu :device -laitteelle',
    'tasks_only_one_device' => 'Tehtävät voivat kuulua vain yhdelle laitteelle',
);