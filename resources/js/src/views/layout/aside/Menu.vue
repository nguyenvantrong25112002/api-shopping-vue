<template>
    <div class="menu">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <a
                        class="accordion-button collapsed"
                        data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne"
                        aria-expanded="false"
                        aria-controls="flush-collapseOne"
                    >
                     Quản lí sản phẩm
                    </a>
                </h2>
                <div
                    id="flush-collapseOne"
                    class="accordion-collapse collapse"
                    aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample"
                >
                    <div class="accordion-body">
                        <ul >
                            <li >
                                <router-link :to="{ name: 'product-list' }">Danh sách</router-link>
                            </li>
                            <li >
                                <a href="">
                                    Thêm mới 
                                </a>
                               
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    // name: "AsideMemu",
};
</script>
<style>
.menu .accordion-item {
    background-color: unset;
    user-select: none;
    color: #9899ac;
}
.menu .accordion-item:last-of-type .accordion-button.collapsed {
    border-radius: 0;
}
.menu .accordion-header .accordion-button {
    color: #9899ac;
    background-color: #1b1b28;
}
.menu .accordion-header .accordion-button::after {
}
.menu .accordion-header .accordion-button:hover {
    color: #fff;
}
.menu .accordion-item .accordion-button:not(.collapsed) {
    box-shadow: unset;
}

.menu .accordion-body  {
    padding: 0;
}
.menu .accordion-body li  {
    list-style-position: inside;
    padding: 10px 0;

}
.menu .accordion-body a{
    padding: 10px 0;

}
</style>
