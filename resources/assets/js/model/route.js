function Route(data, map) {
    var
        _this = this,
        _map = null,
        defaults = {
            id: null,
            name: 'N/A',
            active: true,
            color: '#dddddd',
            coordinates: []
        },
        options = {},
        layer = null,
        popup = null;

    _this.id = function() {
        return options.id;
    };

    _this.options = function() {
        return options;
    };

    _this.active = function(value) {
        options.active = value;

        _this.update();
    };

    _this.isVisible = function() {
        return options.active == true;
    };

    _this.create = function(data, map) {
        _map = map;

        $( _map ).trigger('route.create', _this);

        data = data || {};

        options = $.extend({}, defaults, data);

        $( _map ).trigger('route.created', _this);
    };

    _this.update = function(data) {
        $( _map ).trigger('route.update', _this);

        data = data || {};

        options = $.extend({}, options, data);

        _this.updateLayer();

        $( _map ).trigger('route.updated', _this);
    };

    _this.getLatLngs = function() {
        if ( ! layer )
            return null;
        dd('route.layer.getLatLngs', layer.getLatLngs());
        return layer.getLatLngs();
    };

    _this.getBounds = function() {
        if ( ! layer )
            return [];

        return layer.getBounds();
    };

    _this.isLayerVisible = function () {
        if ( options.active != true ) {
            return false;
        }

        return app.settings.showRoutes == true;
    };

    _this.setLayer = function (_layer) {
        _this.removeLayer();

        layer = _layer;

        layer
            .on('remove', _this.onLayerRemove)
            .on('add', _this.onLayerAdd);

        return layer;
    };

    _this.getLayer = function () {
        if (layer )
            return layer;

        try {
            layer = L.polyline( options.coordinates, {
                color: options.color,
                weight: 3,
                opacity: 0.8,
                fill: false,
            });

            layer
                .on('remove', _this.onLayerRemove)
                .on('add', _this.onLayerAdd)
                .on('mouseover', _this.onLayerMouseOver)
                .on('mouseout', _this.onLayerMouseOut);
        } catch (err) {
            console.log(err.message);
        }

        return layer;
    };

    _this.updateLayer = function() {
        if ( ! _this.isLayerVisible() ) {
            _this.removeLayer();
        }
    };

    _this.removeLayer = function() {
        if ( ! layer )
            return;

        _map.removeLayer( layer );

        layer = null;
    };

    _this.enableEdit = function() {
        _this.getLayer().editing.enable();
    };

    _this.disableEdit = function() {
        _this.getLayer().editing.disable();
    };

    _this.addPopup = function() {
        if ( ! layer )
            return;

        if ( ! app.settings.showRoutes )
            return;

        popup = new L.Marker(
            null,
            {
                icon: L.divIcon({
                    html: '<div class="name" style="background-color: ' + convertHex(options.color, 81) + '">' + options.name + '</div>',
                    className: 'leaflet-popup-route',
                    iconSize: 'auto'
                })
            }
        );

        if ( ! layer.isEmpty() ) {
            popup.setLatLng( layer.getLatLngs()[0] ).addTo( _map );
        }
    };

    _this.removePopup = function() {
        if ( popup )
            popup.remove();
    };

    _this.onLayerAdd = function() {
        dd('route.onLayerAdd');
        _this.addPopup();
    };

    _this.onLayerRemove = function() {
        dd('route.onLayerRemove');
        _this.removePopup();
    };

    _this.onLayerMouseOver = function() {
        if (!popup)
            return;

        L.DomUtil.addClass(popup._icon, 'leaflet-hover');
    };

    _this.onLayerMouseOut = function() {
        if (!popup)
            return;

        L.DomUtil.removeClass(popup._icon, 'leaflet-hover');
    };

    _this.create(data, map);
}