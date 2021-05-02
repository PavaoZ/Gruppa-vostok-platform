<template>
    <div class="contact-container">
        <div class="contact-form-container">
            <form @submit.prevent="submit">
                 <div>
                    <div>{{ $t('contactUs.name') }}</div>
                    <input type="text" v-model="form.name" :placeholder="$t('contactUs.inputName')" />
                </div>
                <div>
                    <div>{{ $t('contactUs.email') }}</div>
                    <input type="text" v-model="form.email" :placeholder="$t('contactUs.inputEmail')" />
                </div>
                <div>
                    <div>{{ $t('contactUs.description') }}</div>
                    <textarea rows="5" cols="60" v-model="form.description" :placeholder="$t('contactUs.inputDescription')"></textarea>
                </div>
                <div>
                    <input type="submit" :value="$t('contactUs.submit')" />
                </div>
            </form>
        </div>
        <div class="contact-additional-container">
            {{ $t('contactUs.page-description') }}
        </div>
    </div>
</template>

<script>
export default {
    name: 'ContactUs',
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
    padding: 0 0px 120px 0px;
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
        .contact-additional-container {
            padding-bottom: 120px;
        }
    }
}
</style>