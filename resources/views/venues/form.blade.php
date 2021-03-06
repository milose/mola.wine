
<div class="field is-horizontal">
    <div class="field-label is-normal">
        <label class="label">Name</label>
    </div>
    <div class="field-body">
        <div class="field">
            <div class="control is-expanded has-icons-left">
                <input
                    id="name"
                    name="name"
                    type="text"
                    class="input {{ $errors->has('name') ? 'is-danger' : '' }}"
                    value="{{ old('name') ?? $venue->name }}"
                    placeholder="Name"
                    required
                >
                <span class="icon is-small is-left">
                  <i class="fa fa-building-o"></i>
                </span>
            </div>
            @if ($errors->has('name'))
                <p class="help is-danger">
                    {{ $errors->first('name') }}
                </p>
            @endif
        </div>
    </div>
</div>

<div class="field is-horizontal">
    <div class="field-label is-normal">
        <label class="label">Address</label>
    </div>
    <div class="field-body">
        <div class="field">
            <div class="control is-expanded has-icons-left">
                <input
                    id="address"
                    name="address"
                    type="text"
                    class="input {{ $errors->has('address') ? 'is-danger' : '' }}"
                    value="{{ old('address') ?? $venue->address }}"
                    placeholder="Address"
                    required
                >
                <span class="icon is-small is-left">
                  <i class="fa fa-map-marker"></i>
                </span>
            </div>
            @if ($errors->has('address'))
                <p class="help is-danger">
                    {{ $errors->first('address') }}
                </p>
            @endif
        </div>
    </div>
</div>

<div class="field is-horizontal">
    <div class="field-label is-normal">
        <label class="label">City</label>
    </div>
    <div class="field-body">
        <div class="field">
            <div class="control is-expanded has-icons-left">
                <input
                    id="city"
                    name="city"
                    type="text"
                    class="input {{ $errors->has('city') ? 'is-danger' : '' }}"
                    value="{{ old('city') ?? $venue->city }}"
                    placeholder="City"
                    required
                >
                <span class="icon is-small is-left">
                  <i class="fa fa-globe"></i>
                </span>
            </div>
            @if ($errors->has('city'))
                <p class="help is-danger">
                    {{ $errors->first('city') }}
                </p>
            @endif
        </div>
    </div>
</div>

<div class="field is-horizontal">
    <div class="field-label">
        <label class="label">Type</label>
    </div>
    <div class="field-body">
        <div class="field is-narrow">
            <div class="control">
                <label class="radio">
                    <input type="radio" name="type" value="restaurant" {{ (old('type') ?? $venue->type) == 'restaurant' ? 'checked="checked"' : '' }}>
                    restaurant
                </label>
                <label class="radio">
                    <input type="radio" name="type" value="bar" {{ (old('type') ?? $venue->type) == 'bar' ? 'checked="checked"' : '' }}>
                    bar
                </label>
                <label class="radio">
                    <input type="radio" name="type" value="hotel" {{ (old('type') ?? $venue->type) == 'hotel' ? 'checked="checked"' : '' }}>
                    hotel
                </label>
            </div>
            @if ($errors->has('type'))
                <p class="help is-danger">
                    {{ $errors->first('type') }}
                </p>
            @endif
        </div>
    </div>
</div>

<div class="field is-horizontal">
    <div class="field-label is-normal">
        <label class="label">Coordinates</label>
    </div>
    <div class="field-body">
        <div class="field">
            <div class="control is-expanded has-icons-left">
                <input
                    id="lat"
                    name="lat"
                    type="text"
                    class="input {{ $errors->has('lat') ? 'is-danger' : '' }}"
                    value="{{ old('lat') ?? $venue->lat }}"
                    placeholder="Lattitude"
                    v-model="currentLocation.lat"
                    required
                >
                <span class="icon is-small is-left">
                  <i class="fa fa-compass"></i>
                </span>
            </div>
            @if ($errors->has('lat'))
                <p class="help is-danger">
                    {{ $errors->first('lat') }}
                </p>
            @endif
        </div>
        <div class="field">
            <div class="control is-expanded has-icons-left">
                <input
                    id="lng"
                    name="lng"
                    type="text"
                    class="input {{ $errors->has('lng') ? 'is-danger' : '' }}"
                    value="{{ old('lng') ?? $venue->lng }}"
                    placeholder="Longitude"
                    v-model="currentLocation.lng"
                    required
                >
                <span class="icon is-small is-left">
                  <i class="fa fa-compass"></i>
                </span>
            </div>
            @if ($errors->has('lng'))
                <p class="help is-danger">
                    {{ $errors->first('lng') }}
                </p>
            @endif
        </div>
    </div>
</div>

<div class="field is-horizontal">
    <div class="field is-normal">
        <label class="label">Select location</label>
    </div>
</div>
<div id="mapContainer" class="panel">
    <div id="map"></div>
    <div id="crosshair"><img src="/img/crosshair.png"></div>
    <div id="mapSearch">
        <div class="field">
            <div class="control">
                <input type="text" class="input" v-model="address" @input="addressChanged" @keydown.enter="blurInput">
            </div>
        </div>
    </div>
</div>
