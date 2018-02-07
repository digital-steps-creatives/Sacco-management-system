<template>
<nav class="d-flex justify-content-end flex-1 fixed-top bg-light py-2">
  <nav-link href="/members">
    Members
  </nav-link>
  <nav-link href="/loans">
    Loans
  </nav-link>

  <nav-link   class="d-flex align-items-center p-0 m-0  mr-2">
   <icon-user></icon-user>
   <span class="ml-2">Ahimbisibwe Roland</span>
  </nav-link>

  <!-- temporally -->
  <nav-link href="/logout">
    Logout
  </nav-link>
</nav>
</template>

<script>
import NavLink from "./NavLink";
export default {
  components: { NavLink }
};
</script>

<style scoped lang="scss">
@import "resources/assets/sass/variables";
nav {
  border-top: 5px solid $primary;
}
</style>
