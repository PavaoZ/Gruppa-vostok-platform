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
    </div>
</template>

<script>
export default {
    name: 'ContactUs',
    data() {
        return {
            form: {
                name: null,
                email: null,
                description: null,
            },
            errors: {
                name: null,
                email: null,
                description: null,
            }
        }
    },
    methods: {
        submit() {
            console.log("this is the form data", this.form)
        }
    }
}
</script>

<style lang="scss" scoped>
.contact-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: calc(100vh - 56px - 102px);
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
}
</style>