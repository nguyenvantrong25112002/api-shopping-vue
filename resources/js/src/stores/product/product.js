import { environment } from "../../environments/environment";
import axios from "axios";
import { defineStore } from "pinia";

export const useProductStore = defineStore({
    id: 'product',
    state: () => ({
        products: null,
        linkPages: null,
        urlMain: null
    }),
    getters: {


    },
    actions: {
        async getProductList(url = null) {
            try {
                await axios.get(url ? url : environment.PRODUCT_API().LIST).then((res) => {
                    this.products = res.data.payload.data;
                    this.linkPages = res.data.payload.links;
                    // setTimeout(() => {
                    //     this.loadContenProNew = false
                    // }, 1000);
                })
            } catch (error) {
                console.log(error)
            }
        },

    }

})