<x-app-layout>
    <div id="app">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Input Laundry Kiloan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <button @click="order_now" data-modal-target="static-modal" data-modal-toggle="static-modal" type="button" class="text-white bg-[#1da1f2] hover:bg-[#1da1f2]/90 focus:ring-4 focus:outline-none focus:ring-[#1da1f2]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#1da1f2]/55 me-2 mb-2">
                            <svg class="w-6 h-6 text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4h1.5L9 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-8.5-3h9.25L19 7H7.312"/>
</svg>


                    Order Now
                    </button>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No.
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Item
                </th>
                <th scope="col" class="px-6 py-3">
                    Harga
                </th>
                <th scope="col" class="px-6 py-3">
                    Jumlah
                </th>

                <th scope="col" class="px-6 py-3">
                    Hapus
                </th>
            </tr>
        </thead>
        <tbody>
            <tr  v-for="item, index in data" key="index"  class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    @{{index + 1}}
                </th>
                <td class="px-6 py-4">
                    @{{item.name}}
                </td>
                <td class="px-6 py-4">
                    @{{item.price}}
                </td>
                <td>
                    <input type="text" class="w-20" v-model="item.jumlah">
                </td>

                <td class="px-6 py-4">


                    <a data-modal-target="popup-modal" data-modal-toggle="popup-modal">
                        <svg class="w-[12px] h-[12px] text-white-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                        </svg>
                    </a>

                </td>

            </tr>

        </tbody>
    </table>
    <!--input jumlah kilo-->
    Berat dalam kilogram :
    <input type="text" v-model="kilo" class="w-20 mt-2 form-control"> Kg
                </div>
            </div>
        </div>
    </div>

    </div>
</div>
</div>
</x-app-layout>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
const app = Vue.createApp({
            data() {
                return {
                    data: @json($items),
                    kilo: 0,
                }
            },
            methods: {
                order_now(){
                    console.log(this.data);
                }

            }
        });
app.mount('#app');
</script>
