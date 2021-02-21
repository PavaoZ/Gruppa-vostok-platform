<template>
    <div class="contact-container">
        <div class="contact-form-container">
            <form @submit.prevent="submit">
                 <div class="name-input-field">
                    <div>{{ $t('contactUs.name') }}</div>
                    <input type="text" @input="form.name = $event.target.value" :placeholder="$t('contactUs.inputName')" />
                </div>
                <div class="email-input-field">
                    <div>{{ $t('contactUs.email') }}</div>
                    <input type="text" @input="form.email = $event.target.value" :placeholder="$t('contactUs.inputEmail')" />
                </div>
                <div class="description-input-field">
                    <div>{{ $t('contactUs.description') }}</div>
                    <textarea rows="5" cols="60" @input="form.description = $event.target.value" :placeholder="$t('contactUs.inputDescription')"></textarea>
                </div>
                <div class="submit-input-field">
                    <input type="submit" :value="$t('contactUs.submit')" />
                </div>
            </form>
        </div>
        <div class="contact-additional-container">
            {{ contactUsDetails }}
        </div>
    </div>
</template>

<script>
export default {
    name: 'ContactUs',
    props: {
        contactUsDetails: {
            type: String,
            required: false,
            default: 'Contact us for exchanging pointers about airsoft, to ask about joining our team and the requirements, to set up a training with our members as a team or to join us for one of our sessions as an individual or just for a cup of coffee! You can also contact us on one of our social media platforms!'
        }
    },
    data() {
        return {
            limitOfDescription: 1000,
            form: {
                name: null,
                email: null,
                description: null,
            },
            errors: null,
        }
    },
    methods: {
        submit() {
            console.log("this is the form data", this.form)
        },
    },
    created() {
        // axios
        // .get('http://127.0.0.1:8000/about-details')
        // .then(response => (console.log(response.data)))

        // U catchu radimo sve za errore
        // this.errors = e.data.errors
        // i onda setamo errore na front dijelu
    }
}
</script>

<style lang="scss" scoped>
.contact-container {
    display: flex;
    justify-content: space-evenly;
    padding-bottom: 120px;
    .contact-form-container {
        border-radius: 10px;
        max-width: 500px;
        form {
            color: #FFF;
            display: flex;
            flex-direction: column;
            font-weight: bold;
            font-size: 20px;
            width: 100%;
            height: 100%;
            padding: 20px;
            div {
                margin-top: 10px;
                input {
                    width: 100%;
                    border-radius: 5px;
                    padding: 5px;
                    outline: none;
                    color: #FFF;
                    background: #000000;
                }
                textarea {
                    width: 100%;
                    border-radius: 5px;
                    background: #000000;
                    color: #FFF;
                    padding: 5px;
                    resize: none;
                    outline: none;
                }
            }
        }
    }
    .contact-additional-container {
        color: #FFF;
        padding: 100px 20px;
        font-size: 20px;
        max-width: 500px;
    }
}

@media (max-width: 480px) {
    .contact-container {
        padding-bottom: 120px;
    }
}

@media (max-width: 1200px) {
    .contact-container {
        align-items: center;
        flex-direction: column;
        padding-bottom: 0px;
        .contact-additional-container {
            padding-bottom: 120px;
        }
    }
}
</style>