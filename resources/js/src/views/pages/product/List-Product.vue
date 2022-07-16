<template>
    <div>
        <div class="table-responsive">
            <table class="table table-striped gy-7 gs-7">
                <thead>
                    <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
                        <th>#</th>
                        <th>Tên sản phẩm</th>
                        <th>Sale off
                            <span @click="filterData('sale_off', 'desc')" class="sort">
                                <i class="icofont-expand-alt"></i>
                            </span>
                        </th>
                        <th>Giá
                            <span @click="filterData('price', 'desc')" class="sort">
                                <i class="icofont-expand-alt"></i>
                            </span>
                        </th>
                        <th>Giá sale</th>
                        <th>Trạng thái</th>
                        <th>Ngày thêm</th>
                        <th>Ngày sửa</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for=" (product, index) in products" :key="index">
                        <td>{{ index + 1 }}</td>
                        <td>{{ product.name }}</td>
                        <td>{{ product.sale_off }}</td>
                        <td>{{ product.price }}</td>
                        <td>{{ product.price_sale }}</td>
                        <td>{{ product.status }}</td>
                        <td>{{ product.created_at }}</td>
                        <td>{{ product.updated_at }}</td>
                        <td>Thao tác</td>

                    </tr>

                </tbody>
            </table>
            <Pagination :links="linkPages" @pageUrl="pageUrl"></Pagination>
        </div>


    </div>
</template>

<script>
import { computed } from 'vue';
import { useProductStore } from '../../../stores/product/product'
import Pagination from '../../../components/Pagination.vue'
import { environment } from '../../../environments/environment';
import { useFilterPaginate } from '../../../stores/filter-paginate/filter-paginate';
export default {
    components: {
        Pagination
    },
    setup() {
        const getListStore = useFilterPaginate()
        getListStore.getList(environment.PRODUCT_API().LIST)
        const products = computed(() => getListStore.datas)
        const linkPages = computed(() => getListStore.linkPages);


        return { products, linkPages, getListStore }
    },
    methods: {
        filterData(key = null, val = null) {
            this.getListStore.pushParamUrl(key, val)
        },
        pageUrl(numberPages) {
            this.getListStore.pageUrl(numberPages);
        }
    },

};
</script>

<style>
</style>
