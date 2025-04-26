<template>
    <BaseLayout>
        <div class="w-full p-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="hidden md:block">
                    <img :src="`/assets/images/customer-service.png`" alt="Central de Apoio" class="w-full rounded-lg shadow-md">
                </div>
                <div class="">
                    <h4 class="text-2xl font-semibold mb-4 text-blue-600 border-b pb-2">Perguntas Frequentes</h4>
                    
                    <div class="space-y-4 mb-8">
                        <div class="border rounded-lg overflow-hidden">
                            <button 
                                @click="toggleFAQ(1)"
                                class="w-full flex justify-between items-center p-4"
                            >
                                <span class="font-medium text-left">Como criar uma conta?</span>
                                <i :class="`fas ${activeFAQ === 1 ? 'fa-minus' : 'fa-plus'}`"></i>
                            </button>
                            <div v-show="activeFAQ === 1" class="p-4">
                                <p>Para criar uma conta, clique em "Registrar" no canto superior direito do site. Preencha o formulário com seus dados pessoais válidos e complete a verificação de e-mail. Após a aprovação da nossa equipe (que pode levar até 24 horas), sua conta estará pronta para uso.</p>
                            </div>
                        </div>

                        <div class="border rounded-lg overflow-hidden">
                            <button 
                                @click="toggleFAQ(2)"
                                class="w-full flex justify-between items-center p-4"
                            >
                                <span class="font-medium text-left">Como faço um depósito?</span>
                                <i :class="`fas ${activeFAQ === 2 ? 'fa-minus' : 'fa-plus'}`"></i>
                            </button>
                            <div v-show="activeFAQ === 2" class="p-4">
                                <p>Acesse sua conta e clique em "Depositar". Escolha seu método de pagamento preferido (cartão, transferência, PIX ou criptomoedas). Siga as instruções para completar a transação. Depósitos são creditados em até 15 minutos, exceto em casos de verificação adicional.</p>
                            </div>
                        </div>

                        <div class="border rounded-lg overflow-hidden">
                            <button 
                                @click="toggleFAQ(3)"
                                class="w-full flex justify-between items-center p-4"
                            >
                                <span class="font-medium text-left">Quanto tempo leva para processar um saque?</span>
                                <i :class="`fas ${activeFAQ === 3 ? 'fa-minus' : 'fa-plus'}`"></i>
                            </button>
                            <div v-show="activeFAQ === 3" class="p-4">
                                <p>Os saques são processados dentro de 24 horas úteis após a solicitação. O tempo para o valor chegar em sua conta depende do método escolhido: PIX (até 1 hora), TED/DOC (1-2 dias úteis), criptomoedas (15-30 minutos). A primeira solicitação pode exigir verificação adicional.</p>
                            </div>
                        </div>

                        <div class="border rounded-lg overflow-hidden">
                            <button 
                                @click="toggleFAQ(4)"
                                class="w-full flex justify-between items-center p-4"
                            >
                                <span class="font-medium text-left">Como verificar minha conta?</span>
                                <i :class="`fas ${activeFAQ === 4 ? 'fa-minus' : 'fa-plus'}`"></i>
                            </button>
                            <div v-show="activeFAQ === 4" class="p-4">
                                <p>Para verificar sua conta, envie para {{ setting.support_email }}: (1) Foto do seu documento de identidade (RG, CNH ou Passaporte); (2) Selfie segurando o documento e um papel com "{{ setting.software_name }}" e a data atual; (3) Comprovante de residência recente (menos de 3 meses). A aprovação leva até 24 horas.</p>
                            </div>
                        </div>
                    </div>

                    <h4 class="text-2xl font-semibold mb-4 text-blue-600 border-b pb-2">Formulário de Contato</h4>
                    
                    <form @submit.prevent="submitSupportRequest" class="space-y-4 mb-8">
                        <div>
                            <label for="name" class="block mb-1 font-medium">Seu Nome</label>
                            <input 
                                type="text" 
                                id="name" 
                                v-model="form.name"
                                class="w-full p-2 border rounded"
                                required
                            >
                        </div>
                        
                        <div>
                            <label for="email" class="block mb-1 font-medium">E-mail</label>
                            <input 
                                type="email" 
                                id="email" 
                                v-model="form.email"
                                class="w-full p-2 border rounded"
                                required
                            >
                        </div>
                        
                        <div>
                            <label for="subject" class="block mb-1 font-medium">Assunto</label>
                            <select 
                                id="subject" 
                                v-model="form.subject"
                                class="w-full p-2 border rounded"
                                required
                            >
                                <option value="">Selecione um assunto</option>
                                <option value="account">Problemas com Conta</option>
                                <option value="deposit">Depósitos e Saques</option>
                                <option value="game">Problemas em Jogos</option>
                                <option value="verification">Verificação de Conta</option>
                                <option value="other">Outros Assuntos</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="message" class="block mb-1 font-medium">Mensagem</label>
                            <textarea 
                                id="message" 
                                v-model="form.message"
                                rows="5"
                                class="w-full p-2 border rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                required
                            ></textarea>
                        </div>
                        
                        <button 
                            type="submit" 
                            class="bg-blue-600 text-white py-2 px-6 rounded hover:bg-blue-700 transition flex items-center justify-center"
                            :disabled="isSubmitting"
                        >
                            <span v-if="!isSubmitting">Enviar Mensagem</span>
                            <span v-else class="flex items-center">
                                <i class="fas fa-spinner fa-spin mr-2"></i> Enviando...
                            </span>
                        </button>
                    </form>

                    <div class="p-4 rounded-lg">
                        <h4 class="text-xl font-semibold mb-2 text-blue-600">Horário de Atendimento</h4>
                        <p class="mb-4">Nossa central de atendimento funciona 24 horas por dia, 7 dias por semana, incluindo feriados.</p>
                        
                        <h4 class="text-xl font-semibold mb-2 text-blue-600">Tempo de Resposta</h4>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>E-mail: Até 2 horas</li>
                            <li>Chat Online: Imediato</li>
                            <li>WhatsApp: Até 15 minutos</li>
                            <li>Redes Sociais: Até 1 hora</li>
                        </ul>
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