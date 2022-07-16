import { environment } from "../../environments/environment";
import axios from "axios";
import { defineStore } from "pinia";

export const useFilterPaginate = defineStore({
    id: 'filter-paginate',
    state: () => ({
        datas: null,
        linkPages: null,
        urlMain: null,
        urlExtra: null,
        // paramArr: [{ sale_off: "desc" }, { price: "desc" }]
        paramArr: [{ price: "desc" }]
    }),
    getters: {},
    actions: {
        async getList(url = null) {
            try {
                await axios.get(url).then((res) => {
                    this.datas = res.data.payload.data;
                    this.linkPages = res.data.payload.links;
                    if (this.urlMain === null) this.urlMain = url;
                })
            } catch (error) {
                console.log(error);
            }
        },

        pageUrl(numberPages = 0) {
            if (numberPages === null || numberPages === 0 || numberPages === '...') return;
            // alert(this.urlMain + `?page=${numberPages}`)
            this.getList(this.urlMain + `?page=${numberPages}`);
        },
        urlGraft(param = []) {
            console.log(param);

        },
        pushParamUrl(keyParm, valParam) {
            var obj = {};
            obj[keyParm] = valParam;

            if (this.paramArr.length == 0) {
                this.paramArr.push(obj);
                return;
            }
            for (let i = 0; i <= this.paramArr.length; i++) {
                if (this.paramArr[i][keyParm] === undefined) {
                    alert('undefined : ' + this.paramArr[i][keyParm])
                    return
                    // this.paramArr.push(obj);
                } else {
                    alert(this.paramArr[i][keyParm])
                    return

                }
            }
            // console.log(this.paramArr);





            // if (check.length > 0) {
            //     console.log('dã tồn tại');
            // } else {

            //     this.paramArr.push(obj);
            // }

            // this.urlGraft(this.paramArr)
        },


    }

})