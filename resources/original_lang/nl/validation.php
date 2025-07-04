<?php

return array(

    'accepted' => 'De :attribute moet worden aanvaard.',
    'active_url' => 'De :attribute is geen geldig URL.',
    'after' => 'De :attribute moet een datum zijn na :date.',
    'alpha' => 'De :attribute mag alleen letter bevatten.',
    'alpha_dash' => 'De :attribute mag alleen letters, cijfers en streepjes bevatten.',
    'alpha_num' => 'De :attribute mag alleen letters en cijfers bevatten.',
    'array' => 'De :attribute moet een reeks zijn.',
    'before' => 'De :attribute moet een datum zijn voor :date.',
    'between'  => array(
        'numeric' => 'De :attribute moet tussen :min en :max zijn.',
        'file' => 'De :attribute moet tussen :min en :max kilobytes zijn.',
        'string' => 'De :attribute moet tussen :min and :max karakters zijn.',
        'array' => 'De :attribute moet tussen de :min en :max items zijn.',
    ),
    'confirmed' => 'De :attribute bevestiging komt niet overeen.',
    'date' => 'De :attribute is geen geldige datum.',
    'date_format' => 'De :attribute opmaak komt niet overeen met :format.',
    'different' => 'De :attribute en :other moet verschillend zijn.',
    'digits' => 'De :attribute moet :digits cijfers zijn.',
    'digits_between' => 'De :attribute moet tussen de :min en :max cijfers zijn.',
    'email' => ' :attribute moet een geldig e-mailadres zijn.',
    'exists' => 'De geselecteerde :attribute is ongeldig.',
    'image' => 'De :attribute moet een afbeelding zijn.',
    'in' => 'De geselecteerde :attribute is ongeldig.',
    'integer' => 'De :attribute moet een geheel (getal) zijn.',
    'ip' => 'De :attribute moet een geldig IP adres zijn',
    'max'  => array(
        'numeric' => 'De :attribute mag niet groter dan :max zijn.',
        'file' => 'De :attribute mag niet groter dan :max kilobytes zijn.',
        'string' => 'De :attribute mag niet groter dan :max karakters zijn.',
        'array' => 'De :attribute mag niet meer dan :max items hebben.',
    ),
    'mimes' => 'De :attribute moet een bestand of type: :values zijn.',
    'min'  => array(
        'numeric' => 'De :attribute moet minimaal :min zijn.',
        'file' => 'De :attribute moet minimaal :min kilobytes zijn.',
        'string' => 'De :attribute moet minimaal :min karakters hebben.',
        'array' => 'De :attribute moet minimaal :min items hebben.',
    ),
    'not_in' => 'De geselcteerde :attribute is ongeldig.',
    'numeric' => 'De :attribute moet een getal zijn.',
    'regex' => 'De :attribute formaat is ongeldig.',
    'required' => 'Het :attribute veld is noodzakelijk.',
    'required_if' => 'Het :attribute veld is noodzakelijk.',
    'required_with' => 'Het :attribute veld is noodzakelijk wanneer :values is aanwezig.',
    'required_with_all' => 'Het :attribute veld is noodzakelijk wanneer :values is aanwezig.',
    'required_without' => 'Het :attribute veld is noodzakelijk wanneer :values niet aanwezig is.',
    'required_without_all' => 'Het :attribute veld is noodzakelijk wanneer geen van :values aanwezig is.',
    'same' => 'De :attribute en :other moet overeenkomen.',
    'size'  => array(
        'numeric' => 'De :attribute moet :size zijn.',
        'file' => 'De :attribute moet :size kilobytes zijn.',
        'string' => 'De :attribute moet :size karakters zijn.',
        'array' => 'De :attribute moet :size items bevatten.',
    ),
    'unique' => 'De :attribute is reeds bezet.',
    'url' => 'De :attribute formaat is ongeldig.',
    'array_max' => 'De :attribute maximale aantal items :max.',
    'lesser_than' => 'De :attribute moet kleiner zijn dan :other',
    'custom'  => array(
        'attribute-name'  => array(
            'rule-name' => 'aangepast bericht',
        ),
        'frontpage_logo'  => array(
            'dimensions' => 'Frontpage logo maximale hoogte is 60px.',
        ),
        'favicon'  => array(
            'dimensions' => 'Favicon moet 16 px bij 16 px zijn.',
        ),
    ),
    'attributes'  => array(
        'email' => 'E-mail',
        'password' => 'Wachtwoord',
        'password_confirmation' => 'Wachtwoord bevestiging',
        'remember_me' => 'onthoud mij',
        'name' => 'Naam',
        'imei' => 'IMEI',
        'imei_device' => 'IMEI of apparaat identificatie',
        'fuel_measurement_type' => 'Brandstof meting',
        'fuel_cost' => 'Brandstof kosten',
        'icon_id' => 'Apparaat pictogram',
        'active' => 'Actief',
        'polygon_color' => 'Achtergrond kleur',
        'devices' => 'Apparaten',
        'geofences' => 'Virtueel hek',
        'overspeed' => 'Snelheidsoverschrijding',
        'fuel_consumption' => 'Brandstofverbruik',
        'description' => 'Omschrijving',
        'map_icon_id' => 'Kaart pictogram',
        'coordinates' => 'Map punt',
        'date_from' => 'Datum vanaf',
        'date_to' => 'Datum tot',
        'code' => 'Code',
        'title' => 'Titel',
        'note' => 'Inhoud',
        'path' => 'Bestand',
        'period_name' => 'Periode naam',
        'days' => 'Dagen',
        'devices_limit' => 'Maximum aantal apparaten',
        'trial' => 'Proef',
        'price' => 'Prijs',
        'message' => 'Bericht',
        'tag' => 'Parameter',
        'timezone_id' => 'Tijdzone',
        'unit_of_distance' => 'Afstandseenheid',
        'unit_of_capacity' => 'Capaciteit eenheid',
        'unit_of_altitude' => 'Hoogte eenheid',
        'icons' => 'Pictogrammen',
        'sms_gateway_url' => 'SMS gateway URL',
        'mobile_phone' => 'Mobiele telefoon',
        'sim_number' => 'SIM nummer',
        'device_model' => 'Apparaat model',
        'group_id' => 'Groep',
        'rfid' => 'RFID',
        'phone' => 'Telefoon',
        'device_id' => 'Apparaat',
        'tag_value' => 'Parameter waarde',
        'device_port' => 'Apparaat poort',
        'event' => 'Gebeurtenis',
        'port' => 'Poort',
        'device_protocol' => 'Apparaat protocol',
        'protocol' => 'Protocol',
        'sensor_name' => 'Naam van de sensor',
        'sensor_type' => 'Sensor type',
        'sensor_template' => 'Sensor sjabloon',
        'tag_name' => 'Parameter naam',
        'min_value' => 'Min. waarde',
        'max_value' => 'Max. waarde',
        'on_value' => 'ON waarde',
        'off_value' => 'OFF waarde',
        'shown_value_by' => 'Show waarde',
        'full_tank_value' => 'Parameter waarde',
        'formula' => 'Formule',
        'parameters' => 'Parameters',
        'full_tank' => 'Volle tank in liters/gallons',
        'fuel_tank_name' => 'Brandstoftank naam',
        'odometer_value' => 'Waarde',
        'odometer_value_by' => 'Kilometerteller',
        'unit_of_measurement' => 'Meet eenheid',
        'plate_number' => 'Kentekenplaat',
        'vin' => 'VIN',
        'registration_number' => 'Registratie/Asset nummer',
        'object_owner' => 'Voorwerp eigenaar/Manager',
        'additional_notes' => 'Extra notities',
        'expiration_date' => 'Houdbaarheidsdatum',
        'days_to_remind' => 'Dagen te herinneren vóór het verstrijken',
        'type' => 'Type',
        'format' => 'Formaat',
        'show_addresses' => 'Toon adressen',
        'stops' => 'Stopt',
        'speed_limit' => 'Snelheidslimiet',
        'zones_instead' => 'Zones plaats van adressen',
        'daily' => 'Dagelijks',
        'weekly' => 'Wekelijks',
        'send_to_email' => 'Stuur naar e-mail',
        'filter' => 'Filter',
        'status' => 'Toestand',
        'date' => 'Datum',
        'geofence_name' => 'Geofence naam',
        'tail_color' => 'Staart kleur',
        'tail_length' => 'Staartlengte',
        'engine_hours' => 'Motoruren',
        'detect_engine' => 'Detecteren motor ON/OFF door',
        'min_moving_speed' => 'Min . bewegingssnelheid in km/h',
        'min_fuel_fillings' => 'Min . brandstof verschil om brandstof vullingen detecteren',
        'min_fuel_thefts' => 'Min . brandstof verschil om brandstof diefstallen detecteren',
        'expiration_by' => 'Expiratie door',
        'interval' => 'Interval',
        'last_service' => 'Laatste dienst',
        'trigger_event_left' => 'Trigger event wanneer de linkerzijde',
        'current_odometer' => 'Huidige kilometerstand',
        'current_engine_hours' => 'Huidige engine uur',
        'renew_after_expiration' => 'Vernieuwen na afloop',
        'sms_template_id' => 'SMS sjabloon',
        'frequency' => 'Frequentie',
        'unit' => 'Eenheid',
        'noreply_email' => 'Geen antwoord e-mail adres',
        'signature' => 'Handtekening',
        'use_smtp_server' => 'Gebruik SMTP-server',
        'smtp_server_host' => 'SMTP- server host',
        'smtp_server_port' => 'SMTP-server poort',
        'smtp_security' => 'SMTP- beveiliging',
        'smtp_username' => 'SMTP- gebruikersnaam',
        'smtp_password' => 'SMTP-wachtwoord',
        'from_name' => 'Van naam',
        'server_name' => 'Server naam',
        'available_maps' => 'Beschikbare kaarten',
        'default_language' => 'Standaardtaal',
        'default_timezone' => 'Standaard tijdzone',
        'default_unit_of_distance' => 'Standaardeenheid van afstand',
        'default_unit_of_capacity' => 'Standaardeenheid van de capaciteit',
        'default_unit_of_altitude' => 'Standaardeenheid van hoogte',
        'default_date_format' => 'Standaarddatumnotatie',
        'default_time_format' => 'Standaardtijd formaat',
        'default_map' => 'Standaard kaart',
        'default_object_online_timeout' => 'Standaard object online timeout',
        'logo' => 'Logo',
        'login_page_logo' => 'Login pagina logo',
        'frontpage_logo' => 'Frontpage logo',
        'favicon' => 'Favicon',
        'allow_users_registration' => 'Kunnen gebruikers registratie',
        'default_maps' => 'Standaard kaarten',
        'subscription_expiration_after_days' => 'Abonnement verlopen na dagen',
        'gprs_template_id' => 'GPRS template',
        'calibrations' => 'Kalibraties',
        'ftp_server' => 'FTP-server',
        'ftp_port' => 'FTP-poort',
        'ftp_username' => 'FTP- gebruikersnaam',
        'ftp_password' => 'FTP wachtwoord',
        'ftp_path' => 'FTP-pad',
        'period' => 'Periode',
        'hour' => 'Uur',
        'color' => 'Kleur',
        'polyline' => 'Route',
        'request_method' => 'Methode verzoek',
        'authentication' => 'Authenticatie',
        'username' => 'Gebruikersnaam',
        'encoding' => 'Codering',
        'time_adjustment' => 'Tijd aanpassing',
        'parameter' => 'Parameter',
        'export_type' => 'Export type',
        'groups' => 'Groepen',
        'file' => 'Bestand',
        'extra' => 'Extra',
        'parameter_value' => 'Parameter waarde',
        'enable_plans' => 'Plannen mogelijk te maken',
        'payment_type' => 'Betalingswijze',
        'paypal_client_id' => 'Paypal client-ID',
        'paypal_secret' => 'Paypal geheim',
        'paypal_currency' => 'Paypal munt',
        'paypal_payment_name' => 'Paypal betalingen naam',
        'objects' => 'Voorwerpen',
        'duration_value' => 'Duur',
        'permissions' => 'Machtigingen',
        'plan' => 'Plan',
        'default_billing_plan' => 'Standaard factureringsmodel',
        'sensor_group_id' => 'Sensor groep',
        'daylight_saving_time' => 'Zomertijd',
        'phone_number' => 'Telefoonnummer',
        'action' => 'Actie',
        'time' => 'Tijd',
        'order' => 'Bestellen',
        'geocoder_api' => 'Geocoder API',
        'geocoder_cache' => 'Geocoder cache',
        'geocoder_cache_days' => 'Geocoder cache days',
        'geocoder_cache_delete' => 'Delete geocoder cache',
        'api_key' => 'API key',
        'api_url' => 'API url',
        'map_center_latitude' => 'Kaart midden breedtegraad',
        'map_center_longitude' => 'Kaart midden lengtegraad',
        'map_zoom_level' => 'Kaart zoomniveau',
        'dst_type' => 'Type',
        'provider' => 'Leverancier',
        'week_start_day' => 'Verzuim kalenderweek startdag',
        'ip' => 'IP',
        'gprs_templates_only' => 'Toon GPRS Templates commando&#39;s alleen',
        'select_all_objects' => 'Selecteer alle objecten',
        'icon_type' => 'Icon type',
        'on_setflag_1' => 'Starting character',
        'on_setflag_2' => 'Amount of characters',
        'on_setflag_3' => 'Value of parameter',
        'domain' => 'Domain',
        'auth_id' => 'Auth ID',
        'auth_token' => 'Auth token',
        'senders_phone' => 'Sender\'s phone number',
        'database_clear_status' => 'Automatische geschiedenis opruimen',
        'database_clear_days' => 'Dagen te houden',
        'ignition_detection' => 'Ignition detectie door',
        'template_color' => 'Sjabloon kleur',
        'background' => 'Achtergrond',
        'login_page_text_color' => 'Inloggen pagina tekst kleur',
        'login_page_background_color' => 'Inloggen pagina achtergrondkleur',
        'welcome_text' => 'Welkom tekst',
        'bottom_text' => 'Onderste tekst',
        'apple_store_link' => 'AppleStore-link',
        'google_play_link' => 'GooglePlay-link',
        'here_map_id' => 'HERE.com app ID',
        'here_map_code' => 'HERE.com app code',
        'login_page_panel_background_color' => 'Inloggen pagina paneel achtergrondkleur',
        'login_page_panel_transparency' => 'Inloggen pagina paneel transparantie',
        'visible' => 'Zichtbaar',
        'user' => 'Gebruiker',
        'permission_to_add_devices' => 'Voeg apparaten een twee toe',
        'permission_to_use_sms_gateway' => 'SMS-gateway',
        'loged_at' => 'Laatste aanmelding',
        'manager_id' => 'Manager',
        'position' => 'Positie',
        'stop_duration_longer_than' => 'Stop duur langer dan',
        'mapbox_access_token' => 'MapBox-toegangstoken',
        'flag' => 'Vlag',
        'shift_start' => 'Shift start',
        'shift_finish' => 'Shift-afwerking',
        'shift_start_tolerance' => 'Shift start tolerantie',
        'shift_finish_tolerance' => 'Shift finish tolerance',
        'excessive_exit' => 'Overmatige exit',
        'smtp_authentication' => 'SMTP-authenticatie',
        'skip_calibration' => 'Reken berekeningen buiten het kalibratiebereik',
        'bing_maps_key' => 'Bing maps-sleutel',
        'stripe_public_key' => 'STRIPE openbare sleutel',
        'stripe_secret_key' => 'STRIPE geheime sleutel',
        'stripe_currency' => 'STREEP valuta',
        'priority' => 'Prioriteit',
        'pickup_address' => 'Ophaaladres',
        'delivery_address' => 'Bezorgadres',
        'schedule' => 'Planning',
        'sound_notification' => 'Geluidsmelding',
        'push_notification' => 'App-pushmelding',
        'email_notification' => 'E-mail notificatie',
        'sms_notification' => 'SMS-melding',
        'webhook_notification' => 'Webhook-melding',
        'offline_duration_longer_than' => 'Offline duur langer dan',
        'sms_gateway_headers' => 'SMS gatewayheaders',
        'forward' => 'Vooruit',
        'by_status' => 'Op status',
        'icon_status_online' => 'Online statuspictogram',
        'icon_status_offline' => 'Offline statuspictogram',
        'icon_status_ack' => 'Ack-statuspictogram',
        'icon_status_engine' => 'Pictogram van de motorstatus',
        'server_description' => 'Server beschrijving',
        'bypass_invalid' => 'Sta ongeldige coördinaten toe',
        'installation_date' => 'Installatie datum',
        'sim_activation_date' => 'Sim activatie datum',
        'sim_expiration_date' => 'SIM-vervaldatum',
        'activation_date' => 'Activeer datum',
        'secret_key' => 'Geheime sleutel',
        'currency' => 'Valuta',
        'client_id' => 'Klant identificatie',
        'secret' => 'Geheim',
        'payment_name' => 'Betaal naam',
        'merchant_id' => 'Handelaar-ID',
        'public_key' => 'Publieke sleutel',
        'private_key' => 'Prive sleutel',
        'braintree_plan_ids' => 'Braintree-abonnement-ID&#39;s voor serverplannen',
        'braintree_plan_explanation' => 'U moet een reccurent facturatieplan maken in het regelpaneel van Braintree, selecteer het ID-hier corresponderende facturatieplan op uw server.',
        'braintree_merchant_explanation' => 'U moet een verkopersaccount aanmaken in het regelpaneel van Braintree en hier de ID invoeren.',
        'braintree_currency_match' => 'Het valuta van de verkopersaccount moet overeenkomen met de planvaluta',
        'merchant_account_id' => 'Koopman account-ID',
        'master_key' => 'Hoofdsleutel',
        'token' => 'Blijk',
        'paydunya_currency_warning' => 'De enige beschikbare valuta is FCFA. Als u het configureert, zorg er dan voor dat uw andere betalingen overeenkomen met dezelfde valuta. Anders krijgen gebruikers een kans om hetzelfde plan te kopen met verschillende prijzen.',
        'country' => 'Land',
        'merchant_account' => 'Handelaarsaccount',
        'origin_key' => 'Origin-toets',
        'test_config' => 'Test config',
        'environment' => 'Milieu',
        'three_letter_iso' => 'Drie letters ISO-valutacode',
        'google_maps_key' => 'Google brengt API-sleutel in kaart',
        'maptiler_key' => 'MapTiler-sleutel',
        'streetview_api' => 'Streetview API',
        'streetview_key' => 'Streetview API-sleutel',
        'openmaptiles_url' => 'OpenMapTiles URL',
        'unit_cost' => 'De kosten per eenheid',
        'supplier' => 'Leverancier',
        'buyer' => 'Koper',
        'expense_type' => 'Uitgavenoort',
        'device_cameras_days' => 'Dagen om afbeeldingen van apparaatcamera&#39;s te bewaren',
        'api_app_id' => 'App-ID',
        'api_app_code' => 'App-code',
        'api_app_secret' => 'App-geheim',
        'invoice_number' => 'Factuurnummer',
        'one_time_payment' => 'Eenmalige betaling',
        'sharing_id' => 'Het delen van',
        'idle_duration_longer_than' => 'Duur inactiviteit langer dan',
        'delete_after_expiration' => 'Verwijderen na afloop',
        'sharing_email' => 'E-mailmelding met link voor delen',
        'sharing_sms' => 'SMS-melding met deellink',
        'sms' => 'Sms',
        'template' => 'Sjabloon',
        'commands' => 'Commando&#39;s',
        'brand' => 'Fabrikant van het apparaat',
        'model' => 'Model',
        'apn_name' => 'APN-naam',
        'apn_username' => 'APN-gebruikersnaam',
        'apn_password' => 'APN wachtwoord',
        'ignition_duration_longer_than' => 'Ontsteking duur langer dan',
        'tasks' => 'Taken',
        'id' => 'ID kaart',
        'columns' => 'Kolommen',
        'called_at' => 'Bel naar',
        'alert_type' => 'Waarschuwingstype',
        'response' => 'Reactie',
        'remarks' => 'Opmerkingen',
        'client' => 'Cliënt',
        'event_type' => 'Soort evenement',
        'data_type' => 'Data type',
        'slug' => 'Naaktslak',
        'required' => 'Verplicht',
        'validation' => 'Validatie',
        'text' => 'Tekst',
        'datetime' => 'Datum Tijd',
        'boolean' => 'Boolean',
        'select' => 'Selecteer',
        'multiselect' => 'Multi-Select',
        'options' => 'Opties',
        'option' => 'Keuze',
        'default' => 'Standaard',
        'msisdn' => 'MSISDN',
        'notes' => 'Opmerkingen',
        'skip_empty' => 'Sla lege waarde over',
        'distance_limit' => 'Afstandslimiet',
        'distance_tolerance' => 'Afstandstolerantie',
        'pois' => 'POI&#39;s',
        'device_type_id' => 'Soort apparaat',
        'custom_fields' => 'Aangepaste velden',
        'device_name' => 'Toestelnaam',
        'auto_hide_notification' => 'Pop-up automatisch verbergen',
        'continuous_duration' => 'Ononderbroken duur',
        'captcha_provider' => 'CAPTCHA-provider',
        'google_recaptcha' => 'Google reCAPTCHA',
        'recaptcha_site_key' => 'ReCAPTCHA-sitesleutel',
        'recaptcha_secret_key' => 'ReCAPTCHA geheime sleutel',
        'g-recaptcha-response' => 'ReCAPTCHA',
        'here_api_key' => 'HERE.com API-sleutel',
        'time_duration' => 'Tijds duur',
        'offset' => 'Offset',
        'geofence_device' => 'Apparaat',
        'webhook_key' => 'Webhook-sleutel',
        'skip_blank_results' => 'Lege resultaten overslaan',
        'account_sid' => 'Account-ID',
        'speed_limit_tolerance' => 'Tolerantie snelheidslimiet',
        'started_at' => 'Starttijd',
        'ended_at' => 'Eindtijd',
        'region' => 'Regio',
        'adapted' => 'Aangepast',
        'silent_notification' => 'Negeer meldingen als deze binnen enkele minuten worden herhaald',
        'tomtom_key' => 'TomTom-sleutel',
        'authorized' => 'Geautoriseerd',
        'email_verification' => 'Email verificatie',
        'project_id' => 'Project-ID',
        'project_psw' => 'Projectwachtwoord',
        'verify_id' => 'ID verifiëren',
        'app_tracker_login' => 'Inloggen bij tracker-app ingeschakeld',
        'merchant_code' => 'Verkoperscode',
        'count' => 'Graaf',
        'detect_distance' => 'Afstandsdetectie door',
        'detect_speed' => 'Snelheidsdetectie door',
        'routes' => 'Routes',
        'battery_threshold' => 'Batterijdrempel',
        'state' => 'Staat',
        'duration' => 'Looptijd',
        'statuses' => 'Statussen',
        'first_name' => 'Voornaam',
        'last_name' => 'Achternaam',
        'personal_code' => 'Persoonlijke code',
        'birth_date' => 'Geboortedatum',
        'company_id' => 'Bedrijf',
        'registration_code' => 'Registratiecode',
        'vat_number' => 'Btw-nummer',
        'address' => 'Adres',
        'comment' => 'Opmerking',
        'duration_format' => 'Duur formaat',
        'default_duration_format' => 'Standaard duurformaat',
        'login_token' => 'Token',
        'monthly' => 'Maandelijks',
        'amount' => 'Hoeveelheid',
        'bad_sms_gateway_url' => 'Onjuiste sms-gateway-URL of -configuratie',
        'rates' => 'Tarieven',
        'fields' => 'Velden',
        'tenant_id' => 'Huurder-ID',
        'client_secret' => 'Cliënt geheim',
        'default_login_methods' => 'Standaard inlogmethoden',
        'forwards' => 'Voorwaarts',
        'detection_speed' => 'Detectie snelheid',
        'detach_on_no_position_data' => 'Ontkoppel op geen positiegegevens',
        'extra_expiration_time' => 'Extra vervaltijd',
        'fuel_detect_sec_after_stop' => 'Detecteer brandstofverversing na stop',
        'login_periods' => 'Inlogperiodes',
        'readonly' => 'Alleen lezen',
        'popup_notification' => 'Popup melding',
        'allow_user_change_plan' => 'Wijzigingsplan voor gebruiker toestaan',
        'only_one_session' => 'Slechts één sessie',
        'value' => 'Waarde',
        'bitcut_start' => 'Beetje begin',
        'bitcut_count' => 'Beetje tellen',
        'move_duration_longer_than' => 'Verplaatsingsduur langer dan',
        'min_parking_duration' => 'Minimale parkeerduur',
        'model_id' => 'Model',
        'min_load_duration' => 'Minimale laadduur',
        'min_detect_change' => 'Min. verandering om te detecteren',
        'role_id' => 'Rol',
        'on_collision' => 'Bij botsing',
        'launcher' => 'Lanceerder',
        'processed' => 'Verwerkt',
        'created_at' => 'Gemaakt bij',
        'reserved_at' => 'Gereserveerd bij',
        'completed_at' => 'Voltooid om',
        'failed_at' => 'Mislukt bij',
        'pickup_time_from' => 'Ophaaltijd vanaf',
        'pickup_time_to' => 'Ophaaltijd tot',
        'delivery_time_from' => 'Levertijd vanaf',
        'delivery_time_to' => 'Levertijd tot',
        'task_set_id' => 'Taak ingesteld',
        'firebase_config' => 'Firebase-configuratie',
    ),
    'same_protocol' => 'De apparaten moeten van hetzelfde protocol zijn.',
    'contains' => 'Het :attribute moet de :value bevatten.',
    'ip_port' => 'Het :attribute komt niet overeen met het formaat IP:PORT',
    'required_unless' => 'Het :attribute veld is verplicht.',
    'translation_file' => 'Vertaalbestand bestaat niet',
    'placeholder' => 'Attribuut &quot; :placeholder &quot; ontbreekt',
    'image_valid' => 'Het :attribute moet een afbeelding zijn.',
    'missing_configuration_value' => 'Ontbrekend :attribute configuratiewaarde.',
    'sms_gateway_error' => 'Bericht kan niet worden verzonden. Sms-gatewayfout.',
    'cant_configure_device' => 'Kan apparaat niet configureren',
    'field_does_not_exist' => 'Veld :attribute bestaat niet',
    'unsupported_rules' => 'Niet-ondersteunde regels:',
    'unsupported_parameterized_rules' => 'Niet-ondersteunde geparametriseerde regels:',
    'cant_update_custom_field' => 'Kan veld &quot; :field &quot; niet bijwerken omdat er bestaande records zijn die dit aangepaste veld gebruiken',
    'secure_password' => 'Veilig wachtwoord',
    'uppercase_character' => 'Hoofdletter vereist',
    'lowercase_character' => 'Kleine letters vereist',
    'digit_character' => 'Cijfer vereist',
    'wrong_captcha' => 'Verkeerde captcha',
    'dimensions' => 'Het :attribute heeft ongeldige afbeeldingsafmetingen.',
    'mimetypes' => 'Het :attribute moet een bestand zijn van het type: :values .',
    'in_array' => 'Het :attribute bestaat niet in :other .',
    'uploaded' => 'Het :attribute kan niet worden geüpload. Het is mogelijk dat de server een dergelijke grootte niet accepteert.',
    'login_methods'  => array(
        'email' => 'E-mail',
        'azure' => 'Microsoft Azure',
    ),
    'host' => 'Het :attribute is geen geldige host',
    'host_port' => 'Het :attribute komt niet overeen met het formaat HOST :PORT',
    'unique_table_msg' => 'Het :attribute is al opgenomen in :table',
    'pay_provider_min_charge' => 'Het minimumbedrag voor kosten bij :pay_provider is :amount',
    'formula' => 'Ongeldige formule',
    'gt'  => array(
        'numeric' => 'Het :attribute moet groter zijn dan :value .',
        'file' => 'Het :attribute moet groter zijn dan :value kilobytes.',
        'string' => 'Het :attribute moet groter zijn dan :value tekens.',
        'array' => 'Het :attribute moet meer dan :value items bevatten.',
    ),
    'gte'  => array(
        'numeric' => 'Het :attribute moet groter zijn dan of gelijk zijn aan :value .',
        'file' => 'Het :attribute moet groter zijn dan of gelijk zijn aan :value kilobytes.',
        'string' => 'Het :attribute moet groter zijn dan of gelijk zijn aan :value tekens.',
        'array' => 'Het :attribute moet :value items of meer bevatten.',
    ),
    'lt'  => array(
        'numeric' => 'Het :attribute moet kleiner zijn dan :value .',
        'file' => 'Het :attribute moet kleiner zijn dan :value kilobytes.',
        'string' => 'Het :attribute moet kleiner zijn dan :value tekens.',
        'array' => 'Het :attribute moet minder dan :value items bevatten.',
    ),
    'lte'  => array(
        'numeric' => 'Het :attribute moet kleiner dan of gelijk zijn aan :value .',
        'file' => 'Het :attribute moet kleiner dan of gelijk zijn aan :value kilobytes.',
        'string' => 'Het :attribute moet kleiner zijn dan of gelijk zijn aan :value tekens.',
        'array' => 'Het :attribute mag niet meer dan :value items bevatten.',
    ),
    'special_character' => 'Speciaal teken vereist',
    'task_set_dedicated_to_device' => 'De takenset is toegewezen aan :device device',
    'tasks_only_one_device' => 'Taken kunnen slechts bij één apparaat horen',
);