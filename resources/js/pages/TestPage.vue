<template>
    <div>
        <HeaderComponent></HeaderComponent>
        <main>

        </main>
        <FooterComponent></FooterComponent>
    </div>
</template>

<script>
import HeaderComponent from "../components/HeaderComponent";
import FooterComponent from "../components/FooterComponent";

export default {
    name: "TestPage",
    components: {FooterComponent, HeaderComponent}
}
</script>

<style scoped lang="scss">


</style>
