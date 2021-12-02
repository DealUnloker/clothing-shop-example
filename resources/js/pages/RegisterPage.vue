<template>
    <div class="content">
        <div class="left">
            <h1>REGISTRATION</h1>
            <input type="text" placeholder="username">
            <input type="email" placeholder="email">
            <input type="password" placeholder="password">
            <input type="password" placeholder="password">
            <button>Register me</button>
        </div>
        <div class="right">
            <div class="text">
                <h2>Introduce yourself before<br>
                    we can move on</h2>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "RegisterPage"
}
</script>

<style scoped lang="scss">

.content {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #E5E5E5;
}

.left, .right {
    width: 690px;
    height: 780px;
}

.left {
    background: #FFFFFF;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

    input {
        margin-top: 35px;
        border: none;
        width: 465px;
        height: 60px;
        background: #E1E1E1;
        color: #5F5F5F;
        padding: 0 20px;
        font-size: 30px;
    }

    button {
        margin-top: 60px;
        width: 245px;
        font-size: 24px;
        color: white;
        height: 81px;
        border: none;
        background: conic-gradient(from 254.97deg at 99.13% 0.57%, rgba(255, 66, 100, 0.17) -189.75deg, #FF4264 32.04deg, rgba(255, 66, 100, 0.17) 170.25deg, #FF4264 392.04deg);
    }
}

.right {
    background: conic-gradient(from 256.44deg at 100% 0%, rgba(255, 66, 100, 0.17) -189.75deg, #FF4264 32.04deg, rgba(255, 66, 100, 0.17) 170.25deg, #FF4264 392.04deg);

    .text {
        text-align: center;
        margin: 270px 60px;
        color: #FFFFFF;

        h2 {
            font-size: 48px;
        }
    }
}

</style>
