@if(Request::route()->getName()!='contact')
    <div class="feedback-box">
        <div class="content"> <a class="close" href="#" id="feedback-close"><i class="fa fa-times"></i></a>
            <div class="header"><i class="fa fa-phone"></i> {{ trans('themes::contact.we will call you') }}</div>
            <section>
                <div class="form-wrapper" id="contact_form">

                    <div class="alert alert-success" role="alert" v-show="success">
                        @{{ successMessage }}
                    </div>

                    {!! Form::open(['v-on:submit'=>'submitForm', 'class' => 'theme-form-one', 'method'=>'post', 'v-show'=>'!success']) !!}
                    {!! Form::hidden('from', Request::path()) !!}
                    <div class="row">
                        <div class="col-md-6" :class="{ 'has-error' : hasError('first_name') }">
                            <input type="text" name="first_name" value="" placeholder="{{ trans('contact::contacts.form.first_name') }}" v-model="input.first_name" class="form-control" />
                            <div v-for="error in errors.first_name" class="help-block ">@{{ error }}</div>
                        </div>
                        <div class="col-md-6" :class="{ 'has-error' : hasError('last_name') }">
                            <input type="text" name="last_name" value="" placeholder="{{ trans('contact::contacts.form.last_name') }}" v-model="input.last_name" class="form-control"/>
                            <div v-for="error in errors.last_name" class="help-block ">@{{ error }}</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" :class="{ 'has-error' : hasError('phone') }">
                            <input type="text" name="phone" value="" placeholder="{{ trans('contact::contacts.form.phone') }}" v-model="input.phone" class="form-control"/>
                            <div v-for="error in errors.phone" class="help-block ">@{{ error }}</div>
                        </div>
                        <div class="col-md-6" :class="{ 'has-error' : hasError('email') }">
                            <input type="text" name="email" value="" placeholder="{{ trans('contact::contacts.form.email') }}" v-model="input.email" class="form-control"/>
                            <div v-for="error in errors.email" class="help-block ">@{{ error }}</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" :class="{ 'has-error' : hasError('enquiry') }">
                            <textarea name="enquiry" placeholder="{{ trans('contact::contacts.form.enquiry') }}" rows="3" v-model="input.enquiry" class="form-control" style="margin-bottom: 0;"></textarea>
                            <div v-for="error in errors.enquiry" class="help-block">@{{ error }}</div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-md-12" style="padding-bottom: 10px; margin-top: 0;" :class="{ 'has-error' : hasError('captcha_contact') }">
                            {!! Captcha::image('captcha_contact') !!}
                            <div class="help-block " style="display: block !important;" v-if="hasError('captcha_contact')">@{{ getError('captcha_contact') }}</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-default">{{ trans('global.buttons.send') }}</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </section>
        </div>
    </div>
    <button class="btn btn-default" id="feedback">{{ trans('themes::contact.let us call you') }} <i class="fa fa-phone"></i></button>
    @push('scripts')
        {!! Theme::script('js/vue.min.js') !!}
    @endpush
    @push('js_inline')
        <script>
            window.axios.defaults.headers.common['X-CSRF-TOKEN']   = '{{ csrf_token() }}';
            window.axios.defaults.headers.common['Cache-Control']  = 'no-cache';
            dataLayer = window.dataLayer || [];
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
                    successMessage: '',
                    response: {}
                },
                updated() {
                    let success = this.success;
                    let response = this.response;
                    if(success === true) {
                        dataLayer.push({
                            'event'   : 'apiCallEvent',
                            'success' : success,
                            'response': response
                        });
                    }
                },
                methods: {
                    submitForm: function (e) {
                        e.preventDefault();
                        this.success = false;
                        this.input.captcha_contact = grecaptcha.getResponse(captcha_contact);
                        this.ajaxStart(true);
                        axios.post('{{ route('api.contact.call') }}', this.$data.input)
                            .then(response => {
                                this.successMessage = response.data.message;
                                this.response = response.data.data;
                                this.success = true;
                                this.resetForm();
                                this.ajaxStart(false);
                                setTimeout(()=>{
                                    this.success = false;
                                    $(".close").trigger('click');
                                }, 5000);
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
                            $('form', this.$el).LoadingOverlay("show",{
                                zIndex: 9999
                            });
                        } else {
                            $('form', this.$el).LoadingOverlay("hide",{
                                zIndex: 9999
                            });
                        }
                    }
                }
            });
            //Feedback
            var feedback = $(".feedback-box");
            if(feedback.length) {
                $("#feedback").on("click" , function(){
                    feedback.addClass("show");
                    $(this).toggle("slide");
                });
                $(".close").on("click" , function(){
                    feedback.removeClass("show");
                    $("#feedback").toggle("slide", 100);
                    setTimeout(function(){
                        feedback.removeClass("show-confirm").find("textarea").val('');
                    }, 500);
                });
                $("#submit").on("click" ,function(){
                    if( !$("textarea").val() ) {
                        feedback.addClass("error");
                        setTimeout(function(){
                            feedback.removeClass("error");
                        }, 500)
                    }else{
                        feedback.addClass("show-confirm");
                        setTimeout(function(){
                            feedback.removeClass("show").find("textarea").val('').delay(1000);
                        },2000);

                        setTimeout(function(){
                            feedback.removeClass("show-confirm");
                        },2200);
                    }
                });
            }
        </script>
        {!! Captcha::setLang(LaravelLocalization::getCurrentLocale())->scriptWithCallback(['captcha_contact']) !!}
    @endpush
@endif
