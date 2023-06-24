@extends('layout.layoutchinh')
@section('content')
<div id="searchvanban" class="set-web mx-auto">
    <div class="w-full mb-6 ">

        <div class="border-blue-700 px-3 py-2 font-bold text-xl bg-blue-700 text-white w-2/4 mb-4">Tìm kiếm văn bản
        </div>

        <div class=" border-blue-700 border-4" style="border-width: 5px; border-color:#215bac; border-style: solid;">
            <div class="grid grid-cols-12 w-full p-2">
                <div class="col-span-12 sm:col-span-4">
                    <div class="grid grid-cols-12 py-2 items-center w-full">
                        <p class="text-sx col-span-4 text-gray-600">
                            Số ký hiệu:
                        </p>
                        <input v-model="sokyhieu" type="text" name="" id=""
                            class="col-span-8 outline-none focus:border-blue-400 w-full px-3 py-1 border-2 border-gray-300 rounded-md"
                            style="border-width: 1px; border-color:#c2c2c2 ; border-style: solid;">
                    </div>
                </div>
                <!--  -->
                <div class="col-span-12 sm:col-span-4 sm:mx-3">
                    <div class="grid grid-cols-12 py-2 items-center w-full">
                        <p class="text-sx col-span-4 text-gray-600">
                            Từ ngày:
                        </p>
                        <input v-model="ngaybanhanh" type="datetime-local" name="" id=""
                            class="col-span-8 outline-none focus:border-blue-400 w-full px-3 py-1 border-2 border-gray-300 rounded-md">
                    </div>
                </div>
                <!--  -->
                <div class="col-span-12 sm:col-span-4">
                    <div class="grid grid-cols-12 py-2 items-center w-full">
                        <p class="text-sx col-span-4 text-gray-600">
                            Đến ngày:
                        </p>
                        <input v-model="ngayhethan" type="datetime-local" name="" id=""
                            class="col-span-8 outline-none focus:border-blue-400 w-full px-3 py-1 border-2 border-gray-300 rounded-md">
                    </div>
                </div>
                <!--  -->
            </div>
            <div class="grid grid-cols-12 w-full p-2">

                <!--  -->

                <div class="col-span-12 sm:col-span-4 ">
                    <div class="grid grid-cols-12 py-2 items-center w-full">
                        <p class="text-sx col-span-4 text-gray-600">
                            Cơ quan <br> ban hành:
                        </p>
                        <input v-model="coquanbanhanh" type="text" name="" id=""
                            class="col-span-8 outline-none focus:border-blue-400 w-full px-3 py-1 border-2 border-gray-300 rounded-md"
                            style="border-width: 1px; border-color:#c2c2c2 ; border-style: solid;">
                    </div>
                </div>
                <!--  -->
                <div class="col-span-12 sm:col-span-4 sm:mx-3">
                    <div class="grid grid-cols-12 py-2 items-center w-full">
                        <p class="text-sx col-span-4 text-gray-600">
                            Loại văn bản:
                        </p>
                        <select
                            class="block appearance-none w-full bg-grey-lighter border border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded col-span-8"
                            id="grid-state" style="border-width: 1px; border-color:#c2c2c2 ; border-style: solid;">
                            <option> -- Mời chọn --</option>
                        </select>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-4 sm:mx-3">
                    <button @click="search()" class="button is-info w-3/5 mt-4 ml-5">Tìm kiếm </button>
                </div>
                <!--  -->
            </div>
        </div>
        <!--  -->
        <div class=" mt-3 sm:mb-0 mb-3" style="overflow-x:auto;">
            <table class="table is-bordered w-full">
                <thead>
                    <tr class="py-1.5 text-center " style="background-color: #a9d6ec;">
                        <td class="text-lg ">
                            Số/Ký hiệu
                        </td>
                        <td class="text-lg ">
                            Trích yếu
                        </td >
                        <td class="text-lg ">
                            Ngày BH
                        </td>
                        <td class="text-lg ">
                            File gắn
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center"  v-for="dt in dsvanban" style="color: #0071B3;">
                        <td>@{{dt.sokyhieu}}</td>
                        <td>   @{{dt.trichyeu}}</td>
                        <td>   @{{dt.ngaybh}}</td>
                        <td><a :href="dt.link" class="hover:text-red-700">Tải file</a></td>
                    </tr>
                </tbody>
             
            </table>

        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
var vm = new Vue({
    el: '#searchvanban',
    data: {
        dsvanban: [],
        sokyhieu: '',
        tennganh: '',
        ngaybanhanh: '',
        ngayhethan: '',
        coquanbanhanh: '',
        loaivb: <?php echo $chuyenmuc->id; ?>,
        idvb: '27',
    },
    // chạy ngay khi web load
    mounted: function() {
        const self = this;
        self.search();
    },
    // chạy khi thực hiện event
    methods: {
        search: function() {
            const self = this;
            console.log(this.sokyhieu)
            axios.get('/ajax-van-ban?sokyhieu=' + self.sokyhieu +
                    "&coquanbanhanh=" + self.coquanbanhanh +
                    "&ngaybanhanh=" + self.ngaybanhanh +
                    "&ngayhethan=" + self.ngayhethan +
                    "&loaivb=" + self.loaivb +
                    "&idvb=" + self.idvb)

                .then(function(response) {
                    self.dsvanban = response.data;
                    console.log(self.dsvanban);
                })

        }
    }
})
</script>

@endsection