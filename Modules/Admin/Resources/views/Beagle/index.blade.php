@extends('beagle.app')
@section('content')
    <div class="be-content">
        <div class="page-head">
            <h2 class="page-head-title">Form Elements</h2>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb page-head-nav">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active">Elements</li>
                </ol>
            </nav>
        </div>
        <div class="main-content container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-border-color card-border-color-primary">
                        <div class="card-header card-header-divider">Basic Form<span class="card-subtitle">This is the default bootstrap form layout</span></div>
                        <div class="card-body">
                            <form>
                                <div class="form-group pt-2">
                                    <label for="inputEmail">Email address</label>
                                    <input class="form-control" id="inputEmail" type="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword">Password</label>
                                    <input class="form-control" id="inputPassword" type="password" placeholder="Password">
                                </div>
                                <div class="row pt-3">
                                    <div class="col-lg-6 pb-4 pb-lg-0">
                                        <div class="be-checkbox custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="check1">
                                            <label class="custom-control-label" for="check1">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-right">
                                            <button class="btn btn-space btn-primary" type="submit">Submit</button>
                                            <button class="btn btn-space btn-secondary">Cancel</button>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card card-border-color card-border-color-primary">
                        <div class="card-header card-header-divider">Horizontal Form<span class="card-subtitle">This is the horizontal bootstrap layout</span></div>
                        <div class="card-body">
                            <form>
                                <div class="form-group row mt-2">
                                    <label class="col-3 col-lg-2 col-form-label text-right" for="inputEmail2">Email</label>
                                    <div class="col-9 col-lg-10">
                                        <input class="form-control" id="inputEmail2" type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-3 col-lg-2 col-form-label text-right" for="inputPassword2">Password</label>
                                    <div class="col-9 col-lg-10">
                                        <input class="form-control" id="inputPassword2" type="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="row pt-3 mt-1">
                                    <div class="col-sm-6 col-lg-6 pb-4 pb-lg-0">
                                        <div class="be-checkbox custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="check2">
                                            <label class="custom-control-label" for="check2">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="text-right">
                                            <button class="btn btn-space btn-primary" type="submit">Register</button>
                                            <button class="btn btn-space btn-secondary">Cancel</button>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-border-color card-border-color-primary">
                        <div class="card-header card-header-divider">Basic Elements<span class="card-subtitle">These are the basic bootstrap form elements</span></div>
                        <div class="card-body">
                            <form>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputText3">Input Text</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="inputText3" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputPassword3">Input Password</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="inputPassword3" type="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputPlaceholder3">Placeholder Input</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="inputPlaceholder3" type="text" placeholder="Placeholder text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputDisabled3">Disabled Input</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="inputDisabled3" type="text" disabled="disabled" placeholder="Disabled input text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputReadonly3">Readonly Input</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="inputReadonly3" type="text" readonly="readonly" value="Readonly input text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">Textarea</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <textarea class="form-control" id="inputTextarea3"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-border-color card-border-color-primary">
                        <div class="card-header card-header-divider">Input File<span class="card-subtitle">These are the input file options</span></div>
                        <div class="card-body">
                            <form>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="file-1">Button File Input</label>
                                    <div class="col-12 col-sm-6">
                                        <input class="inputfile" id="file-1" type="file" name="file-1" data-multiple-caption="{count} files selected" multiple>
                                        <label class="btn-secondary" for="file-1"> <i class="mdi mdi-upload"></i><span>Browse files...</span></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="file-2">Custom Button File Input</label>
                                    <div class="col-12 col-sm-6">
                                        <input class="inputfile" id="file-2" type="file" name="file-2" data-multiple-caption="{count} files selected" multiple>
                                        <label class="btn-primary" for="file-2"> <i class="mdi mdi-upload"></i><span>Browse files...</span></label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Custom Button File Input</label>
                                    <div class="col-12 col-sm-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text" id="inputGroupFileAddon01">Upload</span></div>
                                            <div class="custom-file">
                                                <input class="custom-file-input" id="inputGroupFile01" type="file" aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="custom-file">
                                                <input class="custom-file-input" id="inputGroupFile02" type="file">
                                                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                                            </div>
                                            <div class="input-group-append"><span class="input-group-text" id="inputGroupFileAddon02">Upload</span></div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-secondary" id="inputGroupFileAddon03" type="button">Button</button>
                                            </div>
                                            <div class="custom-file">
                                                <input class="custom-file-input" id="inputGroupFile03" type="file" aria-describedby="inputGroupFileAddon03">
                                                <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input class="custom-file-input" id="inputGroupFile04" type="file" aria-describedby="inputGroupFileAddon04">
                                                <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <button class="btn btn-secondary" id="inputGroupFileAddon04" type="button">Button</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-border-color card-border-color-primary">
                        <div class="card-header card-header-divider">Input Sizing<span class="card-subtitle">These are the different form control component sizes</span></div>
                        <div class="card-body">
                            <form>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputLarge">Large</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control form-control-lg" id="inputLarge" type="text" value="Large input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputDefault">Default</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control" id="inputDefault" type="text" value="Default input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputSmall">Small</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control form-control-sm" id="inputSmall" type="text" value="Small input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputExtraSmall">Extra Small</label>
                                    <div class="col-12 col-sm-8 col-lg-6 pt-1">
                                        <input class="form-control form-control-xs" id="inputExtraSmall" type="text" value="Extra small input">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-border-color card-border-color-primary">
                        <div class="card-header card-header-divider">Select & Option Elements<span class="card-subtitle">Advanced custom radio & checkboxes components with pure css</span></div>
                        <div class="card-body">
                            <form action="#" style="border-radius: 0px;">
                                <div class="form-group row pt-3">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right pt-4">Icon Radio</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <div class="form-check form-check-inline">
                                            <label class="custom-control custom-radio custom-radio-icon custom-control-inline">
                                                <input class="custom-control-input" id="radioIcon1" type="radio" name="radio-icon" checked=""><span class="custom-control-label"><i class="mdi mdi-female"></i></span>
                                            </label>
                                            <label class="custom-control custom-radio custom-radio-icon custom-control-inline">
                                                <input class="custom-control-input" id="radioIcon2" type="radio" name="radio-icon"><span class="custom-control-label"><i class="mdi mdi-male-alt"></i></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Checkbox</label>
                                    <div class="col-12 col-sm-8 col-lg-6 mt-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" checked="" id="check3">
                                            <label class="custom-control-label" for="check3">Option 1</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="check4">
                                            <label class="custom-control-label" for="check4">Option 2</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="check5">
                                            <label class="custom-control-label" for="check5">Option 3</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row pt-1 pb-1">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Inline Checkbox</label>
                                    <div class="col-12 col-sm-8 col-lg-6 form-check mt-1">
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input class="custom-control-input" type="checkbox" checked="" id="check6">
                                            <label class="custom-control-label" for="check6">Option 1</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input class="custom-control-input" type="checkbox" id="check7">
                                            <label class="custom-control-label" for="check7">Option 2</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline">
                                            <input class="custom-control-input" type="checkbox" id="check8">
                                            <label class="custom-control-label" for="check8">Option 3</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row pt-1 pb-1">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Full Color</label>
                                    <div class="col-12 col-sm-8 col-lg-6 form-check mt-1">
                                        <label class="custom-control custom-checkbox custom-control-inline">
                                            <input class="custom-control-input" type="checkbox" checked=""><span class="custom-control-label custom-control-color">Option 1</span>
                                        </label>
                                        <label class="custom-control custom-checkbox custom-control-inline">
                                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label custom-control-color">Option 2</span>
                                        </label>
                                        <label class="custom-control custom-checkbox custom-control-inline">
                                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label custom-control-color">Option 3</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row pt-1 pb-1">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Radio</label>
                                    <div class="col-12 col-sm-8 col-lg-6 form-check mt-1">
                                        <label class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="radio-stacked" checked=""><span class="custom-control-label">Option 1</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="radio-stacked"><span class="custom-control-label">Option 2</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" name="radio-stacked"><span class="custom-control-label">Option 3</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row pt-1 pb-1">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Inline Radio</label>
                                    <div class="col-12 col-sm-8 col-lg-6 form-check mt-1">
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input class="custom-control-input" type="radio" name="radio-inline" checked=""><span class="custom-control-label">Option 1</span>
                                        </label>
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input class="custom-control-input" type="radio" name="radio-inline"><span class="custom-control-label">Option 2</span>
                                        </label>
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input class="custom-control-input" type="radio" name="radio-inline"><span class="custom-control-label">Option 3</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row pt-1">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Full Color</label>
                                    <div class="col-12 col-sm-8 col-lg-6 form-check mt-1">
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input class="custom-control-input" type="radio" name="radio-color" checked=""><span class="custom-control-label custom-control-color">Option 1</span>
                                        </label>
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input class="custom-control-input" type="radio" name="radio-color"><span class="custom-control-label custom-control-color">Option 2</span>
                                        </label>
                                        <label class="custom-control custom-radio custom-control-inline">
                                            <input class="custom-control-input" type="radio" name="radio-color"><span class="custom-control-label custom-control-color">Option 3</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row pt-1">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Basic Select</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <select class="form-control">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Multiple Select</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <select class="form-control" multiple="">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-border-color card-border-color-primary">
                        <div class="card-header card-header-divider">Bootstrap Validation States<span class="card-subtitle">Default bootstrap validation states</span></div>
                        <div class="card-body">
                            <form action="#">
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Success</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control is-valid" type="text" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Error</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control is-invalid" type="text" required>
                                    </div>
                                </div>
                                <div class="card-divider"></div>
                                <div class="form-group row pt-2 pb-1">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Checkbox</label>
                                    <div class="col-12 col-sm-8 col-lg-6 mt-1">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input is-valid" type="checkbox" checked="" id="check9">
                                            <label class="custom-control-label" for="check9">Success</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input is-invalid" type="checkbox" id="check10">
                                            <label class="custom-control-label" for="check10">Error</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row pt-1 pb-0">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Full Color</label>
                                    <div class="col-12 col-sm-8 col-lg-6 mt-1">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input class="custom-control-input is-valid" type="checkbox" checked="" id="check11">
                                                <label class="custom-control-label custom-control-color" for="check11">Success</label>
                                            </div>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input class="custom-control-input is-invalid" type="checkbox" checked="" id="check12">
                                                <label class="custom-control-label custom-control-color" for="check12">Error</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row pt-0 pb-0">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Radio</label>
                                    <div class="col-12 col-sm-8 col-lg-6 mt-1">
                                        <div class="form-group">
                                            <label class="custom-control custom-radio">
                                                <input class="custom-control-input is-valid" type="radio" checked name="radioStateColor"><span class="custom-control-label">Success</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input class="custom-control-input is-invalid" type="radio" name="radioStateColor"><span class="custom-control-label">Error</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row pt-0 pb-0">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Inline Radio</label>
                                    <div class="col-12 col-sm-8 col-lg-6 mt-1">
                                        <div class="form-group">
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input class="custom-control-input is-valid" type="radio" checked name="radioStateColor2"><span class="custom-control-label">Success</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input class="custom-control-input is-invalid" type="radio" name="radioStateColor2"><span class="custom-control-label">Error</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row pt-0 pb-0">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Full Color</label>
                                    <div class="col-12 col-sm-8 col-lg-6 mt-1">
                                        <div class="form-group">
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input class="custom-control-input is-valid" type="radio" checked name="radioStateColor3"><span class="custom-control-label custom-control-color">Success</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input class="custom-control-input is-invalid" type="radio" name="radioStateColor3"><span class="custom-control-label custom-control-color">Error</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-border-color card-border-color-primary">
                        <div class="card-header card-header-Bootstrap">Validation States<span class="card-subtitle">Default bootstrap validation states</span></div>
                        <div class="card-body">
                            <form action="#">
                                <div class="card-divider"></div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Input group success state</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <div class="input-group input-group-lg mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">@</span></div>
                                            <input class="form-control is-valid" type="text" placeholder="" aria-describedby="inputGroupPrepend3" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Input group invalid state</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <div class="input-group input-group-lg mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">@</span></div>
                                            <input class="form-control is-invalid" type="text" placeholder="" aria-describedby="inputGroupPrepend3" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-divider"> </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Basic success state</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control is-valid" type="text" placeholder="" value="" required="">
                                        <div class="valid-feedback">Looks good!</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Basic invalid state</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <input class="form-control is-invalid" type="text" placeholder="" value="" required="">
                                        <div class="invalid-feedback">Please provide a valid.</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Checkbox invalid state </label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <div class="form-check">
                                            <input class="form-check-input is-invalid" id="invalidCheck3" type="checkbox" value="" required="">
                                            <label class="form-check-label" for="invalidCheck3">Agree to terms and conditions     </label>
                                            <div class="invalid-feedback">You must agree before submitting.                                       </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-border-color card-border-color-primary">
                        <div class="card-header card-header-divider">Input Groups<span class="card-subtitle">Bootstrap input groups components</span></div>
                        <div class="card-body">
                            <form>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Input Text</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <div class="input-group mb-3"><span class="input-group-prepend"><span class="input-group-text">@</span></span>
                                            <input class="form-control" type="text" placeholder="Username">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input class="form-control" type="text">
                                            <div class="input-group-append"><span class="input-group-text">.00</span></div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                                            <input class="form-control" type="text">
                                            <div class="input-group-append"><span class="input-group-text">.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Input Sizing</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <div class="input-group input-group-lg mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">@</span></div>
                                            <input class="form-control" type="text" placeholder="Username">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">@</span></div>
                                            <input class="form-control" type="text" placeholder="Username">
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">@</span></div>
                                            <input class="form-control" type="text" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Checkbox & Radio</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="check13">
                                                        <label class="custom-control-label" for="check13"></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <label class="custom-control custom-radio">
                                                        <input class="custom-control-input" type="radio"><span class="custom-control-label"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Button Addons</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <div class="input-group mb-3">
                                            <input class="form-control" type="text">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">Go!</button>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input class="form-control" type="text">
                                            <div class="input-group-append be-addon">
                                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action</button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input class="form-control" type="text">
                                            <div class="input-group-append be-addon">
                                                <button class="btn btn-primary" tabindex="-1" type="button">Action</button>
                                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-split" tabindex="-1" data-toggle="dropdown" type="button"><span class="sr-only">Toggle Dropdown</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Select2</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <div class="input-group mb-3">
                                            <select class="select2">
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>
                                            </select>
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">Go!</button>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <select class="select2">
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>
                                            </select>
                                            <div class="input-group-append be-addon">
                                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action</button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group mb-3">
                                            <select class="select2">
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                                </optgroup>
                                                <optgroup label="Pacific Time Zone">
                                                    <option value="CA">California</option>
                                                    <option value="NV">Nevada</option>
                                                    <option value="OR">Oregon</option>
                                                    <option value="WA">Washington</option>
                                                </optgroup>
                                                <optgroup label="Mountain Time Zone">
                                                    <option value="AZ">Arizona</option>
                                                    <option value="CO">Colorado</option>
                                                    <option value="ID">Idaho</option>
                                                    <option value="MT">Montana</option>
                                                    <option value="NE">Nebraska</option>
                                                    <option value="NM">New Mexico</option>
                                                    <option value="ND">North Dakota</option>
                                                    <option value="UT">Utah</option>
                                                    <option value="WY">Wyoming</option>
                                                </optgroup>
                                                <optgroup label="Central Time Zone">
                                                    <option value="AL">Alabama</option>
                                                    <option value="AR">Arkansas</option>
                                                    <option value="IL">Illinois</option>
                                                    <option value="IA">Iowa</option>
                                                    <option value="KS">Kansas</option>
                                                    <option value="KY">Kentucky</option>
                                                    <option value="LA">Louisiana</option>
                                                    <option value="MN">Minnesota</option>
                                                    <option value="MS">Mississippi</option>
                                                    <option value="MO">Missouri</option>
                                                    <option value="OK">Oklahoma</option>
                                                    <option value="SD">South Dakota</option>
                                                    <option value="TX">Texas</option>
                                                    <option value="TN">Tennessee</option>
                                                    <option value="WI">Wisconsin</option>
                                                </optgroup>
                                                <optgroup label="Eastern Time Zone">
                                                    <option value="CT">Connecticut</option>
                                                    <option value="DE">Delaware</option>
                                                    <option value="FL">Florida</option>
                                                    <option value="GA">Georgia</option>
                                                    <option value="IN">Indiana</option>
                                                    <option value="ME">Maine</option>
                                                    <option value="MD">Maryland</option>
                                                    <option value="MA">Massachusetts</option>
                                                    <option value="MI">Michigan</option>
                                                    <option value="NH">New Hampshire</option>
                                                    <option value="NJ">New Jersey</option>
                                                    <option value="NY">New York</option>
                                                    <option value="NC">North Carolina</option>
                                                    <option value="OH">Ohio</option>
                                                    <option value="PA">Pennsylvania</option>
                                                    <option value="RI">Rhode Island</option>
                                                    <option value="SC">South Carolina</option>
                                                    <option value="VT">Vermont</option>
                                                    <option value="VA">Virginia</option>
                                                    <option value="WV">West Virginia</option>
                                                </optgroup>
                                            </select>
                                            <div class="input-group-append be-addon">
                                                <button class="btn btn-primary" tabindex="-1" type="button">Action</button>
                                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-split" tabindex="-1" data-toggle="dropdown" type="button"><span class="sr-only">Toggle Dropdown</span></button>
                                                <div class="dropdown-menu"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a>
                                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-border-color card-border-color-primary">
                        <div class="card-header card-header-divider">Switch Component<span class="card-subtitle">Custom switch component using only css</span></div>
                        <div class="card-body">
                            <form action="#" style="border-radius: 0px;">
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Sizes</label>
                                    <div class="col-12 col-sm-8 col-lg-6 pt-1">
                                        <div class="switch-button switch-button-xs">
                                            <input type="checkbox" checked="" name="swt1" id="swt1"><span>
                            <label for="swt1"></label></span>
                                        </div>
                                        <div class="switch-button switch-button-sm">
                                            <input type="checkbox" checked="" name="swt2" id="swt2"><span>
                            <label for="swt2"></label></span>
                                        </div>
                                        <div class="switch-button">
                                            <input type="checkbox" checked="" name="swt3" id="swt3"><span>
                            <label for="swt3"></label></span>
                                        </div>
                                        <div class="switch-button switch-button-lg">
                                            <input type="checkbox" checked="" name="swt4" id="swt4"><span>
                            <label for="swt4"></label></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Success</label>
                                    <div class="col-12 col-sm-8 col-lg-6 pt-1">
                                        <div class="switch-button switch-button-success">
                                            <input type="checkbox" checked="" name="swt5" id="swt5"><span>
                            <label for="swt5"></label></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Warning</label>
                                    <div class="col-12 col-sm-8 col-lg-6 pt-1">
                                        <div class="switch-button switch-button-warning">
                                            <input type="checkbox" checked="" name="swt6" id="swt6"><span>
                            <label for="swt6"></label></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Danger</label>
                                    <div class="col-12 col-sm-8 col-lg-6 pt-1">
                                        <div class="switch-button switch-button-danger">
                                            <input type="checkbox" checked="" name="swt7" id="swt7"><span>
                            <label for="swt7"></label></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Yes/No Labels</label>
                                    <div class="col-12 col-sm-8 col-lg-6 pt-1">
                                        <div class="switch-button switch-button-yesno">
                                            <input type="checkbox" checked="" name="swt8" id="swt8"><span>
                            <label for="swt8"></label></span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-border-color card-border-color-primary">
                        <div class="card-header card-header-divider">Date Picker<span class="card-subtitle">Datepicker bootstrap plugin</span></div>
                        <div class="card-body">
                            <form>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right"> Default</label>
                                    <div class="col-12 col-sm-8 col-lg-6 pt1">
                                        <input class="form-control datetimepicker" type="text" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right"> Read Only</label>
                                    <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
                                        <div class="input-group date datetimepicker" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1">
                                            <input class="form-control" size="16" type="text" value="" readonly="">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right"> Only Date </label>
                                    <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
                                        <div class="input-group date datetimepicker" data-min-view="2" data-date-format="yyyy-mm-dd">
                                            <input class="form-control" size="16" type="text" value="">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Decade View</label>
                                    <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
                                        <div class="input-group date datetimepicker" data-start-view="4" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1">
                                            <input class="form-control" size="16" type="text" value="">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Year View</label>
                                    <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
                                        <div class="input-group date datetimepicker" data-start-view="3" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1">
                                            <input class="form-control" size="16" type="text" value="">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Month View</label>
                                    <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
                                        <div class="input-group date datetimepicker" data-start-view="2" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1">
                                            <input class="form-control" size="16" type="text" value="">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Day View</label>
                                    <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
                                        <div class="input-group date datetimepicker" data-start-view="1" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1">
                                            <input class="form-control" size="16" type="text" value="">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Hour View</label>
                                    <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
                                        <div class="input-group date datetimepicker" data-start-view="0" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1">
                                            <input class="form-control" size="16" type="text" value="">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Day View Meridian</label>
                                    <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
                                        <div class="input-group date datetimepicker" data-show-meridian="true" data-start-view="1" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1">
                                            <input class="form-control" size="16" type="text" value="">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Hour View Meridian</label>
                                    <div class="col-12 col-sm-7 col-md-5 col-lg-4 col-xl-3">
                                        <div class="input-group date datetimepicker" data-show-meridian="true" data-start-view="0" data-date="1979-09-16T05:25:07Z" data-date-format="yyyy-mm-dd - HH:ii" data-link-field="dtp_input1">
                                            <input class="form-control" size="16" type="text" value="">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-border-color card-border-color-primary">
                        <div class="card-header card-header-divider">Advanced Controls<span class="card-subtitle">Select2 & Bootstrap slider plugins</span></div>
                        <div class="card-body">
                            <form action="#">
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Select2 Large</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <select class="select2 select2-lg">
                                            <option> </option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Default</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <select class="select2">
                                            <option> </option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Small</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <select class="select2 select2-sm">
                                            <option> </option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Extra Small</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <select class="select2 select2-xs">
                                            <option> </option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">MultiTag Input</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <select class="tags" multiple="">
                                            <option value="1">Green</option>
                                            <option value="2">Red</option>
                                            <option value="3">Blue</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Multitag from Select</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                        <select class="select2" multiple="">
                                            <option> </option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Slider</label>
                                    <div class="col-12 col-sm-8 col-lg-6 mt-2">
                                        <input class="bslider form-control" type="text" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Range Slider</label>
                                    <div class="col-12 col-sm-8 col-lg-6 mt-2">
                                        <input class="bslider form-control" type="text" data-slider-value="[250,450]" data-slider-step="5" data-slider-max="1000" data-slider-min="10" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-sm-right">Vertical Slider</label>
                                    <div class="col-12 col-sm-8 col-lg-6 mt-2">
                                        <input class="form-control bslider" type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-13" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="">
                                        <input class="form-control bslider" type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-9" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="">
                                        <input class="form-control bslider" type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-5" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="">
                                        <input class="form-control bslider" type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-2" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="">
                                        <input class="form-control bslider" type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-5" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="">
                                        <input class="form-control bslider" type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-9" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="">
                                        <input class="form-control bslider" type="text" data-slider-selection="after" data-slider-orientation="vertical" data-slider-value="-13" data-slider-step="1" data-slider-max="20" data-slider-min="-20" value="">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
@section('css')
    <style>
        .be-top-header .be-navbar-header .navbar-brand{
            background-image: url("/theme/beagle/img/logo.png");
        }
    </style>
    @endsection