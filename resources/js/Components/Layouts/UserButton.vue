<template>
    <li @click="toggleShow" class="
    ml-4
    cursor-pointer
    transition-all
    rounded-full
    px-3 py-[.5rem]
    lg:text-xl
    text-base

    border-2
    border-solid

    dark:bg-primary-700
    dark:border-primary-700
    dark:hover:bg-primary-600
    dark:hover:border-primary-600

    bg-primary-600
    border-primary-600
    hover:bg-primary-700
    hover:border-primary-700
    text-white
    ">
        <i class="fa-user fa-solid"></i>
    </li>

    <ul v-if="dropDownShow" class="
    transition-all
    z-10
    fixed
    lg:top-20
    md:top-[3.93rem]
    top-14
    md:right-5
    right-2
    grid
    shadow
    drop-shadow
    xl:w-60
    lg:w-56
    md:w-52
    w-44
    md:p-3
    p-2
    rounded
    bg-slate-50
    dark:bg-slate-600
    dark:text-white
    ">
        <li class="
        grid
        gap-2
        ">
            <!-- Authenticated Links -->
            <div v-if="user" v-for="link in authenticatedLinks">
                <!-- Admin link -->
                <Link v-if="user.type == userTypes['BUSINESS']
                && link.content == 'Admin'" :class="linkClasses" :href="route(link.url)">
                <i :class="link.icon" class="w-[26px]"></i>
                <span :class="linkSpanClasses">
                    {{ link.content }}
                </span>
                </Link>
                <!-- Edit Profile link -->
                <Link
                    v-else-if="user && link.content == 'Profile' && link.content != 'Logout' && link.content != 'Admin'"
                    :class="linkClasses" :href="route(
                        user.type == userTypes['BUSINESS']
                            ? 'r_business.profile.edit'
                            : link.url
                    )">
                <i :class="link.icon" class="w-[26px]"></i>
                <span :class="linkSpanClasses">
                    {{ link.content }}
                </span>
                </Link>
                <!-- All links -->
                <Link v-else-if="link.content != 'Logout' && link.content != 'Admin'" :class="linkClasses"
                    :href="route(link.url)">
                <i :class="link.icon" class="w-[26px]"></i>
                <span :class="linkSpanClasses">
                    {{ link.content }}
                </span>
                </Link>
                <!-- Logout link -->
                <Link v-else-if="link.content != 'Admin'" :class="linkClasses" :href="route(link.url)" method="post"
                    as="submit">
                <i :class="link.icon" class="w-[26px]"></i>
                <span :class="linkSpanClasses">
                    {{ link.content }}
                </span>
                </Link>
            </div>
            <!-- Unauthenticated Links -->
            <div v-else v-for="link in unauthenticatedLinks">
                <!-- All links -->
                <Link v-if="link.content != 'Login'" :class="linkClasses" :href="route(link.url)">
                <i :class="link.icon" class="w-[26px]"></i>
                <span :class="linkSpanClasses">
                    {{ link.content }}
                </span>
                </Link>
                <!-- Logout link -->
                <Link v-else :class="linkClasses" :href="route(link.url)">
                <i :class="link.icon" class="w-[26px]"></i>
                <span :class="linkSpanClasses">
                    {{ link.content }}
                </span>
                </Link>
            </div>
        </li>
    </ul>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
export default {
    name: 'UserButton',
    components: {
        Link
    },
    computed: {
        user() {
            return this.$page.props.auth.user
        },
        userTypes() {
            return this.$page.props.userTypes
        },
    },
    data() {
        return {
            dropDownShow: false,

            linkClasses: `
            cursor-pointer
            rounded
            md:p-3
            p-2
            text-lg
            flex
            items-center
            gap-2
            hover:text-white
            hover:bg-primary-600
            dark:hover:text-white
            dark:hover:bg-primary-600`
            ,
            linkSpanClasses: ``,

            authenticatedLinks: [
                { url: 'r_business.dashboard.index', content: 'Admin', icon: 'fas fa-user-shield' },
                { url: 'home.index', content: 'Profile', icon: 'fas fa-user' },
                { url: 'r_client.profile.edit', content: 'Settings', icon: 'fas fa-gear' },
                { url: 'logout', content: 'Logout', icon: 'fas fa-arrow-right-from-bracket' }
            ],
            unauthenticatedLinks: [
                { url: 'login', content: 'Login', icon: 'fas fa-arrow-right-to-bracket' },
            ],
        }
    },
    methods: {
        toggleShow() {
            this.dropDownShow = !this.dropDownShow
        }
    }
}
</script>
