<template>
    <div class="sticky-lg-top" ref="body" >
    <header class="text-center d-flex flex-column">
        <div class="position-relative d-inline-block">
            <a class="mb-menu position-absolute" href="#"></a>
            <router-link 
            @click="scrollTop"
            class="d-inline-block" 
            to="/">
                <div class="profile-image">
                    <img class="rounded-circle img-sm" src="images/logo-circle.jpg"
                        alt="Image">
                </div>
            </router-link>
        </div>
        <div class="mt-2 mb-3 mb-lg-4">
            <h6 class="text-white font-alt mb-0 h5  font-weight-600">Gleb S</h6>
        </div>
        <nav id="main-nav" class="main-nav">
            <ul class="p-0 mb-4 mb-lg-0">
            <li>
                <!-- <a class="" href="/resume"> -->
                <router-link 
                @click="scrollTop"
                to="/resume">
                    <span class="  btn-round btn-round-sm d-inline-block radius-2">
                        <i class="fa fa-solid fa-address-card btn-icon-inner"></i>
                    </span>
                    <span class="font-weight-300 font-alt font-size-12 d-block text-menu-item">Resume</span>
                </router-link>
            </li>
            <li>
                <router-link 
                @click="scrollTop"
                to="/inertia">
                    <span class="btn-round btn-round-sm d-inline-block radius-2">
                        <i class="fa fa-solid fa-umbrella-beach btn-icon-inner"></i>
                    </span>
                    <span class="font-weight-300 font-size-12 d-block text-menu-item font-alt">inertia</span>
                </router-link>
            </li>
            <li>
                <router-link 
                @click="scrollTop"
                to="/inertiacontact">
                    <span class=" btn-round btn-round-sm d-inline-block radius-2">
                        <i class="fa fa-comments btn-icon-inner"></i>
                    </span>
                    <span class="font-weight-300 font-size-12 d-block text-menu-item font-alt">Blog</span>
                </router-link>
            </li>
            <li>
                <router-link 
                @click="scrollTop"
                to="/contact">
                    <span class=" btn-round btn-round-sm d-inline-block radius-2">
                        <i class="fa fa-phone btn-icon-inner"></i>
                    </span>
                    <span class="font-weight-300 font-size-12 d-block text-menu-item font-alt">Contact</span>
                </router-link>
            </li>
            </ul>

            <div class="text-center mt-4 d-none d-lg-block ">
                <router-link 
                @click="scrollTop"
                to="/adverts">
                    <span class=" btn-round btn-round-md d-inline-block radius-2 shadow-h">
                        <i class="fa fa-download btn-icon-inner"></i>
                    </span>
                    <span class="font-weight-300 font-size-12 d-block text-menu-item font-alt">Get
                        PDF</span>
                </router-link>
            </div>
        </nav>

    </header>
    </div>
</template>

<script>
export default {
    name: 'Sidebar',
    data() {
        return {

        }
    },
    methods: {
        scrollTop() {
          window.scrollTo(0, 0);
        }
    }
}

</script>

<style scoped>

</style>