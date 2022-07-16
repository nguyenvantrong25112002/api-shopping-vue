const DOMAIN = `http://127.0.0.1:8000`;
const API = `api`;
const DOMAIN_API = DOMAIN + '/' + API;
const API_ADMIN = DOMAIN_API + '/' + `admin` + '/';
const API_AUTH = DOMAIN_API + '/' + `auth` + '/';


export const environment = {
    PRODUCT_API(URL = API_ADMIN + `product/`) {
        return {
            LIST: URL + ``,
            DETAIL: (slug) => {
                return URL + `${slug}`
            },
            PRODUCT_ID_RELATE_TO: (slug) => {
                return URL + `relate-to/${slug}`
            },
        };
    },
}

//  http://127.0.0.1:8000/api/public