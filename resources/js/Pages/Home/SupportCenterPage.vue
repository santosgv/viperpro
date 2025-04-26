<template>
    <BaseLayout>
        <div class="w-full p-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="hidden md:block">
                    <img :src="`/assets/images/help-call.png`" alt="Central de Apoio" class="w-full rounded-lg shadow-md">
                </div>
                <div class="">
                    <h1 class="text-3xl font-bold mb-6 text-blue-600">Central de Apoio {{ setting.software_name }}</h1>
                    
                    <div class="p-4 rounded-lg mb-8">
                        <h3 class="text-xl font-semibold mb-2">Precisa de ajuda imediata?</h3>
                        <p class="mb-4">Nossa equipe está disponível 24/7 para te ajudar com qualquer dúvida ou problema.</p>
                        <div class="flex items-center mb-2">
                            <i class="fas fa-envelope mr-2 text-blue-600"></i>
                            <span class="font-medium">E-mail: {{ setting.support_email }}</span>
                        </div>
                        <div class="flex items-center mb-2">
                            <i class="fas fa-phone-alt mr-2 text-blue-600"></i>
                            <span class="font-medium">Telefone: {{ setting.support_phone }}</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fab fa-whatsapp mr-2 text-blue-600"></i>
                            <span class="font-medium">WhatsApp: {{ setting.support_whatsapp }}</span>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </BaseLayout>
</template>

<script>
import BaseLayout from "@/Layouts/BaseLayout.vue";
import {useSettingStore} from "@/Stores/SettingStore.js";

export default {
    props: [],
    components: {BaseLayout},
    data() {
        return {
            isLoading: false,
            setting: null,
            activeFAQ: null,
            isSubmitting: false,
            form: {
                name: '',
                email: '',
                subject: '',
                message: ''
            }
        }
    },
    setup(props) {
        return {};
    },
    computed: {},
    mounted() {},
    methods: {
        getSetting: function() {
            const _this = this;
            const settingStore = useSettingStore();
            const settingData = settingStore.setting;

            if(settingData) {
                _this.setting = settingData;
            }
        },
        
        toggleFAQ: function(index) {
            this.activeFAQ = this.activeFAQ === index ? null : index;
        },
        
        submitSupportRequest: function() {
            this.isSubmitting = true;
            
            // Simular envio do formulário (substituir por chamada API real)
            setTimeout(() => {
                alert('Sua mensagem foi enviada com sucesso! Nossa equipe entrará em contato em breve.');
                this.form = {
                    name: '',
                    email: '',
                    subject: '',
                    message: ''
                };
                this.isSubmitting = false;
            }, 1500);
        }
    },
    created() {
        this.getSetting();
    },
    watch: {},
};
</script>

<style scoped>
.faq-item {
    transition: all 0.3s ease;
}

button:focus {
    outline: none;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.5);
}

input, select, textarea {
    transition: border-color 0.3s, box-shadow 0.3s;
}

button[disabled] {
    opacity: 0.7;
    cursor: not-allowed;
}
</style>