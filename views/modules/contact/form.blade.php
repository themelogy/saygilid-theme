<div id="contact_form">
    <h3>{{ trans('themes::contact.form.title') }}</h3>
    <p class="fs-sm-08">{{ trans('themes::contact.messages.info') }}</p>

    <div class="alert alert-success" role="alert" v-show="success">
        @{{ successMessage }}
    </div>

    {!! Form::open(['v-on:submit'=>'submitForm', 'class' => 'contact', 'method'=>'post', 'v-show'=>'!success']) !!}
    {!! Form::hidden('from', Request::path()) !!}

    <div class="row">
        <div class="col-md-6">
            <div class="form-group" :class="errors.first_name ? ' has-error': ''">
                <input type="text" name="first_name" value="" placeholder="{{ trans('contact::contacts.form.first_name') }}" class="form-control form-control-sm" v-model="input.first_name" :class="{ 'is-invalid' : hasError('first_name') }" />
                <span v-for="error in errors.first_name" class="help-block">@{{ error }}</span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group" :class="errors.last_name ? ' has-error': ''">
                <input type="text" name="last_name" value="" placeholder="{{ trans('contact::contacts.form.last_name') }}" class="form-control form-control-sm" v-model="input.last_name" :class="{ 'is-invalid' : hasError('last_name') }"/>
                <span v-for="error in errors.last_name" class="help-block">@{{ error }}</span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group" :class="errors.phone ? ' has-error': ''">
                <input type="text" name="phone" value="" placeholder="{{ trans('contact::contacts.form.phone') }}" class="form-control form-control-sm" v-model="input.phone" :class="{ 'is-invalid' : hasError('phone') }"/>
                <span v-for="error in errors.phone" class="help-block">@{{ error }}</span>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group" :class="errors.email ? ' has-error': ''">
                <input type="text" name="email" value="" placeholder="{{ trans('contact::contacts.form.email') }}" class="form-control form-control-sm" v-model="input.email" :class="{ 'is-invalid' : hasError('email') }"/>
                <span v-for="error in errors.email" class="help-block">@{{ error }}</span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group" :class="errors.enquiry ? ' has-error': ''">
                <textarea name="enquiry" class="form-control form-control-sm" placeholder="{{ trans('contact::contacts.form.enquiry') }}" rows="3" v-model="input.enquiry" :class="{ 'is-invalid' : hasError('enquiry') }"></textarea>
                <span v-for="error in errors.enquiry" class="help-block">@{{ error }}</span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8" :class="errors.captcha_contact ? ' has-error': ''">
            {!! Captcha::image('captcha_contact') !!}
            <span class="help-block" style="display: block !important;" v-if="hasError('captcha_contact')">@{{ getError('captcha_contact') }}</span>
        </div>
        <div class="col-md-4" style="text-align: right;">
            <button type="submit" class="btn btn-default">{{ trans('global.buttons.send') }}</button>
        </div>
    </div>

    {!! Form::close() !!}
</div>

@push('scripts')
    {!! Asset::add(Theme::url('plugins/vue/vue.min.js')) !!}
    {!! Asset::add(Theme::url('plugins/axios/axios.min.js')) !!}
    {!! Asset::add(Theme::url('plugins/loading-overlay/loadingoverlay.min.js')) !!}
@endpush

@push('js_inline')
    <script>
        @if(App::environment()=='local')
            Vue.config.devtools = true;
        @endif
        window.axios.defaults.headers.common['X-CSRF-TOKEN']     = '{{ csrf_token() }}';
        window.axios.defaults.headers.common['Cache-Control']    = 'no-cache';
        new Vue({
            el: '#contact_form',
            data: {
                input: {
                    first_name: '',
                    last_name: '',
                    phone: '',
                    email:'',
                    enquiry: '',
                    captcha_contact: ''
                },
                errors: {},
                success: false,
                successMessage: ''
            },
            methods: {
                submitForm: function (e) {
                    e.preventDefault();
                    this.success = false;
                    this.input.captcha_contact = grecaptcha.getResponse(captcha_contact);
                    this.ajaxStart(true);
                    axios.post('{{ route('api.contact.send') }}', this.$data.input)
                        .then(response => {
                            this.successMessage = response.data.message;
                            this.success = true;
                            this.resetForm();
                            this.ajaxStart(false);
                        })
                        .catch(error => {
                            this.errors = error.response.data;
                            this.success = false;
                            this.ajaxStart(false);
                            grecaptcha.reset(captcha_contact);
                        });
                },
                getError: function (field) {
                    if(this.errors[field]) {
                        return this.errors[field][0];
                    }
                },
                hasError: function (field) {
                    if(this.errors[field]) {
                        return true;
                    }
                    return false;
                },
                resetForm: function () {
                    var self = this;
                    Object.keys(this.$data.input).forEach(function(key, index){
                        self.$data.input[key] = '';
                    });
                },
                ajaxStart: function (loading) {
                    if (loading) {
                        jQuery('form', this.$el).LoadingOverlay("show",{
                            zIndex: 10
                        });
                    } else {
                        jQuery('form', this.$el).LoadingOverlay("hide",{
                            zIndex: 10
                        });
                    }
                }
            }
        });
    </script>
    {!! Captcha::setLang(locale())->scriptWithCallback(['captcha_contact']) !!}
    <style>
        #contact_form {
            background-color: #fafafa;
            padding: 20px;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            -webkit-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.2);
            -moz-box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.2);
            box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.2);
        }
        .contact-container h3 {
            margin: 0;
            font-weight: normal !important;
        }
    </style>
@endpush