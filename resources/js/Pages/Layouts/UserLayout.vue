<script setup>
    import Footer from "./UserFooter.vue"
    import { format } from "date-fns"
</script>
<template>
    <v-layout>
        <v-app-bar height="30" color="grey-lighten-4" elevation="0" border>
            THE OFFICIAL WEB PORTAL OF MUNICIPALITY OF CORDOVA | {{ format(new Date(), 'PPPP') }}
            <v-spacer />

            <Link href="/sign-in">
                <v-btn class="buttons" :color="$page.component == 'Auth/Signin' ? 'red' : ''">
                    sign in
                </v-btn>
            </Link>
            <Link href="/support">
                <v-btn class="buttons" :color="$page.component == 'User/Support' ? 'red' : ''">
                    support
                </v-btn>
            </Link>
            <Link href="/contact-us">
                <v-btn class="buttons" :color="$page.component == 'User/ContactUs' ? 'red' : ''">
                    contact us
                </v-btn>
            </Link>
        </v-app-bar>

        <v-app-bar>
            <v-app-bar-title>
                <Link href="/">CORDOVA MUNICIPALITY UPDATE HUB</Link>
            </v-app-bar-title>
            <v-spacer />
            <Link href="/" :id="$page.component == 'User/Index' ? 'border_bottom' : ''">
                <v-btn class="buttons">
                    Home
                </v-btn>
            </Link >
            <Link href="/the-municipal" :id="$page.component == 'User/Municipal' ? 'border_bottom' : ''">
                <v-btn class="buttons">
                    the municipal
                </v-btn>
                </Link>
            <Link  href="/barangays" :id="$page.component == 'User/Barangays' || $page.component.includes('User/Announcements/') || $page.component == 'User/BarangayExplore' ? 'border_bottom' : ''">
                <v-btn class="buttons">
                    barangays
                </v-btn>
            </Link>
            <Link href="/visitors" :id="$page.component == 'User/Visitors' ? 'border_bottom' : ''">
                <v-btn class="buttons">
                    visitors
                </v-btn>
            </Link>
        </v-app-bar>
        <v-main class="bg-grey-lighten-3">
            <slot></slot>
            <Footer />
        </v-main>
    </v-layout>
</template>
<style scoped>
#border_bottom {
  border-bottom: 3px solid red;
}

a {
  color: black;
  font-weight: bold;
  letter-spacing: 1px;
  text-decoration: none;
}

.buttons {
  font-weight: bold;
  font-family: Arial, Helvetica, sans-serif;
}

.buttons:hover {
  animation: button-pulse 1s infinite;
}

@keyframes button-pulse {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.1);
  }
  100% {
    transform: scale(1);
  }
}
</style>
