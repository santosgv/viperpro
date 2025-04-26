<template>
    <BaseLayout>
        <div class="w-full p-4 max-w-6xl mx-auto">
            <div class="bg-gradient-to-r from-green-600 to-blue-600 rounded-lg p-6 text-white mb-8">
                <h1 class="text-3xl font-bold mb-2">Bônus de Depósito</h1>
                <p class="text-lg">Aumente seu saldo com nossos bônus exclusivos!</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div class="rounded-lg shadow-md overflow-hidden border border-gray-200">
                    <div class="bg-blue-700 text-white p-4">
                        <h3 class="text-xl font-bold">Bônus de Boas-Vindas</h3>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-2xl font-bold text-green-600">100%</span>
                            <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-medium">Até R$1000</span>
                        </div>
                        <p class="mb-4">Receba 100% de bônus no seu primeiro depósito!</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Depósito mínimo: R$50</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Rollover 35x</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Válido por 7 dias</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="rounded-lg shadow-md overflow-hidden border border-gray-200">
                    <div class="bg-purple-700 text-white p-4">
                        <h3 class="text-xl font-bold">Bônus de Segundo Depósito</h3>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-2xl font-bold text-green-600">50%</span>
                            <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-medium">Até R$500</span>
                        </div>
                        <p class="mb-4">Ganhe 50% de bônus no seu segundo depósito!</p>
                        <ul class="space-y-2 mb-6">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Depósito mínimo: R$30</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Rollover 25x</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Válido por 5 dias</span>
                            </li>
                        </ul>
                     
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="rounded-lg shadow-md overflow-hidden border border-gray-200">
                    <div class="bg-red-600 text-white p-4">
                        <h3 class="text-xl font-bold">Bônus de Sexta-Feira</h3>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-2xl font-bold text-green-600">25%</span>
                            <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-medium">Até R$300</span>
                        </div>
                        <p class="mb-4">Todo depósito feito na sexta-feira ganha 25% extra!</p>
                    </div>
                </div>

                <div class="rounded-lg shadow-md overflow-hidden border border-gray-200">
                    <div class="bg-yellow-600 text-white p-4">
                        <h3 class="text-xl font-bold">Bônus de Aniversário</h3>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-2xl font-bold text-green-600">R$100</span>
                            <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-medium">Grátis</span>
                        </div>
                        <p class="mb-4">Receba R$100 grátis no seu aniversário!</p>
                    </div>
                </div>

                <div class="rounded-lg shadow-md overflow-hidden border border-gray-200">
                    <div class="bg-green-700 text-white p-4">
                        <h3 class="text-xl font-bold">Bônus VIP</h3>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-2xl font-bold text-green-600">Até 200%</span>
                            <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-medium">Exclusivo</span>
                        </div>
                        <p class="mb-4">Bônus personalizados para membros VIP!</p>
                    </div>
                </div>
            </div>

            <div class="rounded-lg shadow-md p-6 mb-8">
                <h2 class="text-2xl font-bold mb-4">Termos e Condições dos Bônus</h2>
                <div class="prose max-w-none">
                    <p>Todos os bônus estão sujeitos aos seguintes termos:</p>
                    <ul>
                        <li>Bônus devem ser reivindicados antes de serem utilizados</li>
                        <li>Valores de bônus estão sujeitos a requisitos de rollover (apostas obrigatórias)</li>
                        <li>Apenas um bônus pode ser ativo por vez</li>
                        <li>Bônus não podem ser sacados diretamente - devem ser apostados</li>
                        <li>O cassino reserva-se o direito de alterar ou cancelar bônus a qualquer momento</li>
                        <li>Uso abusivo de bônus pode resultar em bloqueio da conta</li>
                    </ul>
                </div>
            </div>

            <!-- Modal VIP -->
            <div v-if="showVipModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
                <div class="bg-white rounded-lg max-w-md w-full p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold">Programa VIP</h3>
                        <button @click="showVipModal = false" class="text-gray-500 hover:text-gray-700">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <p class="mb-4">Nosso programa VIP oferece bônus exclusivos e benefícios personalizados:</p>
                    <ul class="space-y-2 mb-4">
                        <li class="flex items-start">
                            <i class="fas fa-star text-yellow-500 mr-2 mt-1"></i>
                            <span>Bônus de depósito aumentados</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-star text-yellow-500 mr-2 mt-1"></i>
                            <span>Cashback semanal</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-star text-yellow-500 mr-2 mt-1"></i>
                            <span>Presentes exclusivos</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-star text-yellow-500 mr-2 mt-1"></i>
                            <span>Gerente de conta pessoal</span>
                        </li>
                    </ul>
                    <button 
                        @click="showVipModal = false"
                        class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 transition"
                    >
                        Entendido
                    </button>
                </div>
            </div>
        </div>
    </BaseLayout>
</template>

<script>
import BaseLayout from "@/Layouts/BaseLayout.vue";
import { useAuthStore } from "@/Stores/Auth.js";

export default {
    components: { BaseLayout },
    data() {
        return {
            showVipModal: false
        }
    },
    computed: {
        isAuthenticated() {
            const authStore = useAuthStore();
            return authStore.isAuth;
        },
        isFriday() {
            return new Date().getDay() === 5; // 5 = sexta-feira
        },
        isBirthday() {
            // Implemente lógica para verificar aniversário do usuário
            return false;
        }
    },
    methods: {
        redirectToRegister() {
            window.location.href = '/register';
        },
        claimBonus(type) {
            // Implemente lógica para reivindicar bônus
            alert(`Bônus ${type} reivindicado com sucesso!`);
        }
    }
}
</script>

<style scoped>
.disabled {
    opacity: 0.7;
    cursor: not-allowed;
}
</style>