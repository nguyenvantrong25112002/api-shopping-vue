<template>
    <div>
        <ul class="pagination">
            <template v-for=" (link, index) in links" :key="index">
                <!-- <li @click="pageUrl(link.label)" class="page-item "
                    :class="{ 'active': link.active == true, 'disabled': (link.url == null||link.active == true)  }">
                    <a class="page-link">
                        <template v-if="index === 0">
                            <i class="icofont-simple-left"></i>
                        </template>
                        <template v-else-if="index == (links.length - 1)">
                            <i class="icofont-simple-right"></i>
                        </template>
                        <template v-else>
                            {{ link.label }}
                        </template>
                    </a>
                </li> -->

                <template v-if="index === 0">
                    <li @click="pageUrl(link.url)" class="page-item " :class="{ 'disabled': link.url == null }">
                        <a class="page-link">
                            <i class="icofont-simple-left"></i>
                        </a>
                    </li>
                </template>
                <template v-if="!(index === 0) && !(index === (links.length - 1))">
                    <li @click="pageUrl(link.label)" class="page-item " :class="{ 'active': link.active == true }">
                        <a class="page-link">
                            {{ link.label }}
                        </a>
                    </li>
                </template>
                <template v-if="index === (links.length - 1)">
                    <li @click="pageUrl(link.url)" class="page-item " :class="{ 'disabled': link.url == null }">
                        <a class="page-link">
                            <i class="icofont-simple-right"></i>
                        </a>
                    </li>
                </template>
            </template>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        links: {
            type: Object,
        }
    },
    setup(props) {
        return {
        }
    },
    methods: {
        pageUrl(url) {
            this.$emit('pageUrl', url)
        }
    }
}
</script>

<style>
.pagination {}

.pagination .page-item {
    user-select: none;
    border: none;
    margin: 0 5px;

}

.pagination .page-item.disabled {}

/* .pagination .page-item:not(.disabled) {} */

.pagination .page-link {
    border: none;
    background-color: unset;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;

}

.pagination .page-item.active .page-link {
    background-color: #3F4254 !important;
}

.pagination .page-link:hover {
    background-color: #3F4254 !important;
    color: aliceblue;
}
</style>