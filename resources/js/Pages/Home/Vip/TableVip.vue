<template>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">*</th>
                    <th scope="col" class="px-6 py-3">
                        Nível
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aposta necessária
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Bônus
                    </th>
                    <th scope="col" class="px-6 py-3">

                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(vip, index) in vips" :key="index" class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <td>
                        <img :src="`/storage/`+vip.bet_symbol" alt="" width="32">
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $t('Level') }} {{ vip.bet_level }}
                    </th>
                    <td class="px-6 py-4">
                        <p><i class="fa-sharp fa-light fa-coins mr-2"></i> {{ vip.bet_required }}</p>
                        <p>
                            <div class="relative w-full bg-gray-200 rounded-full h-4 dark:bg-gray-700">
                                <div
                                    class="bg-gray-600 h-5 rounded-lg text-center justify-center text-white text-xs py-1"
                                    :style="{ width: getProgress(vip.bet_required) + '%' }"
                                >
                                </div>
                                <span class="absolute top-0" style="left: 50%">
                                    {{ vipPoints >= vip.bet_required ? 'Concluído' : `${vipPoints} / ${vip.bet_required}` }}
                                </span>
                            </div>
                        </p>
                    </td>
                    <td class="px-6 py-4">
                        <i class="fa-regular fa-circle-dollar mr-2"></i> {{ vip.bet_bonus }}
                    </td>
                    <td>
                        <img v-if="parseInt(vipPoints) >= parseInt(vip?.bet_required ?? 0)" :src="`/assets/images/trophy2.png`" alt="" width="28">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</template>


<script>

export default {
    props: ['vips', 'vipPoints'],
    components: {  },
    data() {
        return {
            isLoading: false,

        }
    },
    setup(props) {


        return {};
    },
    computed: {

    },
    mounted() {

    },
    methods: {
        getProgress(requiredPoints) {
            if (this.vipPoints >= requiredPoints) {
                return 100;
            }
            return (this.vipPoints / requiredPoints) * 100;
        }
    },
    async created() {

    },
    watch: {

    },
};
</script>

<style scoped>

</style>
