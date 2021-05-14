@extends('dashboard.base')

@section('css')

@endsection

@section('content')
<style>
.btn-primary
{
  display:block;
  border-radius:0px;
  box-shadow:0px 4px 6px 2px rgba(0,0,0,0.2);
  margin-top:-5px;
}
.del
{
  position:absolute;
  top:0px;
  right:15px;
  width:30px;
  height:30px;
  text-align:center;
  line-height:30px;
  background-color:rgba(255,255,255,0.6);
  cursor:pointer;
}
</style>

@section('breadcrumb')
    <div class="c-subheader px-3">
        <ol class="breadcrumb breadcrumb-custom border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.zone') }}">Zone</a></li>
        <li class="breadcrumb-item active">@if(isset($zone)) Edit @else Add @endif Zone</li>
        </ol>
    </div>
    
@endsection
<div class="container-fluid">
    <div class="fade-in">

        @include('partials.alert_msg')
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>@if(isset($zone)) Edit @else Add @endif Zone</h4>
                    {{--@if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif--}}
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url()->current() }}" id="myform">
                            <div class="row">
                                <div class="col-md-5">
                                    @csrf
                                    <div class="form-group">
                                        <label for="select3">Select States<span class="mandatory">*</span></label></br>
                                        
                                        <select id="example39" multiple="multiple" style="display: none;" name="states[]" class="form-control" value="" >
                                                @foreach($state_list as $states)

                                                <option 
                                                @if (isset($zone) && @$states->zone_id === @$zone->id ) {{"selected"}}
                                                @elseif(@$states->zone_id) {{"disabled"}}
                                                @endif
                                                value="{{$states->id}}">{{$states->name}}</option>
                                                @endforeach
                                        </select>
                                        @if($errors->has('states'))
                                            <div class="error">{{ $errors->first('states') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <span class="mandatory">*</span>
                                        <input type="text" maxlength="200" placeholder="Zone Title" name="title" class="form-control" value="{{@$zone->title}}" >
                                        @if($errors->has('title'))
                                            <div class="error">{{ $errors->first('title') }}</div>
                                        @endif
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Product Shipping Price In <b>$</b></label>
                                        <span class="mandatory">*</span>
                                        <input type="number" min="0" step=".01" placeholder="Product Price" name="product_price" class="form-control" value="{{@$zone->product_price}}" >
                                        @if($errors->has('product_price'))
                                            <div class="error">{{ $errors->first('product_price') }}</div>
                                        @endif
                                    </div>
                                    <div class="d-flex pt-4">
                                        <button type="submit" class="btn btn-primary mr-4 mt-0" title="@if(@$zone) Update @else Submit @endif" style="border-radius:0.25rem">
                                            @if(@$zone) Update @else Submit @endif
                                        </button>
                                                
                                        <a onclick="history.go(-1)" class="btn btn-danger text-white"  title="Cancel">
                                            Cancel
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7 mt-3 mt-md-0">

                                    <label>Hardware Shipping Weight Range in <b>Lb</b> & Price In <b>$</b></label>
                                    <span class="mandatory">*</span>
                                    <a href="javascript:void(0)" id="addButton"><i class="fa fa-plus category-add" title="Add a New Range"></i></a>
                                    <a href="javascript:void(0)" id="removeButton"><i class="fa fa-minus-circle category-add" title="Add a New Range"></i></a>
                                    <div id='TextBoxesGroup'>
                                    @if(isset($zone))
                                    @foreach(json_decode($zone->hardware_price) as $key=>$hardwarePrice) 
                                    <div id="TextBoxDiv{{$key}}" class="row">
                                        <div class="col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text" id="btnGroupAddon"><b>Lb</b></span></div>
                                            <input required id="minW{{$key}}" type="number"  min="0" step="1" placeholder="Min Weight" name="hardware[{{$key}}][min_weight]" class="form-control" readonly value="{{$hardwarePrice->min_weight}}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text" id="btnGroupAddon"><b>Lb</b></span></div>
                                                <input required id="maxW{{$key}}" type="number"  min="0" step="1" placeholder="Max Weight" name="hardware[{{$key}}][max_weight]" value="{{$hardwarePrice->max_weight}}" class="form-control maxW{{$key}}">
                                                <label for="maxW{{$key}}" class="maxW{{$key}}-error error"></label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text" id="btnGroupAddon"> <b>$</b></span></div>
                                                <input required type="number" value="{{$hardwarePrice->price}}" min="0" step="1" placeholder="Price" name="hardware[{{$key}}][price]" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @else
                                        <div id="TextBoxDiv0" class="row">
                                        <div class="col-md-4">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text" id="btnGroupAddon"><b>Lb</b></span></div>
                                            <input required id="minW0" type="number"  min="0" step="1" placeholder="Min Weight" name="hardware[0][min_weight]" class="form-control" readonly value="0">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text" id="btnGroupAddon"><b>Lb</b></span></div>
                                                <input required id="maxW0" type="number"  min="0" step="1" placeholder="Max Weight" name="hardware[0][max_weight]" class="form-control maxW0">
                                                <label for="maxW0" class="maxW0-error error"></label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                <span class="input-group-text" id="btnGroupAddon"> <b>$</b></span></div>
                                                <input required type="number"  min="0" step="1" placeholder="Price" name="hardware[0][price]" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                @endif
                                </div>
                            @if($errors->has('hardware_price'))
                                <div class="error">{{ $errors->first('hardware_price') }}</div>
                            @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">

@endsection

@section('javascript')
<script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
<script src="{{asset('js/jquery.validate.min.js')}}"></script>

<script>


/**
 * bootstrap-multiselect.js
 * https://github.com/davidstutz/bootstrap-multiselect
 *
 * Copyright 2012, 2013 David Stutz
 *
 * Dual licensed under the BSD-3-Clause and the Apache License, Version 2.0.
 */! function ($) {

  "use strict"; // jshint ;_;

if (typeof ko !== 'undefined' && ko.bindingHandlers && !ko.bindingHandlers.multiselect) {
    ko.bindingHandlers.multiselect = {
        init: function (element, valueAccessor, allBindingsAccessor, viewModel, bindingContext) {},
        update: function (element, valueAccessor, allBindingsAccessor, viewModel, bindingContext) {

            var config = ko.utils.unwrapObservable(valueAccessor());
            var selectOptions = allBindingsAccessor().options;
            var ms = $(element).data('multiselect');

            if (!ms) {
                $(element).multiselect(config);
            } else {
                ms.updateOriginalOptions();
                if (selectOptions && selectOptions().length !== ms.originalOptions.length) {
                    $(element).multiselect('rebuild');
                }
            }
        }
    };
}

/**
 * Constructor to create a new multiselect using the given select.
 * 
 * @param {jQuery} select
 * @param {Object} options
 * @returns {Multiselect}
 */
function Multiselect(select, options) {

    this.options = this.mergeOptions(options);
    this.$select = $(select);

    // Initialization.
    // We have to clone to create a new reference.
    this.originalOptions = this.$select.clone()[0].options;
    this.query = '';
    this.searchTimeout = null;

    this.options.multiple = this.$select.attr('multiple') === "multiple";
    this.options.onChange = $.proxy(this.options.onChange, this);
    this.options.onDropdownShow = $.proxy(this.options.onDropdownShow, this);
    this.options.onDropdownHide = $.proxy(this.options.onDropdownHide, this);

    // Build select all if enabled.
    this.buildContainer();
    this.buildButton();
    this.buildSelectAll();
    this.buildDropdown();
    this.buildDropdownOptions();
    this.buildFilter();

    this.updateButtonText();
    this.updateSelectAll();
    this.updateOptgroups();

    this.$select.hide().after(this.$container);
};

Multiselect.prototype = {

    defaults: {
        /**
         * Default text function will either print 'None selected' in case no
         * option is selected or a list of the selected options up to a length of 3 selected options.
         * 
         * @param {jQuery} options
         * @param {jQuery} select
         * @returns {String}
         */
        buttonText: function (options, select) {
            if (options.length === 0) {
                return this.nonSelectedText + ' <b class="caret"></b>';
            } else {
                if (options.length > this.numberDisplayed) {
                    return options.length + ' ' + this.nSelectedText + ' <b class="caret"></b>';
                } else {
                    var selected = '';
                    options.each(function () {
                        var label = ($(this).attr('label') !== undefined) ? $(this).attr('label') : $(this).html();

                        selected += label + ', ';
                    });
                    return selected.substr(0, selected.length - 2) + ' <b class="caret"></b>';
                }
            }
        },
        /**
         * Updates the title of the button similar to the buttonText function.
         * @param {jQuery} options
         * @param {jQuery} select
         * @returns {@exp;selected@call;substr}
         */
        buttonTitle: function (options, select) {
            if (options.length === 0) {
                return this.nonSelectedText;
            } else {
                var selected = '';
                options.each(function () {
                    selected += $(this).text() + ', ';
                });
                return selected.substr(0, selected.length - 2);
            }
        },
        /**
         * Create a label.
         * 
         * @param {jQuery} element
         * @returns {String}
         */
        label: function (element) {
            return $(element).attr('label') || $(element).html();
        },
        /**
         * Triggered on change of the multiselect.
         * Not triggered when selecting/deselecting options manually.
         * 
         * @param {jQuery} option
         * @param {Boolean} checked
         */
        onChange: function (option, checked) {

        },
        /**
         * Triggered when the dropdown is shown.
         * 
         * @param {jQuery} event
         */
        onDropdownShow: function (event) {

        },
        /**
         * Triggered when the dropdown is hidden.
         * 
         * @param {jQuery} event
         */
        onDropdownHide: function (event) {

        },
        buttonClass: 'btn btn-default',
        dropRight: false,
        selectedClass: 'active',
        groupClass: 'multiselect-optgroup-item',
        clickableGroups: false,
        buttonWidth: 'auto',
        buttonContainer: '<div class="form-control" />',
        // Maximum height of the dropdown menu.
        // If maximum height is exceeded a scrollbar will be displayed.
        maxHeight: false,
        includeSelectAllOption: false,
        selectAllText: ' Select all',
        selectAllValue: 'multiselect-all',
        enableFiltering: false,
        enableCaseInsensitiveFiltering: false,
        filterPlaceholder: 'Search',
        // possible options: 'text', 'value', 'both'
        filterBehavior: 'text',
        preventInputChangeEvent: false,
        nonSelectedText: 'None selected',
        nSelectedText: 'selected',
        numberDisplayed: 3
    },

    templates: {
        button: '<button type="button" class="multiselect dropdown-toggle w-100 d-flex justify-content-between p-0" data-toggle="dropdown"></button>',
        ul: '<ul class="multiselect-container dropdown-menu p-3"></ul>',
        filter: '<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span><input class="form-control multiselect-search" type="text"></div>',
        li: '<li><a href="javascript:void(0);"><label></label></a></li>',
        divider: '<li class="divider"></li>',
        liGroup: '<li><label class="multiselect-group"></label></li>'
    },

    constructor: Multiselect,

    /**
     * Builds the container of the multiselect.
     */
    buildContainer: function () {
        this.$container = $(this.options.buttonContainer);
        this.$container.on('show.bs.dropdown', this.options.onDropdownShow);
        this.$container.on('hide.bs.dropdown', this.options.onDropdownHide);
    },

    /**
     * Builds the button of the multiselect.
     */
    buildButton: function () {
        this.$button = $(this.templates.button).addClass(this.options.buttonClass);

        // Adopt active state.
        if (this.$select.prop('disabled')) {
            this.disable();
        } else {
            this.enable();
        }

        // Manually add button width if set.
        if (this.options.buttonWidth && this.options.buttonWidth != 'auto') {
            this.$button.css({
                'width': this.options.buttonWidth
            });
        }

        // Keep the tab index from the select.
        var tabindex = this.$select.attr('tabindex');
        if (tabindex) {
            this.$button.attr('tabindex', tabindex);
        }

        this.$container.prepend(this.$button);
    },

    /**
     * Builds the ul representing the dropdown menu.
     */
    buildDropdown: function () {

        // Build ul.
        this.$ul = $(this.templates.ul);

        if (this.options.dropRight) {
            this.$ul.addClass('pull-right');
        }

        // Set max height of dropdown menu to activate auto scrollbar.
        if (this.options.maxHeight) {
            // TODO: Add a class for this option to move the css declarations.
            this.$ul.css({
                'max-height': this.options.maxHeight + 'px',
                    'overflow-y': 'auto',
                    'overflow-x': 'hidden'
            });
        }

        this.$container.append(this.$ul);
    },

    /**
     * Build the dropdown options and binds all nessecary events.
     * Uses createDivider and createOptionValue to create the necessary options.
     */
    buildDropdownOptions: function () {

        this.$select.children().each($.proxy(function (index, element) {

            // Support optgroups and options without a group simultaneously.
            var tag = $(element).prop('tagName')
                .toLowerCase();

            if (tag === 'optgroup') {
                this.createOptgroup(element);
            } else if (tag === 'option') {

                if ($(element).data('role') === 'divider') {
                    this.createDivider();
                } else {
                    this.createOptionValue(element);
                }

            }

            // Other illegal tags will be ignored.
        }, this));

        // Bind the change event on the dropdown elements.
        $('li input', this.$ul).on('change', $.proxy(function (event) {
            var checked = $(event.target).prop('checked') || false;
            var isSelectAllOption = $(event.target).val() === this.options.selectAllValue && this.$select[0][0].value === this.options.selectAllValue;
            var optgroup = $(event.target).parents('label').attr('data-for');

            // Apply or unapply the configured selected class.
            if (this.options.selectedClass) {
                if (checked) {
                    $(event.target).parents('li')
                        .addClass(this.options.selectedClass);
                } else {
                    $(event.target).parents('li')
                        .removeClass(this.options.selectedClass);
                }
            }

            // Get the corresponding option.
            var value = $(event.target).val();
            var $option = this.getOptionByValue(value);

            var $optionsNotThis = $('option', this.$select).not($option);
            var $checkboxesNotThis = $('input', this.$container).not($(event.target));

            if (isSelectAllOption || optgroup) {
                var values = [];

                var $parent = this.$select;
                if (optgroup) {
                    $parent = $parent.find("optgroup[label='" + optgroup + "']")
                }

                var options = $('option[value!="' + this.options.selectAllValue + '"]', $parent);
                for (var i = 0; i < options.length; i++) {
                    // Additionally check whether the option is visible within the dropcown.
                    if (options[i].value !== this.options.selectAllValue && this.getInputByValue(options[i].value).is(':visible')) {
                        values.push(options[i].value);
                    }
                }

                if (checked) {
                    this.select(values);
                } else {
                    this.deselect(values);
                }
            }

            if (checked) {
                $option.prop('selected', true);

                if (this.options.multiple) {
                    // Simply select additional option.
                    $option.prop('selected', true);
                } else {
                    // Unselect all other options and corresponding checkboxes.
                    if (this.options.selectedClass) {
                        $($checkboxesNotThis).parents('li').removeClass(this.options.selectedClass);
                    }

                    $($checkboxesNotThis).prop('checked', false);
                    $optionsNotThis.prop('selected', false);

                    // It's a single selection, so close.
                    this.$button.click();
                }

                if (this.options.selectedClass === "active") {
                    $optionsNotThis.parents("a").css("outline", "");
                }
            } else {
                // Unselect option.
                $option.prop('selected', false);
            }

            this.$select.change();
            this.options.onChange($option, checked);

            this.updateButtonText();
            this.updateSelectAll();
            this.updateOptgroups();

            if (this.options.preventInputChangeEvent) {
                return false;
            }
        }, this));

        $('li a', this.$ul).on('touchstart click', function (event) {
            event.stopPropagation();

            if (event.shiftKey) {
                var checked = $(event.target).prop('checked') || false;

                if (checked) {
                    var prev = $(event.target).parents('li:last')
                        .siblings('li[class="active"]:first');

                    var currentIdx = $(event.target).parents('li')
                        .index();
                    var prevIdx = prev.index();

                    if (currentIdx > prevIdx) {
                        $(event.target).parents("li:last").prevUntil(prev).each(

                        function () {
                            $(this).find("input:first").prop("checked", true)
                                .trigger("change");
                        });
                    } else {
                        $(event.target).parents("li:last").nextUntil(prev).each(

                        function () {
                            $(this).find("input:first").prop("checked", true)
                                .trigger("change");
                        });
                    }
                }
            }

            $(event.target).blur();
        });

        // Keyboard support.
        this.$container.on('keydown', $.proxy(function (event) {
            if ($('input[type="text"]', this.$container).is(':focus')) {
                return;
            }
            if ((event.keyCode === 9 || event.keyCode === 27) && this.$container.hasClass('open')) {

                // Close on tab or escape.
                this.$button.click();
            } else {
                var $items = $(this.$container).find("li:not(.divider):visible a");

                if (!$items.length) {
                    return;
                }

                var index = $items.index($items.filter(':focus'));

                // Navigation up.
                if (event.keyCode === 38 && index > 0) {
                    index--;
                }
                // Navigate down.
                else if (event.keyCode === 40 && index < $items.length - 1) {
                    index++;
                } else if (!~index) {
                    index = 0;
                }

                var $current = $items.eq(index);
                $current.focus();

                if (event.keyCode === 32 || event.keyCode === 13) {
                    var $checkbox = $current.find('input');

                    $checkbox.prop("checked", !$checkbox.prop("checked"));
                    $checkbox.change();
                }

                event.stopPropagation();
                event.preventDefault();
            }
        }, this));
    },

    /**
     * Create an option using the given select option.
     * 
     * @param {jQuery} element
     */
    createOptionValue: function (element) {
        if ($(element).is(':selected')) {
            $(element).prop('selected', true);
        }

        // Support the label attribute on options.
        var label = this.options.label(element);
        var value = $(element).val();
        var inputType = this.options.multiple ? "checkbox" : "radio";

        var $li = $(this.templates.li);
        $('label', $li).addClass(inputType);
        $('label', $li).append('<input type="' + inputType + '" />');

        var selected = $(element).prop('selected') || false;
        var $checkbox = $('input', $li);
        $checkbox.val(value);

        if (value === this.options.selectAllValue) {
            $checkbox.parent().parent()
                .addClass('multiselect-all');
        }

        $('label', $li).append(" " + label);

        this.$ul.append($li);

        if ($(element).is(':disabled')) {
            $checkbox.attr('disabled', 'disabled')
                .prop('disabled', true)
                .parents('li')
                .addClass('disabled');
        }

        $checkbox.prop('checked', selected);

        if (selected && this.options.selectedClass) {
            $checkbox.parents('li')
                .addClass(this.options.selectedClass);
        }

        return $li;
    },

    /**
     * Creates a divider using the given select option.
     * 
     * @param {jQuery} element
     */
    createDivider: function (element) {
        var $divider = $(this.templates.divider);
        this.$ul.append($divider);
    },

    /**
     * Creates an optgroup.
     * 
     * @param {jQuery} group
     */
    createOptgroup: function (group) {
        var groupName = $(group).prop('label');
        var inputType = this.options.multiple ? "checkbox" : "radio";

        // Add a header for the group.
        var $li = $(this.templates.liGroup);
        $('label', $li).addClass(inputType);
        $('label', $li).text(groupName).attr('data-for', groupName);
        if (this.options.multiple && this.options.clickableGroups) {
            $('label', $li).prepend('<input type="' + inputType + '" /> ');
            $li.wrapInner('<a>');
        }
        this.$ul.append($li);

        // Add the options of the group.
        $('option', group).each($.proxy(function (index, element) {
            this.createOptionValue(element).addClass(this.options.groupClass);
        }, this));
    },

    /**
     * Build the select all.
     * Checks if a select all ahs already been created.
     */
    buildSelectAll: function () {
        var alreadyHasSelectAll = this.hasSelectAll();

        // If options.includeSelectAllOption === true, add the include all checkbox.
        if (this.options.includeSelectAllOption && this.options.multiple && !alreadyHasSelectAll) {
            this.$select.prepend('<option value="' + this.options.selectAllValue + '">' + this.options.selectAllText + '</option>');
        }
    },

    /**
     * Builds the filter.
     */
    buildFilter: function () {

        // Build filter if filtering OR case insensitive filtering is enabled and the number of options exceeds (or equals) enableFilterLength.
        if (this.options.enableFiltering || this.options.enableCaseInsensitiveFiltering) {
            var enableFilterLength = Math.max(this.options.enableFiltering, this.options.enableCaseInsensitiveFiltering);

            if (this.$select.find('option').length >= enableFilterLength) {

                this.$filter = $(this.templates.filter);
                $('input', this.$filter).attr('placeholder', this.options.filterPlaceholder);
                this.$ul.prepend(this.$filter);

                this.$filter.val(this.query).on('click', function (event) {
                    event.stopPropagation();
                }).on('input keydown', $.proxy(function (event) {
                    // This is useful to catch "keydown" events after the browser has updated the control.
                    clearTimeout(this.searchTimeout);

                    this.searchTimeout = this.asyncFunction($.proxy(function () {

                        if (this.query !== event.target.value) {
                            this.query = event.target.value;

                            $.each($('li', this.$ul), $.proxy(function (index, element) {
                                var value = $('input', element).val();
                                var text = $('label', element).text();

                                if (value !== this.options.selectAllValue && text) {
                                    // by default lets assume that element is not
                                    // interesting for this search
                                    var showElement = false;

                                    var filterCandidate = '';
                                    if ((this.options.filterBehavior === 'text' || this.options.filterBehavior === 'both')) {
                                        filterCandidate = text;
                                    }
                                    if ((this.options.filterBehavior === 'value' || this.options.filterBehavior === 'both')) {
                                        filterCandidate = value;
                                    }

                                    if (this.options.enableCaseInsensitiveFiltering && filterCandidate.toLowerCase().indexOf(this.query.toLowerCase()) > -1) {
                                        showElement = true;
                                    } else if (filterCandidate.indexOf(this.query) > -1) {
                                        showElement = true;
                                    }

                                    if (showElement) {
                                        $(element).show();
                                    } else {
                                        $(element).hide();
                                    }
                                }
                            }, this));
                        }

                        // TODO: check whether select all option needs to be updated.
                    }, this), 300, this);
                }, this));
            }
        }
    },

    /**
     * Unbinds the whole plugin.
     */
    destroy: function () {
        this.$container.remove();
        this.$select.show();
    },

    /**
     * Refreshs the multiselect based on the selected options of the select.
     */
    refresh: function () {
        $('option', this.$select).each($.proxy(function (index, element) {
            var $input = $('li input', this.$ul).filter(function () {
                return $(this).val() === $(element).val();
            });

            if ($(element).is(':selected')) {
                $input.prop('checked', true);

                if (this.options.selectedClass) {
                    $input.parents('li')
                        .addClass(this.options.selectedClass);
                }
            } else {
                $input.prop('checked', false);

                if (this.options.selectedClass) {
                    $input.parents('li')
                        .removeClass(this.options.selectedClass);
                }
            }

            if ($(element).is(":disabled")) {
                $input.attr('disabled', 'disabled')
                    .prop('disabled', true)
                    .parents('li')
                    .addClass('disabled');
            } else {
                $input.prop('disabled', false)
                    .parents('li')
                    .removeClass('disabled');
            }
        }, this));

        this.updateButtonText();
        this.updateSelectAll();
        this.updateOptgroups();
    },

    /**
     * Select all options of the given values.
     * 
     * @param {Array} selectValues
     */
    select: function (selectValues) {
        if (!$.isArray(selectValues)) {
            selectValues = [selectValues];
        }

        for (var i = 0; i < selectValues.length; i++) {
            var value = selectValues[i];

            var $option = this.getOptionByValue(value);
            var $checkbox = this.getInputByValue(value);

            if (this.options.selectedClass) {
                $checkbox.parents('li')
                    .addClass(this.options.selectedClass);
            }

            $checkbox.prop('checked', true);
            $option.prop('selected', true);
        }

        this.updateButtonText();
    },

    /**
     * Deselects all options of the given values.
     * 
     * @param {Array} deselectValues
     */
    deselect: function (deselectValues) {
        if (!$.isArray(deselectValues)) {
            deselectValues = [deselectValues];
        }

        for (var i = 0; i < deselectValues.length; i++) {

            var value = deselectValues[i];

            var $option = this.getOptionByValue(value);
            var $checkbox = this.getInputByValue(value);

            if (this.options.selectedClass) {
                $checkbox.parents('li')
                    .removeClass(this.options.selectedClass);
            }

            $checkbox.prop('checked', false);
            $option.prop('selected', false);
        }

        this.updateButtonText();
    },

    /**
     * Rebuild the plugin.
     * Rebuilds the dropdown, the filter and the select all option.
     */
    rebuild: function () {
        this.$ul.html('');

        // Remove select all option in select.
        $('option[value="' + this.options.selectAllValue + '"]', this.$select).remove();

        // Important to distinguish between radios and checkboxes.
        this.options.multiple = this.$select.attr('multiple') === "multiple";

        this.buildSelectAll();
        this.buildDropdownOptions();
        this.buildFilter();

        this.updateButtonText();
        this.updateSelectAll();
        this.updateOptgroups();
    },

    /**
     * The provided data will be used to build the dropdown.
     * 
     * @param {Array} dataprovider
     */
    dataprovider: function (dataprovider) {
        var optionDOM = "";
        dataprovider.forEach(function (option) {
            optionDOM += '<option value="' + option.value + '">' + option.label + '</option>';
        });

        this.$select.html(optionDOM);
        this.rebuild();
    },

    /**
     * Enable the multiselect.
     */
    enable: function () {
        this.$select.prop('disabled', false);
        this.$button.prop('disabled', false)
            .removeClass('disabled');
    },

    /**
     * Disable the multiselect.
     */
    disable: function () {
        this.$select.prop('disabled', true);
        this.$button.prop('disabled', true)
            .addClass('disabled');
    },

    /**
     * Set the options.
     * 
     * @param {Array} options
     */
    setOptions: function (options) {
        this.options = this.mergeOptions(options);
    },

    /**
     * Merges the given options with the default options.
     * 
     * @param {Array} options
     * @returns {Array}
     */
    mergeOptions: function (options) {
        return $.extend({}, this.defaults, options);
    },

    /**
     * Checks whether a select all option is present.
     * 
     * @returns {Boolean}
     */
    hasSelectAll: function () {
        return this.$select[0][0] ? this.$select[0][0].value === this.options.selectAllValue : false;
    },

    /**
     * Updates the select all option based on the currently selected options.
     */
    updateSelectAll: function () {
        if (this.hasSelectAll()) {
            var selected = this.getSelected();

            if (selected.length === $('option:not([data-role=divider])', this.$select).length - 1) {
                this.select(this.options.selectAllValue);
            } else {
                this.deselect(this.options.selectAllValue);
            }
        }
    },

    /**
     * Updates the optgroup option based on the currently selected options.
     */
    updateOptgroups: function () {
        if (this.options.multiple && this.options.clickableGroups) {
            $('optgroup', this.$select).each($.proxy(function (key, optgroup) {
                var state = $('option', optgroup).length == $('option:selected', optgroup).length;

                $("label[data-for='" + $(optgroup).prop('label') + "'] > input", this.$container)
                    .prop('checked', state)
                    .parents('li').toggleClass(this.options.selectedClass, state);
            }, this));
        }
    },

    /**
     * Update the button text and its title base don the currenty selected options.
     */
    updateButtonText: function () {
        var options = this.getSelected();

        // First update the displayed button text.
        $('button', this.$container).html(this.options.buttonText(options, this.$select));

        // Now update the title attribute of the button.
        $('button', this.$container).attr('title', this.options.buttonTitle(options, this.$select));

    },

    /**
     * Get all selected options.
     * 
     * @returns {jQuery}
     */
    getSelected: function () {
        return $('option[value!="' + this.options.selectAllValue + '"]:selected', this.$select).filter(function () {
            return $(this).prop('selected');
        });
    },

    /**
     * Gets a select option by its value.
     * 
     * @param {String} value
     * @returns {jQuery}
     */
    getOptionByValue: function (value) {
        return $('option', this.$select).filter(function () {
            return $(this).val() === value;
        });
    },

    /**
     * Get the input (radio/checkbox) by its value.
     * 
     * @param {String} value
     * @returns {jQuery}
     */
    getInputByValue: function (value) {
        return $('li input', this.$ul).filter(function () {
            return $(this).val() === value;
        });
    },

    /**
     * Used for knockout integration.
     */
    updateOriginalOptions: function () {
        this.originalOptions = this.$select.clone()[0].options;
    },

    asyncFunction: function (callback, timeout, self) {
        var args = Array.prototype.slice.call(arguments, 3);
        return setTimeout(function () {
            callback.apply(self || window, args);
        }, timeout);
    }
};

$.fn.multiselect = function (option, parameter) {
    return this.each(function () {
        var data = $(this).data('multiselect');
        var options = typeof option === 'object' && option;

        // Initialize the multiselect.
        if (!data) {
            $(this).data('multiselect', (data = new Multiselect(this, options)));
        }

        // Call multiselect method.
        if (typeof option === 'string') {
            data[option](parameter);
        }
    });
};

$.fn.multiselect.Constructor = Multiselect;

$(function () {
    $("select[data-role=multiselect]").multiselect();
});

}(window.jQuery);

$('.multiselect-group').before('<input type="checkbox" />');
$(document).on('click', '.multiselect-group', function(event) {
var checkAll = true;
var $opts = $(this).parent().nextUntil(':has(.multiselect-group)'); 
var $inactive = $opts.filter(':not(.active)'); 
var $toggleMe = $inactive;
if ($inactive.length == 0) { 
    $toggleMe = $opts;
    checkAll = false;
}
$toggleMe.find('input').click();
$(this).parent().find('input').attr('checked', checkAll);
event.preventDefault();
});

$(document).ready(function () {
$('#example39').multiselect();
});
</script>
<script>
    $("#myform").validate({
        rules: {
            state_id: {
                required: true
            },
            title: {
                required: true,
                minlength: 2,
                maxlength: 40,
            },
            product_price: {
                required: true
            },
            // shiping_price: {
            //     required: true
            // }
        },
        messages: {
            state_id: "Please select a state",
            title: {
                required: "Title field is required.",
                minlength: "Title must be atleast 2 digit",
                maxlength: "Title must not exeed 40 digits"
            },
            product_price: "Please provide Valid Product Price",
            // shiping_price: "Please provide Valid Hardware Price"
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
    
</script>
<script type="text/javascript">
$(document).ready(function(){
    @if(isset($zone))
    var counter = {{count(json_decode($zone->hardware_price))}};
    @else
    var counter = 1;
    @endif
    $("#addButton").click(function () {
        if(counter>=1){
            var maxW = parseInt($("#maxW"+(counter-1)).val());
            var minW = parseInt($("#minW"+(counter-1)).val());
            if(!maxW)
            {
                $('.maxW'+(counter-1)+'-error').html('');
                $('.maxW'+(counter-1)+'-error').show();
                $('.maxW'+(counter-1)+'-error').html('Enter Max Weight.');
                return false;
            }
            else if( maxW  < minW) 
            {
                $('.maxW'+(counter-1)+'-error').html('');
                $('.maxW'+(counter-1)+'-error').show();
                $('.maxW'+(counter-1)+'-error').html('Max Weight must be Greater than Min Weight.');
                return false;
            }
            else if(maxW > 1){
                $('.maxW'+(counter-1)+'-error').html('');
                $('.maxW'+(counter-1)+'-error').hide();
                var minval = maxW;
            }
            else{
                return false;
            }
        }
    var newTextBoxDiv = $(document.createElement('div'))
    .attr("id", 'TextBoxDiv' + counter)
    .attr("class", 'row');
    newTextBoxDiv.after().html('<div class="col-md-4"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="btnGroupAddon"><b>Lb</b></span></div><input type="number" id="minW'+counter+'" min="0" step="1" placeholder="Min Weight" name="hardware[' + counter + '][min_weight]" class="form-control" readonly value="'+minval+'"></div></div><div class="col-md-4"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="btnGroupAddon"><b>Lb</b></span></div><input type="number" min="'+maxW+'"id="maxW'+counter+'" min="0" step="1" placeholder="And Above" name="hardware[' + counter +'][max_weight]" class="form-control maxW'+counter+'" value=""><label for="maxW'+counter+'" class="maxW'+counter+'-error error"></label></div></div><div class="col-md-4"><div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="btnGroupAddon"><b>$</b></span></div><input type="number"  min="0" step="1" placeholder="Price" name="hardware[' + counter +'][price]" class="form-control" value=""></div></div>');
    newTextBoxDiv.appendTo("#TextBoxesGroup");
    counter++;
    });
        $("#removeButton").click(function () {
            if(counter==1){
                alert("No more weight range price to remove");
                return false;
                }   
            counter--;
            $("#TextBoxDiv" + counter).remove();
        });
    });
</script>
@endsection
