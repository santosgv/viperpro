<template>
    <BaseLayout>
        <div class="w-full p-4">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="hidden md:block">
                    <img :src="`/assets/images/insurance-policy.png`" alt="Privacidade e Segurança" class="w-full">
                </div>
                <div class="">
                    <h1 class="text-3xl font-bold mb-6">Política de Privacidade do {{ setting.software_name }}</h1>
                    
                    <p class="mb-6">Última atualização: {{ new Date().toLocaleDateString() }}</p>
                    
                    <h4 class="text-2xl font-semibold mb-4">1. Introdução</h4>
                    <p class="mb-6">1.1. A {{ setting.software_name }} ("nós", "nosso" ou "a Empresa") está comprometida em proteger a privacidade de todos os usuários do nosso site. Esta Política de Privacidade explica como coletamos, usamos, divulgamos e protegemos suas informações pessoais quando você usa nosso site e serviços relacionados.</p>
                    
                    <h4 class="text-2xl font-semibold mb-4">2. Informações Coletadas</h4>
                    <p class="mb-4">2.1. Podemos coletar os seguintes tipos de informações:</p>
                    <ul class="list-disc pl-6 mb-6">
                        <li class="mb-2">Informações de identificação pessoal (nome, data de nascimento, endereço, etc.)</li>
                        <li class="mb-2">Informações de contato (e-mail, telefone)</li>
                        <li class="mb-2">Informações financeiras (dados de pagamento, histórico de transações)</li>
                        <li class="mb-2">Dados técnicos (endereço IP, tipo de navegador, localização)</li>
                        <li class="mb-2">Dados de uso (páginas visitadas, tempo gasto no site)</li>
                    </ul>
                    
                    <h4 class="text-2xl font-semibold mb-4">3. Como Usamos Suas Informações</h4>
                    <p class="mb-4">3.1. Utilizamos suas informações pessoais para:</p>
                    <ul class="list-disc pl-6 mb-6">
                        <li class="mb-2">Fornecer e melhorar nossos serviços</li>
                        <li class="mb-2">Verificar sua identidade e prevenir fraudes</li>
                        <li class="mb-2">Processar transações financeiras</li>
                        <li class="mb-2">Cumprir obrigações legais e regulatórias</li>
                        <li class="mb-2">Comunicar promoções e atualizações (quando autorizado)</li>
                    </ul>
                    
                    <h4 class="text-2xl font-semibold mb-4">4. Compartilhamento de Informações</h4>
                    <p class="mb-6">4.1. Podemos compartilhar suas informações com:</p>
                    <ul class="list-disc pl-6 mb-6">
                        <li class="mb-2">Provedores de serviços terceirizados (processamento de pagamentos, verificação KYC)</li>
                        <li class="mb-2">Autoridades reguladoras e legais quando exigido por lei</li>
                        <li class="mb-2">Empresas afiliadas para fins de marketing (quando consentido)</li>
                    </ul>
                    
                    <h4 class="text-2xl font-semibold mb-4">5. Segurança de Dados</h4>
                    <p class="mb-6">5.1. Implementamos medidas técnicas e organizacionais robustas para proteger suas informações pessoais contra acesso não autorizado, alteração, divulgação ou destruição. Utilizamos criptografia SSL, firewalls e controles de acesso rigorosos.</p>
                    
                    <h4 class="text-2xl font-semibold mb-4">6. Retenção de Dados</h4>
                    <p class="mb-6">6.1. Manteremos suas informações pessoais apenas pelo tempo necessário para cumprir os fins para os quais foram coletadas, incluindo para fins de cumprimento de obrigações legais, regulatórias, fiscais, contábeis ou de relatórios.</p>
                    
                    <h4 class="text-2xl font-semibold mb-4">7. Seus Direitos</h4>
                    <p class="mb-4">7.1. De acordo com as leis de proteção de dados aplicáveis, você pode ter os seguintes direitos:</p>
                    <ul class="list-disc pl-6 mb-6">
                        <li class="mb-2">Acessar suas informações pessoais</li>
                        <li class="mb-2">Solicitar correção de dados incorretos</li>
                        <li class="mb-2">Solicitar a exclusão de seus dados ("direito ao esquecimento")</li>
                        <li class="mb-2">Restringir o processamento de seus dados</li>
                        <li class="mb-2">Obter uma cópia de seus dados em formato portátil</li>
                        <li class="mb-2">Opor-se ao processamento de seus dados</li>
                    </ul>
                    
                    <h4 class="text-2xl font-semibold mb-4">8. Cookies e Tecnologias Semelhantes</h4>
                    <p class="mb-6">8.1. Utilizamos cookies e tecnologias similares para melhorar sua experiência no site, analisar tráfego e personalizar conteúdo. Você pode gerenciar suas preferências de cookies através das configurações do navegador.</p>
                    
                    <h4 class="text-2xl font-semibold mb-4">9. Transferência Internacional de Dados</h4>
                    <p class="mb-6">9.1. Suas informações podem ser transferidas e processadas em países fora do seu país de residência, onde as leis de proteção de dados podem ser diferentes. Implementamos salvaguardas adequadas para essas transferências.</p>
                    
                    <h4 class="text-2xl font-semibold mb-4">10. Menores de Idade</h4>
                    <p class="mb-6">10.1. Nossos serviços não são destinados a menores de 18 anos (ou idade legal maior em sua jurisdição). Não coletamos intencionalmente informações de menores e tomamos medidas para verificar a idade de todos os usuários.</p>
                    
                    <h4 class="text-2xl font-semibold mb-4">11. Alterações nesta Política</h4>
                    <p class="mb-6">11.1. Podemos atualizar esta Política de Privacidade periodicamente. Publicaremos a versão atualizada em nosso site com uma nova data de "Última atualização". Seu uso contínuo do site após tais alterações constitui sua aceitação da Política revisada.</p>
                    
                    <h4 class="text-2xl font-semibold mb-4">12. Contato</h4>
                    <p class="mb-6">12.1. Se tiver dúvidas sobre esta Política de Privacidade ou sobre como tratamos suas informações pessoais, entre em contato conosco através do e-mail: {{ setting.support_email }} ou pelo endereço físico listado em nosso site.</p>
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
    },
    created() {
        this.getSetting();
    },
    watch: {},
};
</script>

<style scoped>
h4 {
    color: #3b82f6; /* Cor azul para os títulos */
    margin-top: 1.5rem;
}
ul {
    margin-bottom: 1rem;
}
p {
    line-height: 1.6;
    color: #4b5563; /* Cor cinza para melhor legibilidade */
}
</style>