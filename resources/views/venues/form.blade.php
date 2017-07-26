
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
                    <input type="radio" name="type" value="restaurant" {{ old('type') ?? $venue->type == 'restaurant' ? 'checked="checked"' : '' }}>
                    restaurant
                </label>
                <label class="radio">
                    <input type="radio" name="type" value="bar" {{ old('type') ?? $venue->type == 'bar' ? 'checked="checked"' : '' }}>
                    bar
                </label>
                <label class="radio">
                    <input type="radio" name="type" value="hotel" {{ old('type') ?? $venue->type == 'hotel' ? 'checked="checked"' : '' }}>
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
                    id="xxx"
                    name="xxx"
                    type="text"
                    class="input {{ $errors->has('xxx') ? 'is-danger' : '' }}"
                    value="{{ old('xxx') ?? $venue->xxx }}"
                    placeholder="Lattitude"
                    required
                >
                <span class="icon is-small is-left">
                  <i class="fa fa-compass"></i>
                </span>
            </div>
            @if ($errors->has('xxx'))
                <p class="help is-danger">
                    {{ $errors->first('xxx') }}
                </p>
            @endif
        </div>
        <div class="field">
            <div class="control is-expanded has-icons-left">
                <input
                    id="xxx"
                    name="xxx"
                    type="text"
                    class="input {{ $errors->has('xxx') ? 'is-danger' : '' }}"
                    value="{{ old('xxx') ?? $venue->xxx }}"
                    placeholder="Longitude"
                    required
                >
                <span class="icon is-small is-left">
                  <i class="fa fa-compass"></i>
                </span>
            </div>
            @if ($errors->has('xxx'))
                <p class="help is-danger">
                    {{ $errors->first('xxx') }}
                </p>
            @endif
        </div>
    </div>
</div>

<div class="field is-horizontal">
    <div class="field-label is-normal">
        <label class="label">Select location</label>
    </div>
    <div class="field-body">
        <div class="mapSelect">THIS IS MAP</div>
    </div>
</div>
