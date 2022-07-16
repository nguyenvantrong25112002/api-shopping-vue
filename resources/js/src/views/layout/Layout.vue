<template>
    <div id="wrapper">
        <Aside />
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
             <Header></Header>
                <div class="container-fluid">
                    <div class="col-lg-12">
                       <router-view></router-view>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import Aside from "./aside/Aside.vue";
import Header from "./header/Header.vue";
export default {
    components: { Aside,Header },
    setup() {
        return {};
    },
};
</script>

<style></style>
